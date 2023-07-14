<?php 
$NASABAH = $_GET['id'];

$query = "SELECT SUM(nominal) AS total_nominal_sts FROM tbl_transaksi WHERE kode_transaksi LIKE 'STS%' AND id_nasabah = '$NASABAH' AND
status_transaksi !=3";
$result = mysqli_query($KONEKSI, $query);
$data1 = mysqli_fetch_assoc($result);

$query = "SELECT SUM(nominal) AS total_nominal_pts FROM tbl_transaksi WHERE kode_transaksi LIKE 'PTS%' AND id_nasabah = '$NASABAH' AND
status_transaksi !=3";
$result = mysqli_query($KONEKSI, $query);
$data2 = mysqli_fetch_assoc($result);

$TOTAL = $data1["total_nominal_sts"] - $data2["total_nominal_pts"];
?>

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"> Transaksi </h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <?php 
  if (@$_POST['Tambah']) {
    include "proses_tambah.php";
  }
  date_default_timezone_set('Asia/Jakarta');
  ?>
  <form id="quickForm" method="post">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="Nasabah">Nama Nasabah</label>
                  <select name="Nasabah" class="form-control">       
                    <?php $SQL_NASABAH = mysqli_query($KONEKSI, "SELECT tbl_nasabah.*,tbl_kelas.* FROM tbl_nasabah JOIN tbl_kelas ON tbl_kelas.id_kelas = tbl_nasabah.id_kelas") or die(mysqli_connect_error($KONEKSI));
                    while ($NASABAH = mysqli_fetch_array($SQL_NASABAH)) {
                      echo '<option value="'.$NASABAH['id_nasabah'].'">'. $NASABAH['nama_kelas'].' - '. $NASABAH['nama_nasabah'].'</option>';?><?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="Kode_transaksi">Kode Transaksi</label>
                  <input type="text" name="Kode_transaksi" class="form-control" id="Kode_transaksi" value="<?php echo AutoNumber1('tbl_transaksi', 'kode_transaksi', 7, 'PTS', 'PTS')?>" readonly>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                <label for="Tanggal"></label>
                <input type="hidden" name="Tanggal" value="<?php echo date("Y-m-d"); ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <h5><strong><i>Total Saldo Anda : </i></strong><b><?php echo rupiah("$TOTAL");?></b></h5>
            </div>
            <div class="form-group">
              <label for="Jumlah">Jumlah Setoran</label>
              <input type="number" name="Jumlah" class="form-control" id="Jumlah" placeholder="Masukan Jumlah">
            </div>
          </div>
          </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type="submit" name="Tambah" class="btn btn-primary" value="Tambah Data"></input>
      <input type="reset" name="Hapus" class="btn btn-danger" value="Reset"></input>
      <a href="index.php?page=Tabungan_Masuk" nama="Cancel" class="btn btn-warning">Cancel</a>
    </div>
  </form>
</div>
</div>