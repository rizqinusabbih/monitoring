<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Mst_guru', 'mst_guru');
        $this->load->model('Mst_siswa', 'mst_siswa');
        $this->load->model('Mst_kelas', 'mst_kelas');
        $this->load->model('Tahun_akademik', 'akademik');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'siswa'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Siswa';

        // Ambil data yang diperlukan
        $data['siswa']  = $this->mst_siswa->getAllData();

        // View website
        $data['content']    = 'admin/siswa/index';
        $this->load->view('template/template', $data);
    }

    public function tambah()
    {
        $data['title']      = title();
        $data['menu_open']  = 'siswa'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Tambah Siswa';

        // Ambil data yang diperlukan dari databse
        $data['tahun_akademik'] = $this->akademik->getTahunaktif();
        $data['kelas']          = $this->mst_kelas->getAllData();

        // View website
        $data['content']    = 'admin/siswa/add';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('nis', 'Alias', 'required|is_unique[mst_siswa.nis]', [
            'required' => 'Nis harus diisi',
            'is_unique' => 'Nis ini sudah terdaftar'
        ]);
        $this->form_validation->set_rules('nama_siswa', 'Alias', 'required', [
            'required' => 'Nama siswa harus diisi'
        ]);
        $this->form_validation->set_rules('id_kelas', 'Alias', 'required', [
            'required' => 'Kelas harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            // Tampung data
            $data = [
                'id_tahun_akademik'   => $this->input->post('id_tahun_akademik'),
                'nis'                 => $this->input->post('nis'),
                'nama_siswa'          => $this->input->post('nama_siswa'),
                'id_kelas'            => $this->input->post('id_kelas'),
                'status'              => 'aktif',
                'tahun_lulus_keluar'  => null,
                'nama_ibu'            => $this->input->post('nama_ibu') ? $this->input->post('nama_ibu') : null,
                'keterangan_keluar'    => null,
            ];

            $this->mst_siswa->create($data);
            $this->session->set_flashdata('success', 'Siswa ' . $this->input->post('nama_siswa') . ' berhasil ditambah');
            redirect('admin/siswa');
        }
    }

    public function edit()
    {
        $data['id']                 = $this->uri->segment(4);
        if (!$data['id']) {
            return;
        }
        $data['title']              = title();
        $data['menu_open']          = 'siswa'; // samakan dengan nama controller membuat menu open

        // Ambil data yang diperlukan dari databse
        $data['siswa']            = $this->mst_siswa->getDataById($data['id']);
        $data['kelas']          = $this->mst_kelas->getAllData();

        // View website
        $data['page']               = 'Edit ' . isset($data['siswa']) ? $data['siswa']['nama_siswa'] : '';
        $data['content']            = 'admin/siswa/edit';
        $this->load->view('template/template', $data);
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('nis', 'Alias', 'required', [
            'required' => 'Nis harus diisi'
        ]);
        $this->form_validation->set_rules('nama_siswa', 'Alias', 'required', [
            'required' => 'Nama siswa harus diisi'
        ]);
        $this->form_validation->set_rules('id_kelas', 'Alias', 'required', [
            'required' => 'Kelas harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit();
        } else {
            // Tampung data
            $data = [
                'id_tahun_akademik'   => $this->input->post('id_tahun_akademik'),
                'nis'                 => $this->input->post('nis'),
                'nama_siswa'          => $this->input->post('nama_siswa'),
                'id_kelas'            => $this->input->post('id_kelas'),
                'tahun_lulus_keluar'  => null,
                'nama_ibu'            => $this->input->post('nama_ibu') ? $this->input->post('nama_ibu') : null,
                'keterangan_keluar'   => null,
            ];

            // Update data
            $where = array('id_siswa' => $id);
            $this->mst_siswa->update($data, $where);
            $this->session->set_flashdata('success', 'Data siswa ' . $this->input->post('nama_siswa') . ' berhasil diubah');
            redirect('admin/siswa');
        }
    }

    public function pindah_keluar()
    {
        $data['title']      = title();
        $data['menu_open']  = 'pindah_keluar'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Siswa Pindah / Keluar';

        // Ambil data yang diperlukan
        $id_wali_kelas = $this->session->userdata('id_guru');
        $kelas = $this->mst_kelas->getDataByIdWali($id_wali_kelas);
        $data['siswa'] = $this->mst_siswa->getAllByIdKelas($kelas['id_kelas']);
        $data['pindah'] = $this->mst_siswa->getDataByStatus('pindah');
        $data['dikeluarkan'] = $this->mst_siswa->getDataByStatus('dikeluarkan');
        $data['tahun_aktif'] = $this->akademik->getTahunaktif();

        // View website
        $data['content']    = 'admin/siswa/pindah_keluar';
        $this->load->view('template/template', $data);
    }

    public function do_out()
    {
        $this->form_validation->set_rules('id_siswa', 'Alias', 'required', [
            'required' => 'Siswa harus diisi'
        ]);
        $this->form_validation->set_rules('status', 'Alias', 'required', [
            'required' => 'Status harus diisi'
        ]);
        $this->form_validation->set_rules('keterangan_keluar', 'Alias', 'required', [
            'required' => 'Keterangan harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->pindah_keluar();
        } else {
            $id_siswa = $this->input->post('id_siswa');
            $siswa = $this->mst_siswa->getDataById($id_siswa);
            // Tampung data
            $data = [
                'id_kelas'            => null,
                'status'              => $this->input->post('status'),
                'tahun_lulus_keluar'  => date('Y'),
                'keterangan_keluar'   => $this->input->post('keterangan_keluar'),
            ];

            // Update data
            $where = array('id_siswa' => $id_siswa);
            $this->mst_siswa->update($data, $where);
            $this->session->set_flashdata('success', $siswa['nama_siswa'] . ' telah dikeluarkan dari sekolah');
            redirect('admin/siswa/pindah_keluar');
        }
    }
}
