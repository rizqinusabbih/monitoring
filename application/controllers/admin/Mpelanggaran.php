<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpelanggaran extends CI_Controller
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
        $data['menu_open']  = 'mpelanggaran'; // samakan dengan nama controller membuat menu open

        $id_wali_kelas = $this->session->userdata('id_guru');
        $kelas = $this->mst_kelas->getDataByIdWali($id_wali_kelas);

        $dataSiswa = $this->mst_siswa->getAllByIdKelas($kelas['id_kelas']);
        $pelanggaran_siswa = [];
        if ($dataSiswa) {
            foreach ($dataSiswa as $murid) {
                $id_siswa = $murid['id_siswa'];
                $monitoring = $this->mon_pelanggaran->getDataByIdSiswa($id_siswa);
                $pelanggaran_siswa[] = [
                    'id_siswa'      => $id_siswa,
                    'nis'           => $murid['nis'],
                    'nama_siswa'    => $murid['nama_siswa'],
                    'prestasi'      => $monitoring['total_pelanggaran'],
                    'point'         => $monitoring['total_poin'],
                ];
            }
        }
        $data['pelanggaran_siswa'] = $pelanggaran_siswa;

        $data['page']       = 'Siswa Kelas ' . $kelas['nama_kelas'] . ' ' . $kelas['nama_jurusan'];
        $data['tahunakademik']  = $this->akademik->getTahunaktif();
        $data['siswa']          = $this->mst_siswa->getAllByIdKelas($kelas['id_kelas']);
        $data['pelanggaran']       = $this->mst_pelanggaran->getAllOrderByKode();

        // View website
        $data['content']    = 'admin/monitoring/pelanggaran';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('id_siswa', 'Alias', 'required', [
            'required' => 'Siswa harus diisi'
        ]);
        $this->form_validation->set_rules('id_pelanggaran', 'Alias', 'required', [
            'required' => 'Jenis pelanggaran harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            // Tampung data
            $data = [
                'id_tahun_akademik'    => $this->input->post('id_tahun_akademik'),
                'id_siswa'    => $this->input->post('id_siswa'),
                'id_pelanggaran'    => $this->input->post('id_pelanggaran'),
                'jml_poin'    => $this->input->post('jml_poin'),
                'keterangan'    => $this->input->post('keterangan') ? $this->input->post('keterangan') : null,
                'tgl_pelanggaran'    => $this->input->post('tgl_pelanggaran'),
                'id_guru'    => $this->session->userdata('id_guru'),
            ];

            $this->mon_pelanggaran->create($data);
            $this->session->set_flashdata('success', 'Pelanggaran berhasil ditambah');
            redirect('admin/mpelanggaran');
        }
    }

    public function detail($id)
    {
        $data['title']      = title();
        $data['menu_open']  = 'mpelanggaran'; // samakan dengan nama controller membuat menu open

        // Ambil data yang diperlukan
        $data['siswa']       = $this->mst_siswa->getDataById($id);
        $data['pelanggaran']    = $this->mon_pelanggaran->getAllByIdSiswa($id);

        // View website
        $data['page']       = 'Pelanggaran ' . $data['siswa']['nama_siswa'];
        $data['content']    = 'admin/monitoring/pelanggaran_detail';
        $this->load->view('template/template', $data);
    }

    public function updateFormData()
    {
        $id_pelanggaran = $this->input->get('datapelanggaran');

        $data = [
            'jml_poin' => null
        ];
        $jenis_pelanggaran = $this->mst_pelanggaran->getDataById($id_pelanggaran);
        if ($jenis_pelanggaran) {
            $jml_poin = $jenis_pelanggaran['poin'];
            $data = [
                'jml_poin' => $jml_poin ? $jml_poin : null
            ];
        }
        echo json_encode($data);
    }
}
