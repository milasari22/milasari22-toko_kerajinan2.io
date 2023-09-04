<?php 

defined('BASEPATH') or exit('No direct script assess allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'isi' => 'v_admin',
         );

         $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }
}
