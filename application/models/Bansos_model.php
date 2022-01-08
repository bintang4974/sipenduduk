<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bansos_model extends CI_Model
{
    public function get_data($table)
    {
        $this->db->order_by('kode_bansos', 'asc');
        return $this->db->get($table)->result();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_bansos', $data['id_bansos']);
        $this->db->update($table, $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

/* End of file User_model.php */
