<?php 

include "../koneksi.php";

$UlasanID = $_GET['UlasanID'];

mysqli_query($koneksi, "DELETE FROM ulasan_buku WHERE UlasanID='$UlasanID'");

header("Location:ulasan.php?pesan=hapus")

?>