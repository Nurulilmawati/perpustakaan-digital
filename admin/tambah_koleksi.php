<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<form action="proses_simpan_koleksi.php" method="post">
				
				<div class="from-group">
					<label>Pilih Buku</label>
					<select class="from-control mt-2" name="BukuID">
						<option>Silahkan Pilih</option>
						<?php
						include "../koneksi.php";
						$data = mysqli_query($koneksi,"select * from buku");
						while($d_kategoribuku = mysqli_fetch_array($data)){ ?>
							<option value="<?php echo $d_kategoribuku['BukuID']; ?>">
							<?php echo $d_kategoribuku['Judul']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="from-group">
					<label>Pilih Buku</label>
					<select class="from-control mt-2" name="KategoriID">
						<option>Silahkan Pilih</option>
						<?php
						include "../koneksi.php";
						$data = mysqli_query($koneksi,"select * from kategoribuku");
						while($d_kategoribuku = mysqli_fetch_array($data)){ ?>
							<option value="<?php echo $d_kategoribuku['KategoriID']; ?>">
							<?php echo $d_kategoribuku['NamaKategori']; ?></option>
						<?php } ?>
					</select>
				</div>
				
				<div class="from-gruop">
					<button type="submit" name="submit" class="from-control btn btn-primary btn-sm mt-3">Simpan</button>
				</div>
			</from>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>
