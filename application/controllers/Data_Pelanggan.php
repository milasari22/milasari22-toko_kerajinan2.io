<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data_pelanggan');
    }

    public function index($offset = 0)
    {
        $data = array(
            'title' => 'Data Pelanggan',
            'user' => $this->m_data_pelanggan->get_all_data(),
            'isi' => 'v_data_pelanggan',
         );

         $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }
}