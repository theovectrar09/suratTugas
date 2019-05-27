<section class="content-header">
    <h1>View<small>Data User</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Data User</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$tampilUser=mysqli_query($koneksi,"SELECT * FROM tb_user ORDER BY id_user");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID User</th>
								<th>Nama</th>
								<th>Password</th>
								<th>Hak Akses</th>
								<th>Aktif</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($user=mysqli_fetch_array($tampilUser)){
						?>	
							<tr>
								<td><?php echo $user['id_user'];?></td>
								<td><?php echo $user['nama_user'];?></td>
								<td><?php echo $user['password'];?></td>
								<td><?php echo $user['hak_akses'];?></td>
								<td><?php echo $user['aktif'];?></td>
								<td align="center">
								<a href="home-admin.php?page=pre-activated-deactivate-user&id_user=<?=$user['id_user'];?>&aktif=<?=$user['aktif'];?>" title="Activated OR Deactivate"><button class="btn btn-secondary">Edit </button></a>
								<a href="home-admin.php?page=delete-data-user&id_user=<?=$user['id_user'];?>"><button class="btn btn-danger">delete</button></a>
								</td>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
        </div>
	</div>
</section>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>