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
        $this->load->model('Mst_kelas', 'mst_kelas');
        $this->load->model('Mon_prestasi', 'mon_prestasi');
        $this->load->model('Mon_pelanggaran', 'mon_pelanggaran');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'dahsboard'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Dashboard';

        $data['tahun_aktif'] = $this->akademik->getTahunaktif();
        $id_tahun_akademik  = $data['tahun_aktif']['id_tahun_akademik'];
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

        // Grafik prestasi/pelanggaran / tahun akademik aktif / kelas
        $dataKelas = $this->mst_kelas->getAllData();
        $dataGrafik = [];
        if ($dataKelas) {
            foreach ($dataKelas as $kelas) {
                $id_kelas = $kelas['id_kelas'];
                $prestasi = $this->mon_prestasi->countByKelasTA($id_tahun_akademik, $id_kelas);
                $pelanggaran = $this->mon_pelanggaran->countByKelasTA($id_tahun_akademik, $id_kelas);
                $dataGrafik[] = [
                    'nama_kelas'     => $kelas['nama_kelas'] . ' ' . $kelas['nama_jurusan'],
                    'prestasi'       => $prestasi['prestasi'],
                    'pelanggaran'    => $pelanggaran['pelanggaran'],
                ];
            }
        }
        $data['kelas'] = $dataGrafik;

        // Grafik total prestasi/pelanggaran / grup by tahun akademik
        $data['all_gra_prestasi']   = $this->mon_prestasi->countByTa();
        $data['all_gra_pelanggaran']   = $this->mon_pelanggaran->countByTa();

        // Grafik prestasi/pelanggaran / bulan / ta aktif
        $data['gra_prestasi']       = $this->mon_prestasi->countAktif($id_tahun_akademik);
        $data['gra_pelanggaran']    = $this->mon_pelanggaran->countAktif($id_tahun_akademik);

        // Top 5 prestasi/pelanggaran / tahun aktif
        // $data['top_five_prestasi']  = $this->mon_prestasi->countTop5($id_tahun_akademik);
        $data['top_five_pelanggaran']  = $this->mon_pelanggaran->countTop5($id_tahun_akademik);

        // Aktifitas terbaru
        $data['akt_pelanggaran']       = $this->mon_pelanggaran->getAllData();
        $data['akt_prestasi']          = $this->mon_prestasi->getAllData();

        // View website
        $data['content']    = 'admin/index';
        $this->load->view('template/template', $data);
    }
}
