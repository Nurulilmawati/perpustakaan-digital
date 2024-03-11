<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$NamaKategori = $_POST['NamaKategori'];

//menginput data ke database
mysqli_query($koneksi, "INSERT INTO kategoribuku values('','$NamaKategori')");

//mengalihkan halaman kembali ke index.php
header("location:kategori.php?pesan=simpan");

?>