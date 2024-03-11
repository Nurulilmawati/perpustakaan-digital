<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari from
$KategoriID = $_POST['KategoriID'];
$NamaKategori =$_POST['NamaKategori'];

mysqli_query($koneksi,"UPDATE kategoribuku set NamaKategori='$NamaKategori' where KategoriID='$KategoriID'");

// mengalihka halaman kembali ke index.php
header("location:kategori.php?pesan=update");
?>