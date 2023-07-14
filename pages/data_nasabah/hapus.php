<?php
$ID = $_GET['id'];

$SQL = "SELECT * FROM tbl_nasabah WHERE id_nasabah = '$ID'";
$QUERY = mysqli_query ($KONEKSI,$SQL) or die (mysqli_error());
$DATA = mysqli_fetch_array($QUERY);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>
</head>
<body>
<hr>
<h2><center>Proses Hapus Data Nasabah</center></h2>

<a href="index.php?page=Data_Nasabah&hera=proses_hapus&id=<?php echo $ID ?>">| Hapus |</a>
<a href="index.php?page=Data_Nasabah">Batal |</a>
<hr>

</body>
</html>