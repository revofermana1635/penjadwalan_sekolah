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
          <nav class="navbar navbar-light bg-light">
            <a href="<?php echo base_url()?>index.php/ruang/tambah"><button class="btn btn-primary" type="button">
              Tambah Ruang
            </button></a>

            <center><h2>Data Ruang</h2></center>
            <div class="table-responsive">
              <table class="table table-striped table-bordered mb-0">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>Kode Ruang</center></th>
                    <th><center>Ruang</center></th>
                    <th><center>Ubah & Hapus Data</center></th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php if (empty($ruang)) { ?>
                    <tr> 
                      <td colspan="8">Data Belum Ada</td> 
                    </tr> 
                    <?php
                  } else {
                    $no = 0;
                    foreach ($ruang as $rowruang) {
                      $no++;
                      ?> 

                      <tr>
                        <td><center><?php echo $no ?></center></td>
                        <td><center><?php echo $rowruang->kode_ruang ?></center></td>
                        <td><?php echo $rowruang->nama_ruang ?></td>
                        <td><center>
                          <a class="btn btn-sm btn-primary" href="<?php echo base_url() ?>index.php/ruang/edit/<?php echo $rowruang->id_ruang ?>"><i class="fa fa-edit"></i> Edit</a>
                          <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>index.php/ruang/hapus/<?php echo $rowruang->id_ruang ?>"><i class="fa fa-trash"></i> Delete</a>
                          </center>
                        </td>
                      </tr>
                    <?php }} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <?php $this->load->view('sniphets/footer')?>