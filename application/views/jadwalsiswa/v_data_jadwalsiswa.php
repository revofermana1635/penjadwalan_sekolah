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
  <form method="GET" action="<?php echo base_url()?>index.php/jadwal/" class="form-inline">
    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
  
  <br>
          
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Kode Mata Pelajaran</th>
                  <th>Nama Pelajaran</th>
                  <th>NIP Guru</th>
                  <th>Nama Guru</th>
                  <th>Kode Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Kode Ruang</th>
                  <th>Nama Ruang</th>
                  <th>Jam Awal</th>
                  <th>Jam Selesai</th>
                  <th>Hari</th>
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
                  <td><?php echo $no ?></td>
                  <td><?php echo $rowjadwal->kode_mata_pelajaran ?></td>
                 <td><?php echo $rowjadwal->nama_mata_pelajaran ?></td>
                  <td><?php echo $rowjadwal->nip ?></td>
                  <td><?php echo $rowjadwal->nama_guru ?></td>
                  <td><?php echo $rowjadwal->kode_kelas ?></td>
                  <td><?php echo $rowjadwal->nama_kelas ?></td>
                  <td><?php echo $rowjadwal->kode_ruang ?></td>
                  <td><?php echo $rowjadwal->nama_ruang ?></td>
                  <td><?php echo $rowjadwal->jam_awal ?></td>
                  <td><?php echo $rowjadwal->jam_selesai ?></td>
                  <td><?php echo $rowjadwal->hari ?></td>
                </tr>
                <?php }} ?>
              </tbody>
            </table>
          </div>
      </div>
    </div>

   <?php $this->load->view('sniphets/footer')?>