<?php

class Mst_prestasi extends CI_Model
{

    var $table = 'mst_prestasi';

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
        $this->db->select('*, a.id_prestasi');
        $this->db->order_by('a.point', 'desc');
        $this->db->order_by('a.jenis_prestasi');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function getDataById($id)
    {
        $this->db->select('*, a.id_prestasi');
        $this->db->where('a.id_prestasi', $id);
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
}
