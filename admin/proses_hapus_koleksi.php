<?php
include "../koneksi.php";

$KategoriBukuID  = $_GET['KategoriBukuID  '];
mysqli_query($koneksi, "DELETE FROM  kategoribuku_relasi WHERE KategoriBukuID  ='$KategoriBukuID  ' ");

header("Location:koleksi.php?pesan=hapus");
?>