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
?>
