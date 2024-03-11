<?php 

include "../koneksi.php";

$KoleksiID = $_POST['KoleksiID'];
$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];


mysqli_query($koneksi, "UPDATE koleksipribadi SET UserID='$UserID',
BukuID='$BukuID' WHERE KoleksiID='$KoleksiID'");


header("Location:koleksipribadi.php?pesan=update");

?>