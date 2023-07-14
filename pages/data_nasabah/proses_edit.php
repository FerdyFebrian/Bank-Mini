<?php
$ID = mysqli_real_escape_string($KONEKSI,$_POST['IdNasabah']);
$NAMA = mysqli_real_escape_string($KONEKSI,$_POST['NamaNasabah']);
$JENKEL = mysqli_real_escape_string($KONEKSI,$_POST['JENKEL']);
$TEMPAT = mysqli_real_escape_string($KONEKSI,$_POST['TempatLahir']);
$TANGGAL = mysqli_real_escape_string($KONEKSI,$_POST['TanggalLahir']);
$ALAMAT = mysqli_real_escape_string($KONEKSI,$_POST['Alamat']);
$TELEPON = mysqli_real_escape_string($KONEKSI,$_POST['TelpNasabah']);
$PENGGENAL = mysqli_real_escape_string($KONEKSI,$_POST['JenisPengenal']);
$NO = mysqli_real_escape_string($KONEKSI,$_POST['Pengenal']);
$KELAS = mysqli_real_escape_string($KONEKSI,$_POST['Kelas']);

// echo $ID.$NAMA_KELAS.$TINGKAT.$PASSWORD.$TYPE_USER;

if ($ID == "" || $NAMA =="" || $JENKEL =="" || $TEMPAT == "" || $TANGGAL == "" || $ALAMAT == "" || $TELEPON == "" || $PENGGENAL == "" || $NO == "" || $KELAS == "") {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Silahkan isi semua kolom
             </center>
          </div>
          <meta http-equiv='refresh' content=2>";
 } else {
     $QUERY = mysqli_query($KONEKSI, "UPDATE tbl_nasabah SET 
     nama_nasabah = '$NAMA',
     jenkel = '$JENKEL',
     tempat_lahir = '$TEMPAT',
     tgl_lahir = '$TANGGAL',
     alamat_nasabah = '$ALAMAT',
     telp_nasabah = '$TELEPON',
     jenis_pengenal = '$PENGGENAL',
     no_pengenal = '$NO',
     id_kelas = '$KELAS' WHERE id_nasabah='$ID';") or die ("Gagal Melakukan Edit data".mysqli_connect_error($QUERY));
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
             </center>
         </div>
         ";
 }
?>
<meta http-equiv="refresh" content="1; url=index.php?page=Data_Nasabah">