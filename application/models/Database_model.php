<?php
class Database_model extends CI_Model
{
    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_query($query)
    {
        return $this->db->query($query);
    }

    public function get_all($tabel)
    {
        return $this->db->get($tabel);
    }

    public function get_order($tabel, $kolom, $type)
    {
        $this->db->from($tabel);
        $this->db->order_by($kolom, $type);
        return $this->db->get();
    }

    public function delete($table, $where)
    {
        $this->db->delete($table, $where);
    }

    public function update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function insert_get($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        $this->session->set_userdata('last_id', $this->db->insert_id());
    }

    public function row_count($tabel, $where = "")
    {
        $this->db->select('*');
        $this->db->from($tabel);
        if ($where) {
            $this->db->where($where);
        }
        return $this->db->get()->num_rows();
    }
    public function row_counts($tabel)
    {
        $this->db->select('*');
        $this->db->from($tabel);
        return $this->db->get()->num_rows();
    }

    public function id_last_insert()
    {
        return $this->db->insert_id();
    }
}
