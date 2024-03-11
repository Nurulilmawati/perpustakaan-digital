<?php
session_start();

// cek apakah yang mengaksses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:../index.php?pesan=info_login");
}
?>
<p>Halo <b><?php echo $_SESSION['Username']; ?></b>Anda telah login sebagai <b><?php echo $_SESSION['level'];?></b></p>
<a href="../logout.php">LOGOUT</a>