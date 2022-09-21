<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Mst_pelanggaran', 'mst_pelanggaran');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'pelanggaran'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Jenis Pelanggaran';

        // Ambil data yang diperlukan
        $data['pelanggaran']  = $this->mst_pelanggaran->getAllData();

        // View website
        $data['content']    = 'admin/pelanggaran/index';
        $this->load->view('template/template', $data);
    }

    public function tambah()
    {
        $data['title']      = title();
        $data['menu_open']  = 'pelanggaran'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Tambah Jenis Pelanggaran';

        // View website
        $data['content']    = 'admin/pelanggaran/add';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('kode_pelanggaran', 'Alias', 'required', [
            'required' => 'Kode pelanggaran harus diisi'
        ]);
        $this->form_validation->set_rules('jenis_pelanggaran', 'Alias', 'required', [
            'required' => 'Jenis pelanggaran harus diisi'
        ]);
        $this->form_validation->set_rules('poin', 'Alias', 'required', [
            'required' => 'Point harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            // Tampung data
            $data = [
                'kode_pelanggaran'    => $this->input->post('kode_pelanggaran'),
                'jenis_pelanggaran'    => $this->input->post('jenis_pelanggaran'),
                'poin'    => $this->input->post('poin'),
            ];

            $this->mst_pelanggaran->create($data);
            $this->session->set_flashdata('success', 'Jenis pelanggaran ' . $this->input->post('jenis_pelanggaran') . ' berhasil ditambah');
            redirect('admin/pelanggaran');
        }
    }

    public function edit()
    {
        $data['id']                 = $this->uri->segment(4);
        if (!$data['id']) {
            return;
        }

        $data['title']      = title();
        $data['menu_open']  = 'pelanggaran'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Edit Jenis Pelanggaran';

        // Ambil data yang diperlukan dari databse
        $data['pelanggaran'] = $this->mst_pelanggaran->getDataById($data['id']);

        // View website
        $data['content']    = 'admin/pelanggaran/edit';
        $this->load->view('template/template', $data);
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('jenis_pelanggaran', 'Alias', 'required', [
            'required' => 'Jenis pelanggaran harus diisi'
        ]);
        $this->form_validation->set_rules('poin', 'Alias', 'required', [
            'required' => 'Point harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit();
        } else {
            // Tampung data
            $data = [
                'kode_pelanggaran'    => $this->input->post('kode_pelanggaran'),
                'jenis_pelanggaran'    => $this->input->post('jenis_pelanggaran'),
                'poin'    => $this->input->post('poin'),
            ];

            // Update data
            $where = array('id_pelanggaran' => $id);
            $this->mst_pelanggaran->update($data, $where);
            $this->session->set_flashdata('success', 'Jenis pelanggaran ' . $this->input->post('jenis_pelanggaran') . ' berhasil diubah');
            redirect('admin/pelanggaran');
        }
    }

    public function delete($id)
    {
        // Delete data
        $this->mst_pelanggaran->delete(array('id_pelanggaran' => $id));
        $this->session->set_flashdata('success', 'Delete jenis pelanggaran berhasil');
        redirect('admin/pelanggaran');
    }
}
