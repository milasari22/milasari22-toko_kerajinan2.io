<?php 

defined('BASEPATH') or exit('No direct script assess allowed');

class Kasir extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Transaksi Ofline',
            'isi' => 'v_kasir',
         );

         $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }
}
