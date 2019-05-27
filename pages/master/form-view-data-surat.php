<section class="content-header">
    <h1>View<small>Surat Tugas</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Surat Tugas</li>
    </ol>
</section>
<?php
    include "dist/koneksi.php";
    $tampilPeg=mysqli_query($koneksi,"SELECT * FROM tb_surat ORDER BY id");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Jumlah Mata Kuliah</th>
                <th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($peg=mysqli_fetch_array($tampilPeg)){
            ?>	
							<tr>
                <td><?php echo $peg['nama'];?></td>
								<td>4</td>
                <td align="center">
								<a href="cetak-surat.php" title="Cetak"><button class="btn btn-success">Cetak</button></a>
								<a href="home-user.php?page=delete-data-user&id_user=<?=$user['id_user'];?>"><button class="btn btn-danger">delete</button></a>
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