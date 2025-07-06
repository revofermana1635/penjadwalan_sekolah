<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function index(){
    $data['search'] = $this->input->get('search');
    $data['guru'] = $this->db->query("select * from guru where nama_guru like '%".$data['search']."%' or nip like '%".$data['search']."%'")->result();
    $this->load->view('guru/v_data_guru',$data);
      }

      public function tambah(){
        $this->load->view('guru/v_add_guru');
          }

    public function do_insert(){
        $nama=$this->input->post('nama');
        $nip=$this->input->post('nip');
        $alamat=$this->input->post('alamat');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $pendidikan=$this->input->post('pendidikan');
        $no=$this->input->post('no_ponsel');
        $pass="202cb962ac59075b964b07152d234b70";
        $level="guru";

        $data = array(
            'nama_guru' => $nama,
            'nip' => $nip,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'pendidikan' => $pendidikan,
            'no_ponsel' =>$no,
            'username' =>$nip,
        );
        $data1 = array(
            'username' =>$nip,
            'password' =>$pass,
            'level' =>$level,
        );
    

    if (!empty($nama))
        {
            $this->m_crud->insert_data($data1,'user');
            $this->m_crud->insert_data($data,'guru');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Insert Data</h4>
                    </div>');  
        redirect('guru');
    }
    
    else {
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Semua Nilai Harus Diisi</h4>
                    </div>');  
        redirect('guru');
    }

    }

    function hapus($id){
        $where = array('id_guru' => $id);
        $this->m_crud->hapus_data($where,'guru');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Hapus Data</h4>
                    </div>');  
        redirect('guru');
      }
    function edit($id){
		$where = array('id_guru' => $id);
        $data['guru'] = $this->m_crud->edit_data($where,'guru')->result();
		$this->load->view('guru/v_edit_guru', $data);
    }

    function update(){
        $id=$this->input->post('id');
        $nama=$this->input->post('nama');
        $nip=$this->input->post('nip');
        $alamat=$this->input->post('alamat');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $pendidikan=$this->input->post('pendidikan');
        $no=$this->input->post('no_ponsel');

        $data = array(
            'nama_guru' => $nama,
            'nip' => $nip,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'pendidikan' => $pendidikan,
            'no_ponsel' =>$no,
          //  'username' => $ip,
        );
    
        $where = array(
            'id_guru' => $id
        );
     
        $this->m_crud->update_data($where,$data,'guru');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Update Data</h4>
                    </div>');  
        redirect('guru');
        }

        public function print(){
            $pdf = new FPDF('L','mm',array(250,297));
            $pdf->AddPage();
            $pdf->Image('https://upload.wikimedia.org/wikipedia/id/f/f4/Logo_SMK_Puja_Bangsa.jpg',20,5,40,20);
            $pdf->SetX(120);
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(40,10,'SMA MARTIA BHAKTI',0,0,'C');
            $pdf->Ln(4);
            $pdf->SetX(103);
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(40,10,'Jl. Jend. Sudirman No.Km. 32 4, RT.007/RW.016, Kayuringin Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17144');
            $pdf->SetFont('Arial','',8);
            $pdf->Ln(4);
            $pdf->SetX(125);
            $pdf->Cell(40,10,'Telp (021) 8841844');
            $pdf->SetFont('Arial','B',8);
            $pdf->Ln(5);
            $pdf->SetLineWidth(0);
            $pdf->Line(0,25,300,25);
            $pdf->SetX(120);
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(40,10,'Data Guru SMA MARTIA BHAKTI',0,0,'C');
            $pdf->Ln(4);
             //Table
             $pdf->Ln(8);
             $pdf->SetX(40);
             $pdf->SetFont('Arial','',8);
             $pdf->Cell(10,6,'No',1,0);
             $pdf->Cell(30,6,'NIP Guru',1,0);
             $pdf->Cell(50,6,'Nama Guru',1,0);
             $pdf->Cell(30,6,'Jenis Kelamin',1,0);
             $pdf->Cell(30,6,'Pendidikan',1,0);
             $pdf->Cell(75,6,'Alamat',1,1);
             $guru = $this->db->query("select * from guru")->result();
             $no=1;    
             foreach ($guru as $rowguru){
                $pdf->SetX(40);
                $pdf->SetFont('Arial','',8);
                $pdf->Cell(10,6,$no++,1,0);
                $pdf->Cell(30,6,$rowguru->nip,1,0);
                $pdf->Cell(50,6,$rowguru->nama_guru,1,0);
                $pdf->Cell(30,6,$rowguru->jenis_kelamin,1,0);
                $pdf->Cell(30,6,$rowguru->pendidikan,1,0);
                $pdf->Cell(75,6,$rowguru->alamat,1,1);  
             } 
             $pdf->Output();
          }
    
}
