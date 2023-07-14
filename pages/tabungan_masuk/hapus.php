<?php
$ID_TRANSAKSI = $_GET['id'];
$SQL = "SELECT * FROM tbl_transaksi WHERE id_transaksi = '$ID_TRANSAKSI'";
$QUERY = mysqli_query($KONEKSI,$SQL)or die("Gagal Melakukan Query".mysqli_connect_error());
$DATA = mysqli_fetch_array ($QUERY);
?>
<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Data Transaksi</h1>
        </div>
    </div>
</div>
</section>
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                        <tr><h3>ID Nasabah        : <?php echo $DATA['id_nasabah'];?></h3></tr><br>
                        <tr><h3>Jenis Transaksi   : <?php 
                        switch ($DATA['jenis_transaksi']){
                        case 1:
                            echo ' Tabungan Siswa ';
                            break;
  
                         case 2:
                            echo ' Penarikan Tabungan Siswa ';
                            break;
                        };?></h3></tr><br>
                        <tr><h3>Kode Transaksi    : <?php echo $DATA['kode_transaksi'];?></h3></tr><br>
                        <tr><h3>Keterangan        : <?php echo $DATA['keterangan'];?></h3></tr><br>
                        <tr><h3>Nominal           : <?php echo $DATA['nominal'];?></h3></tr><br>
                        <tr><h3>ID User           : <?php echo $DATA['id_user'];?></h6></tr><br>
                        <tr><h3>Tanggal Transaksi : <?php echo $DATA['tgl_transaksi'];?></h6></tr><br>
                        <tr><h3>Status            : <?php 
                        switch ($DATA['status_transaksi']){
                            case 1:
                                echo ' Baru Menambahkan Data ';
                                break;
            
                            case 2:
                                echo ' Sudah Pernah di Edit ';
                                break;
                            case 3:
                                echo ' Identifikasi Delete Data ';
                                break;
                          };?></h3></tr><br>
            </div>
        </div>
    </div>
</div>
</section><br>
<a class="delete" href="index.php?page=Tabungan_Masuk&ares=proses_hapus&id=<?php echo $ID_TRANSAKSI;?>&nasabah=<?php echo $DATA['id_nasabah'];?>"> Hapus </a>|
<a class="delete" href="index.php?page=Tabungan_Masuk">Batal</a>