<section class="content-header">
    <h1>Add<small>Mata Kuliah</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-home"></i>home</a></li>
        <li class="active">Mata Kuliah</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-user.php?page=master-data-matakuliah" class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
							<div class="form-group">
								<label class="col-sm-3 control-label">Kode Mata Kuliah</label>
								<div class="col-sm-7">
									<input type="text" name="id" class="form-control" maxlength="10">
								</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Mata Kuliah</label>
								<div class="col-sm-7">
									<input type="text" name="mk" class="form-control" maxlength="64">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">sks</label>
								<div class="col-sm-7">
									<input type="text" name="sks" class="form-control" maxlength="12">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Jurusan/Semester/Kelas</label>
								<div class="col-sm-7">
									<input type="text" name="jurusan" class="form-control" maxlength="20">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Hari</label>
								<div class="col-sm-7">
									<input type="text" name="hari" class="form-control" maxlength="10">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Pukul</label>
								<div class="col-sm-7">
									<input type="text" name="pukul" class="form-control" maxlength="20">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Ruang</label>
								<div class="col-sm-7">
									<input type="text" name="ruang" class="form-control" maxlength="10">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
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