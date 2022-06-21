<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Mst_guru', 'mst_guru');
        $this->load->model('User_model', 'user_model');
        $this->load->model('Mst_kelas', 'mst_kelas');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'guru'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Guru';

        // Ambil data yang diperlukan
        $data['guru']  = $this->mst_guru->getAllData();

        // View website
        $data['content']    = 'admin/guru/index';
        $this->load->view('template/template', $data);
    }

    public function tambah()
    {
        $data['title']      = title();
        $data['menu_open']  = 'guru'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Tambah Guru';

        // Ambil data yang diperlukan dari databse

        // View website
        $data['content']    = 'admin/guru/add';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('nama_guru', 'Alias', 'required', [
            'required' => 'Nama guru harus diisi'
        ]);
        $this->form_validation->set_rules('username', 'Alias', 'required|is_unique[user.username]', [
            'required' => 'Username harus diisi',
            'is_unique' => 'Username ini sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Alias', 'required', [
            'required' => 'Password harus diisi'
        ]);
        $this->form_validation->set_rules('password2', 'Alias', 'required|matches[password1]', [
            'required' => 'Password harus diisi',
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('level', 'Alias', 'required', [
            'required' => 'User level harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            // Tampung data
            $data = [
                'nama_guru'          => $this->input->post('nama_guru'),
                'nip'                 => $this->input->post('nip') ? $this->input->post('nip') : null,
            ];
            $id_guru = $this->mst_guru->create($data);
            if ($id_guru) {
                $dataUser = [
                    'id_guru'      => $id_guru,
                    'username'     => $this->input->post('username'),
                    'password'     => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'level'        => $this->input->post('level'),
                ];
                $this->user_model->create($dataUser);
            }
            $this->session->set_flashdata('success', 'Guru ' . $this->input->post('nama_guru') . ' berhasil ditambah');
            redirect('admin/guru');
        }
    }

    public function edit()
    {
        $data['id']                 = $this->uri->segment(4);
        if (!$data['id']) {
            return;
        }
        $data['title']              = title();
        $data['menu_open']          = 'guru'; // samakan dengan nama controller membuat menu open

        // Ambil data yang diperlukan dari databse
        $data['guru']            = $this->mst_guru->getDataById($data['id']);
        $data['level']              = ['1', '2'];

        // View website
        $data['page']               = 'Edit Guru ' . isset($data['guru']) ? $data['guru']['nama_guru'] : '';
        $data['content']            = 'admin/guru/edit';
        $this->load->view('template/template', $data);
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('nama_guru', 'Alias', 'required', [
            'required' => 'Nama guru harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit();
        } else {
            // Tampung data
            $data = [
                'nama_guru'          => $this->input->post('nama_guru'),
                'nip'                 => $this->input->post('nip') ? $this->input->post('nip') : null,
            ];
            // Update data
            $where = array('id_guru' => $id);
            $this->mst_guru->update($data, $where);

            // Update user
            $guru = $this->mst_guru->getDataById($id);
            $id_user = $guru['id_user'];

            $username = $this->input->post('username');
            $password = $this->input->post('password1');
            $level = $this->input->post('level');

            if ($username && $password && $level) {
                $data = [
                    'username' => $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'level' => $level
                ];
                // Update data
                $where = array('id_user' => $id_user);
                $this->user_model->update($data, $where);
            } elseif ($username && $level) {
                $data = [
                    'username' => $username,
                    'password' => $guru['password'],
                    'level' => $level
                ];
                // Update data
                $where = array('id_user' => $id_user);
                $this->user_model->update($data, $where);
            } elseif ($level) {
                $data = [
                    'username' => $username,
                    'password' => $guru['password'],
                    'level' => $level
                ];
                // Update data
                $where = array('id_user' => $id_user);
                $this->user_model->update($data, $where);
            }

            $this->session->set_flashdata('success', 'Data guru ' . $this->input->post('nama_guru') . ' berhasil diubah');
            redirect('admin/guru');
        }
    }
}
