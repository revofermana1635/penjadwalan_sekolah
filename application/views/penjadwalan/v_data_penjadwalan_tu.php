<?php if (($this->session->userdata('level')=='tu') || ($this->session->userdata('level')=='guru')){ ?> 
  <?php $this->load->view('sniphets/header')?>
  <?php $this->load->view('sniphets/menu')?>
  <div class="page-wrapper">
   <div class="container-fluid pt-25">


    <!-- Row -->
    <div class="row">

      <div class="panel panel-default card-view">
       <div class="panel-wrapper collapse in">
        <div class="panel-body sm-data-box-1">
          <div><?php echo $this->session->flashdata('msg'); ?><div>


           <center> <h2>Data Penjadwalan</h2></center>
           <form method="GET" action="<?php echo base_url()?>index.php/penjadwalan/" class="form-inline">
            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>

        <br>

        <div class="table-responsive">
          <table class="table table-striped table-bordered mb-0">
            <thead>
              <tr>
                <th><center>No</center></th>
                <th><center>Nama Pelajaran</center></th>
                <th><center>Nama Guru</center></th>
                <th><center>Nama Kelas</center></th>
                <th><center>Nama Ruang</center></th>
                <th><center>Jam Awal</center></th>
                <th><center>Jam Selesai</center></th>
                <th><center>Hari</center></th>
              </tr>
            </thead>
            <tbody>
              <?php if (empty($jadwal)) { ?>
                <tr> 
                  <td colspan="8">Data Belum Ada</td> 
                </tr> 
                <?php
              } else {
                $no = 0;
                foreach ($jadwal as $rowjadwal) {
                  $no++;
                  ?> 
                  <tr>
                    <td><center><?php echo $no ?></center></td>
                    <td><?php echo $rowjadwal->nama_mata_pelajaran ?></td>
                    <td><?php echo $rowjadwal->nama_guru ?></td>
                    <td><center><?php echo $rowjadwal->nama_kelas ?></center></td>
                    <td><center><?php echo $rowjadwal->nama_ruang ?></center></td>
                    <td><center><?php echo $rowjadwal->jam_awal ?></center></td>
                    <td><center><?php echo $rowjadwal->jam_selesai ?></center></td>
                    <td><center><?php echo $rowjadwal->hari ?></center></td>
                  </tr>
                <?php }} ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <?php $this->load->view('sniphets/footer')?>
      <?php } ?>