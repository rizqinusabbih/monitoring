<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'dahsboard'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'Dashboard';

        // Ambil data yang diperlukan

        // View website
        $data['content']    = 'admin/index';
        $this->load->view('template/template', $data);
    }
}
