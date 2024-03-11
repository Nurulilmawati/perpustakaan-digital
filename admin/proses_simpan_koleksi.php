<?php

include '../koneksi.php';


$BukuID = $_POST['BukuID']; 
$KategoriID = $_POST['KategoriID'];


mysqli_query($koneksi,"INSERT INTO kategoribuku_relasi values('','$BukuID,'$KategoriID')");

header("location:koleksi.php?pesan=simpan");

?>