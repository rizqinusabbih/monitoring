<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Mst_prestasi', 'mst_prestasi');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'prestasi'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Jenis Prestasi';

        // Ambil data yang diperlukan
        $data['prestasi']  = $this->mst_prestasi->getAllData();

        // View website
        $data['content']    = 'admin/prestasi/index';
        $this->load->view('template/template', $data);
    }

    public function tambah()
    {
        $data['title']      = title();
        $data['menu_open']  = 'prestasi'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Tambah Jenis Prestasi';

        // View website
        $data['content']    = 'admin/prestasi/add';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('jenis_prestasi', 'Alias', 'required', [
            'required' => 'Jenis prestasi harus diisi'
        ]);
        $this->form_validation->set_rules('point', 'Alias', 'required', [
            'required' => 'Point harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            // Tampung data
            $data = [
                'jenis_prestasi'    => $this->input->post('jenis_prestasi'),
                'point'    => $this->input->post('point'),
            ];

            $this->mst_prestasi->create($data);
            $this->session->set_flashdata('success', 'Jenis prestasi ' . $this->input->post('jenis_prestasi') . ' berhasil ditambah');
            redirect('admin/prestasi');
        }
    }

    public function edit()
    {
        $data['id']                 = $this->uri->segment(4);
        if (!$data['id']) {
            return;
        }

        $data['title']      = title();
        $data['menu_open']  = 'prestasi'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Edit Jenis Prestasi';

        // Ambil data yang diperlukan dari databse
        $data['prestasi'] = $this->mst_prestasi->getDataById($data['id']);

        // View website
        $data['content']    = 'admin/prestasi/edit';
        $this->load->view('template/template', $data);
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('jenis_prestasi', 'Alias', 'required', [
            'required' => 'Jenis prestasi harus diisi'
        ]);
        $this->form_validation->set_rules('point', 'Alias', 'required', [
            'required' => 'Point harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit();
        } else {
            // Tampung data
            $data = [
                'jenis_prestasi'    => $this->input->post('jenis_prestasi'),
                'point'    => $this->input->post('point'),
            ];

            // Update data
            $where = array('id_prestasi' => $id);
            $this->mst_prestasi->update($data, $where);
            $this->session->set_flashdata('success', 'Jenis prestasi ' . $this->input->post('jenis_prestasi') . ' berhasil diubah');
            redirect('admin/prestasi');
        }
    }

    public function delete($id)
    {
        // Delete data
        $this->mst_prestasi->delete(array('id_prestasi' => $id));
        $this->session->set_flashdata('success', 'Delete jenis prestasi berhasil');
        redirect('admin/prestasi');
    }
}
