<?php 

include "../koneksi.php";

$KoleksiID = $_GET['KoleksiID'];

mysqli_query($koneksi, "DELETE FROM koleksipribadi WHERE KoleksiID='$KoleksiID'");

header("Location:koleksipribadi.php?pesan=hapus")

?>