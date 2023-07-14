<?php 
$ID_PENGGUNA = $_GET['id'];
$SQL_EDIT = "SELECT * FROM tbl_user WHERE id_user ='$ID_PENGGUNA'" or die ("Gagal melakukan query!!!".mysqli_connect_error());
$HASILEDIT = mysqli_query($KONEKSI,$SQL_EDIT);

while($ROW = mysqli_fetch_array($HASILEDIT)) {
    $NAMA = $ROW['nama_user'];
    $USERNAME = $ROW['username'];
    $PASSWORD = $ROW['password'];
    $TYPE_USER =  $ROW['id_userlevel'];
    $PHOTO = $ROW['photo_user'];
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
  if (@$_POST['Edit_foto']) {
    include "proses_edit_foto.php";
  }
  ?>
  <form id="quickForm" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="IdUser">ID Pengguna</label>
        <input type="text" name="IdUser" class="form-control" id="IdUser" value ="<?php echo $ID_PENGGUNA;?>" readonly>
      </div>
      <div class="form-group">
        <label for="NamaUser">Nama Pengguna</label>
        <input type="text" name="NamaUser" class="form-control" id="NamaUser" value="<?php echo $NAMA;?>">
      </div>
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" name="Username" class="form-control" id="Username" value="<?php echo $USERNAME;?>">
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="Password" name="Password" class="form-control" id="Password" value="<?php echo $PASSWORD;?>">
      </div>
      <div class="form-group">
        <label for="UserLevel">User Level</label>
        <div class="form-group">
            <select class="form-control" name="UserLevel">
                <option value="Admin" <?php if ($TYPE_USER =='Admin') {echo 'selected=\"selected"' ; }?> > Admin </option>
                <option value="Teller" <?php if ($TYPE_USER =='Teller') {echo 'selected=\"selected"' ; }?> > Teller </option>
                <option value="CSO" <?php if ($TYPE_USER =='CSO') {echo 'selected=\"selected"' ; }?> > CSO </option>
            </select>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type="submit" name="Edit" class="btn btn-primary" value="Edit Data"></input>
      <input type="reset" name="Hapus" class="btn btn-danger" value="Reset"></input>
      <a href = "index.php?page=Pengguna" nama="Cancel" class="btn btn-warning">Cancel</a>
    </div>
  </form>
  <form method="post" enctype="multipart/form-data">
    <input type="hidden" name="IdUser" value ="<?php echo $ID_PENGGUNA;?>">
    <div class="card-body">
      <div class="form-group">
        <div class="form-group">
          <label for="UserLevel">Photo User</label>
          <div class="col-md-10">
            <img src="../images/pengguna/<?php echo $PHOTO;?>" alt="Foto pengguna" width="200px">
          </div>
        </div>
      </div>
      <div class="form-group">
          <label for="PhotoUser">Photo Sebelumnya</label>
          <div class="input-group">
              <div class="custom-file">
                  <input type="file" id="File_Foto" name="File_Foto" required>
              </div>
          </div>
      </div>
    </div>
    <div class="card-footer">
      <input type="submit" class="btn btn-primary" name="Edit_foto" value="Edit Foto">
    </div>
  </form>
</div>