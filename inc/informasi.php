<?php 
include "koneksi.php";

$QUERY_INFO = mysqli_query($KONEKSI, "SELECT * FROM tbl_informasi WHERE id_informasi ='1'"); 
$DATA_INFO = mysqli_fetch_array($QUERY_INFO);
?>