<div class="register-box">
<?php
	if (isset($_GET['id_user'])) {
	$id_user	= $_GET['id_user'];
	}
	else{
		die ("Error. No ID Selected! ");	
	}
	
	include "dist/koneksi.php";
	$deactivate = "UPDATE tb_user SET aktif='N' WHERE id_user='$id_user'";
	$query = mysqli_query ($koneksi,$deactivate);		
		if($query){
		echo "<div class='register-logo'><b>Deactivate</b> User!</div>	
			<div class='register-box-body'>
				<p>Status user sekarang adalah <b>TIDAK AKTIF</b></p>
				<div class='row'>
					<div class='col-xs-8'></div>
					<div class='col-xs-4'>
						<div class='box-body box-profile'>
							<a class='btn btn-primary btn-block' href='home-admin.php?page=form-view-data-user'>OK</a>
						</div>
					</div>
				</div>
			</div>";
		}
?>
</div>