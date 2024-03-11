<?php
include 'header.php';
include 'navbar.php';
?>
<?php
include '../koneksi.php';
$UserID = $_GET['UserID'];
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE UserID ='$UserID'");
while($d = mysqli_fetch_array($data)){
    ?>
    <div class="content mt-3">
        <div class="card">
            <div class="card-body">
                <form action="proses_update_pengguna.php" method="post" >
                    <div class="form-group">
                        <label>UserID</label>
                        <input type="text" class="form-control" value="<?php echo $d['UserID']; ?>" name= "UserID">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" value="<?php echo $d['Username']; ?>" name= "Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" value="<?php echo $d['Password']; ?>" name= "Password">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="<?php echo $d['Email']; ?>" name="Email">
                    </div>
                    <div class="form-group">
                        <label>NamaLengkap</label>
                        <input type="text" class="form-control" value="<?php echo $d['NamaLengkap']; ?>" name="NamaLengkap">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" value="<?php echo $d['Alamat']; ?>" name="Alamat">
                    </div>
                    <div class="form-group">
                        <label>level</label>
                        <input type="text" class="form-control" value="<?php echo $d['level']; ?>" name="level">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary btn-sm mt-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php
include 'footer.php';
?>