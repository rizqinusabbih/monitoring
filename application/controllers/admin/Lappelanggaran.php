<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lappelanggaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('Tahun_akademik', 'akademik');
        $this->load->model('Mst_siswa', 'mst_siswa');
        $this->load->model('Mst_kelas', 'mst_kelas');
        $this->load->model('Mst_pelanggaran', 'mst_pelanggaran');
        $this->load->model('Mon_pelanggaran', 'mon_pelanggaran');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'lappelanggaran'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Laporan Pelanggaran Siswa';

        // get tahun
        $takademik = @$this->input->get('tahun_akademik') ? $this->input->get('tahun_akademik') : 'all';

        // tampilkan semua siswa
        if ($takademik == 'all') {
            $dataSiswa = $this->mst_siswa->getAllData();
        } else {
            // tampilkan by tahun akademik
            $dataSiswa = $this->mst_siswa->getDataByTA($takademik);
        }
        $pelanggaran_siswa = [];
        if ($dataSiswa) {
            foreach ($dataSiswa as $murid) {
                $id_siswa = $murid['id_siswa'];
                $monitoring = $this->mon_pelanggaran->getDataByIdSiswa($id_siswa);
                $pelanggaran_siswa[] = [
                    'id_siswa'      => $id_siswa,
                    'nis'           => $murid['nis'],
                    'nama_siswa'    => $murid['nama_siswa'],
                    'pelanggaran'      => $monitoring['total_pelanggaran'],
                    'point'         => $monitoring['total_poin'],
                ];
            }
        }
        $data['pelanggaran_siswa'] = $pelanggaran_siswa;

        $data['tahun_akademik'] = $this->akademik->getAllData();
        $data['takademik'] = $takademik;

        // View website
        $data['content']    = 'admin/laporan/pelanggaran';
        $this->load->view('template/template', $data);
    }

    public function detail($id)
    {
        $data['title']      = title();
        $data['menu_open']  = 'lappelanggaran'; // samakan dengan nama controller membuat menu open

        // Ambil data yang diperlukan
        $data['siswa']       = $this->mst_siswa->getDataById($id);
        $data['pelanggaran']    = $this->mon_pelanggaran->getAllByIdSiswa($id);

        // View website
        $data['page']       = 'Pelanggaran ' . $data['siswa']['nama_siswa'] . ' Angakatan ' . $data['siswa']['angkatan'];
        $data['content']    = 'admin/laporan/pelanggaran_detail';
        $this->load->view('template/template', $data);
    }
}
