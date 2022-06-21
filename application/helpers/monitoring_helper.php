<?php
defined('BASEPATH') or exit('No direct script access allowed');

function title()
{
    return 'Sistem Informasi Monitoring Siswa';
}

// Modul Kepegawaian
function is_modulkepeg()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        // cek departement user login
        $login = $ci->session->userdata('departement');
        if ($login !== '1') {
            // redirect('auth/blocked');
        }
    }
}

// Setting user access menu
function level_for_setting($level = 0)
{
    $level_arr = [
        '0' => 'Superadmin',
        '1' => 'Kepala Sekolah',
        '2' => 'Wali Kelas'
    ];

    if ($level !== 0) {
        return $level_arr[$level];
    }
    return $level_arr;
}

// Menu checked
function check_access($level, $menu)
{
    $ci = get_instance();

    $ci->db->where('level', $level);
    $ci->db->where('id_menu', $menu);
    $result = $ci->db->get('user_access');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

// level user
function level($level = 0)
{
    $level_arr = [
        '1' => 'Kepala Sekolah',
        '2' => 'Wali Kelas',
    ];

    if ($level !== 0) {
        return $level_arr[$level];
    }
    return $level_arr;
}
