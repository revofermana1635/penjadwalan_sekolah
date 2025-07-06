<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  
    public function index(){
      $guru=$this->db->query("select * from guru");
      $data['guru']=$guru->num_rows();
      $kelas=$this->db->query("select * from kelas");
      $data['kelas']=$kelas->num_rows();
      $ruang=$this->db->query("select * from ruang");
      $data['ruang']=$ruang->num_rows();
      $matapelajaran=$this->db->query("select * from mata_pelajaran");
      $data['matapelajaran']=$matapelajaran->num_rows();
    $this->load->view('v_dashboard',$data);  
      }
}