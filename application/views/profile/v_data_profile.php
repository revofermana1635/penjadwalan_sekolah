
<?php $this->load->view('sniphets/header')?>
<?php $this->load->view('sniphets/menu')?>
<?php foreach ($query as $roweditquery) {
    $username=$roweditquery->username;
	$password=$roweditquery->password;
	//$nip=$roweditquery->nip;
	//$jenis_kelamin=$roweditquery->jenis_kelamin;
	//$pendidikan=$roweditquery->pendidikan;
	$id=$roweditquery->id_user;
	//$no=$roweditquery->no_ponsel;

}
?>

<div class="page-wrapper">
			<div class="container-fluid pt-25">

				
				<!-- Row -->
				<div class="row">
				
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body sm-data-box-1">
  <div><?php echo $this->session->flashdata('msg'); ?><div>


 <center> <button class="btn btn-primary" type="button">
  Ganti Password</button></center>
 	<form action="<?php echo base_url()?>index.php/profile/update" method="POST">
 		<label>Masukan Password Baru</label>
         <input type="hidden" class="form-control" name="id" value="<?php echo $id?>">
 		<input type="text" class="form-control"  name="g_password">
 		<br>	
 		<input type="submit" class="btn btn-success" name="submit" value="Update"/>
 	</form>
  	</div>
    
   <?php $this->load->view('sniphets/footer')?>