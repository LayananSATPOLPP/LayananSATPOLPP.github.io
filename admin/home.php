<?php 
include '../config/koneksi.php';
$masyarakat = mysqli_query($koneksi, "SELECT * FROM masyarakat");
$jml_masyarakat = mysqli_num_rows($masyarakat);

$admin = mysqli_query($koneksi, "SELECT * FROM admin");
$jml_admin = mysqli_num_rows($admin);

$pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan");
$jml_pengaduan = mysqli_num_rows($pengaduan);

$tanggapan = mysqli_query($koneksi, "SELECT * FROM tanggapan");
$jml_tanggapan = mysqli_num_rows($tanggapan);
 ?>

<div class="container">
	<h3 class="mt-3">Dashboard</h3>
	<div class="row mt-3">
		<div class="col-md-3 mt-3">
			<div class="card">
				<div class="card-header bg-success text-light">Masyarakat</div>
				<div class="card-body"><?php echo $jml_masyarakat; ?> Orang</div>
			</div>
		</div>
		<div class="col-md-3 mt-3 ">
			<div class="card ">
				<div class="card-header bg-primary text-light">Pengaduan</div>
				<div class="card-body"><?php echo $jml_pengaduan; ?> Pengaduan</div>
			</div>
		</div>
		<div class="col-md-3 mt-3">
			<div class="card">
				<div class="card-header bg-warning text-light">Tanggapan</div>
				<div class="card-body"><?php echo $jml_tanggapan; ?> Tanggapan</div>
			</div>
		</div>
		<div class="col-md-3 mt-3">
			<div class="card">
				<div class="card-header bg-danger text-light">Petugas</div>
				<div class="card-body"><?php echo $jml_admin; ?> Petugas</div>
			</div>
		</div>
	</div>
</div>