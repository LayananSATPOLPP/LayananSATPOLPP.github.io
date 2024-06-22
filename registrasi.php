<div class="row mt-3">
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="card-header bg-primary text-light">
				REGISTRASI
			</div>
			<div class="card-body">
				<form action=""  method="POST">
					<div class="mb-3">
						<label class="form-label">NIK</label>
						<input type="number" class="form-control" name="nik" placeholder="masukkan nik" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" placeholder="masukkan nama" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Username</label>
						<input type="text" class="form-control" name="username" placeholder="masukkan username" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" name="password" placeholder="masukkan password" required>
					</div>
					<div class="mb-3">
						<label class="form-label">No. Telp</label>
						<input type="number" class="form-control" name="telp" placeholder="masukkan No.telp" required>
					</div>				
				</div>
				<div class="card-footer">
					<button type="submit" name="kirim" class="btn btn-primary">DAFTAR</button>
					<a href="index.php?page=login" class="m-3">sudah punya akun? login disini</a>
				</div>
			</form>
		</div>
	</div>
</div>


<?php 
include 'config/koneksi.php';
if (isset($_POST['kirim'])) {
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$telp = $_POST['telp'];
	$level = 'masyarakat';

	$query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp','$level')");

	if ($query) {
		header('location:index.php?page=login');
	} 
}


 ?>
