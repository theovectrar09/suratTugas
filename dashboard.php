<section class="content-header">
   <h1>SURTU<small>Home</small></h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$surat=mysqli_query($koneksi,"SELECT * FROM tb_surat");
	$jmlsurat = mysqli_num_rows($surat);
	$pegawai=mysqli_query($koneksi,"SELECT * FROM tb_dosen");
	$jmlpegawai = mysqli_num_rows($pegawai);
	$mk=mysqli_query($koneksi,"SELECT * FROM tb_matakuliah");
	$jmlmk = mysqli_num_rows($mk);
?>
<section class="content">
    <div class="row">
		<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-aqua">
			<p class="small-box-footer">Surat Tugas</p>
				<div class="inner">
				<p>Total Surat Tugas</p>
					<h4><?=$jmlsurat?></h4>
				</div>
				<div class="icon">
					<i class="ion-android-mail"></i>
				</div>
			</div>
        </div>
        <div class="col-lg-3 col-xs-6">
			<div class="small-box bg-red">
			<p class="small-box-footer">Dosen</p>
				<div class="inner">
				<p>Total Dosen</p>
					<h4><?=$jmlpegawai?></h4>
				</div>
				<div class="icon">
					<i class="ion-android-add-contact"></i>
				</div>
			</div>
        </div>
				<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-green">
			<p class="small-box-footer">Mata Kuliah</p>
				<div class="inner">
				<p>Total Mata Kuliah</p>
					<h4><?=$jmlmk?></h4>
				</div>
				<div class="icon">
					<i class="ion-android-book"></i>
				</div>
			</div>
        </div>
    </div>
</section>