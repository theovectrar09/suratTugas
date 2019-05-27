<section class="content-header">
    <h1>Add<small>Data Dosen</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-home"></i>home</a></li>
        <li class="active">Data Dosen</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-user.php?page=master-data-pegawai" class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">NIP</label>
								<div class="col-sm-7">
									<input type="text" name="nip" class="form-control" maxlength="12">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Dosen</label>
								<div class="col-sm-7">
									<input type="text" name="nama" class="form-control" maxlength="64">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">No. Telfon</label>
								<div class="col-sm-7">
									<input type="text" name="telfon" class="form-control" maxlength="12">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Alamat</label>
								<div class="col-sm-7">
									<textarea type="text" name="alamat" class="form-control" maxlength="512"></textarea>
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
<!-- datepicker -->
<script type="text/javascript" src="plugins/datepicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
	 $('.form_date').datetimepicker({
			language:  'id',
			weekStart: 1,
			todayBtn:  1,
	  autoclose: 1,
	  todayHighlight: 1,
	  startView: 2,
	  minView: 2,
	  forceParse: 0
		});
</script>