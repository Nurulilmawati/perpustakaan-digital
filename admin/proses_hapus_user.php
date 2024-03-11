<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang diambil dari url
$UserID  = $_GET['UserID'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE from user where UserID ='$UserID'");

// mengalihkan halaman kembali ke index.php
header("location:pengguna.php?pesan=hapus");
?>