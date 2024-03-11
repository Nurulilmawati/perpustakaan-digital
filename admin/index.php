<?php
include 'header.php';
include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class ="container">
<div class="content mt-3">
<div class ="row">
	<?php
		include"../koneksi.php";
		$buku = mysqli_query($koneksi, "SELECT * FROM buku");
		$tampil = mysqli_num_rows($buku); 
	?>
	<?php
		include"../koneksi.php";
		$kategori = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
		$tampilkat = mysqli_num_rows($kategori); 
	?>
	<?php
		include"../koneksi.php";
		$user = mysqli_query($koneksi, "SELECT * FROM user");
		$tampiluser = mysqli_num_rows($user); 
	?>
	<?php
		include"../koneksi.php";
		$peminjam = mysqli_query($koneksi, "SELECT * FROM peminjaman");
		$tampilpeminjam = mysqli_num_rows($peminjam); 
	?>
	<div class ="col-sm-3">
		<div class ="card">
			<div class="card-body bg-warning text-center">
					<h3>Data Buku</h3>
					<h2><?php echo $tampil ?></h2>
					<hr>
					<a href="buku.php" class="btn btn-dark btn-sm">Lihat Data</a>
					</div>
				</div>
			</div>
		<div class ="col-sm-3">
				<div class ="card">
					<div class="card-body bg-danger text-center">
						<h3>Kategori Buku</h3>
						<h2><?php echo $tampilkat ?></h2>
						<hr>
						<a href="kategori.php" class="btn btn-dark btn-sm">Lihat Data</a>
						</div>
					</div>
				</div>
				<div class ="col-sm-3">
					<div class ="card">
						<div class="card-body bg-info text-center">
							<h3>Pengguna</h3>
							<h2><?php echo $tampiluser ?></h2>
							<hr>
							<a href="pengguna.php" class="btn btn-dark btn-sm">Lihat Data</a>
						</div>
					</div>
				</div>
				<div class ="col-sm-3">
					<div class ="card">
						<div class="card-body bg-primary text-center">
							<h3>Peminjaman</h3>
							<h2><?php echo $tampilpeminjam ?></h2>
							<hr>
							<a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Data</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class ="content mt-3">
		<div class ="card">
			<div class ="card-body">
			<p> Halo <b><?php echo $_SESSION['Username']; ?></b>Anda telah login sebagai <b><?php echo $_SESSION['level'];?></b></p>
			</p>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>