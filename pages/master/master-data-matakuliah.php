<section class="content-header">
    <h1>Input<small>Mata Kuliah</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Input Mata Kuliah</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
    $id         =$_POST['id'];    
	$mk 		=$_POST['mk'];
	$sks		=$_POST['sks'];
	$jur		=$_POST['jurusan'];
	$hari		=$_POST['hari'];
    $pukul		=$_POST['pukul'];
    $ruang		=$_POST['ruang'];

	include "dist/koneksi.php";
	$cekmk	=mysqli_num_rows (mysqli_query($koneksi,"SELECT id FROM tb_matakuliah WHERE id='$_POST[id]'"));
	
		if (empty($_POST['id']) || empty($_POST['sks'])) {
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
		else if($cekmk > 0) {
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
		$insert = "INSERT INTO tb_matakuliah (id, mk, sks, jurusan, hari, pukul, ruang) VALUES ('$id', '$mk', '$sks', '$jur', '$hari', '$pukul', '$ruang')";
		$query = mysqli_query ($koneksi,$insert);
		
		if($query){
			echo "<div class='register-logo'><b>Input Data</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Input Data Pegawai Berhasil</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-master-data-matakuliah' class='btn btn-success'>Next</button>
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