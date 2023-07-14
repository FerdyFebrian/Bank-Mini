<?php
$ID_PENGGUNA = mysqli_real_escape_string($KONEKSI,$_POST['IdUser']);
$NAMA_PENGGUNA = mysqli_real_escape_string($KONEKSI,$_POST['NamaUser']);
$USERNAME = mysqli_real_escape_string($KONEKSI,$_POST['Username']);
$PASSWORD = mysqli_real_escape_string($KONEKSI,$_POST['Password']);
$TYPE_USER = mysqli_real_escape_string($KONEKSI,$_POST['UserLevel']);


if ($ID_PENGGUNA == "" || $NAMA_PENGGUNA =="" || $USERNAME =="" || $PASSWORD =="" || $TYPE_USER =="") {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Silahkan isi semua kolom
             </center>
          </div>
          <meta http-equiv='refresh' content=2>";
 } else {
     $QUERY = mysqli_query($KONEKSI, "INSERT INTO tbl_user SET 
     id_user = '$ID_PENGGUNA',
     nama_user = '$NAMA_PENGGUNA',
     username = '$USERNAME',
     password = '$PASSWORD',
     id_userlevel = '$TYPE_USER';") or die ("Gagal Melakukan Tambah data".mysqli_connect_error($QUERY));
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
             </center>
         </div>
         <meta http-equiv='refresh' content='2 url=index.php?page=pengguna'>
         ";
 }
?>
<meta http-equiv="refresh" content="1; url=index.php?page=Pengguna">