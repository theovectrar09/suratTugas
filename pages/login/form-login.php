<div class="login-box">
	<div class="login-logo">
		<a href="index.php"><b>LOGIN SURTU</b></a>
	</div>
	<div class="box box-primary">
		<div class="login-box-body">
			<p class="login-box-msg">Silahkan Masukan Username dan Password</p>
			<form action="index.php?page=act-login&op=in" method="POST">
				<div class="form-group has-feedback">
					<input type="text" name="id_user" class="form-control" placeholder="Username"><span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" placeholder="Password"><span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8"></div>
					<div class="col-xs-4">
					  <button type="sumbit" class="btn btn-success">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>