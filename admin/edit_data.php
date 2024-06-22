<?php 
include '../config/koneksi.php';
session_start();



if (isset($_POST['hapus_pengaduan'])) {
    $id_pengaduan = $_POST['id_pengaduan'];

    // Amankan input untuk mencegah SQL Injection
    $id_pengaduan = mysqli_real_escape_string($koneksi, $id_pengaduan);

    // Dapatkan data pengaduan yang spesifik
    $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
    $data = mysqli_fetch_array($query);

    if ($data) {
        $foto_path = '../assets/img/' . $data['foto'];
        if (is_file($foto_path)) {
            if (unlink($foto_path)) {
                mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
            }
        } else {
            mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
        }
    }

    // Pengalihan dilakukan setelah operasi selesai
    header('location:index.php');
    exit();
}

if (isset($_POST['hapus_tanggapan'])) {
	$id_tanggapan = $_POST['id_tanggapan'];
	$query = mysqli_query($koneksi, "DELETE FROM tanggapan WHERE id_tanggapan='$id_tanggapan'");
	if ($query) {
		
		echo "<script>
		alert('Data berhasil dihapus');
		window.location='index.php?page=tanggapan';
		</script>";
	}
}

if (isset($_POST['hapus_admin'])) {
	$id_admin = $_POST['id_admin'];
	$query = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin='$id_admin'");
	if ($query) {
		
		echo "<script>
		alert('Data berhasil dihapus');
		window.location='index.php?page=petugas';
		</script>";
	}
}

if (isset($_POST['hapus_masyarakat'])) {
	$nik = $_POST['nik'];
	$query = mysqli_query($koneksi, "DELETE FROM masyarakat WHERE nik='$nik'");
	if ($query) {
		
		echo "<script>
		alert('Data berhasil dihapus');
		window.location='index.php?page=masyarakat';
		</script>";
	}
}

 ?>