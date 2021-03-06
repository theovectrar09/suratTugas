<?php
session_start();
if(!isset($_SESSION['id_user'])){
    die("<b>Oops!</b> Access Failed.
		<p>Sistem Logout. Anda harus melakukan Login kembali.</p>
		<button type='button' onclick=location.href='index.php'>Back</button>");
}
if($_SESSION['hak_akses']!="User"){
    die("<b>Oops!</b> Access Failed.
		<p>Anda Bukan User.</p>
		<button type='button' onclick=location.href='index.php'>Back</button>");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SURTU</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="dist/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="dist/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
	<link rel="stylesheet" href="plugins/iCheck/square/blue.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="plugins/morris/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="plugins/datepicker/bootstrap-datetimepicker.min.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<script type="text/javascript" src="plugins/datatables/jquery.js"></script>
			
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="hold-transition skin-red fixed sidebar-mini">
<div class="wrapper">
	<header class="main-header">
		<a href="home-user.php" class="logo"><span class="logo-mini"><i class="fa fa-envelope"></i></span><span class="logo-lg"><b>SURTU</b></span></a>
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="hidden-xs"><?php echo $_SESSION['nama_user'] ?></span> &nbsp;<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li class="user-header">
								<img src='dist/img/profile/admin.png' class='img-circle' alt='User Image'>
								<p>Selamat Datang, <?php echo $_SESSION['nama_user'] ?><small><?php echo $_SESSION['hak_akses'] ?></small></p>
							<li class="user-body">
								<div class="row">
								</div>
							</li>
							<li class="user-footer">
								<div class="row">
								<div class="col-md-8">
								<h5>Tanggal <?php echo date("d-");echo date("m-");echo date("Y")?></h5>
								</div>
  							<div class="col-md-4">
								<a href="pages/login/act-logout.php"><button class="btn btn-danger">Log out</button></a>
								</div>
								</div>
							</li>

						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<aside class="main-sidebar">
		<section class="sidebar">
			<ul class="sidebar-menu">
				<li class="header">MENU UTAMA</li>
				<li class="treeview"><a href="home-user.php"><i class="fa fa-home"></i> <span>Home</span></i></a></li>
				<li class="treeview"><a href="#"><i class="fa fa-envelope"></i> <span>Surat Tugas</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="home-user.php?page=form-input-surat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i> Add Surat Tugas</a></li>
						<li><a href="home-user.php?page=form-view-data-surat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i> View Surat Tugas</a></li>
					</ul>
				</li>
				<li class="treeview"><a href="#"><i class="fa fa-user"></i> <span>Dosen</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="home-user.php?page=form-master-data-pegawai">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i> Add Dosen</a></li>
						<li><a href="home-user.php?page=form-view-data-pegawai">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i> View Dosen</a></li>
					</ul>
				</li>
				<li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>Mata Kuliah</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="home-user.php?page=form-master-data-matakuliah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i> Add Mata Kuliah</a></li>
						<li><a href="home-user.php?page=form-view-data-matakuliah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i> View Mata Kuliah</a></li>
					</ul>
				</li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<section class="content">
			<?php
				$page = (isset($_GET['page']))? $_GET['page'] : "main";
				switch ($page) {					
					case 'form-master-data-pegawai': include "pages/master/form-master-data-pegawai.php"; break;
					case 'form-master-data-matakuliah': include "pages/master/form-master-data-matakuliah.php"; break;
					case 'master-data-pegawai': include "pages/master/master-data-pegawai.php"; break;
					case 'master-data-matakuliah': include "pages/master/master-data-matakuliah.php"; break;
					case 'form-view-data-pegawai': include "pages/master/form-view-data-pegawai.php"; break;
					case 'form-view-data-matakuliah': include "pages/master/form-view-data-matakuliah.php"; break;
					// case 'cetak-surat': include "cetak-surat.php"; break;
					case 'form-view-data-surat': include "pages/master/form-view-data-surat.php"; break;
					case 'view-detail-data-pegawai': include "pages/master/view-detail-data-pegawai.php"; break;					
					case 'form-edit-data-pegawai': include "pages/master/form-edit-data-pegawai.php"; break;				
					case 'edit-data-pegawai': include "pages/master/edit-data-pegawai.php"; break;
					case 'delete-data-pegawai': include "pages/master/delete-data-pegawai.php"; break;
					case 'form-input-surat': include "pages/master/form-input-surat.php"; break;
					case 'input-surat': include "pages/master/input-surat.php"; break;
					default : include 'dashboard.php';	
				}
			?>
		</section>
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs"><b>Version</b> 1.0</div>
		Copyright &copy; 2019 SURTU. Telah dikerjakan oleh Theo & Haickal
	</footer>
</div>
	<!-- ./wrapper -->
	<!-- jQuery 2.1.4 -->
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.5 -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Morris.js charts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="plugins/morris/morris.min.js"></script>
	<!-- Sparkline -->
	<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="plugins/knob/jquery.knob.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>
</html>