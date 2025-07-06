<?php $this->load->view('sniphets/header')?>
<?php $this->load->view('sniphets/menu')?>
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default card-view">
          <div class="panel-heading">
            <div class="clearfix"></div>
          </div>
          <div class="panel-wrapper collapse in">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-12 col-xs-12">
                  <div class="form-wrap">
                    <form action="<?php echo base_url()?>index.php/penjadwalan/do_insert" method="POST">
                      <div class="form-body">
                        <h6 class="txt-dark capitalize-font">
                          <i class="zmdi zmdi-account mr-10"></i>
                          Tambah Jadwal Pelajaran
                        </h6>
                        <hr class="light-grey-hr"/>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label mb-10">Nama Mata Pelajaran</label>
                              <select class="form-control" name="kode_mata_pelajaran">
                                <option>--Pilih--</option>
                                <?php foreach($matapelajaran as $rowmatapelajaran){
                                  ?>
                                  <option value="<?php echo $rowmatapelajaran->kode_mata_pelajaran?>"><?php echo $rowmatapelajaran->nama_mata_pelajaran?></option>
                                <?php } ?>
                              </select>
                              <span class="help-block">Isi Nama Mata Pelajaran</span> 
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label mb-10">Nama Guru</label>
                              <select class="form-control" name="nip">
                                <option>--Pilih--</option>
                                <?php foreach($guru as $rowguru){
                                  ?>
                                  <option><?php echo $rowguru->nip?></option>
                                <?php } ?>
                              </select>
                              <span class="help-block">Isi Nama Guru</span> 
                            </div>
                          </div>

                        </div>


                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label mb-10">Kelas</label>
                              <select class="form-control" name="kode_kelas">
                                <option>--Pilih--</option>
                                <?php foreach($kelas as $rowkelas){
                                  ?>
                                  <option value="<?php echo $rowkelas->kode_kelas?>"><?php echo $rowkelas->nama_kelas?></option>
                                <?php } ?>
                              </select>
                              <span class="help-block">Isi Kelas</span> 
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label mb-10">Ruang</label>
                              <select class="form-control" name="kode_ruang">
                                <option>--Pilih--</option>
                                <?php foreach($ruang as $rowruang){
                                  ?>
                                  <option value="<?php echo $rowruang->kode_ruang?>"><?php echo $rowruang->nama_ruang?></option>
                                <?php } ?>
                              </select>
                              <span class="help-block">Isi Ruang</span> 
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label mb-10">Jam Awal</label>
                              <select class="form-control" name="jam_awal">
                                <option>--Pilih--</option>
                                <option value="06:40:00">06:40</option>
                                <option value="06:55:00">06:55</option>
                                <option value="07:35:00">07:35</option>
                                <option value="08:10:00">08:10</option>
                                <option value="08:50:00">08:50</option>
                                <option value="09:30:00">09:30</option>
                                <option value="10:05:00">10:05</option>
                                <option value="10:45:00">10:45</option>
                                <option value="11:20:00">11:20</option>
                                <option value="12:30:00">12:30</option>
                                <option value="13:10:00">13:10</option>
                                <option value="13:50:00">13:50</option>
                                <option value="14:30:00">14:30</option>
                                <option value="15:10:00">15:10</option>
                              </select>
                              <span class="help-block">Isi Jam Awal</span> 
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label mb-10">Jam Selesai</label>
                              <select class="form-control" name="jam_selesai">
                                <option>--Pilih--</option>
                                <option value="06:55:00">06:55</option>
                                <option value="07:35:00">07:35</option>
                                <option value="08:10:00">08:10</option>
                                <option value="08:50:00">08:50</option>
                                <option value="09:30:00">09:30</option>
                                <option value="10:05:00">10:05</option>
                                <option value="10:45:00">10:45</option>
                                <option value="11:20:00">11:20</option>
                                <option value="12:30:00">12:30</option>
                                <option value="13:10:00">13:10</option>
                                <option value="13:50:00">13:50</option>
                                <option value="14:30:00">14:30</option>
                                <option value="15:10:00">15:10</option>
                              </select>
                              <span class="help-block">Isi Jam Awal</span> 
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label mb-10">Hari</label>
                              <select class="form-control" name="hari">
                                <option>--Pilih--</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                              </select>
                              <span class="help-block">Hari</span> 
                            </div>
                          </div>
                          <br>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="submit" class="btn btn-success" name="submit" value="Tambah"/>
                              <a class="btn btn-primary" href="<?php echo base_url()?>index.php/penjadwalan">Kembali</a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                    <?php $this->load->view('sniphets/footer')?>


