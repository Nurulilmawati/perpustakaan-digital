<?php 

include "../koneksi.php";

$PeminjamanID = $_GET['PeminjamanID'];

mysqli_query($koneksi, "DELETE FROM peminjaman WHERE PeminjamanID='$PeminjamanID'");

header("Location:pinjam.php?pesan=hapus")

?>