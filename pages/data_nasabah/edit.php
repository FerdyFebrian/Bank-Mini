<?php 
$ID_NASABAH = $_GET['id'];
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
    <h3 class="card-title"> Tambah Data Nasabah </h3>
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
                <input type="text" name="NamaNasabah" class="form-control" id="NamaNasabah" value="<?php echo $NAMA ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="JENKEL">Jenis Kelamin</label>
                <select class="form-control" name="JENKEL">
                <option value="L" <?php if ($JENKEL =='L') {echo 'selected=\"selected"' ; }?> > Laki - Laki </option>
                <option value="P" <?php if ($JENKEL =='P') {echo 'selected=\"selected"' ; }?> > Perempuan </option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="TempatLahir">Tempat Lahir</label>
                <input type="text" name="TempatLahir" class="form-control" id="TempatLahir" value="<?php echo $TEMPAT?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="TanggalLahir">Tanggal Lahir</label>
                <input type="date" name="TanggalLahir" class="form-control" id="TanggalLahir" value="<?php echo $TANGGAL;?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="Alamat" class="form-control" id="Alamat" value="<?php echo $ALAMAT?>">
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="TelpNasabah">No Telepon Nasabah</label>
                  <input type="text" name="TelpNasabah" class="form-control" id="TelpNasabah" value="<?php echo $TELEPON?>">
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="JenisPengenal">Jenis Pengenal</label>
                <select class="form-control" name="JenisPengenal">
                  <option value="1" <?php if ($JENIS =='1') {echo 'selected=\"selected"' ; }?>>KTP</option>
                  <option value="2" <?php if ($JENIS =='2') {echo 'selected=\"selected"' ; }?>>SIM</option>
                  <option value="3" <?php if ($JENIS =='3') {echo 'selected=\"selected"' ; }?>>Kartu Pelajar</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="Pengenal">No Pengenal</label>
                  <input type="text" name="Pengenal" class="form-control" id="Pengenal" value="<?php echo $NO;?>">
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Kelas">Kelas</label>
                <select name="Kelas" class="form-control">
                <option value="">Kelas</option>
                <?php 
                $query = "SELECT * FROM tbl_kelas";
                $result = mysqli_query($KONEKSI, $query);
                while ($row = mysqli_fetch_array($result)) {
                $selected = $row['id_kelas'] == $KELAS ? 'selected="selected"' : '';
                echo '<option value="'.$row['id_kelas'].'" '.$selected.'>'.$row['nama_kelas'].'</option>';};?>
              </select>
              </div>
            </div>
          </div>
        </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <input type = "submit" name = "Edit" class = "btn btn-primary" value = "Edit Data"></input>
    <input type = "reset" name = "Hapus" class = "btn btn-danger" value = "Reset"></input>
    <a href = "index.php?page=Data_Nasabah" nama ="Cancel" class = "btn btn-warning">Cancel</a>
  </div>
</form>
</div>