<?php

class Mon_prestasi extends CI_Model
{

    var $table = 'mon_prestasi';

    function create($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

    function delete($where)
    {
        $this->db->where($where);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }

    function getAllData()
    {
        $this->db->select('*, a.id_mon_prestasi');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik');
        $this->db->join('mst_siswa', 'a.id_siswa = mst_siswa.id_siswa');
        $this->db->join('mst_prestasi', 'a.id_prestasi = mst_prestasi.id_prestasi');
        $this->db->order_by('a.id_mon_prestasi', 'desc');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function getDataById($id)
    {
        $this->db->select('*, a.id_mon_prestasi');
        $this->db->where('a.id_mon_prestasi', $id);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function checkDuplicateData($where)
    {
        $this->db->where($where);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function getDataByIdSiswa($id_siswa)
    {
        $this->db->select("COUNT(a.id_prestasi) as total_prestasi");
        $this->db->select("SUM(a.jml_point) as total_point");
        $this->db->where('a.id_siswa', $id_siswa);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function getAllByIdSiswa($id_siswa)
    {
        $this->db->select('*, a.id_mon_prestasi');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik');
        $this->db->join('mst_siswa', 'a.id_siswa = mst_siswa.id_siswa');
        $this->db->join('mst_prestasi', 'a.id_prestasi = mst_prestasi.id_prestasi');
        $this->db->where('a.id_siswa', $id_siswa);
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function countAll()
    {
        return $this->db->get($this->table)->num_rows();
    }

    function countAktif($id_tahun_akademik)
    {
        $this->db->select('COUNT(id_mon_prestasi) as prestasi_pertahun');
        $this->db->where('id_tahun_akademik', $id_tahun_akademik);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function countByTa()
    {
        $this->db->select('COUNT(a.id_mon_prestasi) as total_pre');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik');
        $this->db->select('tahun_akademik as ta');
        $this->db->group_by('a.id_tahun_akademik');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function countTop5($id_tahun_akademik)
    {
        $this->db->select('COUNT(a.id_prestasi) as top_5_prestasi');
        $this->db->join('mst_prestasi', 'a.id_prestasi = mst_prestasi.id_prestasi');
        $this->db->select('jenis_prestasi as jenis_prestasi');
        $this->db->where('a.id_tahun_akademik', $id_tahun_akademik);
        $this->db->group_by('a.id_prestasi');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function countByKelasTA($id_tahun_akademik, $id_kelas)
    {
        $this->db->select("COUNT(a.id_mon_prestasi) as prestasi");
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik');
        $this->db->join('mst_siswa', 'a.id_siswa = mst_siswa.id_siswa');
        $this->db->join('mst_kelas', 'mst_siswa.id_kelas = mst_kelas.id_kelas');
        $this->db->where('a.id_tahun_akademik', $id_tahun_akademik);
        $this->db->where('mst_kelas.id_kelas', $id_kelas);
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
}
