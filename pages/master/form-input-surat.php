<section class="content-header">
    <h1>Form<small>Surat Tugas</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Form Surat Tugas</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-user.php?page=input-surat" class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">No.Surat</label>
								<div class="col-sm-7">
									<input type="text" name="id" class="form-control" maxlength="40">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Dosen</label>
								<div class="col-sm-7">
									<?php
										include "dist/koneksi.php";
										$sql = "SELECT * FROM tb_dosen";
										$data = mysqli_query($koneksi,$sql);        
										echo '<select name="nama" onchange="changeValue(this.value)" class="form-control">';    
										echo '<option value="" selected>Pilih Dosen</option>';    
										while ($row = mysqli_fetch_array($data)) {    
											echo '<option value="'.$row['nip'].' - '.$row['nama'].'">'. $row['nip'].' - '.$row['nama'].'</option>';    
										}    
                                        echo '</select>';
                                        
                                    ?>
                                </div>
                                    </div>
                                <div class="form-group">
								<label class="col-sm-3 control-label">Mata Kuliah</label>
								<div class="col-sm-7">
									<?php
										include "dist/koneksi.php";
										$sql = "SELECT * FROM tb_matakuliah";
                                        $data = mysqli_query($koneksi,$sql);        
										echo '<select name="mk" onchange="changeValue(this.value)" class="form-control">';    
										echo '<option value="">Pilih Mata Kuliah</option>';    
										while ($row = mysqli_fetch_array($data)) {    
											echo '<option value="'.$row['id'].' - '.$row['mk'].' - '.$row['sks'].' - '.$row['jurusan'].' - '.$row['hari'].' - '.$row['pukul'].' - '.$row['ruang'].'">'. $row['id'].' - '.$row['mk'].' - '.$row['sks'].' - '.$row['jurusan'].' - '.$row['hari'].' - '.$row['pukul'].' - '.$row['ruang'].'</option>';    
										}    
										echo '</select>';
									?>
                                </div>
                                    </div>
									<div class="form-group">
								<label class="col-sm-3 control-label">Mata Kuliah 2</label>
								<div class="col-sm-7">
									<?php
										include "dist/koneksi.php";
										$sql = "SELECT * FROM tb_matakuliah";
                                        $data = mysqli_query($koneksi,$sql);        
										echo '<select name="mk2" onchange="changeValue(this.value)" class="form-control">';    
										echo '<option value="">Pilih Mata Kuliah ke-2</option>';    
										while ($row = mysqli_fetch_array($data)) {    
											echo '<option value="'.$row['id'].' - '.$row['mk'].' - '.$row['sks'].' - '.$row['jurusan'].' - '.$row['hari'].' - '.$row['pukul'].' - '.$row['ruang'].'">'. $row['id'].' - '.$row['mk'].' - '.$row['sks'].' - '.$row['jurusan'].' - '.$row['hari'].' - '.$row['pukul'].' - '.$row['ruang'].'</option>';    
										}    
										echo '</select>';
									?>
                                </div>
                                    </div>
									<div class="form-group">
								<label class="col-sm-3 control-label">Mata Kuliah 3</label>
								<div class="col-sm-7">
									<?php
										include "dist/koneksi.php";
										$sql = "SELECT * FROM tb_matakuliah";
                                        $data = mysqli_query($koneksi,$sql);        
										echo '<select name="mk3" onchange="changeValue(this.value)" class="form-control">';    
										echo '<option value="">Pilih Mata Kuliah ke-3</option>';    
										while ($row = mysqli_fetch_array($data)) {    
											echo '<option value="'.$row['id'].' - '.$row['mk'].' - '.$row['sks'].' - '.$row['jurusan'].' - '.$row['hari'].' - '.$row['pukul'].' - '.$row['ruang'].'">'. $row['id'].' - '.$row['mk'].' - '.$row['sks'].' - '.$row['jurusan'].' - '.$row['hari'].' - '.$row['pukul'].' - '.$row['ruang'].'</option>';    
										}    
										echo '</select>';
									?>
                                </div>
                                    </div>
									<div class="form-group">
								<label class="col-sm-3 control-label">Mata Kuliah 4</label>
								<div class="col-sm-7">
									<?php
										include "dist/koneksi.php";
										$sql = "SELECT * FROM tb_matakuliah";
                                        $data = mysqli_query($koneksi,$sql);        
										echo '<select name="mk4" onchange="changeValue(this.value)" class="form-control">';    
										echo '<option value="">Pilih Mata Kuliah ke-4</option>';    
										while ($row = mysqli_fetch_array($data)) {    
											echo '<option value="'.$row['id'].' - '.$row['mk'].' - '.$row['sks'].' - '.$row['jurusan'].' - '.$row['hari'].' - '.$row['pukul'].' - '.$row['ruang'].'">'. $row['id'].' - '.$row['mk'].' - '.$row['sks'].' - '.$row['jurusan'].' - '.$row['hari'].' - '.$row['pukul'].' - '.$row['ruang'].'</option>';    
										}    
										echo '</select>';
									?>
                                </div>
                                    </div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="submit" name="save" value="save" class="btn btn-success">Save</button>
									<a href="home-user.php" type="button" class="btn btn-default">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
	</div>
</section>