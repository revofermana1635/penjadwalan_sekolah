<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwalsiswa extends CI_Controller {

    public function index(){
    $data['search'] = $this->input->get('search');
    $data['jadwal'] = $this->db->query("SELECT jadwal.id_jadwal, mata_pelajaran.kode_mata_pelajaran, mata_pelajaran.nama_mata_pelajaran, guru.nip, guru.nama_guru, kelas.kode_kelas, kelas.nama_kelas, ruang.kode_ruang, ruang.nama_ruang, jadwal.jam_awal, jadwal.jam_selesai, jadwal.hari from jadwal JOIN mata_pelajaran on jadwal.kode_mata_pelajaran=mata_pelajaran.kode_mata_pelajaran join guru on jadwal.nip=guru.nip join kelas on jadwal.kode_kelas=kelas.kode_kelas join ruang on jadwal.kode_ruang=ruang.kode_ruang")->result();
    $this->load->view('jadwalsiswa/v_data_jadwalsiswa',$data);
      }
    }