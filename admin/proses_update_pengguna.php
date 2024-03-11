<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$UserID = $_POST['UserID'];
$Username= $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$level = $_POST['level'];



mysqli_query($koneksi, "UPDATE user SET Username='$Username',Password='$Password',Email='$Email',NamaLengkap='$NamaLengkap'
,Alamat='$Alamat',level='$level' WHERE UserID ='$UserID' ");

//mengakihkan halaman kembali ke index.php
header("location:pengguna.php?pesan=update");

?>