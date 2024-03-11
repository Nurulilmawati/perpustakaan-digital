<?php
include 'header.php';
include 'navbar.php';

if (!isset($_SESSION['Username'])) {
    header("Location: login.php");
    exit();
}

?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="proses_pinjam.php" method="post">
                <div class="form-group">
                    <label>Pilih user</label>
                    <select class="form-control mt-2" name="UserID" disabled>
                        <?php
                        include "../koneksi.php";

                        // Mendapatkan UserID dari user yang sedang login
                        $loggedInUsername = $_SESSION['Username'];
                        $query = "SELECT * FROM user WHERE Username = '$loggedInUsername'";
                        $result = mysqli_query($koneksi, $query);

                        // Jika user ditemukan
                        if ($result && mysqli_num_rows($result) > 0) {
                            $d_user = mysqli_fetch_array($result);
                            echo '<option value="' . $d_user['UserID'] . '">' . $d_user['Username'] . '</option>';
                        }
                        ?>
                    </select>
                    <input type="hidden" name="UserID" value="<?php echo $d_user['UserID']; ?>">
                </div>
                <div class="form-group">
                    <label>Pilih Kategori</label>
                    <select class="form-control mt-2" name="BukuID">
                        <option>Silahkan Pilih</option>
                        <?php
                        $data = mysqli_query($koneksi, "SELECT * FROM buku");
                        while ($d_buku = mysqli_fetch_array($data)) {
                            echo '<option value="' . $d_buku['BukuID'] . '">' . $d_buku['Judul'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-floating mt-3 mb-3">
                    <input type="date" class="form-control" id="floatingInput" name="TanggalPeminjaman">
                    <label for="floatingInput">Tanggal Peminjaman</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" name="TanggalPengembalian">
                    <label for="floatingInput">Tanggal Pengembalian</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="StatusPeminjaman" id="">
                        <option value="Dipinjam">Dipinjam</option>
                        <option value="Dikembalikan">Dikembalikan</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="form-control btn btn-primary btn-sm mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
