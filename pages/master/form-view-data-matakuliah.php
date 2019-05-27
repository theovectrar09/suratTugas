<section class="content-header">
    <h1>View<small>Mata Kuliah</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Mata Kuliah</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$tampilPeg=mysqli_query($koneksi,"SELECT * FROM tb_matakuliah ORDER BY id");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Mata Kuliah</th>
								<th>SKS</th>
								<th>Jurusan/Semester/Kelas</th>
                                <th>Hari</th>
                                <th>Pukul</th>
                                <th>Ruang</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($peg=mysqli_fetch_array($tampilPeg)){
						?>	
							<tr>
								<td><?php echo $peg['id'];?></td>
								<td><?php echo $peg['mk'];?></td>
								<td><?php echo $peg['sks'];?></td>
                                <td><?php echo $peg['jurusan'];?></td>
                                <td><?php echo $peg['hari'];?></td>
                                <td><?php echo $peg['pukul'];?></td>
                                <td><?php echo $peg['ruang'];?></td>
								<td class="tools" align="center"><a href="home-user.php?page=view-detail-data-pegawai&nip=<?=$peg['nip'];?>" title="view"><i class="fa fa-folder-open"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-user.php?page=form-edit-data-pegawai&nip=<?=$peg['nip'];?>" title="edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-user.php?page=delete-data-pegawai&nip=<?php echo $peg['nip'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
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