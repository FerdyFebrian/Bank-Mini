<?php
$ID = mysqli_real_escape_string($KONEKSI,$_POST['IdNasabah']);
$NAMA_NASABAH = mysqli_real_escape_string($KONEKSI,$_POST['NamaNasabah']);
$JENKEL = mysqli_real_escape_string($KONEKSI,$_POST['Jenkel']);
$TEMPAT_LAHIR = mysqli_real_escape_string($KONEKSI,$_POST['TempatLahir']);
$TGL_LAHIR = mysqli_real_escape_string($KONEKSI,$_POST['TanggalLahir']);
$ALAMAT_NASABAH = mysqli_real_escape_string($KONEKSI,$_POST['Alamat']);
$TELP_NASABAH = mysqli_real_escape_string($KONEKSI,$_POST['TelpNasabah']);
$JENIS_PENGENAL = mysqli_real_escape_string($KONEKSI,$_POST['JenisPengenal']);
$NO_PENGENAL = mysqli_real_escape_string($KONEKSI,$_POST['NoPengenal']);
$ID_KELAS = mysqli_real_escape_string($KONEKSI,$_POST['Kelas']);


if ($ID == "" || $NAMA_NASABAH =="" || $JENKEL =="" || $TEMPAT_LAHIR =="" || $TGL_LAHIR =="" || 
    $ALAMAT_NASABAH =="" || $TELP_NASABAH =="" || $JENIS_PENGENAL =="" || $NO_PENGENAL =="" || $ID_KELAS =="") {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Silahkan isi semua kolom
             </center>
          </div>
          <meta http-equiv='refresh' content=2>";
 } else {
     $QUERY = mysqli_query($KONEKSI, "INSERT INTO tbl_nasabah SET 
     id_nasabah = '$ID',
     nama_nasabah = '$NAMA_NASABAH',
     jenkel = '$JENKEL',
     tempat_lahir = '$TEMPAT_LAHIR',
     tgl_lahir = '$TGL_LAHIR',
     alamat_nasabah = '$ALAMAT_NASABAH',
     telp_nasabah = '$TELP_NASABAH',
     jenis_pengenal = '$JENIS_PENGENAL',
     no_pengenal = '$NO_PENGENAL',
     id_kelas = '$ID_KELAS';") or die ("Gagal Melakukan Tambah data".mysqli_connect_error($QUERY));
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
             </center>
         </div>
         <meta http-equiv='refresh' content='2 url=index.php?page=Data_Nasabah'>
         ";
 }
?>
<meta http-equiv="refresh" content="1; url=index.php?page=Data_Nasabah">