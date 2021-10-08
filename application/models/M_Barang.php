<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Barang extends CI_Model
{
    public function getdatabarang()
    {
        return $this->db->get('barang_master');
    }

    public function tambahbarang($data)
    {
        return $this->db->insert('barang_master', $data);
    }
}
