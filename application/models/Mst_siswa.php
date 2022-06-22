<?php

class Mst_siswa extends CI_Model
{

    var $table = 'mst_siswa';

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
        $this->db->select('*, a.id_siswa');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik', 'left');
        $this->db->join('mst_kelas', 'a.id_kelas = mst_kelas.id_kelas', 'left');
        $this->db->join('mst_jurusan', 'mst_kelas.id_jurusan = mst_jurusan.id_jurusan', 'left');
        $this->db->order_by('a.id_tahun_akademik', 'desc');
        $this->db->order_by('a.nis');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function getDataById($id)
    {
        $this->db->select('*, a.id_siswa');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik', 'left');
        $this->db->join('mst_kelas', 'a.id_kelas = mst_kelas.id_kelas', 'left');
        $this->db->join('mst_jurusan', 'mst_kelas.id_jurusan = mst_jurusan.id_jurusan', 'left');
        $this->db->where('a.id_siswa', $id);
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

    function getAllByIdKelas($id_kelas)
    {
        $this->db->select('*, a.id_siswa');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik', 'left');
        $this->db->join('mst_kelas', 'a.id_kelas = mst_kelas.id_kelas', 'left');
        $this->db->join('mst_jurusan', 'mst_kelas.id_jurusan = mst_jurusan.id_jurusan', 'left');
        $this->db->where('a.id_kelas', $id_kelas);
        $this->db->order_by('a.id_tahun_akademik', 'desc');
        $this->db->order_by('a.nis');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }
}
