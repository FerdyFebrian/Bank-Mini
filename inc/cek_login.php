<?php
@session_start();
include "koneksi.php";

// Fungsi untuk mendapatkan waktu saat ini dalam format yang sesuai
function getCurrentTime() {
    return date('Y-m-d H:i:s');
}

$USER = addslashes($_POST['Username']);
$PASS = addslashes($_POST['Password']);

$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER' AND password='$PASS'");

$HASIL = mysqli_num_rows($QUERY);
$DATA = mysqli_fetch_array($QUERY);

$id = $DATA['id_user'];
$waktu = getCurrentTime();
$ip = $_SERVER['REMOTE_ADDR'];
$keterangan = "User Login".' '.'-'.' ' .$DATA['nama_user'];
$keterangan1 = "User Gagal Login".'-'.' ' .$DATA['nama_user'];

if ($HASIL == 1) {

    $QUERY = mysqli_query($KONEKSI, "INSERT INTO tbl_userlog SET 
    id_user = '$id',
    waktu = '$waktu',
    ip_address = '$ip',
    keterangan = '$keterangan';");

    $_SESSION['username'] = $DATA ['username'];
    $_SESSION['id_userlevel'] = $DATA ['id_userlevel'];
    if ($DATA ['id_userlevel'] == "Admin") {header("location:../admin/index.php");}
    elseif ($DATA ['id_userlevel'] == "Teller") {header("location:../teller/index.php");}
    elseif ($DATA ['id_userlevel'] == "CSO") {header("location:../cso/index.php");}

    echo "Login Berhasil";
} else {

    echo "Login Gagal";
}
?>
