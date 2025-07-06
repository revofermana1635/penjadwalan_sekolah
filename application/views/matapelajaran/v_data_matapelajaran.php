<?php $this->load->view('matapelajaran/v_data_matapelajaran_tu')?>
<?php if ($this->session->userdata('level')=='kurikulum') { ?> 
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
            <center><h2>Data Mata Pelajaran</h2></center>
            <nav class="navbar navbar-light bg-light">
              <a href="<?php echo base_url()?>index.php/matapelajaran/tambah"><button class="btn btn-primary" type="button">
                Tambah Mata Pelajaran
              </button></a>
              <br>
              <br>
              <form method="GET" action="<?php echo base_url()?>index.php/matapelajaran/" class="form-inline">
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
                    <th><center>Kode Mata Pelajaran</center></th>
                    <th><center>Nama Pelajaran</center></th>
                    <th><center>Tahun Ajaran</center></th>
                    <th><center>Ubah & Hapus Data</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($matapelajaran)) { ?>
                    <tr> 
                      <td colspan="8">Data Belum Ada</td> 
                    </tr> 
                    <?php
                  } else {
                    $no = 0;
                    foreach ($matapelajaran as $rowmatapelajaran) {
                      $no++;
                      ?> 
                      <tr>
                        <td><center><?php echo $no ?></center></td>
                        <td><?php echo $rowmatapelajaran->kode_mata_pelajaran ?></td>
                        <td><?php echo $rowmatapelajaran->nama_mata_pelajaran ?></td>
                        <td><center><?php echo $rowmatapelajaran->tahun_ajaran?></center></td>
                        <td><center>
                          <a class="btn btn-sm btn-primary" href="<?php echo base_url() ?>index.php/matapelajaran/edit/<?php echo $rowmatapelajaran->id_mata_pelajaran ?>"><i class="fa fa-edit"></i> Edit</a>
                          <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>index.php/matapelajaran/hapus/<?php echo $rowmatapelajaran->id_mata_pelajaran ?>"><i class="fa fa-trash"></i> Delete</a>    
                        </center></td>
                      </tr>
                    <?php }} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <?php $this->load->view('sniphets/footer')?>
          <?php } ?>