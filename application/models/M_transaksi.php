<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model 
{
    public function simpan_transaksi($data)
    {
        $this->db->insert('tbl_transaksi', $data);
    }

    public function simpan_detail_transaksi($data_detail)
    {
        $this->db->insert('tbl_detail_transaksi', $data_detail);
    }
}