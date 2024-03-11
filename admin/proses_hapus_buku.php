<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang diambil dari url
$BukuID  = $_GET['BukuID'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE from buku where BukuID ='$BukuID'");

// mengalihkan halaman kembali ke index.php
header("location:buku.php?pesan=hapus");
?>