<?php $this->load->view('sniphets/header')?>
<?php $this->load->view('sniphets/menu')?>

<div class="page-wrapper">
	<div class="container-fluid pt-25">
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
										<form action="<?php echo base_url()?>index.php/guru/do_insert" method="POST">
											<div class="form-body">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-graduation-cap mr-10"></i>Tambah Data Guru</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Nomor Induk Pegawai</label>
															<input type="text" class="form-control" name="nip" placeholder="123456">
															<span class="help-block">Isi NIP Guru</span> 
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Nama Guru</label>
															<input type="text" class="form-control" name="nama" placeholder="Annisa Dwi Meiruwi">
															<span class="help-block">Isi Nama Guru</span> 
														</div>
													</div>
												</div>

												<div class="row">

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Jenis Kelamin</label>
															<select name="jenis_kelamin" class="form-control">
																<option value="Laki-Laki">Laki-Laki</option>
																<option value="Perempuan">Perempuan</option>
															</select>
															<span class="help-block">Pilih Jenis Kelamin</span> 
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Pendidikan</label>
															<select class="form-control" name="pendidikan">
																<option value="D3">D3</option>
																<option value="S1">S1</option>
																<option value="S2">S2</option>
															</select>
															<span class="help-block">Pilih Pendidika Terakhir guru</span> 
														</div>
													</div>

												</div>

												<div class="row">
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Alamat</label>
															<input type="text" class="form-control" name="alamat" placeholder="Jl. Megaregency">
															<span class="help-block">Isi Alamat Guru</span>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Nomor Ponsel</label>
															<input type="text" class="form-control" name="no_ponsel">
															<span class="help-block">Isi Nomor Ponsel Guru</span> 
														</div>
													</div>
													<!--/span-->
												</div>
												<br>	
												<div class="form-actions mt-10">
													<input type="submit" class="btn btn-success  mr-10" name="submit" value="Tambah"/>
													<a class="btn btn-primary" href="<?php echo base_url()?>index.php/guru">
														<i class="#"></i>&nbsp;
														Kembali
													</a>
												</div>
											</form>
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

		<?php $this->load->view('sniphets/footer')?>