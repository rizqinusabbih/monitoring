<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategoriprestasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Mst_prestasi', 'mst_prestasi');
        $this->load->model('Mst_subprestasi', 'mst_subprestasi');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'kategoriprestasi'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Kategori Prestasi';

        // Ambil data yang diperlukan
        $data['katpres']  = $this->mst_prestasi->getAllData();
        $data['subkatpres']  = $this->mst_subprestasi->getAllData();

        // View website
        $data['content']    = 'admin/kategori_prestasi/index';
        $this->load->view('template/template', $data);
    }

    public function tambah()
    {
        $data['title']      = title();
        $data['menu_open']  = 'kategoriprestasi'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Tambah Kategori Prestasi';

        // Ambil data yang diperlukan dari databse

        // View website
        $data['content']    = 'admin/kategori_prestasi/add';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('nama_kategori', 'Alias', 'required', [
            'required' => 'Nama kelas harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            // Tampung data
            $data = [
                'nama_kategori'    => $this->input->post('nama_kategori'),
            ];

            $this->mst_prestasi->create($data);
            $this->session->set_flashdata('success', 'Kategori prestasi ' . $this->input->post('nama_kategori') . ' berhasil ditambah');
            redirect('admin/kategoriprestasi');
        }
    }

    public function edit()
    {
        $data['id']                 = $this->uri->segment(4);
        if (!$data['id']) {
            return;
        }

        $data['title']      = title();
        $data['menu_open']  = 'kategoriprestasi'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Edit Kategori Prestasi';

        // Ambil data yang diperlukan dari databse
        $data['katpres'] = $this->mst_prestasi->getDataById($data['id']);

        // View website
        $data['content']    = 'admin/kategori_prestasi/edit';
        $this->load->view('template/template', $data);
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('nama_kategori', 'Alias', 'required', [
            'required' => 'Nama kelas harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit();
        } else {
            // Tampung data
            $data = [
                'nama_kategori'    => $this->input->post('nama_kategori'),
            ];

            // Update data
            $where = array('id_kat_prestasi' => $id);
            $this->mst_prestasi->update($data, $where);
            $this->session->set_flashdata('success', 'Kategori prestasi ' . $this->input->post('nama_kategori') . ' berhasil diubah');
            redirect('admin/kategoriprestasi');
        }
    }

    public function delete($id)
    {
        // Delete data
        $this->mst_prestasi->delete(array('id_kat_prestasi' => $id));
        $this->session->set_flashdata('success', 'Delete kelas berhasil');
        redirect('admin/kategoriprestasi');
    }

    /*
        - ====================
        -
        -
        Sub Kategori Prestasi
        -
        -
        - ====================
    */

    public function tambah_subkat()
    {
        $data['title']      = title();
        $data['menu_open']  = 'kategoriprestasi'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Tambah Keterangan Prestasi';

        // Ambil data yang diperlukan dari databse
        $data['katpres']    = $this->mst_prestasi->getAllData();

        // View website
        $data['content']    = 'admin/kategori_prestasi/add_subkat';
        $this->load->view('template/template', $data);
    }

    public function do_add_subkat()
    {
        $this->form_validation->set_rules('id_kat_prestasi', 'Alias', 'required', [
            'required' => 'Kategori prestasi harus diisi'
        ]);
        $this->form_validation->set_rules('nama_subkategori', 'Alias', 'required', [
            'required' => 'Keterangan harus diisi'
        ]);
        $this->form_validation->set_rules('poin_prestasi', 'Alias', 'required', [
            'required' => 'Poin harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah_subkat()();
        } else {
            // Tampung data
            $data = [
                'id_kat_prestasi'    => $this->input->post('id_kat_prestasi'),
                'nama_subkategori'    => $this->input->post('nama_subkategori'),
                'poin_prestasi'    => $this->input->post('poin_prestasi'),
            ];

            $this->mst_subprestasi->create($data);
            $this->session->set_flashdata('success', 'Sub kategori prestasi ' . $this->input->post('nama_subkategori') . ' berhasil ditambah');
            redirect('admin/kategoriprestasi');
        }
    }

    public function edit_subkat()
    {
        $data['id']                 = $this->uri->segment(4);
        if (!$data['id']) {
            return;
        }

        $data['title']      = title();
        $data['menu_open']  = 'kategoriprestasi'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Edit Keterangan Prestasi';

        // Ambil data yang diperlukan dari databse
        $data['ketpres'] = $this->mst_subprestasi->getDataById($data['id']);
        $data['katpres'] = $this->mst_prestasi->getAllData();

        // View website
        $data['content']    = 'admin/kategori_prestasi/edit_subkat';
        $this->load->view('template/template', $data);
    }

    public function do_edit_subkat($id)
    {
        $this->form_validation->set_rules('id_kat_prestasi', 'Alias', 'required', [
            'required' => 'Kategori prestasi harus diisi'
        ]);
        $this->form_validation->set_rules('nama_subkategori', 'Alias', 'required', [
            'required' => 'Keterangan harus diisi'
        ]);
        $this->form_validation->set_rules('poin_prestasi', 'Alias', 'required', [
            'required' => 'Poin harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit();
        } else {
            // Tampung data
            $data = [
                'id_kat_prestasi'    => $this->input->post('id_kat_prestasi'),
                'nama_subkategori'    => $this->input->post('nama_subkategori'),
                'poin_prestasi'    => $this->input->post('poin_prestasi'),
            ];

            // Update data
            $where = array('id_subkat_prestasi' => $id);
            $this->mst_subprestasi->update($data, $where);
            $this->session->set_flashdata('success', 'Keterangan ' . $this->input->post('nama_subkategori') . ' berhasil diubah');
            redirect('admin/kategoriprestasi');
        }
    }

    public function delete_sub($id)
    {
        // Delete data
        $this->mst_subprestasi->delete(array('id_subkat_prestasi' => $id));
        $this->session->set_flashdata('success', 'Delete Keterangan prestasi berhasil');
        redirect('admin/kategoriprestasi');
    }
}
