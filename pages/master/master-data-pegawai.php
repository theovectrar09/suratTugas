<section class="content-header">
    <h1>Input<small>Data Dosen</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Input Data Dosen</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
	$nip		=$_POST['nip'];
	$nama		=$_POST['nama'];
	$telp		=$_POST['telfon'];
	$alamat		=$_POST['alamat'];
	
	include "dist/koneksi.php";
	$cekpegawai	=mysqli_num_rows (mysqli_query($koneksi,"SELECT nip FROM tb_dosen WHERE nip='$_POST[nip]'"));
	
		if (empty($_POST['nip']) || empty($_POST['nama'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-master-data-pegawai' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else if($cekpegawai > 0) {
		echo "<div class='register-logo'><b>Oops!</b> NIP Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan NIP Pegawai yang Anda masukan benar.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-master-data-pegawai' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else{
		$insert = "INSERT INTO tb_dosen (nip, nama,telfon, alamat) VALUES ('$nip', '$nama', '$telp', '$alamat')";
		$query = mysqli_query ($koneksi,$insert);
		
		if($query){
			echo "<div class='register-logo'><b>Input Data</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Input Data Pegawai Berhasil</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-master-data-pegawai' class='btn btn-danger btn-block btn-flat'>Next >></button>
						</div>
					</div>
				</div>";
		}
			else {
				echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
			}
		}
	}
?>
</div>