<?php
$ID_KELAS = mysqli_real_escape_string($KONEKSI,$_POST['IdKelas']);
$TINGKAT = mysqli_real_escape_string($KONEKSI,$_POST['Tingkat']);
$NAMA_KELAS = mysqli_real_escape_string($KONEKSI,$_POST['Nama_Kelas']);

if ($ID_KELAS == "" || $TINGKAT =="" || $NAMA_KELAS =="" ) {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Silahkan isi semua kolom
             </center>
          </div>
          <meta http-equiv='refresh' content=2>";
 } else {
     $QUERY = mysqli_query($KONEKSI, "INSERT INTO tbl_kelas SET 
     id_kelas = '$ID_KELAS',
     tingkat = '$TINGKAT',
     nama_kelas = '$NAMA_KELAS';") or die ("Gagal Melakukan Tambah data".mysqli_connect_error($QUERY));
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
             </center>
         </div>
         <meta http-equiv='refresh' content='2 url=index.php?page=Naik'>
         ";
 }
?>
<meta http-equiv="refresh" content="1; url=index.php?page=Naik">