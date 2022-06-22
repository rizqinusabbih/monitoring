<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model', 'user');
        $this->load->model('User_access', 'access');
    }

    public function index()
    {
        // if ($this->session->userdata('username')) {
        //     redirect('admin/dashboard');
        // }

        $data['title'] = title();

        $this->form_validation->set_rules('username', 'Alias', 'required', [
            'required' => 'Username harus diisi'
        ]);
        $this->form_validation->set_rules('password', 'Alias', 'required', [
            'required' => 'Password harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/index', $data);
        } else {
            //validasi login
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user->getUser($username);

        // Jika pengelola ada
        if ($user) {
            //jika password benar
            if (password_verify($password, $user['password'])) {
                $userMenu = [];
                $aksesMenu = $this->access->getDataByLevel($user['level']);
                if ($aksesMenu) {
                    foreach ($aksesMenu as $item) {
                        $userMenu[] = $item['menu'];
                    }
                }
                $data = [
                    'id' => $user['id_user'],
                    'id_guru' => $user['id_guru'],
                    'username' => $user['username'],
                    'level' => $user['level'],
                    'access' => $userMenu,
                ];
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $id = $this->session->unset_userdata('id');
        $username = $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout berhasil!</div>');
        redirect('auth');
    }
}
