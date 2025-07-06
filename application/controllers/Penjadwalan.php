<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjadwalan extends CI_Controller {

    public function index(){
    $data['search'] = $this->input->get('search');
    $data['jadwal'] = $this->db->query("SELECT jadwal.id_jadwal, mata_pelajaran.kode_mata_pelajaran, mata_pelajaran.nama_mata_pelajaran, guru.nip, guru.nama_guru, kelas.kode_kelas, kelas.nama_kelas, ruang.kode_ruang, ruang.nama_ruang, jadwal.jam_awal, jadwal.jam_selesai, jadwal.hari from jadwal JOIN mata_pelajaran on jadwal.kode_mata_pelajaran=mata_pelajaran.kode_mata_pelajaran join guru on jadwal.nip=guru.nip join kelas on jadwal.kode_kelas=kelas.kode_kelas join ruang on jadwal.kode_ruang=ruang.kode_ruang where nama_guru like '%".$data['search']."%' or nama_mata_pelajaran like '%".$data['search']."%'")->result();
    $this->load->view('penjadwalan/v_data_penjadwalan',$data);
      }

      public function tambah(){
        $data['search'] = $this->input->get('search');
        $data['matapelajaran'] = $this->db->query("select * from mata_pelajaran")->result();
        $data['ruang'] = $this->db->query("select * from ruang")->result();
        $data['kelas'] = $this->db->query("select * from kelas")->result();
        $data['guru'] = $this->db->query("select * from guru")->result();
        $this->load->view('penjadwalan/v_add_penjadwalan',$data);
          }

      public function do_insert(){
        $kode_mata_pelajaran=$this->input->post('kode_mata_pelajaran');
        $nip=$this->input->post('nip');
        $kode_kelas=$this->input->post('kode_kelas');
        $kode_ruang=$this->input->post('kode_ruang');
        $jam_awal=$this->input->post('jam_awal');
        $jam_selesai=$this->input->post('jam_selesai');
        $hari=$this->input->post('hari');
        $queryjam=$this->db->query("select * from jadwal where jam_awal='$jam_awal' AND jam_selesai='$jam_selesai' AND nip='$nip'");
        $cekjam=$queryjam->num_rows();
        $data = array(
            'kode_mata_pelajaran' => $kode_mata_pelajaran,
            'nip' => $nip,
            'kode_kelas' => $kode_kelas,
            'kode_ruang' => $kode_ruang,
            'jam_awal' => $jam_awal,
            'jam_selesai' => $jam_selesai,
            'hari' => $hari,
        );
    
    if ($cekjam>0){
       // $this->m_crud->insert_data($data,'jadwal');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Salah Memasukan Jadwal</h4>
                    </div>');  
        redirect('penjadwalan');
    }
    
    elseif (!empty($kode_mata_pelajaran))
        {
            $this->m_crud->insert_data($data,'jadwal');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Insert Data</h4>
                    </div>');  
        redirect('penjadwalan');
    }
    
    else {
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Semua Nilai Harus Diisi</h4>
                    </div>');  
        redirect('penjadwalan');
    }

    }

    function hapus($id){
        $where = array('id_jadwal' => $id);
        $this->m_crud->hapus_data($where,'jadwal');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Hapus Data</h4>
                    </div>');  
        redirect('penjadwalan');
      }
    function edit($id){
        $data['matapelajaran'] = $this->db->query("select * from mata_pelajaran")->result();
        $data['ruang'] = $this->db->query("select * from ruang")->result();
        $data['kelas'] = $this->db->query("select * from kelas")->result();
        $data['guru'] = $this->db->query("select * from guru")->result();
		$where = array('id_jadwal' => $id);
        $data['jadwal'] = $this->m_crud->edit_data($where,'jadwal')->result();
		$this->load->view('penjadwalan/v_edit_penjadwalan', $data);
    }

    function update(){
        $id=$this->input->post('id');;
        $kode_mata_pelajaran=$this->input->post('kode_mata_pelajaran');
        $nip=$this->input->post('nip');
        $kode_kelas=$this->input->post('kode_kelas');
        $kode_ruang=$this->input->post('kode_ruang');
        $jam_awal=$this->input->post('jam_awal');
        $jam_selesai=$this->input->post('jam_selesai');
        $hari=$this->input->post('hari');

        $data = array(
            'kode_mata_pelajaran' => $kode_mata_pelajaran,
            'nip' => $nip,
            'kode_kelas' => $kode_kelas,
            'kode_ruang' => $kode_ruang,
            'jam_awal' => $jam_awal,
            'jam_selesai' => $jam_selesai,
            'hari' => $hari,
        );
    
        $where = array(
            'id_jadwal' => $id
        );
     
        $this->m_crud->update_data($where,$data,'jadwal');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Update Data</h4>
                    </div>');  
        redirect('penjadwalan');
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
            $pdf->Cell(40,10,'Telp (021) 8900914');
            $pdf->SetFont('Arial','B',8);
            $pdf->Ln(5);
            $pdf->SetLineWidth(0);
            $pdf->Line(0,25,300,25);
            $pdf->SetX(120);
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(40,10,'Jadwal Mata Pelajaran SMA MARTIA BHAKTI',0,0,'C');
            $pdf->Ln(4);
             //Table
             $pdf->Ln(8);
             $pdf->SetFont('Arial','',8);
             $pdf->Cell(10,6,'No',1,0);
             $pdf->Cell(30,6,'Kode Mapel',1,0);
             $pdf->Cell(45,6,'Nama Mapel',1,0);
             $pdf->Cell(25,6,'NIP Guru',1,0);
             $pdf->Cell(30,6,'Nama Guru',1,0);
             $pdf->Cell(30,6,'Kelas',1,0);
             $pdf->Cell(30,6,'Ruangan',1,0);
             $pdf->Cell(30,6,'Jam Awal',1,0);
             $pdf->Cell(30,6,'Jam Selesai',1,0);
             $pdf->Cell(20,6,'Hari',1,1);
             $jadwal = $this->db->query("SELECT jadwal.id_jadwal, mata_pelajaran.kode_mata_pelajaran, mata_pelajaran.nama_mata_pelajaran, guru.nip, guru.nama_guru, kelas.kode_kelas, kelas.nama_kelas, ruang.kode_ruang, ruang.nama_ruang, jadwal.jam_awal, jadwal.jam_selesai, jadwal.hari from jadwal JOIN mata_pelajaran on jadwal.kode_mata_pelajaran=mata_pelajaran.kode_mata_pelajaran join guru on jadwal.nip=guru.nip join kelas on jadwal.kode_kelas=kelas.kode_kelas join ruang on jadwal.kode_ruang=ruang.kode_ruang")->result();
             $no=1;    
             foreach ($jadwal as $rowjadwal){
                $pdf->SetFont('Arial','',8);
                $pdf->Cell(10,6,$no++,1,0);
                $pdf->Cell(30,6,$rowjadwal->kode_mata_pelajaran,1,0);
                $pdf->Cell(45,6,$rowjadwal->nama_mata_pelajaran,1,0);
                $pdf->Cell(25,6,$rowjadwal->nip,1,0);
                $pdf->Cell(30,6,$rowjadwal->nama_guru,1,0);
                $pdf->Cell(30,6,$rowjadwal->nama_kelas,1,0);
                $pdf->Cell(30,6,$rowjadwal->nama_ruang,1,0);
                $pdf->Cell(30,6,$rowjadwal->jam_awal,1,0);
                $pdf->Cell(30,6,$rowjadwal->jam_selesai,1,0);
                $pdf->Cell(20,6,$rowjadwal->hari,1,1);  
             } 
             $pdf->Output();
          }
}
