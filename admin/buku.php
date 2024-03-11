<?php
include 'header.php';
include 'navbar.php';
?>
<div class ="content mt-3">
		<div class ="card">
			<div class ="card-body">
			<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="simpan"){
					echo "<div class='alert alert-success'>Data berhasil disimpan !</div>";
				}
			}
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="update"){
					echo "<div class='alert alert-success'>Data berhasildi update !</div>";
				}
			}
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="hapus"){
					echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
				}
			}
			?>
			<a href="tambah_buku.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
						<th>Penulis</th>
						<th>Penerbit</th>
						<th>Tahun Terbit</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					 <?php 
					 include '../koneksi.php';
					 $no = 1;
					 $data = mysqli_query($koneksi,"select * from buku");
					 while($d = mysqli_fetch_array($data)){
					 ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['Judul']; ?></td>
							<td><?php echo $d['Penulis']; ?></td>
							<td><?php echo $d['Penerbit']; ?></td>
							<td><?php echo $d['TahunTerbit']; ?></td>
							<td>
								<a href="edit_buku.php?BukuID=<?php echo $d['BukuID']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
								<a href="proses_hapus_buku.php?BukuID=<?php echo $d['BukuID']; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>