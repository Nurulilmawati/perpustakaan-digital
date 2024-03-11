<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$NamaKategori = $_POST['NamaKategori'];

//menginput data ke database
mysqli_query($koneksi,"insert into kategoribuku values('','$NamaKategori')");

header("location:kategori.php?pesan=simpan");

?>  