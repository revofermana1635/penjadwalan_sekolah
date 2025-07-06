<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function index(){
    //$data['search'] = $this->input->get('search');
   // $data['profile'] = $this->db->query("select * from profile")->result();
   $username=$this->session->userdata('username');
   $data['query']=$this->db->query("select * from user where username='$username'")->result();
    $this->load->view('profile/v_data_profile',$data);
      }

      function update(){
        $id=$this->input->post('id');
        $password=$this->input->post('g_password');
        $pass=md5($password);

        $data = array(
            'password' =>$pass,
        );
    
        $where = array(
            'id_user' => $id
        );
     
        $this->m_crud->update_data($where,$data,'user');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Update Data</h4>
                    </div>');  
        redirect('profile');
        }

}