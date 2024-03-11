<?php
include 'header.php';
include 'navbar.php';

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
        echo "<script>alert('Data Peminjam ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjamn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-4 px-4">
        <div class="row g-4">
            <div class="col">
                <div class="bg-success rounded h-100 p-4">
                    <h6 class="mb-4">Edit Peminjaman</h6>
                    <form method="POST" action="proses_update_peminjam.php">
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">PEMINJAMAN ID</label>
                            <div class="col-sm-10">
                                <input name="PeminjamanID" type="text" class="form-control" value="<?php echo $d['PeminjamanID']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">ID USER</label>
                            <div class="col-sm-10">
                                <input name="UserID" type="text" class="form-control" required="" value="<?php echo $d['UserID']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">ID BUKU</label>
                            <div class="col-sm-10">
                                <input name="BukuID" type="text" class="form-control" required="" value="<?php echo $d['BukuID']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">TANGGAL PEMINJAMAN</label>
                            <div class="col-sm-10">
                                <input name="TanggalPeminjaman" type="text" class="form-control" required="" value="<?php echo $d['TanggalPeminjaman']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">TANGGAL PENGEMBALIAN</label>
                            <div class="col-sm-10">
                                <input name="TanggalPengembalian" type="text" class="form-control" required="" value="<?php echo $d['TanggalPengembalian']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">STATUS PEMINJAMAN</label>
                            <div class="col-sm-10">
                                <input name="StatusPeminjaman" type="text" class="form-control" required="" value="<?php echo $d['StatusPeminjaman']; ?>">
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>