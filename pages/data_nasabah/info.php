<?php 

$ID_NASABAH = $_GET['id'];

$query = "SELECT SUM(nominal) AS total_nominal_sts FROM tbl_transaksi WHERE kode_transaksi LIKE 'STS%' AND id_nasabah = '$ID_NASABAH'";
$result = mysqli_query($KONEKSI, $query);
$data1 = mysqli_fetch_assoc($result);

$query = "SELECT SUM(nominal) AS total_nominal_pts FROM tbl_transaksi WHERE kode_transaksi LIKE 'PTS%' AND id_nasabah = '$ID_NASABAH'";
$result = mysqli_query($KONEKSI, $query);
$data2 = mysqli_fetch_assoc($result);

$TOTAL = $data1["total_nominal_sts"] - $data2["total_nominal_pts"];

$SQL_EDIT = "SELECT * FROM tbl_nasabah WHERE id_nasabah ='$ID_NASABAH'" or die ("Gagal melakukan query!!!".mysqli_connect_error());
$HASILEDIT = mysqli_query($KONEKSI,$SQL_EDIT);

while ($ROW = mysqli_fetch_array($HASILEDIT)) {
  $NAMA = $ROW['nama_nasabah'];
  $JENKEL = $ROW['jenkel'];
  $TEMPAT = $ROW['tempat_lahir'];
  $TANGGAL = $ROW['tgl_lahir'];
  $ALAMAT = $ROW['alamat_nasabah'];
  $TELEPON = $ROW['telp_nasabah'];
  $JENIS = $ROW['jenis_pengenal'];
  $NO = $ROW['no_pengenal'];
  $KELAS = $ROW['id_kelas'];
}
?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"> Info Data Nasabah </h3>
  </div>
<!-- /.card-header -->
<!-- form start -->
<?php 
if (@$_POST['Edit']) {
  include "proses_edit.php";
}
?>
<?php 
date_default_timezone_set('Asia/Jakarta');
?>
<form id="quickForm" method="post">
  <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="IdNasabah">ID Nasabah</label>
                  <input type="text" name="IdNasabah" class="form-control" id="IdNasabah" value="<?php echo $ID_NASABAH;?>" readonly>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="NamaNasabah">Nama Nasabah</label>
                <input type="text" name="NamaNasabah" class="form-control" id="NamaNasabah" value="<?php echo $NAMA ?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="JENKEL">Jenis Kelamin</label>
                <input type="text" name="JENKEL" class="form-control" id="JENKEL" value="<?php echo $JENKEL ?>" readonly>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="TempatLahir">Tempat Lahir</label>
                <input type="text" name="TempatLahir" class="form-control" id="TempatLahir" value="<?php echo $TEMPAT?>" readonly>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="TanggalLahir">Tanggal Lahir</label>
                <input type="date" name="TanggalLahir" class="form-control" id="TanggalLahir" value="<?php echo $TANGGAL;?>" readonly>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="Alamat" class="form-control" id="Alamat" value="<?php echo $ALAMAT?>" readonly>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="TelpNasabah">No Telepon Nasabah</label>
                  <input type="text" name="TelpNasabah" class="form-control" id="TelpNasabah" value="<?php echo $TELEPON?>" readonly>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="JenisPengenal">Jenis Pengenal</label>
                <input type="text" name="Jenis" class="form-control" id="Jenis" value="<?php echo $JENIS;?>" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="Pengenal">No Pengenal</label>
                  <input type="text" name="Pengenal" class="form-control" id="Pengenal" value="<?php echo $NO;?>" readonly>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Kelas">Kelas</label>
                <input type="text" name="Kelas" class="form-control" id="Kelas" value="<?php echo $KELAS;?>" readonly>
              </div>
            </div>
            <div class="col-md-12">
                  <div class="form-group">
                  <label for="Pengenal">Total Saldo</label>
                  <input type="text" name="Pengenal" class="form-control" id="Pengenal" value="<?php echo rupiah("$TOTAL");?>" readonly>
                </div>
                </div> 
            </div>
        </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <a href = "index.php?page=Data_Nasabah" nama ="Cancel" class = "btn btn-warning">Cancel</a>
  </div>
</form>
</div>