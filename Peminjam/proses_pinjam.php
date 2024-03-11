<?php

include "../koneksi.php";

$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];
$TanggalPeminjaman = $_POST['TanggalPeminjaman'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$status_peminjaman = $_POST['status_peminjaman'];

// Query SQL untuk menyimpan data peminjaman
mysqli_query($koneksi, "INSERT INTO peminjaman (UserID, BukuID, TanggalPeminjaman, TanggalPengembalian, status_peminjaman) VALUES ('$UserID', '$BukuID', '$TanggalPeminjaman', '$TanggalPengembalian', '$status_peminjaman')"); 

header("Location: pinjam.php?pesan=simpan");

?>
