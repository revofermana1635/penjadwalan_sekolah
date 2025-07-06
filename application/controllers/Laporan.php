<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function index(){
    //$data['guru'] = $this->db->query("select * from guru where nama_guru like '%".$data['search']."%' or nip like '%".$data['search']."%'")->result();
    $this->load->view('laporan/v_data_laporan');
      }

    
}
