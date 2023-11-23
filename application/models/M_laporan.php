<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model 
{
    public function lap_harian($tanggal,$bulan,$tahun)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_transaksi');
        $this->db->join('tbl_transaksi', 'tbl_transaksi.no_order = tbl_detail_transaksi.no_order', 'left');
        $this->db->join('tbl_barang', 'tbl_barang.id_barang = tbl_detail_transaksi.id_barang', 'left');
        $this->db->where('DAY(tbl_transaksi.tgl_order)', $tanggal);
        $this->db->where('MONTH(tbl_transaksi.tgl_order)', $bulan);
        $this->db->where('YEAR(tbl_transaksi.tgl_order)', $tahun);
        return $this->db->get()->result();
    }
    
    public function lap_bulanan($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_transaksi');
        $this->db->join('tbl_transaksi', 'tbl_transaksi.no_order = tbl_detail_transaksi.no_order', 'left');
        $this->db->join('tbl_barang', 'tbl_barang.id_barang = tbl_detail_transaksi.id_barang', 'left');
        $this->db->where('MONTH(tbl_transaksi.tgl_order)', $bulan);
        $this->db->where('YEAR(tbl_transaksi.tgl_order)', $tahun);
        return $this->db->get()->result();
    }

    public function lap_tahunan($tahun)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_transaksi');
        $this->db->join('tbl_transaksi', 'tbl_transaksi.no_order = tbl_detail_transaksi.no_order', 'left');
        $this->db->join('tbl_barang', 'tbl_barang.id_barang = tbl_detail_transaksi.id_barang', 'left');
        $this->db->where('YEAR(tbl_transaksi.tgl_order)', $tahun);
        return $this->db->get()->result();
    }
}

/* End of file ModelName.php */
