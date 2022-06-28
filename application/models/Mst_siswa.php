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
        $this->db->where('a.status', 'aktif');
        $this->db->order_by('a.id_tahun_akademik', 'desc');
        $this->db->order_by('a.nis');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function getDataByStatus($status)
    {
        $this->db->select('*, a.id_siswa');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik', 'left');
        $this->db->where('a.status', $status);
        $this->db->where('is_aktif', 'aktif');
        $this->db->order_by('a.nis');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function getDataByTA($id_tahun_akademik)
    {
        $this->db->select('*, a.id_siswa');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik', 'left');
        $this->db->join('mst_kelas', 'a.id_kelas = mst_kelas.id_kelas', 'left');
        $this->db->join('mst_jurusan', 'mst_kelas.id_jurusan = mst_jurusan.id_jurusan', 'left');
        $this->db->where('a.id_tahun_akademik', $id_tahun_akademik);
        $this->db->order_by('a.id_tahun_akademik', 'desc');
        $this->db->order_by('a.nis');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function getDataByStatusTA($status, $id_tahun_akademik)
    {
        $this->db->select('*, a.id_siswa');
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik', 'left');
        $this->db->join('mst_kelas', 'a.id_kelas = mst_kelas.id_kelas', 'left');
        $this->db->join('mst_jurusan', 'mst_kelas.id_jurusan = mst_jurusan.id_jurusan', 'left');
        $this->db->where('a.status', $status);
        $this->db->where('a.id_tahun_akademik', $id_tahun_akademik);
        $this->db->order_by('a.id_tahun_akademik', 'desc');
        $this->db->order_by('a.nis');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function countAll()
    {
        return $this->db->get($this->table)->num_rows();
    }

    function countAllByStatus($status)
    {
        $this->db->select("COUNT(status) as $status");
        $this->db->where('status', $status);
        $query = $this->db->get($this->table . ' a', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function countAllAlumni()
    {
        $this->db->select("COUNT(a.id_siswa) as jml_alumni");
        $this->db->join('tahun_akademik', 'a.id_tahun_akademik = tahun_akademik.id_tahun_akademik', 'left');
        $this->db->select("tahun_akademik.id_tahun_akademik as id_tahun_akademik");
        $this->db->select("angkatan as angkatan");
        $this->db->where('status', 'lulus');
        $this->db->group_by('a.id_tahun_akademik');
        $query = $this->db->get($this->table . ' a');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }
}
