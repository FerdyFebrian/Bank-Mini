<?php 
$ID_TRANSAKSI = $_GET['id'];
$SQL_EDIT = "SELECT * FROM tbl_transaksi WHERE id_transaksi ='$ID_TRANSAKSI'" or die ("Gagal melakukan query!!!".mysqli_connect_error());
$HASILEDIT = mysqli_query($KONEKSI,$SQL_EDIT);

while($ROW = mysqli_fetch_array($HASILEDIT)) {
    $CODE = $ROW['kode_transaksi'];
    $ID_NASABAH = $ROW['id_nasabah'];
    $JENIS = $ROW['jenis_transaksi'];
    $KETERANGAN =  $ROW['keterangan'];
    $NOMINAL = $ROW['nominal'];
    $ID_USER = $ROW['id_user'];
    $TGL = $ROW['tgl_transaksi'];
    $STATUS = $ROW['status_transaksi'];
}


?>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"> Transaksi </h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <?php 
  if (@$_POST['Edit']) {
    include "proses_edit.php";
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
                    <option value="<?php echo $ID_NASABAH;?>">-- Pilih Nasabah --</option>
                    <?php $SQL_NASABAH = mysqli_query($KONEKSI, "SELECT tbl_nasabah.*,tbl_kelas.* FROM tbl_nasabah JOIN tbl_kelas ON tbl_kelas.id_kelas = tbl_nasabah.id_kelas") or die(mysqli_connect_error($KONEKSI));
                    while ($NASABAH = mysqli_fetch_array($SQL_NASABAH)) {
                      echo '<option value="'.$NASABAH['id_nasabah'].'">'. $NASABAH['nama_kelas'].' - '. $NASABAH['nama_nasabah'].'</option>';?><?php } ?>
                  </select>
                </div>
              </div>
            <input type="hidden" name="Id_Transaksi" class="form-control" id="IdTransaksi" value="<?php echo $ID_TRANSAKSI?>" readonly>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="Kode">Kode Transaksi</label>
                  <input type="text" name="Kode" class="form-control" id="Kode" value="<?php echo $CODE;?>" readonly>
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <input type="hidden" name="Tanggal" class="form-control" id="Tanggal" value="<?php echo date("Y-m-d")?>">
                </div>
              </div>
            </div>
              <div class="form-group">
                <label for="Jumlah">Jumlah Rupiah</label>
                <input type="number" name="Jumlah" class="form-control" id="Jumlah" value="<?php echo $NOMINAL ?>">
              </div>
          </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type="submit" name="Edit" class="btn btn-primary" value="Edit Data"></input>
      <input type="reset" name="Hapus" class="btn btn-danger" value="Reset"></input>
      <a href="index.php?page=Tabungan_Masuk" nama="Cancel" class="btn btn-warning">Cancel</a>
    </div>
  </form>
</div>