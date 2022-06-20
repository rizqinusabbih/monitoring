<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Model ini dipakai untuk API

class User_model extends CI_Model
{
    public $table = 'user';
    public function getUser($username)
    {
        $this->db->select('*, a.id_user');
        $this->db->where('username', $username);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    public function getDataByUsername($username)
    {
        $this->db->select('*, a.id_user');
        $this->db->join('mst_pegawai', 'a.id_pegawai = mst_pegawai.id_pegawai');
        $this->db->like('a.username', $username);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    public function create($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }

    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }

    public function getAllData()
    {
        $this->db->select('*, a.id_user');
        $this->db->order_by('a.id_user');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function getDataById($id)
    {
        $this->db->select('*, a.id_user');
        $this->db->where('a.id_user', $id);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    public function checkDuplicateData($where)
    {
        $this->db->where($where);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
}
