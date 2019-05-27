<section class="content-header">
    <h1>Input<small>SPPD</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Input SPPD</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
	$id		            =$_POST['id'];
	$nama		        =$_POST['nama'];
	$mk	    	        =$_POST['mk'];
	$mk2	    	    =$_POST['mk2'];
	$mk3    	        =$_POST['mk3'];
	$mk4    	        =$_POST['mk4'];
	
		include "dist/koneksi.php";
		$cekno	=mysqli_num_rows (mysqli_query($koneksi,"SELECT id FROM tb_surat WHERE id='$_POST[id]'"));
	
		if (empty($_POST['id'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-input-sppd' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else if($cekno > 0) {
		echo "<div class='register-logo'><b>Oops!</b> No. SPPD Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan No. SPPD yang Anda masukan benar.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-input-sppd' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else{
		$insert = "INSERT INTO tb_surat (id, nama, mk, mk2, mk3, mk4) VALUES ('$id', '$nama', '$mk', '$mk2', '$mk3', '$mk4')";
		$query = mysqli_query ($koneksi,$insert);
		
			if($query){
				echo "<div class='register-logo'><b>Input Data</b> Successful!</div>	
					<div class='register-box-body'>
						<p>Input Data Surat Perintah Perjalanan Dinas Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-user.php?page=form-input-surat' class='btn btn-danger btn-block btn-flat'>Next >></button>
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