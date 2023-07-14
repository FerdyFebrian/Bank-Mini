<?php
//Mengatur TIMEZONE
date_default_timezone_set("Asia/Jakarta");
$date = date("Y-m-d");

// Mengurutkan berdasarkan tanggal
$QUERY = mysqli_query($KONEKSI, "SELECT max(id_nasabah) as maxKode FROM tbl_nasabah");
$DATA = mysqli_fetch_array($QUERY);
$NO_ORDER = $DATA['maxKode'];
$NO_URUT = (int) substr($NO_ORDER, 9, 4);
$NO_URUT++;
$CHAR = "";
$TAHUN = substr($date, 0, 4);
$BULAN = substr($date, 5, 2);
$ID_ORDER = $CHAR . $TAHUN . $BULAN . sprintf("%04s", $NO_URUT);

?>

<h2>Data informasi</h2>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"> Tambah Data </h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <?php 
  if (@$_POST['Tambah']) {
    include "proses_tambah.php";
  }
  ?>
  <?php
  date_default_timezone_set('Asia/Jakarta');
  ?>

<form id="quickForm" method="post">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="Nasabah">Nasabah</label>
                    <select name="Nasabah" class="form-control select2" style="width: 100%;">
                    <option name="Nasabah" value="">Pilih Nasabah</option>
                      <?php
                        $SQL_NASABAH = mysqli_query($KONEKSI, "SELECT tbl_nasabah.*,tbl_kelas.* FROM tbl_nasabah JOIN tbl_kelas
                        ON tbl_kelas.id_kelas = tbl_nasabah.id_kelas") or die (mysqli_error($KONEKSI)); while ($NASABAH = mysqli_fetch_array
                        ($SQL_NASABAH)){
                          echo '<option value="' . $NASABAH['id_nasabah'] . '">' . $NASABAH['nama_kelas'] . ' - ' . $NASABAH['nama_nasabah']. '</option>';
                        }
                      ?>
                    </select>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="Kode_transaksi">Kode Transaksi</label>
                  <input type="text" name="Kode_transaksi" class="form-control" id="Kode_transaksi" value="<?php echo 
                  AutoNumber("tbl_transaksi", "kode_transaksi", 7,"STS"); ?>" readonly>
                </div>
              </div>
              <div class="form-group">
              <label for="Tanggal"></label>
              <input type="hidden" name="Tanggal" value="<?php echo date("Y-m-d"); ?>">
            </div>
            <div class="col-md-12">
                  <div class="form-group">
                    <label for="Jumlah">Jumlah Setoran</label>
                    <input type="number" name="Jumlah" class="form-control" id="Jumlah" value="" placeholder="Masukkan Jumlah">
                  </div>
                </div>
        </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type = "submit" name = "Tambah" class = "btn btn-primary" value = "Tambah Data"></input>
      <input type = "reset" name = "Hapus" class = "btn btn-danger" value = "Reset"></input>
      <a href = "index.php?page=Tabungan_Masuk" nama ="Cancel" class = "btn btn-warning">Cancel</a>
    </div>
  </form>
</div>
</div>