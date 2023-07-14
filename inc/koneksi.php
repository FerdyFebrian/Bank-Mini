<?php
$SERVER = 'localhost';
$USERNAME = 'root';
$PASS = '';
$DATABASE = 'db_bankmini2122';

$KONEKSI = mysqli_connect($SERVER,$USERNAME,$PASS,$DATABASE);
if (!$KONEKSI) {
    echo "<br>Koneksi ke Database gagal bro...!".mysqli_connect_error();
}
?>