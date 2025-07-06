<?php
$this->load->view('sniphets/header');
$this->load->view('sniphets/menu');
?>
<!-- Main Content -->
<div class="page-wrapper">
			<div class="container-fluid pt-25">
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-red">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter">
														<span class="counter-anim"><?php echo $guru?></span>
													</span>
													<span class="weight-500 uppercase-font txt-light block font-13">Data Guru</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-graduation-cap txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-yellow">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $kelas?></span></span>
													<span class="weight-500 uppercase-font txt-light block">Data Kelas</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-bars txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-green">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $ruang?></span></span>
													<span class="weight-500 uppercase-font txt-light block">Data Ruang</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-institution txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-blue">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $matapelajaran?></span></span>
													<span class="weight-500 uppercase-font txt-light block">Mata Pelajaran</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<i class="fa fa-wpforms txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-6 col-md-9 col-sm-9 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body sm-data-box-1">
									<div class="cus-sat-stat weight-500 txt-success text-center mt-5">
										<span class="text">Visi</span>
										<h5>Menjadi Lembaga yang Berkualitas, Berkarakter Atas Dasar Iman dan Taqwa</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-9 col-sm-9 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body sm-data-box-1">
									<div class="cus-sat-stat weight-500 txt-success text-center mt-5">
										<span class="text">Misi</span>
										<h6 class="text-justify">
											<li>Melaksanakan pembinaan akhlak yang dinamis secara intensif melalui kegiatan ke-Islaman</li>
											<li>Melaksanakan pembelajaran yang berkualitas dan dinamis yang didukung oleh tenaga pendidik yang profesional menuju manusia yang berkarakter.</li>
											<li>Menyiapkan peserta didik yang mampu bersaing di perguruan tinggi dan masyarakat.</li>
											<li>Menegakkan kedisiplinan pada semua komponen kependidikan</li>
											<li>Melaksanakan administrasi sekolah secara tertib.</li>
										</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
       
          
<?php
$this->load->view('sniphets/footer');
//$this->load->view('sniphets/menu');
?>