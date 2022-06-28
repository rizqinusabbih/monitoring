<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapprestasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Tahun_akademik', 'akademik');
        $this->load->model('Mst_siswa', 'mst_siswa');
        $this->load->model('Mst_kelas', 'mst_kelas');
        $this->load->model('Mst_prestasi', 'mst_prestasi');
        $this->load->model('Mon_prestasi', 'mon_prestasi');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'lapprestasi'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Laporan Prestasi Siswa';

        // get tahun
        $takademik = @$this->input->get('tahun_akademik') ? $this->input->get('tahun_akademik') : 'all';

        // tampilkan semua siswa
        if ($takademik == 'all') {
            $dataSiswa = $this->mst_siswa->getAllData();
        } else {
            // tampilkan by tahun akademik
            $dataSiswa = $this->mst_siswa->getDataByTA($takademik);
        }
        $prestasi_siswa = [];
        if ($dataSiswa) {
            foreach ($dataSiswa as $murid) {
                $id_siswa = $murid['id_siswa'];
                $monitoring = $this->mon_prestasi->getDataByIdSiswa($id_siswa);
                $prestasi_siswa[] = [
                    'id_siswa'      => $id_siswa,
                    'nis'           => $murid['nis'],
                    'nama_siswa'    => $murid['nama_siswa'],
                    'prestasi'      => $monitoring['total_prestasi'],
                    'point'         => $monitoring['total_point'],
                ];
            }
        }
        $data['prestasi_siswa'] = $prestasi_siswa;

        $data['tahun_akademik'] = $this->akademik->getAllData();
        $data['takademik'] = $takademik;

        // View website
        $data['content']    = 'admin/laporan/prestasi';
        $this->load->view('template/template', $data);
    }

    public function detail($id)
    {
        $data['title']      = title();
        $data['menu_open']  = 'lapprestasi'; // samakan dengan nama controller membuat menu open

        // Ambil data yang diperlukan
        $data['siswa']       = $this->mst_siswa->getDataById($id);
        $data['prestasi']    = $this->mon_prestasi->getAllByIdSiswa($id);

        // View website
        $data['page']       = 'Prestasi ' . $data['siswa']['nama_siswa'] . ' Angakatan ' . $data['siswa']['angkatan'];
        $data['content']    = 'admin/laporan/prestasi_detail';
        $this->load->view('template/template', $data);
    }
}
