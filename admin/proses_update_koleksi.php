<?php

include '../koneksi.php';

$KategoriBukuID = $_POST['KategoriBukuID'];
$BukuID = $_POST['BukuID'];
$KategoriID = $_POST['KategoriID'];


mysqli_query($koneksi, "UPDATE kategoribuku_relasi SET BukuID='$BukuID',KategoriID='$KategoriID' WHERE KategoriBukuID='$KategoriBukuID' ");

header("location:koleksi.php?pesan=update");

?>