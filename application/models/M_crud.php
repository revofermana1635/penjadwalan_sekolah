<?php

class M_crud extends CI_Model {

 	function tampil_data($table){
		return $this->db->get($table);
	}

	function insert_data($data,$table){
			$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function upload(){
		$config['upload_path'] = './image/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '2048';
		$config['remove_space'] = TRUE;
	  
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('ijazah_depan')){ // Lakukan upload dan Cek jika proses upload berhasil
		  // Jika berhasil :
		  $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		  return $return;
		}else{
		  // Jika gagal :
		  $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		  return $return;
		}
	  }
	  
	  // Fungsi untuk menyimpan data ke database
	  public function save($upload){
		
		$data = array(
		  'ijazah_depan' => $upload['file']['file_name'],
		 //'nisn' => $nisn
		);
		
		$this->db->insert('siswa', $data);
	  }

}
    ?>