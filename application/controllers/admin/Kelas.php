<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Mst_jurusan', 'mst_jurusan');
        $this->load->model('Mst_kelas', 'mst_kelas');
        $this->load->model('Mst_guru', 'mst_guru');
        $this->load->model('Tahun_akademik', 'akademik');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'kelas'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Kelas';

        // Ambil data yang diperlukan
        $data['kelas']  = $this->mst_kelas->getAllData();

        // untuk mengaktifkan tombol reset wali kelas
        $data['akademik'] = $this->akademik->getTahunaktif();

        // View website
        $data['content']    = 'admin/kelas/index';
        $this->load->view('template/template', $data);
    }

    public function tambah()
    {
        $data['title']      = title();
        $data['menu_open']  = 'kelas'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Tambah Kelas';

        // Ambil data yang diperlukan dari databse
        $data['jurusan'] = $this->mst_jurusan->getAllData();
        $data['guru'] = $this->mst_guru->getAllData();

        // View website
        $data['content']    = 'admin/kelas/add';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('nama_kelas', 'Alias', 'required', [
            'required' => 'Nama kelas harus diisi'
        ]);
        $this->form_validation->set_rules('tingkat', 'Alias', 'required', [
            'required' => 'Tingkat kelas harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            $kelas = $this->input->post('nama_kelas');
            $jurusan = $this->input->post('id_jurusan');
            $sudah_ada = $this->mst_kelas->getSudahada($kelas, $jurusan);
            // Cek apakah sudah ada kelas
            if ($sudah_ada) {
                $this->session->set_flashdata('error', 'Kelas ' . $kelas . ' ' . $sudah_ada['nama_jurusan'] . ' sudah ada');
                $this->tambah();
            } else {
                // Tampung data
                $data = [
                    'nama_kelas'    => $this->input->post('nama_kelas'),
                    'id_jurusan'    => $this->input->post('id_jurusan') ? $this->input->post('id_jurusan') : null,
                    'tingkat'       => $this->input->post('tingkat'),
                    'id_guru'       => $this->input->post('id_guru') ? $this->input->post('id_guru') : null,
                ];

                $this->mst_kelas->create($data);
                $this->session->set_flashdata('success', 'Kelas ' . $this->input->post('nama_kelas') . ' berhasil ditambah');
                redirect('admin/kelas');
            }
        }
    }

    public function edit()
    {
        $data['id']                 = $this->uri->segment(4);
        if (!$data['id']) {
            return;
        }

        $data['title']      = title();
        $data['menu_open']  = 'kelas'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Edit Kelas';

        // Ambil data yang diperlukan dari databse
        $data['jurusan'] = $this->mst_jurusan->getAllData();
        $data['kelas'] = $this->mst_kelas->getDataById($data['id']);
        $data['guru'] = $this->mst_guru->getAllData();

        // View website
        $data['content']    = 'admin/kelas/edit';
        $this->load->view('template/template', $data);
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('nama_kelas', 'Alias', 'required', [
            'required' => 'Nama kelas harus diisi'
        ]);
        $this->form_validation->set_rules('tingkat', 'Alias', 'required', [
            'required' => 'Tingkat kelas harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit();
        } else {
            // Tampung data
            $data = [
                'nama_kelas'    => $this->input->post('nama_kelas'),
                'id_jurusan'    => $this->input->post('id_jurusan') ? $this->input->post('id_jurusan') : null,
                'tingkat'       => $this->input->post('tingkat'),
                'id_guru'       => $this->input->post('id_guru') ? $this->input->post('id_guru') : null,
            ];

            // Update data
            $where = array('id_kelas' => $id);
            $this->mst_kelas->update($data, $where);
            $this->session->set_flashdata('success', 'Kelas ' . $this->input->post('nama_kelas') . ' berhasil diubah');
            redirect('admin/kelas');
        }
    }

    public function delete($id)
    {
        // Delete data
        $this->mst_kelas->delete(array('id_kelas' => $id));
        $this->session->set_flashdata('success', 'Delete kelas berhasil');
        redirect('admin/kelas');
    }

    public function resetkelas()
    {
        $data = [
            'id_guru' => null,
        ];

        $this->mst_kelas->kosongkanWaliKelas($data);
        $this->session->set_flashdata('success', 'Reset wali kelas berhasil!');
        redirect('admin/kelas');
    }
}
