<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Useraccess extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // user login
        is_modulkepeg();

        $this->load->model('User_access', 'akses');
        $this->load->model('Menu_model', 'menu');
    }

    public function index()
    {
        $data['title']      = title();
        $data['menu_open']  = 'useraccess'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'User Level';


        // Ambil data yang diperlukan dari database
        $data['level']    = ['1', '2'];

        // View website
        $data['content']    = 'admin/user_akses/index';
        $this->load->view('template/template', $data);
    }

    public function accessmenu($level)
    {
        $data['title']      = title();
        $data['menu_open']  = 'useraccess'; // samakan dengan nama controller membuat menu open
        $data['page']       = 'User Akses Menu';


        // Ambil data yang diperlukan dari database
        $data['level']  = $level;
        $data['menu']   = $this->menu->getAllData();

        // View website
        $data['content']    = 'admin/user_akses/level_akses';
        $this->load->view('template/template', $data);
    }

    public function changeaccess()
    {
        $level = $this->input->post('level');
        $menu = $this->input->post('menu');

        $data = [
            'level' => $level,
            'id_menu' => $menu
        ];

        $result = $this->db->get_where('user_access', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access', $data);
        } else {
            $this->db->delete('user_access', $data);
        }
    }
}
