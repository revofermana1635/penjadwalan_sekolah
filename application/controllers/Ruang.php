<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

    public function index(){
    $data['search'] = $this->input->get('search');
    $data['ruang'] = $this->db->query("select * from ruang where nama_ruang like '%".$data['search']."%'")->result();
    $this->load->view('ruang/v_data_ruang',$data);
      }

      public function tambah(){
        $this->load->view('ruang/v_add_ruang');
          }

    public function do_insert(){
        $nama=$this->input->post('nama_ruang');
        $kode=$this->input->post('kode_ruang');
        $data = array(
            'nama_ruang' => $nama,
            'kode_ruang' => $kode,
            //'alamat' => $alamat,
            //'jenis_kelamin' => $jenis_kelamin,
           // 'pendidikan' => $pendidikan,
        );
    

    if (!empty($nama))
        {
            $this->m_crud->insert_data($data,'ruang');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Insert Data</h4>
                    </div>');  
        redirect('ruang');
    }
    
    else {
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Semua Nilai Harus Diisi</h4>
                    </div>');  
        redirect('ruang');
    }

    }
    function hapus($id){
      $where = array('id_ruang' => $id);
      $this->m_crud->hapus_data($where,'ruang');
      $this->session->set_flashdata('msg', 
                  '<div class="alert alert-success">
                      <h4>Berhasil Hapus Data</h4>
                  </div>');  
      redirect('ruang');
    }
  function edit($id){
  $where = array('id_ruang' => $id);
      $data['ruang'] = $this->m_crud->edit_data($where,'ruang')->result();
  $this->load->view('ruang/v_edit_ruang', $data);
  }

  function update(){
    $nama=$this->input->post('nama_ruang');
    $kode=$this->input->post('kode_ruang');
    $id=$this->input->post('id');


    $data = array(
      'nama_ruang' => $nama,
      'kode_ruang' => $kode,
      //'alamat' => $alamat,
      //'jenis_kelamin' => $jenis_kelamin,
     // 'pendidikan' => $pendidikan,
  );
  
      $where = array(
          'id_ruang' => $id
      );
   
      $this->m_crud->update_data($where,$data,'ruang');
      $this->session->set_flashdata('msg', 
                  '<div class="alert alert-success">
                      <h4>Berhasil Update Data</h4>
                  </div>');  
      redirect('ruang');
      }
}
