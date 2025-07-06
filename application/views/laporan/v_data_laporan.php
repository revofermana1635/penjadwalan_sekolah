<?php $this->load->view('sniphets/header')?>
<?php $this->load->view('sniphets/menu')?>

<!-- Main Content -->
<div class="page-wrapper">
	<div class="container-fluid pt-25">


		<!-- Row -->
		<div class="row">

			<div class="panel panel-default card-view">
				<div class="panel-wrapper collapse in">
					<div class="panel-body sm-data-box-1">
						<center>
							<h2>Laporan</h2>
						</center>

						<center>
							<a href="<?php echo base_url()?>index.php/guru/print">
								<button class="btn btn-primary" type="button">
									Print Data Guru
								</button>
							</a>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							<a href="<?php echo base_url()?>index.php/penjadwalan/print">
								<button class="btn btn-primary" type="button">
									Print Data Penjadwalan
								</button>
							</a>
						</center>
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