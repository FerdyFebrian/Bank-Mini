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
  <form id="quickForm" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="IdUser">ID Pengguna</label>
        <input type="text" name="IdUser" class="form-control" id="IdUser" value ="<?php echo AutoNumber('tbl_user', 'id_user',3,"PGN");?>" readonly>
      </div>
      <div class="form-group">
        <label for="NamaUser">Nama Pengguna</label>
        <input type="text" name="NamaUser" class="form-control" id="NamaUser" placeholder="Nama Pengguna">
      </div>
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" name="Username" class="form-control" id="Username" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="Password" name="Password" class="form-control" id="Password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="UserLevel">User Level</label>
        <div class="form-group">
            <select class="form-control" name="UserLevel">
              <option>Admin</option>
              <option>CSO</option>
              <option>Teller</option>
            </select>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type = "submit" name = "Tambah" class = "btn btn-primary" value = "Tambah Data"></input>
      <input type = "reset" name = "Hapus" class = "btn btn-danger" value = "Reset"></input>
      <a href = "index.php?page=pengguna" nama ="Cancel" class = "btn btn-warning">Cancel</a>
    </div>
  </form>
  <form method="POST">
    <div class="card-body">
      <div class="form-group">
        <div class="form-group">
          <label for="UserLevel">Photo User</label>
          <div class="col-md-10">
            <img src="../image/pengguna/<?php echo $DATA_INFO['photo_user']?>" alt="Foto pengguna" width="200px">
          </div>
        </div>
      </div>
      <div class="form-group">
          <label for="PhotoUser">File User</label>
          <div class="input-group">
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="FileUser" name="FileUSer">
                  <label class="custom-file-label" for="PhotoUser">Choose file</label>
              </div>
          </div>
      </div>
    </div>
    <div class="card-footer">
      <input type="reset" class="btn btn-primary" name="Edit_foto" value="Edit Foto">
    </div>
  </form>
</div>