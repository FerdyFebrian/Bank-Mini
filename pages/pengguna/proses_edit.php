<?php
$ID = mysqli_real_escape_string ($KONEKSI,$_POST
['IdUser']);
$NAMA_PENGGUNA = mysqli_real_escape_string ($KONEKSI,$_POST
['NamaUser']);
$USERNAME = mysqli_real_escape_string ($KONEKSI,$_POST
['Username']);
$PASSWORD = mysqli_real_escape_string ($KONEKSI,$_POST
['Password']);
$TYPE_USER = mysqli_real_escape_string ($KONEKSI,$_POST
['UserLevel']);


if ($ID =="" || $NAMA_PENGGUNA =="" || $USERNAME =="" || $PASSWORD =="" || $TYPE_USER =="" ) {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Proses Edit Gagal
             </center>
          </div>
          ";
}
else {
$QUERY = mysqli_query ($KONEKSI, "UPDATE tbl_user SET
    nama_user = '$NAMA_PENGGUNA',
    username = '$USERNAME',
    password = '$PASSWORD',
    id_userlevel = '$TYPE_USER' WHERE id_user ='$ID';") or die ("Gagal melakukan Update Data...!.mysqli_error($QUERY)");
    echo "<div class = 'alert alert-sucses'>
            <center>
                <strong>Edit Data Berhasil</strong> Halaman Akan di Redirect Otomatis
            </center>
        </div>
<meta http-equiv='refresh' content='1 url=index.php?page=Pengguna'>
";
}

?>