<?php
$ID = $_GET['id'];
$sql = "SELECT COUNT(id_nasabah) FROM tbl_transaksi WHERE id_nasabah = '$ID'";
$result = mysqli_query($KONEKSI, $sql);
$count = mysqli_fetch_array($result)[0];
if ($count > 0) {
    echo "<h1><center>Data Transaksi tidak dapat dihapus</center></h1>
    <meta http-equiv='refresh' content='1 url=index.php?page=Data_Nasabah'>".mysqli_connect_error();
} else {
    $SQL = "DELETE FROM tbl_nasabah WHERE id_nasabah = '$ID'";
    mysqli_query($KONEKSI,$SQL);

    echo "<div class = 'alert alert-sucses'>
    <center>
        <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
    </center>
    </div>
    <meta http-equiv='refresh' content='1 url=index.php?page=Data_Nasabah'>
    ";    
}
?>