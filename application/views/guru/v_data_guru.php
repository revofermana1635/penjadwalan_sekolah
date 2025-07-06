<?php $this->load->view('sniphets/header')?>
<?php $this->load->view('sniphets/menu')?>
<?php if  ($this->session->userdata('level')=='guru') {

  ?>
  <!-- Main Content -->
  <div class="page-wrapper">
    <div class="container-fluid pt-25">


     <!-- Row -->
     <div class="row">

       <div class="panel panel-default card-view">
        <div class="panel-wrapper collapse in">
         <div class="panel-body sm-data-box-1">
           <center><h2>Data Guru</h2></center>
           <div><?php echo $this->session->flashdata('msg'); ?><div>

            <nav class="navbar navbar-light bg-light">

              <br>
              <form method="GET" action="<?php echo base_url()?>index.php/guru/" class="form-inline">
                <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </nav>
            <div class="table-responsive">
              <table class="table table-striped table-bordered mb-0">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>NIP</center></th>
                    <th><center>Nama</center></th>
                    <th><center>Jenis Kelamin</center></th>
                    <th><center>Pendidikan</center></th>
                    <th><center>Alamat</center></th>
                    <th><center>No HP</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($guru)) { ?>
                    <tr> 
                      <td colspan="8">Data Belum Ada</td> 
                    </tr> 
                    <?php
                  } else {
                    $no = 0;
                    foreach ($guru as $rowguru) {
                      $no++;
                      ?> 
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $rowguru->nip ?></td>
                        <td><?php echo $rowguru->nama_guru ?></td>
                        <td><?php echo $rowguru->jenis_kelamin ?></td>
                        <td><?php echo $rowguru->pendidikan ?></td>
                        <td><?php echo $rowguru->alamat ?></td>
                        <td><?php echo $rowguru->no_ponsel ?></td>

                      </tr>
                    <?php }} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>


</div>
<!-- /Main Content -->

</div>
<?php } ?>
<?php if  (($this->session->userdata('level')=='kurikulum') || ($this->session->userdata('level')=='tu'))  {

  ?>

  <!-- Main Content -->
  <div class="page-wrapper">
    <div class="container-fluid pt-25">


     <!-- Row -->
     <div class="row">

       <div class="panel panel-default card-view">
        <div class="panel-wrapper collapse in">
         <div class="panel-body sm-data-box-1">
           <center><h2>Data Guru</h2></center>
           <div><?php echo $this->session->flashdata('msg'); ?><div>

            <nav class="navbar navbar-light bg-light">
              <a href="<?php echo base_url()?>index.php/guru/tambah"><button class="btn btn-primary" type="button">
                Tambah Guru
              </button></a>
              <a href="<?php echo base_url()?>index.php/guru/print"><button class="btn btn-primary" type="button">
                Print Data Guru
              </button></a>
              <br>
              <br>
              <form method="GET" action="<?php echo base_url()?>index.php/guru/" class="form-inline">
                <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
              </form>
            </nav>
            <div class="table-responsive">
              <table class="table table-striped table-bordered mb-0">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>NIP</center></th>
                    <th><center>Nama</center></th>
                    <th><center>Jenis Kelamin</center></th>
                    <th><center>Pendidikan</center></th>
                    <th><center>Alamat</center></th>
                    <th><center>No HP</center></th>
                    <th><center>Ubah & Hapus Data</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($guru)) { ?>
                    <tr> 
                      <td colspan="8">Data Belum Ada</td> 
                    </tr> 
                    <?php
                  } else {
                    $no = 0;
                    foreach ($guru as $rowguru) {
                      $no++;
                      ?> 
                      <tr>
                        <td><center><?php echo $no ?></center></td>
                        <td><center><?php echo $rowguru->nip ?></center></td>
                        <td><?php echo $rowguru->nama_guru ?></td>
                        <td><center><?php echo $rowguru->jenis_kelamin ?></center></td>
                        <td><center><?php echo $rowguru->pendidikan ?></center></td>
                        <td><?php echo $rowguru->alamat ?></td>
                        <td><center><?php echo $rowguru->no_ponsel ?></center></td>
                        <td><center>
                          <a class="btn btn-sm btn-primary" href="<?php echo base_url() ?>index.php/guru/edit/<?php echo $rowguru->id_guru ?>"><i class="fa fa-edit"></i> Edit</a>
                          <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>index.php/guru/hapus/<?php echo $rowguru->id_guru ?>"><i class="fa fa-trash"></i> Delete</a>    
                          </center>
                        </td>
                      </tr>
                    <?php }} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>


</div>
<!-- /Main Content -->

</div>
<?php }?>
<?php $this->load->view('sniphets/footer')?>