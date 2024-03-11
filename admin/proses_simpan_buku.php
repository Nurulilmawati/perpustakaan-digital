<?php
// koneksi database
include "../koneksi.php";

$Judul =$_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];

// meninput daa ke databas 
mysqli_query($koneksi,"INSERT INTO buku values('','$Judul','$Penulis','$Penerbit','$TahunTerbit')");

// mengalihkan halaman kembali ke index.php
header("location:buku.php?pesan+fagagal");
?>