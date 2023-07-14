<?php
$ID_KELAS = mysqli_real_escape_string ($KONEKSI,$_POST
['IdKelas']);
$TINGKAT = mysqli_real_escape_string ($KONEKSI,$_POST
['Tingkat']);
$NAMA_KELAS = mysqli_real_escape_string ($KONEKSI,$_POST
['Nama_Kelas']);


if ($ID_KELAS =="" || $TINGKAT =="" || $NAMA_KELAS =="") {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Proses Edit Gagal
             </center>
          </div>
          ";
}
else {
$QUERY = mysqli_query ($KONEKSI, "UPDATE tbl_kelas SET
    tingkat = '$TINGKAT',
    nama_kelas = '$NAMA_KELAS' WHERE id_kelas ='$ID_KELAS';") or die ("Gagal melakukan Update Data...!.mysqli_error($QUERY)");
    echo "<div class = 'alert alert-sucses'>
            <center>
                <strong>Edit Data Berhasil</strong> Halaman Akan di Redirect Otomatis
            </center>
        </div>
<meta http-equiv='refresh' content='1 url=index.php?page=Naik'>
";
}

?>