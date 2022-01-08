<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_model extends CI_Model
{
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_penduduk');
        $this->db->join('tbl_bansos', 'tbl_bansos.id_bansos = tbl_penduduk.id_bansos', 'left');
        $this->db->join('tbl_vaksin', 'tbl_vaksin.id_vaksin = tbl_penduduk.vaksin_satu', 'left');
        $this->db->order_by('id_penduduk', 'desc');
        // $query = $this->db->query("SELECT * FROM tbl_penduduk, tbl_bansos.kode_bansos, tbl_vaksin.kode_vaksin
        //                             INNER JOIN tbl_bansos ON tbl_penduduk.id_bansos = tbl_bansos.id_bansos
        //                             INNER JOIN tbl_vaksin ON tbl_penduduk.vaksin_satu = tbl_vaksin.id_vaksin");
        return $this->db->get();
    }

    public function get_data_home($table)
    {
        $this->db->order_by('nama_penduduk', 'asc');
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_penduduk', $data['id_penduduk']);
        $this->db->update($table, $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_barang', $id)
            ->limit(1)
            ->get('tbl_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_data($id = null)
    {
        $query = $this->db->get_where('tbl_penduduk', ['id_penduduk' => $id])->row();
        return $query;
    }
}

/* End of file Barang_model.php */
