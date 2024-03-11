<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$Judul= $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];


mysqli_query($koneksi, "UPDATE buku SET Judul='$Judul',Penulis='$Penulis',Penerbit='$Penerbit',TahunTerbit='$TahunTerbit' WHERE BukuID='$BukuID' ");

//mengakihkan halaman kembali ke index.php
header("location:buku.php?pesan=update");

?>