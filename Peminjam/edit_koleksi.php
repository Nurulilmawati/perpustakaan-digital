

<?php
include 'header.php';
include 'navbar.php';
?>

<?php
require_once "../koneksi.php";
if (isset($_GET['KoleksiID'])) {
    $KoleksiID = ($_GET["KoleksiID"]);
    $query = "SELECT * FROM koleksipribadi WHERE KoleksiID='$KoleksiID'";
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
$sql = "SELECT * FROM koleksipribadi
INNER JOIN user ON koleksipribadi.UserID = user.UserID
INNER JOIN buku ON koleksipribadi.BukuID = buku.BukuID WHERE 
KoleksiID='$KoleksiID'
";
$query = mysqli_query($koneksi, $sql);
while ($d_koleksi = mysqli_fetch_array($query)) {
?>
<div class="container pt-4 px-4">
    <div class="row g-4">
        <div class="col">
            <div class="bg-primary rounded h-100 p-4">
                <h6 class="mb-4">EDIT koleksipribadi</h6>
                <form method="POST" action="proses_update_koleksi.php">
                    <!-- Input tersembunyi untuk UserID dan BukuID -->
                    <input type="hidden" name="UserID" value="<?php echo $d_koleksi['UserID']; ?>">
                    <input type="hidden" name="BukuID" value="<?php echo $d_koleksi['BukuID']; ?>">
                    
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">PEMINJAM ID</label>
                        <div class="col-sm-10">
                            <input name="KoleksiID" type="text" class="form-control" value="<?php echo $d_koleksi['KoleksiID']; ?>" readonly>
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
                              <select class="form-control mt-2" name="BukuID">
                             <option><?php echo $d_koleksi['Judul'] ?></option>
                                <?php
                                 $data = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($d_buku = mysqli_fetch_array($data)) {
                                 echo '<option value="' . $d_buku['BukuID'] . '">' . $d_buku['Judul'] . '</option>';
                        }
                        ?>
                    </select>
                        </div>
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