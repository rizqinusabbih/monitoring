<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Mst_jurusan', 'mst_jurusan');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'jurusan'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Jurusan';

        // Ambil data yang diperlukan
        $data['jurusan']  = $this->mst_jurusan->getAllData();

        // View website
        $data['content']    = 'admin/jurusan/index';
        $this->load->view('template/template', $data);
    }

    public function tambah()
    {
        $data['title']      = title();
        $data['menu_open']  = 'jurusan'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Tambah Jurusan';

        // View website
        $data['content']    = 'admin/jurusan/add';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('nama_jurusan', 'Alias', 'required', [
            'required' => 'Nama jurusan harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            // Tampung data
            $data = [
                'nama_jurusan'    => $this->input->post('nama_jurusan'),
            ];

            $this->mst_jurusan->create($data);
            $this->session->set_flashdata('success', 'Jurusan ' . $this->input->post('nama_jurusan') . ' berhasil ditambah');
            redirect('admin/jurusan');
        }
    }

    public function edit()
    {
        $data['id']                 = $this->uri->segment(4);
        if (!$data['id']) {
            return;
        }

        $data['title']      = title();
        $data['menu_open']  = 'jurusan'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Edit Jurusan';

        // Ambil data yang diperlukan dari databse
        $data['jurusan'] = $this->mst_jurusan->getDataById($data['id']);

        // View website
        $data['content']    = 'admin/jurusan/edit';
        $this->load->view('template/template', $data);
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('nama_jurusan', 'Alias', 'required', [
            'required' => 'Nama jurusan harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit();
        } else {
            // Tampung data
            $data = [
                'nama_jurusan'    => $this->input->post('nama_jurusan'),
            ];

            // Update data
            $where = array('id_jurusan' => $id);
            $this->mst_jurusan->update($data, $where);
            $this->session->set_flashdata('success', 'Jurusan ' . $this->input->post('nama_jurusan') . ' berhasil diubah');
            redirect('admin/jurusan');
        }
    }

    public function delete($id)
    {
        // Delete data
        $this->mst_jurusan->delete(array('id_jurusan' => $id));
        $this->session->set_flashdata('success', 'Delete jurusan berhasil');
        redirect('admin/jurusan');
    }
}
