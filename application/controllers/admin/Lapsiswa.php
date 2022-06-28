<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapsiswa extends CI_Controller
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
        $data['menu_open']  = 'lapsiswa'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Laporan Jumlah Siswa';

        // get tahun
        $takademik = @$this->input->get('tahun_akademik') ? $this->input->get('tahun_akademik') : 'all';

        // tampilkan semua siswa
        if ($takademik == 'all') {
            $data['siswa']  = $this->mst_siswa->getAllData();
        } else {
            // tampilkan by tahun akademik
            $data['siswa']  = $this->mst_siswa->getDataByTA($takademik);
        }
        $data['tahun_akademik'] = $this->akademik->getAllData();
        $data['takademik'] = $takademik;

        // View website
        $data['content']    = 'admin/laporan/all_siswa';
        $this->load->view('template/template', $data);
    }

    public function pindah()
    {
        $data['title']      = title();
        $data['menu_open']  = 'lapsiswa'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Laporan Jumlah Siswa Pindah';

        // get tahun
        $takademik = @$this->input->get('tahun_akademik') ? $this->input->get('tahun_akademik') : 'all';

        // tampilkan semua siswa
        if ($takademik == 'all') {
            $data['siswa']  = $this->mst_siswa->getDataByStatus('pindah');
        } else {
            // tampilkan by tahun akademik
            $data['siswa']  = $this->mst_siswa->getDataByStatusTA('pindah', $takademik);
        }
        $data['tahun_akademik'] = $this->akademik->getAllData();
        $data['takademik'] = $takademik;

        // View website
        $data['content']    = 'admin/laporan/siswa_keluar';
        $this->load->view('template/template', $data);
    }

    public function dikeluarkan()
    {
        $data['title']      = title();
        $data['menu_open']  = 'lapsiswa'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Laporan Jumlah Siswa Dikeluarkan';

        // get tahun
        $takademik = @$this->input->get('tahun_akademik') ? $this->input->get('tahun_akademik') : 'all';

        // tampilkan semua siswa
        if ($takademik == 'all') {
            $data['siswa']  = $this->mst_siswa->getDataByStatus('dikeluarkan');
        } else {
            // tampilkan by tahun akademik
            $data['siswa']  = $this->mst_siswa->getDataByStatusTA('dikeluarkan', $takademik);
        }
        $data['tahun_akademik'] = $this->akademik->getAllData();
        $data['takademik'] = $takademik;

        // View website
        $data['content']    = 'admin/laporan/siswa_keluar';
        $this->load->view('template/template', $data);
    }

    public function alumni()
    {
        $data['title']      = title();
        $data['menu_open']  = 'lapsiswa_alumni'; // khusus method ini menu open == lapsiswa_alumni
        $data['page']       = 'Laporan Jumlah Siswa Alumni';

        $data['alumni']     = $this->mst_siswa->countAllAlumni();

        // View website
        $data['content']    = 'admin/laporan/siswa_alumni';
        $this->load->view('template/template', $data);
    }

    public function detail_alumni($id)
    {
        $data['title']      = title();
        $data['menu_open']  = 'lapsiswa_alumni'; // khusus method ini menu open == lapsiswa_alumni

        // tampilkan by tahun akademik
        $data['siswa']              = $this->mst_siswa->getDataByStatusTA('lulus', $id);
        $data['tahun_akademik']     = $this->akademik->getDataById($id);

        // View website
        $data['page']       = 'Daftar Siswa Alumni Angkatan ' . $data['tahun_akademik']['angkatan'];
        $data['content']    = 'admin/laporan/detail_siswa_alumni';
        $this->load->view('template/template', $data);
    }
}
