<?php

class Mon_pelanggaran extends CI_Model
{

    var $table = 'mon_pelanggaran';

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
        $this->db->select('*, a.id_mon_pelanggaran');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik');
        $this->db->join('mst_siswa', 'a.id_siswa = mst_siswa.id_siswa');
        $this->db->join('mst_pelanggaran', 'a.id_pelanggaran = mst_pelanggaran.id_pelanggaran');
        $this->db->order_by('a.id_mon_pelanggaran', 'desc');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function getDataById($id)
    {
        $this->db->select('*, a.id_mon_pelanggaran');
        $this->db->where('a.id_mon_pelanggaran', $id);
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
        $this->db->select("COUNT(a.id_pelanggaran) as total_pelanggaran");
        $this->db->select("SUM(a.jml_poin) as total_poin");
        $this->db->where('a.id_siswa', $id_siswa);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function getAllByIdSiswa($id_siswa)
    {
        $this->db->select('*, a.id_mon_pelanggaran');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik');
        $this->db->join('mst_siswa', 'a.id_siswa = mst_siswa.id_siswa');
        $this->db->join('mst_pelanggaran', 'a.id_pelanggaran = mst_pelanggaran.id_pelanggaran');
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
        $this->db->select('COUNT(id_mon_pelanggaran) as pelanggaran_pertahun');
        $this->db->where('id_tahun_akademik', $id_tahun_akademik);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function countTop5($id_tahun_akademik)
    {
        $this->db->select('COUNT(a.id_pelanggaran) as top_5_pelanggaran');
        $this->db->join('mst_pelanggaran', 'a.id_pelanggaran = mst_pelanggaran.id_pelanggaran');
        $this->db->select('jenis_pelanggaran as jenis_pelanggaran');
        $this->db->where('a.id_tahun_akademik', $id_tahun_akademik);
        $this->db->group_by('a.id_pelanggaran');
        $this->db->order_by('top_5_pelanggaran', 'desc');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function countByTa()
    {
        $this->db->select('COUNT(a.id_mon_pelanggaran) as total_pel');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik');
        $this->db->select('tahun_akademik as ta');
        $this->db->group_by('a.id_tahun_akademik');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function countByKelasTA($id_tahun_akademik, $id_kelas)
    {
        $this->db->select("COUNT(a.id_mon_pelanggaran) as pelanggaran");
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
