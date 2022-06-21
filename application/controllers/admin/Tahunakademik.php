<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahunakademik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Tahun_akademik', 'akademik');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'tahunakademik'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Tahun Akademik';

        // Ambil data yang diperlukan
        $data['tahunakademik']  = $this->akademik->getAllData();

        // View website
        $data['content']    = 'admin/tahun_akademik/index';
        $this->load->view('template/template', $data);
    }

    public function tambah()
    {
        $data['title']      = title();
        $data['menu_open']  = 'tahunakademik'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Buat Tahun Akademik';

        // View website
        $data['content']    = 'admin/tahun_akademik/add';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('tahun_akademik', 'Alias', 'required', [
            'required' => 'Tahun akademik harus diisi'
        ]);
        $this->form_validation->set_rules('angkatan', 'Alias', 'required', [
            'required' => 'Tahun angkatan harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            // Tampung data
            $data = [
                'tahun_akademik'    => $this->input->post('tahun_akademik'),
                'angkatan'    => $this->input->post('angkatan'),
                'is_aktif'             => 'aktif'
            ];

            $this->akademik->create($data);
            $this->session->set_flashdata('success', 'Tahun akademik ' . $this->input->post('tahun_akademik') . ' berhasil ditambah');
            redirect('admin/tahunakademik');
        }
    }

    public function edit()
    {
        $data['id']                 = $this->uri->segment(4);
        if (!$data['id']) {
            return;
        }

        $data['title']      = title();
        $data['menu_open']  = 'tahunakademik'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Edit Tahun Akademik';

        // Ambil data yang diperlukan dari databse
        $data['tahunakademik'] = $this->akademik->getDataById($data['id']);

        // View website
        $data['content']    = 'admin/tahun_akademik/edit';
        $this->load->view('template/template', $data);
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('tahun_akademik', 'Alias', 'required', [
            'required' => 'Tahun akademik harus diisi'
        ]);
        $this->form_validation->set_rules('angkatan', 'Alias', 'required', [
            'required' => 'Tahun angkatan harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit();
        } else {
            // Tampung data
            $data = [
                'tahun_akademik'    => $this->input->post('tahun_akademik'),
                'angkatan'    => $this->input->post('angkatan'),
            ];

            // Update data
            $where = array('id_tahun_akademik' => $id);
            $this->akademik->update($data, $where);
            $this->session->set_flashdata('success', 'Tahun akademik ' . $this->input->post('tahun_akademik') . ' berhasil diubah');
            redirect('admin/tahunakademik');
        }
    }

    public function change_is_aktif($id)
    {
        // Ambil data jadwal
        $tahunakademik = $this->akademik->getDataById($id);
        $is_aktif = $tahunakademik['is_aktif'];

        // Cek is_aktif
        if ($is_aktif == 'nonaktif') {
            $data = [
                'is_aktif' => 'aktif'
            ];

            // Update data
            $where = array('id_tahun_akademik' => $id);
            $this->akademik->update($data, $where);
            $this->session->set_flashdata('success', 'Status tahun akadmeik ' . $tahunakademik['tahun_akademik'] . ' berhasil diubah');
            redirect('admin/tahunakademik');
        } else {
            $data = [
                'is_aktif' => 'nonaktif'
            ];

            // Update data
            $where = array('id_tahun_akademik' => $id);
            $this->akademik->update($data, $where);
            $this->session->set_flashdata('success', 'Status tahun akadmeik ' . $tahunakademik['tahun_akademik'] . ' berhasil diubah');
            redirect('admin/tahunakademik');
        }
    }

    public function delete($id)
    {
        // Delete data
        $this->akademik->delete(array('id_tahun_akademik' => $id));
        $this->session->set_flashdata('success', 'Delete tahun akademik berhasil');
        redirect('admin/tahunakademik');
    }
}
