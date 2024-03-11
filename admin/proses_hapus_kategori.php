<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang diambil dari url
$KategoriID = $_GET['KategoriID'];

// menghapus data dari database
mysqli_query($koneksi," DELETE from kategoribuku where KategoriID='$KategoriID'");

// mengalihkan halaman kembali ke index.php
header("location:kategori.php?pesan=hapus");
?>
