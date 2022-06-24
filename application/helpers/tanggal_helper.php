<?php
defined('BASEPATH') or die('No direct script access allowed!');

function bulan($m = 0)
{
    $bulan_arr = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];

    if ($m !== 0) {
        return $bulan_arr[$m];
    }
    return $bulan_arr;
}

function hari($d = 0)
{
    $hari_arr = [
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jum\'at',
        'Saturday' => 'Sabtu',
        'Sunday' => 'Minggu',
    ];

    if ($d !== 0) {
        return $hari_arr[$d];
    }
    return $hari_arr;
}

function tglindo($tgl)
{
    $bulan = date('m', strtotime($tgl));
    return date('d-', strtotime($tgl)) . $bulan . date('-Y', strtotime($tgl));
}

function tglhari($tgl)
{
    $bulan = bulan(date('m', strtotime($tgl)));
    $hari = hari(date('l', strtotime($tgl)));
    return $hari . ', ' . date('d ', strtotime($tgl)) . $bulan . date(' Y', strtotime($tgl));
}

function generateWorkDate($month = null, $year = null)
{
    $month  = $month ? $month : date('m');
    $year   = $year ? $year : date('Y');

    $stringDate = $year . '-' . $month;
    $startDate  = date($stringDate . '-01');
    $lastDate   = date('t', strtotime($startDate));
    $endDate    = date($stringDate . '-' . $lastDate);
    $begin      = strtotime($startDate);
    $end        = strtotime($endDate);

    $dateArr        = [];
    $working_days   = 0;
    if ($begin < $end) {
        $no_days  = 0;
        $weekends = 0;
        while ($begin <= $end) {
            $date = date('Y-m-d', $begin);
            $no_days++;
            $what_day = date("N", $begin);
            if ($what_day > 5) {
                $weekends++;
                $dateArr[$date] = false;
            } else {
                $dateArr[$date] = true;
            }
            $begin += 86400;
        };
        $working_days = $no_days - $weekends;
    }

    return [
        'date' => $dateArr,
        'workdays' => $working_days,
    ];
}

function generateWorkDateYear($year = null)
{
    $year   = $year ? $year : date('Y');

    $stringDate = $year;
    $startDate  = date($stringDate . '-01-01');
    $endDate    = date($stringDate . '-12-31');
    $begin      = strtotime($startDate);
    $end        = strtotime($endDate);

    $dateArr        = [];
    $working_days   = 0;
    if ($begin < $end) {
        $no_days  = 0;
        $weekends = 0;
        while ($begin <= $end) {
            $date = date('Y-m-d', $begin);
            $no_days++;
            $what_day = date("N", $begin);
            if ($what_day > 5) {
                $weekends++;
                $dateArr[$date] = false;
            } else {
                $dateArr[$date] = true;
            }
            $begin += 86400;
        };
        $working_days = $no_days - $weekends;
    }

    return [
        'date' => $dateArr,
        'workdays' => $working_days,
    ];
}
