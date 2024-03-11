<?php

include '../koneksi.php';


$UserID = $_POST['UserID']; 
$BukuID = $_POST['BukuID'];


mysqli_query($koneksi,"INSERT INTO koleksipribadi values('','$UserID','$BukuID')");

header("location:koleksipribadi.php?pesan=simpan");

?>