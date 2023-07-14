<?php
$NAMA_ORGANISASI1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Nama_Organisasi']);
$EMAIL1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Email']);
$ALAMAT1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Alamat']);
$TELEPON1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Telp']);
$KELURAHAN1 = mysqli_real_escape_string ($KONEKSI,$_POST
['kelurahan']);
$KECAMATAN1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Kecamatan']);
$KABUPATEN1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Kabupaten']);
$PROVINSI1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Provinsi']);
$PIMPINAN1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Pimpinan']);
$BENDAHARA1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Bendahara']);
$KODEPOS1 = mysqli_real_escape_string ($KONEKSI,$_POST
['Kode']);

if ($NAMA_ORGANISASI1 =="" || $EMAIL1 =="" || $ALAMAT1 =="" 
    || $TELEPON1 =="" || $KELURAHAN1 =="" || $KECAMATAN1 ==""
    || $KABUPATEN1 =="" || $PROVINSI1 ==""|| $PIMPINAN1 =="" 
    || $BENDAHARA1 =="" || $KODEPOS1 =="" ) {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Proses Edit Gagal
             </center>
          </div>
<meta http-equiv='refresh' content=2>";
}
else {
$QUERY = mysqli_query ($KONEKSI, "UPDATE tbl_informasi SET
    nama_organisasi = '$NAMA_ORGANISASI1',
    email_organisasi = '$EMAIL1',
    alamat_organisasi = '$ALAMAT1',
    telp_organisasi = '$TELEPON1',
    kel_organisasi = '$KELURAHAN1',
    kec_organisasi = '$KECAMATAN1',
    kab_organisasi = '$KABUPATEN1',
    prov_organisasi = '$PROVINSI1',
    pimpinan = '$PIMPINAN1',
    bendahara = '$BENDAHARA1',
    kode_pos_organisasi = '$KODEPOS1' WHERE id_informasi =1;") or die ("Gagal melakukan Update Data...!.mysqli_error($QUERY)");
    echo "<div class = 'alert alert-sucses'>
            <center>
                <strong>Edit Data Berhasil</strong> Halaman Akan di Redirect Otomatis
            </center>
        </div>
<meta http-equiv='refresh' content='1 url=index.php?page=Info'>
";
}

?>