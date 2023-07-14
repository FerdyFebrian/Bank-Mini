<?php 
$FOTO = @$_FILES['File_Foto']['tmp_name'];
$TARGET = '../images/pengguna/';
$GAMBAR =  @$_FILES['File_Foto']['name'];
$ID_PENGGUNA = mysqli_real_escape_string($KONEKSI,$_POST['IdUser']);

if ($GAMBAR == "" ) {
    echo "<div class = 'alert alert-sucses'>
    <center>
        <strong>Eror</strong> Halaman Akan di Redirect Otomatis
    </center>
</div>
";
} else {
    $UPATE_GAMBAR = move_uploaded_file($FOTO, $TARGET.$GAMBAR);
    if ($UPATE_GAMBAR) {
    $QUERY = mysqli_query($KONEKSI, "UPDATE tbl_user SET photo_user = '$GAMBAR' WHERE id_user = '$ID_PENGGUNA';") or die
    (mysqli_connect_error($QUERY));
    }
}

echo "<div class = 'alert alert-sucses'>
<center>
    <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
</center>
</div>
<meta http-equiv='refresh' content='1 url=index.php?page=Pengguna'>
";  
?>