<?php 
$ID_KELAS = $_GET['id'];
$SQL_EDIT = "SELECT * FROM tbl_kelas WHERE id_kelas ='$ID_KELAS'" or die ("Gagal melakukan query!!!".mysqli_connect_error());
$HASILEDIT = mysqli_query($KONEKSI,$SQL_EDIT);

while($ROW = mysqli_fetch_array($HASILEDIT)) {
    $TINGKAT = $ROW['tingkat'];
    $NAMA_KELAS = $ROW['nama_kelas'];
}


?>
<h2>Edit Data</h2>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"> Edit Data </h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <?php 
  if (@$_POST['Edit']) {
    include "proses_edit.php";
  }
  ?>
  <form id="quickForm" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="IdKelas">ID Kelas</label>
        <input type="text" name="IdKelas" class="form-control" id="IdKelas" value ="<?php echo $ID_KELAS;?>" readonly>
      </div>
      <div class="form-group">
        <label for="Tingkat">Tingkat</label>
        <div class="form-group">
            <select class="form-control" name="Tingkat" value="">
                <option name="Tingkat" value="7" <?php if ($TINGKAT =='7') {echo 'selected=\"selected"' ; }?> > Tingkat 7 </option>
                <option name="Tingkat" value="8" <?php if ($TINGKAT =='8') {echo 'selected=\"selected"' ; }?> > Tingkat 8 </option>
                <option name="Tingkat" value="9" <?php if ($TINGKAT =='9') {echo 'selected=\"selected"' ; }?> > Tingkat 9 </option>
                <option name="Tingkat" value="10" <?php if ($TINGKAT =='10') {echo 'selected=\"selected"' ; }?> > Tingkat 10 </option>
                <option name="Tingkat" value="11" <?php if ($TINGKAT =='11') {echo 'selected=\"selected"' ; }?> > Tingkat 11 </option>
                <option name="Tingkat" value="12" <?php if ($TINGKAT =='12') {echo 'selected=\"selected"' ; }?> > Tingkat 12 </option>
            </select>
        </div>
        <div class="form-group">
        <label for="Nama_Kelas">Nama Kelas</label>
        <input type="text" name="Nama_Kelas" class="form-control" id="Nama_Kelas" value="<?php echo $NAMA_KELAS;?>">
      </div>
    </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type = "submit" name = "Edit" class = "btn btn-primary" value = "Edit Data"></input>
      <input type = "reset" name = "Hapus" class = "btn btn-danger" value = "Reset"></input>
      <a href = "index.php?page=Naik" nama ="Cancel" class = "btn btn-warning">Cancel</a>
    </div>
  </form>
</div>