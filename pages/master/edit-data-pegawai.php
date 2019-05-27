<section class="content-header">
    <h1>Edit<small>Data Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Edit Data Pegawai</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['nip'])) {
	$nip = $_GET['nip'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$tampilPeg	= mysqli_query($koneksi,"SELECT * FROM tb_pegawai WHERE nip='$nip'");
	$hasil	= mysqli_fetch_array ($tampilPeg);
				
	if ($_POST['edit'] == "edit") {
		$nama		=$_POST['nama'];
		$telp		=$_POST['telfon'];
		$alamat		=$_POST['alamat'];
		
		$update= mysqli_query ($koneksi,"UPDATE tb_dosen SET nama='$nama', telfon='$telp', alamat='$alamat' WHERE nip='$nip'");
		if($update){
			echo "<div class='register-logo'><b>Edit</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Edit Data Pegawai ".$nip." Berhasil</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-view-data-pegawai' class='btn btn-success'>Next</button>
						</div>
					</div>
				</div>";
		}
		else {
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
		}
	}
?>
</div>