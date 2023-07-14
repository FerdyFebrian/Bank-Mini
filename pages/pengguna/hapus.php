<?php
$ID = $_GET['id'];

$SQL = "SELECT * FROM tbl_user WHERE id_user = '$ID'";
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
<h2>Proses Hapus Data Pengguna</h2>
<p>Hi Apakah Anda Yakin Menghapus Data Pengguna :</p>
<h4><b>|<?php echo $DATA['id_user'];  ?>|</b></h4>
<br>
<p>Nama Data Pengguna :</p>
<h4><b>|<?php echo $DATA['nama_user'];  ?>|</b></h4>
<br>
<p>Username Pengguna :</p>
<h4><b>|<?php echo $DATA['username'];  ?>|</b></h4>
<br>
<p>Jenis Data Pengguna :</p>
<h4><b>|<?php echo $DATA['password'];  ?>|</b></h4>
<br>
<p>Foto Data Pengguna :</p>
<h4><b>|<?php echo $DATA['photo_user'];  ?>|</b></h4>
<br><br>

<a href="index.php?page=Pengguna&hades=proses_hapus&id=<?php echo $ID ?>">| Hapus |</a>
<a href="index.php?page=Pengguna">Batal |</a>
<hr>

</body>
</html>