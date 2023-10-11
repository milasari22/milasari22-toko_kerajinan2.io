<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

    public function register($data)
    {
        $this->db->insert('tbl_pelanggann', $data);
        
    }

}

/* End of file M_pelanggan.php */
