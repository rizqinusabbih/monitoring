<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Tahun_akademik', 'akademik');
        $this->load->model('Mst_siswa', 'mst_siswa');
        $this->load->model('Mon_prestasi', 'mon_prestasi');
        $this->load->model('Mon_pelanggaran', 'mon_pelanggaran');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'dahsboard'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Dashboard';

        $tahun_aktif        = $this->akademik->getTahunaktif();
        $id_tahun_akademik  = $tahun_aktif['id_tahun_akademik'];
        // Tahun awal dan akhir
        $data['sejak']          = $this->akademik->getTahunawal();
        // Jumlah siswa
        $data['all_siswa']          = $this->mst_siswa->countAll();
        $data['all_pindah']         = $this->mst_siswa->countAllByStatus('pindah');
        $data['all_dikeluarkan']    = $this->mst_siswa->countAllByStatus('dikeluarkan');
        $data['all_alumni']         = $this->mst_siswa->countAllByStatus('alumni');
        // Jumlah Monitoring
        $data['all_prestasi']       = $this->mon_prestasi->countAll();
        $data['all_pelanggaran']    = $this->mon_pelanggaran->countAll();
        // Grafik prestasi/pelanggaran / bulan / ta aktif
        $data['gra_prestasi']       = $this->mon_prestasi->countAktif($id_tahun_akademik);
        $data['gra_pelanggaran']    = $this->mon_pelanggaran->countAktif($id_tahun_akademik);

        // View website
        $data['content']    = 'admin/index';
        $this->load->view('template/template', $data);
    }
}
