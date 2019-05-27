<div class="register-box">
<?php
include "dist/koneksi.php";
if (isset($_GET['id_user'])) {
	$id_user = $_GET['id_user'];
	$query   = "SELECT * FROM tb_user WHERE id_user='$id_user'";
	$hasil   = mysqli_query($koneksi,$query);
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	
	if (!empty($id_user) && $id_user != "") {
		$delete = "DELETE FROM tb_user WHERE id_user='$id_user'";
		$sqldel = mysqli_query ($koneksi,$delete);
		
		if ($sqldel) {		
			echo "<div class='register-logo'><b>Delete</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Data Pegawai ".$id_user." Berhasil di Hapus</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-view-data-user' class='btn btn-success'>Next</button>
						</div>
					</div>
				</div>";		
		}
		else{
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";	
		}
	}
?>
</div>