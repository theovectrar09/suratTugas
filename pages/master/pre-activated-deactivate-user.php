<div class="register-box">
<?php
	if (isset($_GET['id_user']) AND ($_GET['aktif'])) {
	$id_user	= $_GET['id_user'];
	$aktif 		= $_GET['aktif'];
	}
	else{
		die ("Error. No ID Selected! ");	
	}
	echo "<div class='register-logo'><b>Activated or Deactivate</b> User!</div>	
		<div class='register-box-body'>
		<div class='card'>
			<p>Silahkan tentukan status untuk user <b>$id_user</b></p>
			<p>Status sekarang aktif = <b>$aktif</b></p>
			</div>
			<div class='row'>
				<div class='col-xs-1'></div>
				<div class='col-xs-5'>
					<div class='box-body box-profile'>
						<a href='home-admin.php?page=activated-user&id_user=".$id_user."'><button class='btn btn-success'>Activated</button></a>
					</div>
				</div>
				<div class='col-xs-5'>
					<div class='box-body box-profile'>
						<a href='home-admin.php?page=deactivate-user&id_user=".$id_user."'><button class='btn btn-danger'>Deactivate</button></a>
					</div>
				</div>
				<div class='col-xs-1'></div>
			</div>
		</div>";
?>
</div>