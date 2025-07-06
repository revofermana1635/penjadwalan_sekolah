<?php $this->load->view('sniphets/header')?>
<?php $this->load->view('sniphets/menu')?>

<?php if  (($this->session->userdata('level')=='kurikulum') || ($this->session->userdata('level')=='tu'))  {

	?>
	<div class="page-wrapper">
		<div class="container-fluid pt-25">


			<!-- Row -->
			<div class="row">
				
				<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body sm-data-box-1">
							<div><?php echo $this->session->flashdata('msg'); ?><div>

								<nav class="navbar navbar-light bg-light">
									<a href="<?php echo base_url()?>index.php/kelas/tambah"><button class="btn btn-primary" type="button">
										Tambah Kelas
									</button></a>


									<center> <h2>Data Kelas</h2></center>
									<div class="table-responsive">
										<table class="table table-striped table-bordered mb-0">
											<thead>
												<tr>
													<th><center>No</center></th>
													<th><center>Kode Kelas</center></th>
													<th><center>Ruang Kelas</center></th>
													<th><center>Ubah & Hapus Data</center></th>
												</tr>
											</thead>
											<tbody>
												<?php if (empty($kelas)) { ?>
													<tr> 
														<td colspan="8">Data Belum Ada</td> 
													</tr> 
													<?php
												} else {
													$no = 0;
													foreach ($kelas as $rowkelas) {
														$no++;
														?> 
														<tr>
															<td><center><?php echo $no ?></center></td>
															<td><?php echo $rowkelas->kode_kelas ?></td>
															<td><?php echo $rowkelas->nama_kelas ?></td>
															<td><center>
																<a class="btn btn-sm btn-primary" href="<?php echo base_url() ?>index.php/kelas/edit/<?php echo $rowkelas->id_kelas?>"><i class="fa fa-edit"></i> Edit</a>
																<a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>index.php/kelas/hapus/<?php echo $rowkelas->id_kelas?>"><i class="fa fa-trash"></i> Delete</a>    
																</center>
															</td>
														</tr>
													</tr>
												<?php }} ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						<?php } ?>

						<?php if  ($this->session->userdata('level')=='guru')  {

							?>
							<div class="page-wrapper">
								<div class="container-fluid pt-25">


									<!-- Row -->
									<div class="row">

										<div class="panel panel-default card-view">
											<div class="panel-wrapper collapse in">
												<div class="panel-body sm-data-box-1">
													<div><?php echo $this->session->flashdata('msg'); ?><div>

														<nav class="navbar navbar-light bg-light">



															<center> <h2>Data Kelas</h2></center>
															<div class="table-responsive">
																<table class="table table-striped table-sm">
																	<thead>
																		<tr>
																			<th>#</th>
																			<th>Kode Kelas</th>
																			<th>Ruang Kelas</th>

																		</tr>
																	</thead>
																	<tbody>
																		<?php if (empty($kelas)) { ?>
																			<tr> 
																				<td colspan="8">Data Belum Ada</td> 
																			</tr> 
																			<?php
																		} else {
																			$no = 0;
																			foreach ($kelas as $rowkelas) {
																				$no++;
																				?> 
																				<tr>
																					<td><?php echo $no ?></td>
																					<td><?php echo $rowkelas->kode_kelas ?></td>
																					<td><?php echo $rowkelas->nama_kelas ?></td>

																				</tr>
																			</tr>
																		<?php }} ?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												<?php } ?>
												<?php $this->load->view('sniphets/footer')?>