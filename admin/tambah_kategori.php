<?php
include "header.php";
include "navbar.php";
?>
<div class="content mt-3">
<div class="card-body">
            <form method="post" action="proses_simpan_kategori.php">
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="NamaKategori">
            </div>
                <div class="from=group">
                    <button type="submit" class="from-control btn-primary btn-sm mt-3">simpan</button>
                </div>
            </from>

        </div>

    </div>

</div>
<?php
include 'footer.php';
?>