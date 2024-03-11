<?php

include '../koneksi.php';


$UserID = $_POST['UserID']; 
$BukuID = $_POST['BukuID'];
$Ulasan = $_POST['Ulasan'];
$Rating = $_POST['Rating'];


mysqli_query($koneksi,"INSERT INTO ulasanbuku values('','$UserID','$BukuID', '$Ulasan', '$Rating')");

header("location:ulasan.php?pesan=simpan");

?>