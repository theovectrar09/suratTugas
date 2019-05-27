<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="plugins/datepicker/bootstrap-datetimepicker.min.css">
<style>
body { 
	padding	: 10px;
	font-family: "Times New Roman";
}
.kop-surat{
	font-size :12px;
	font-family: "Times New Roman";
	border-bottom: 3px solid black;
}
.isi-surat-mid{
	padding-left :100px;
	font-family: "Times New Roman";
}
.tab{
	text-indent: 30px;
}
table, th, td {
  border: 1px solid black;
}
.head{
	font-size:12px;

}
.head-1{
	font-size:15px;

}
.bottomright {
float:right;
}
.bottomleft {
float:left;
}
</style>
</head>
<body>
<?php
    include "dist/koneksi.php";
	$tampilPeg=mysqli_query($koneksi,"SELECT * FROM tb_surat ORDER BY id");
	while($peg=mysqli_fetch_array($tampilPeg)){
            			
?>
	<div class="kop-surat">
	<img src="dist/img/uin.png" alt="" height="110px" align="left">
	<div>
	<p align="center"><b class="head">KEMENTERIAN AGAMA REPUBLIK INDONESIA</b>
	<br align="center"><b class="head">UNIVERSITAS ISLAM NEGERI(UIN)</b>
	<br align="center"><b class="head-1">SUNAN GUNUNG DJATI BANDUNG</b>
	<br align="center"><b class="head-1">FAKULTAS SAINS DAN TEKNOLOGI</b></p>
	<p align="center"><small>Jalan A.H. Nasution No.105 Cibiru - Bandung 40614 Telp. 022-7082938 Fax. 022-9248585 Website : http://fst.uinsgd.ac.id</small></p>
	</div>
	</div>
	<div class="isi-surat-top">
	<p>Nomer		: <?php echo $peg['id'] ?>
	<br>Lampiran		:
	<br>Perihal		:</p>
	</div>
	<div class="isi-surat-mid">
	<p>Kepada Yth.
	<br>Bapak/Ibu
	<br><?php echo $peg['nama'] ?>
	<br>Dosen Fakultas Sains dan Teknologi</p>
	<p>Assalamualaikum wr.wb</p>
	<p class="tab">Dengan ini kami sampaikan tugas/jadwal memberi kuliah pada semester genap tahun akademik tahun 2018/2019 yang mulai berlaku tanggal 4 febuari sampai dengan 25 mei 2019, adapun ketentuan pelaksanaanya
	sebagai berikut:</p>
	</div>

	<table align="center">
						<thead>
							<tr>
							<th>No</th>
							<th>Mata Kuliah</th>
							</tr>
						</thead>
						<tbody>	
						<tr>
						<td align="center">1</td>
                			<td><?php
											echo ''. $peg['mk']; echo "<br>";
									?>
									</td>
									</tr>
									<tr>
									<td align="center">2</td>	
									<td><?php
											echo ''. $peg['mk2']; echo "<br>";    
										?>
									</td>
									</tr>
									<tr>
									<td align="center">3</td>	
									<td><?php
											echo ''. $peg['mk3']; echo "<br>";    
										?>
									</td>
									</tr>
									<tr>
									<td align="center">4</td>	
									<td><?php
											echo ''. $peg['mk4']; echo "<br>";    
										?>
									</td>
									</tr>
                		<?php
							}
						?>
		</tbody>
	</table>
	<div class="isi-surat-mid">
	<p class="tab">Untuk ketertiban perkuliahan, Bapak/Ibu tolong memperhatikan hal-hal sebagai berikut: 
	<br>1. Dosen/Asisten berkewajiban menyelenggarakan tatap muka terjadwal sekurang-kurangnya 14 kali. 
	<br>2. Menyampaikan dan menyiapkan SAP kepada jurusan selambat-lambatnya tanggal 11 februari 2019. 
	<br>3. Sebelum memulai perkuliahan agar mengecek daftar mahasiswa yang berhak mengikuti kuliah. 
	<br>4. Sebelum memulai perkuliahan agar mengecek daftar mahasiswa yang berhak mengikuti kuliah. 
	</p>
	<p class="tab"> Demikian tugas ini kami sampaikan, untuk dilaksanakan sebagaimana mestinya. 
	<br>Wassalamualaikum wr. w.,</p>
	
	<div class="bottomright">
	<p align="left">Bandung, <?php echo date("d-");echo date("M-");echo date("Y")?> 
	<br>a.n Dekan,
	<br>Wakil Dekan Bidang Akademik
	<br>
	<br>
	<br>
	<br>Dr.H. Cecep Hidayat,Ir.MP. 
	<br>NIP. 1233418858584</p>
	</div>
	</div>

<script>
  window.print();
</script>
</body>
</html>