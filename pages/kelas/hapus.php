<?php
$ID = $_GET['id'];

$SQL = "SELECT * FROM tbl_kelas WHERE id_kelas = '$ID'";
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
<h2>Proses Hapus Data Kelas</h2>
<p>Hi Apakah Anda Yakin Menghapus Data Kelas :</p>
<h4><b>|<?php echo $DATA['id_kelas'];  ?>|</b></h4>
<br>
<p>Tingkat Kelas :</p>
<h4><b>|<?php echo $DATA['tingkat'];  ?>|</b></h4>
<br>
<p>Nama Kelas :</p>
<h4><b>|<?php echo $DATA['nama_kelas'];  ?>|</b></h4>

<a href="index.php?page=Naik&poseidon=proses_hapus&id=<?php echo $ID ?>">| Hapus |</a>
<a href="index.php?page=Naik">Batal |</a>
<hr>

</body>
</html>