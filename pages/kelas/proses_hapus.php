<?php
$ID=$_GET['id'];

$SQL="DELETE FROM `tbl_kelas` WHERE id_kelas='$ID'";

mysqli_query($KONEKSI,$SQL);

?>
<meta http-equiv="refresh" content="1; url=index.php?page=Naik">
