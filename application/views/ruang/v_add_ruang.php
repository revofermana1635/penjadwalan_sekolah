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
										<form action="<?php echo base_url()?>index.php/ruang/do_insert" method="POST">
											<div class="form-body">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Tambah Data Ruang</h6>
												<hr class="light-grey-hr"/>
												<div class="row">

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Kode Ruang</label>
															<input type="text" class="form-control" name="kode_ruang" placeholder="R-X-TKJ">
															<span class="help-block">Isi Kode Kelas</span> 
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Ruang</label>
															<input type="text" class="form-control" name="nama_ruang" placeholder="X TKJ">
															<span class="help-block">Isi Nama Kelas</span> 
														</div>
													</div>
												</div>
												<br>	
												<input type="submit" class="btn btn-success" name="submit" value="Tambah"/>
												<a class="btn btn-primary" href="<?php echo base_url()?>index.php/ruang">
														<i class="#"></i>&nbsp;
														Kembali
													</a>
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