<div class="register-box">
<?php
include "dist/koneksi.php";
if (isset($_GET['nip'])) {
	$nip = $_GET['nip'];
	$query   = "SELECT * FROM tb_user WHERE nip='$nip'";
	$hasil   = mysqli_query($koneksi,$query);
	$data    = mysqli_fetch_array($hasil);
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	
	if (!empty($nip) && $nip != "") {
		$delete = "DELETE FROM tb_pegawai WHERE nip='$nip'";
		$sqldel = mysqli_query ($koneksi,$delete);
		
		if ($sqldel) {		
			echo "<div class='register-logo'><b>Delete</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Data Pegawai ".$nip." Berhasil di Hapus</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-view-data-pegawai' class='btn btn-primary btn-block btn-flat'>Next >></button>
						</div>
					</div>
				</div>";		
		}
		else{
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";	
		}
	}
	mysqli_close($Open);
?>
</div>