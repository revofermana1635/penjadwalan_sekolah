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
										<form action="<?php echo base_url()?>index.php/matapelajaran/do_insert" method="POST">
											<div class="form-body">
												<h6 class="txt-dark capitalize-font">
													<i class="zmdi zmdi-account mr-10"></i>
													Tambah Mata Pelajaran
												</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Kode Mata Pelajaran</label>
															<input type="text" id="kode_mata_pelajaran" class="form-control" placeholder="MTK01-X" name="kode_mata_pelajaran">
															<span class="help-block">Isi Kode Mata Pelajaran</span> 
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Nama Mata Pelajaran</label>
															<input type="text" id="nama_mata_pelajaran" class="form-control" placeholder="Matematika" name="nama_mata_pelajaran">
															<span class="help-block">Isi Nama Mata Pelajaran</span> 
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Tahun Ajaran</label>
															<select name="tahun_ajaran" class="form-control">
																<option value="2023/2024">2023/2024</option>
																<option value="2024/2025">2024/2025</option>
															</select>
															<span class="help-block">Pilih Tahun Ajaran</span> 
														</div>
													</div>
												</div>
												<div class="form-actions mt-10">
													<input type="submit" class="btn btn-success" name="submit" value="Tambah"/>
													<a class="btn btn-primary" href="<?php echo base_url()?>index.php/matapelajaran">Kembali</a>
												</div>
											</form>
											
											<?php $this->load->view('sniphets/footer')?>