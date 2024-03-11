

<?php
include 'header.php';
include 'navbar.php';
?>

<?php
require_once "../koneksi.php";
if (isset($_GET['PeminjamanID'])) {
    $PeminjamanID = ($_GET["PeminjamanID"]);
    $query = "SELECT * FROM peminjaman WHERE PeminjamanID='$PeminjamanID'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
    $d = mysqli_fetch_assoc($result);
    if (!count($d)) {
        echo "<script>alert('Data Peminjam tidak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
$no = 1;
$sql = "SELECT * FROM peminjaman
INNER JOIN user ON peminjaman.UserID = user.UserID
INNER JOIN buku ON peminjaman.BukuID = buku.BukuID WHERE 
PeminjamanID='$PeminjamanID'
";
$query = mysqli_query($koneksi, $sql);
while ($d_koleksi = mysqli_fetch_array($query)) {
?>
<div class="container pt-4 px-4">
    <div class="row g-4">
        <div class="col">
            <div class="bg-primary rounded h-100 p-4">
                <h6 class="mb-4">EDIT PEMINJAMAN</h6>
                <form method="POST" action="proses_update_pinjam.php">
                    <!-- Input tersembunyi untuk UserID dan BukuID -->
                    <input type="hidden" name="UserID" value="<?php echo $d_koleksi['UserID']; ?>">
                    <input type="hidden" name="BukuID" value="<?php echo $d_koleksi['BukuID']; ?>">
                    
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">PEMINJAM ID</label>
                        <div class="col-sm-10">
                            <input name="PeminjamanID" type="text" class="form-control" value="<?php echo $d_koleksi['PeminjamanID']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">USER ID</label>
                        <div class="col-sm-10">
                            <input name="Username" type="text" class="form-control" value="<?php echo $d_koleksi['Username']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">BUKU ID</label>
                        <div class="col-sm-10">
                            <input name="Judul" type="text" class="form-control" value="<?php echo $d_koleksi['Judul']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">TanggalPeminjaman</label>
                        <div class="col-sm-10">
                            <input name="TanggalPeminjaman" type="text" class="form-control" value="<?php echo $d_koleksi['TanggalPeminjaman']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">TanggalPengembalian</label>
                        <div class="col-sm-10">
                            <input name="TanggalPengembalian" type="text" class="form-control" value="<?php echo $d_koleksi['TanggalPengembalian']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="StatusPeminjaman" id="">
                            <option value="Dipinjam" <?php echo ($d_koleksi['StatusPeminjaman'] == 'Dipinjam') ? 'selected' : ''; ?>>Dipinjam</option>
                            <option value="Dikembalikan" <?php echo ($d_koleksi['StatusPeminjaman'] == 'Dikembalikan') ? 'selected' : ''; ?>>Dikembalikan</option>
                        </select>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
}
?>