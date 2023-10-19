<?php 

defined('BASEPATH') or exit('No direct script assess allowed');

class Admin extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_pesanan_masuk');
        
    }
    
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'total_barang' => $this->m_admin->total_barang(),
            'total_kategori' => $this->m_admin->total_kategori(),
            'isi' => 'v_admin',
         );

         $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }
    
    public function lokasi_toko()
    {
        
        $this->form_validation->set_rules(
            'nama_toko', 
            'Nama Toko', 
            'required',
            array('required' => '%s Harus Diisi !!!')
        );
        $this->form_validation->set_rules(
            'kota', 
            'Kota', 
            'required',
            array('required' => '%s Harus Diisi !!!')
        );
        $this->form_validation->set_rules(
            'alamat_kota', 
            'Alamat Kota', 
            'required',
            array('required' => '%s Harus Diisi !!!')
        );
        $this->form_validation->set_rules(
            'no_telpon', 
            'No Telpon', 
            'required',
            array('required' => '%s Harus Diisi !!!')
        );

        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'lokasi_toko',
                'lokasi_toko' => $this->m_admin->data_lokasi_toko(),
                'isi' => 'v_lokasi_toko',
             );
    
             $this->load->view('layout/v_wrapper_backend', $data, FALSE);

        }else{
            $data = array(
                'id' => 1,
                'lokasi' => $this->input->post('kota'),
                'nama_toko' => $this->input->post('nama_toko'),
                'alamat_kota' => $this->input->post('alamat_kota'),
                'no_telpon' => $this->input->post('no_telpon'),
            );
            $this->m_admin->edit($data);
            $this->session->set_flashdata('pesan', 'Alamat Toko Berhasil Diganti!');
            redirect('admin/lokasi_toko');
        }
    }

    public function pesanan_masuk()
    {
        $data = array(
            'title' => 'Pesanan Masuk',
            'pesanan' => $this->m_pesanan_masuk->pesanan(),
            'isi' => 'v_pesanan_masuk',
         );

         $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }
}
