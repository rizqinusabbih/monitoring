<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mprestasi extends CI_Controller
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
        $data['menu_open']  = 'mprestasi'; // samakan dengan nama controller membuat menu open

        $id_wali_kelas = $this->session->userdata('id_guru');
        $kelas = $this->mst_kelas->getDataByIdWali($id_wali_kelas);

        $dataSiswa = $this->mst_siswa->getAllByIdKelas($kelas['id_kelas']);
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
                    'point'      => $monitoring['total_point'],
                ];
            }
        }
        $data['prestasi_siswa'] = $prestasi_siswa;

        $data['page']       = 'Siswa Kelas ' . $kelas['nama_kelas'] . ' ' . $kelas['nama_jurusan'];
        $data['tahunakademik']  = $this->akademik->getTahunaktif();
        $data['siswa']          = $this->mst_siswa->getAllByIdKelas($kelas['id_kelas']);
        $data['prestasi']       = $this->mst_prestasi->getAllData();

        // View website
        $data['content']    = 'admin/monitoring/prestasi';
        $this->load->view('template/template', $data);
    }

    public function do_add()
    {
        $this->form_validation->set_rules('id_siswa', 'Alias', 'required', [
            'required' => 'Siswa harus diisi'
        ]);
        $this->form_validation->set_rules('id_prestasi', 'Alias', 'required', [
            'required' => 'Jenis prestasi harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            // Tampung data
            $data = [
                'id_tahun_akademik'    => $this->input->post('id_tahun_akademik'),
                'id_siswa'    => $this->input->post('id_siswa'),
                'id_prestasi'    => $this->input->post('id_prestasi'),
                'jml_point'    => $this->input->post('jml_point'),
                'keterangan'    => $this->input->post('keterangan') ? $this->input->post('keterangan') : null,
                'tgl_prestasi'    => date('Y-m-d'),
                'id_guru'    => $this->session->userdata('id_guru'),
            ];

            $this->mon_prestasi->create($data);
            $this->session->set_flashdata('success', 'Prestasi berhasil ditambah');
            redirect('admin/mprestasi');
        }
    }

    public function detail($id)
    {
        $data['title']      = title();
        $data['menu_open']  = 'mprestasi'; // samakan dengan nama controller membuat menu open

        // Ambil data yang diperlukan
        $data['siswa']       = $this->mst_siswa->getDataById($id);
        $data['prestasi']    = $this->mon_prestasi->getAllByIdSiswa($id);

        // View website
        $data['page']       = 'Prestasi ' . $data['siswa']['nama_siswa'];
        $data['content']    = 'admin/monitoring/prestasi_detail';
        $this->load->view('template/template', $data);
    }

    public function updateFormData()
    {
        $id_prestasi = $this->input->get('dataprestasi');

        $data = [
            'jml_point' => null
        ];
        $jenis_prestasi = $this->mst_prestasi->getDataById($id_prestasi);
        if ($jenis_prestasi) {
            $jml_point = $jenis_prestasi['point'];
            $data = [
                'jml_point' => $jml_point ? $jml_point : null
            ];
        }
        echo json_encode($data);
    }
}
