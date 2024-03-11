<?php
include 'header.php';
include 'navbar.php';
?>
<?php
include '../koneksi.php';
$KategoriID =$_GET['KategoriID'];
$data = mysqli_query($koneksi, "SELECT * FROM kategoribuku WHERE KategoriID='$KategoriID'");
while($d = mysqli_fetch_array($data)){
    ?>
    <div class ="content mt-3">
        <div class ="card">
            <div class ="card-body">
                <form method ="post" action="proses_update_kategori.php">
                    <div class="form-group">
                        <label>Nama Kaategori</label>
                        <input type="hidden" name="KategoriID" value="<?php echo $d['KategoriID']; ?>">
                        <input type="text" class="form-control" value="<?php echo $d['NamaKategori']; ?>" name="NamaKategori">
</div>
<div class ="from-group">
    <button type="submit" class="from-control btn-primary btn-sm mt-3">Update</button>
                    </div>
                </from>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php
include 'footer.php';
?>
