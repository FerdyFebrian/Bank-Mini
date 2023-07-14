<?php
$ID=$_GET['id'];

$SQL_GAMBAR = "SELECT * FROM tbl_user WHERE id_user='$ID'" or die("Gagal melakukan query!!!" . mysqli_error());
$HASIL = mysqli_query($KONEKSI, $SQL_GAMBAR);
$ROW = mysqli_fetch_array($HASIL);
$FILE = $ROW['photo_user'];

$SQL="DELETE FROM `tbl_user` WHERE id_user='$ID'";
mysqli_query($KONEKSI,$SQL);

if (file_exists("../images/pengguna/$FILE")) {
    unlink("../images/pengguna/$FILE");
}
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Proses Hapus Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pengguna</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Proses Hapus Data Pengguna</h3>
                    </div>
                        <div class="card-body">
                            <div class="form-group">
                                <h1 class="m-0">Proses Hapus Data Pengguna Berhasil Dilakukan</h1>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>



<meta http-equiv="refresh" content="1; url=index.php?page=Pengguna">
