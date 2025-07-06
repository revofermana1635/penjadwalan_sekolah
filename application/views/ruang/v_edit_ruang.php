
<?php $this->load->view('sniphets/header')?>
<?php $this->load->view('sniphets/menu')?>
<?php foreach ($ruang as $roweditruang) {
	$nama=$roweditruang->nama_ruang;
	$kode=$roweditruang->kode_ruang;
	$id=$roweditruang->id_ruang;

}
?>

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
										<form action="<?php echo base_url()?>index.php/ruang/update" method="POST">
											<div class="form-body">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Edit Data Ruang</h6>
												<hr class="light-grey-hr"/>
												<div><?php echo $this->session->flashdata('msg'); ?><div>
													<div class="row">
														
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Kode Ruang</label>
																<input type="hidden" class="form-control" name="id" value="<?php echo $id?>">
																<input type="text" class="form-control" value="<?php echo $kode?>" name="kode_ruang">
																<span class="help-block">Isi Kode ruang</span> 
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Nama ruang</label>
																<input type="text" class="form-control" name="nama_ruang" value="<?php echo $nama?>">
																<span class="help-block">Isi Nama ruang</span> 
															</div>
														</div>
													</div>
													<br>	
													<input type="submit" class="btn btn-success" name="submit" value="Update"/>
													<a class="btn btn-primary" href="<?php echo base_url()?>index.php/ruang">
														<i class="#"></i>&nbsp;
														Kembali
													</a>
												</form>
											</div>

											<?php $this->load->view('sniphets/footer')?>