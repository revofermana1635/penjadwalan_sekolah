<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataPelajaran extends CI_Controller {

    public function index(){
    $data['search'] = $this->input->get('search');
    $data['matapelajaran'] = $this->db->query("select * from mata_pelajaran where kode_mata_pelajaran like '%".$data['search']."%' or nama_mata_pelajaran like '%".$data['search']."%'")->result();
    $this->load->view('matapelajaran/v_data_matapelajaran',$data);
      }

      public function tambah(){
        $this->load->view('matapelajaran/v_add_matapelajaran');
          }

    public function do_insert(){
        $nama=$this->input->post('nama_mata_pelajaran');
        $kode_mata_pelajaran=$this->input->post('kode_mata_pelajaran');
        $tahun_ajaran=$this->input->post('tahun_ajaran');

        $data = array(
            'nama_mata_pelajaran' => $nama,
            'kode_mata_pelajaran' => $kode_mata_pelajaran,
            'tahun_ajaran' => $tahun_ajaran,
        );
    

    if (!empty($nama))
        {
            $this->m_crud->insert_data($data,'mata_pelajaran');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Insert Data</h4>
                    </div>');  
        redirect('matapelajaran');
    }
    
    else {
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Semua Nilai Harus Diisi</h4>
                    </div>');  
        redirect('matapelajaran');
    }

    }

    function hapus($id){
        $where = array('id_mata_pelajaran' => $id);
        $this->m_crud->hapus_data($where,'mata_pelajaran');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Hapus Data</h4>
                    </div>');  
        redirect('matapelajaran');
      }
    function edit($id){
		$where = array('id_mata_pelajaran' => $id);
        $data['matapelajaran'] = $this->m_crud->edit_data($where,'mata_pelajaran')->result();
		$this->load->view('matapelajaran/v_edit_matapelajaran', $data);
    }

    function update(){
        $id=$this->input->post('id');;
        $nama=$this->input->post('nama_mata_pelajaran');
        $kode_mata_pelajaran=$this->input->post('kode_mata_pelajaran');
        $tahun_ajaran=$this->input->post('tahun_ajaran');

        $data = array(
            'nama_mata_pelajaran' => $nama,
            'kode_mata_pelajaran' => $kode_mata_pelajaran,
            'tahun_ajaran' => $tahun_ajaran,
        );
    
        $where = array(
            'id_mata_pelajaran' => $id
        );
     
        $this->m_crud->update_data($where,$data,'mata_pelajaran');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Update Data</h4>
                    </div>');  
        redirect('matapelajaran');
        }
    
}
