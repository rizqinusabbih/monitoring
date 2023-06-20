<?php

class Mst_kelas extends CI_Model
{

    var $table = 'mst_kelas';

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

    function kosongkanWaliKelas($data)
    {
        $this->db->update($this->table, $data);
    }

    function getAllData()
    {
        $this->db->select('*, a.id_kelas');
        $this->db->join('mst_jurusan', 'a.id_jurusan = mst_jurusan.id_jurusan', 'left');
        $this->db->join('mst_guru', 'a.id_guru = mst_guru.id_guru', 'left');
        $this->db->order_by('a.nama_kelas');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function getDataById($id)
    {
        $this->db->select('*, a.id_kelas');
        $this->db->join('mst_jurusan', 'a.id_jurusan = mst_jurusan.id_jurusan', 'left');
        $this->db->join('mst_guru', 'a.id_guru = mst_guru.id_guru', 'left');
        $this->db->where('a.id_kelas', $id);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function getSudahada($kelas, $jurusan)
    {
        $this->db->select('*, a.id_kelas');
        $this->db->join('mst_jurusan', 'a.id_jurusan = mst_jurusan.id_jurusan', 'left');
        $this->db->where('a.nama_kelas', $kelas);
        $this->db->where('a.id_jurusan', $jurusan);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function getDataByIdWali($id_wali_kelas)
    {
        $this->db->select('*, a.id_kelas');
        $this->db->join('mst_jurusan', 'a.id_jurusan = mst_jurusan.id_jurusan', 'left');
        $this->db->join('mst_guru', 'a.id_guru = mst_guru.id_guru', 'left');
        $this->db->where('a.id_guru', $id_wali_kelas);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function getNaikTingkat($tingkat)
    {
        $this->db->select('*, a.id_kelas');
        $this->db->where('a.tingkat', $tingkat);
        $this->db->order_by('a.nama_kelas');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }
}
