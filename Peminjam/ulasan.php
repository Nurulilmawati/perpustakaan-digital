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
			<a href="tambah_ulasan.php" class="btn btn-primary btn-sm mt-2">Tambah Koleksi</a>
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Judul Buku</th>
						<th>Ulasan</th>
						<th>Rating</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                <?php
								require_once "../koneksi.php";
								$no = 1;
								$loggedInUsername = $_SESSION['Username'];
								$sql = "SELECT * FROM ulasanbuku
                                        INNER JOIN user ON ulasanbuku.UserID = user.UserID
                                        INNER JOIN buku ON ulasanbuku.BukuID = buku.BukuID
                                        WHERE user.Username = '$loggedInUsername'";
								$query = mysqli_query($koneksi, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row['NamaLengkap']; ?></td>
										<td><?php echo $row['Judul']; ?></td>
										<td><?php echo $row['Ulasan']; ?></td>
										<td><?php echo $row['Rating']; ?></td>
										<td>
											<a href="proses_hapus_ulasan.php?UlasanID=<?php echo $row["UlasanID"]; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
										</td>
									</tr>

								<?php
								}
								?>
				</tbody>
			</table>
		</div>
	</div>
</div>