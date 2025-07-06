<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function index(){
    $data['search'] = $this->input->get('search');
    $data['kelas'] = $this->db->query("select * from kelas where nama_kelas like '%".$data['search']."%'")->result();
    $this->load->view('kelas/v_data_kelas',$data);
      }

      public function tambah(){
        $this->load->view('kelas/v_add_kelas');
          }

    public function do_insert(){
        $nama=$this->input->post('nama_kelas');
        $kode=$this->input->post('kode_kelas');
        $data = array(
            'nama_kelas' => $nama,
            'kode_kelas' => $kode,
            //'alamat' => $alamat,
            //'jenis_kelamin' => $jenis_kelamin,
           // 'pendidikan' => $pendidikan,
        );
    

    if (!empty($nama))
        {
            $this->m_crud->insert_data($data,'kelas');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Insert Data</h4>
                    </div>');  
        redirect('kelas');
    }
    
    else {
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Semua Nilai Harus Diisi</h4>
                    </div>');  
        redirect('kelas');
    }

    }
    function hapus($id){
      $where = array('id_kelas' => $id);
      $this->m_crud->hapus_data($where,'kelas');
      $this->session->set_flashdata('msg', 
                  '<div class="alert alert-success">
                      <h4>Berhasil Hapus Data</h4>
                  </div>');  
      redirect('kelas');
    }
  function edit($id){
  $where = array('id_kelas' => $id);
      $data['kelas'] = $this->m_crud->edit_data($where,'kelas')->result();
  $this->load->view('kelas/v_edit_kelas', $data);
  }

  function update(){
    $nama=$this->input->post('nama_kelas');
    $kode=$this->input->post('kode_kelas');
    $id=$this->input->post('id');


    $data = array(
      'nama_kelas' => $nama,
      'kode_kelas' => $kode,
      //'alamat' => $alamat,
      //'jenis_kelamin' => $jenis_kelamin,
     // 'pendidikan' => $pendidikan,
  );
  
      $where = array(
          'id_kelas' => $id
      );
   
      $this->m_crud->update_data($where,$data,'kelas');
      $this->session->set_flashdata('msg', 
                  '<div class="alert alert-success">
                      <h4>Berhasil Update Data</h4>
                  </div>');  
      redirect('kelas');
      }
}
