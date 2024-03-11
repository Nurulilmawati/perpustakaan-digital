<?php
//koneksi database
require_once "../koneksi.php";

$PeminjamanID = $_GET["PeminjamanID"];
//mengambil buku_id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM peminjaman WHERE PeminjamanID='$PeminjamanID' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='peminjaman.php';</script>";
    }

?>