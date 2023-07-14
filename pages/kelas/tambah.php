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
        <label for="IdKelas">ID Kelas</label>
        <input type="text" name="IdKelas" class="form-control" id="IdKelas" value ="<?php echo AutoNumber('tbl_kelas', 'id_kelas',3,"KLS");?>" readonly>
      </div>
      <div class="form-group">
        <label for="Tingkat">Tingkat</label>
        <div class="form-group">
            <select class="form-control" name="Tingkat">
              <option name="Tingkat" value="7">Tingkat 7</option>
              <option name="Tingkat" value="8">Tingkat 8</option>
              <option name="Tingkat" value="9">Tingkat 9</option>
              <option name="Tingkat" value="10">Tingkat 10</option>
              <option name="Tingkat" value="11">Tingkat 11</option>
              <option name="Tingkat" value="12">Tingkat 12</option>
            </select>
        </div>
        <div class="form-group">
        <label for="Nama_Kelas">Nama Kelas</label>
        <input type="text" name="Nama_Kelas" class="form-control" id="Nama_Kelas" placeholder="Nama_Kelas">
      </div>
    </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type = "submit" name = "Tambah" class = "btn btn-primary" value = "Tambah Data"></input>
      <input type = "reset" name = "Hapus" class = "btn btn-danger" value = "Reset"></input>
      <a href = "index.php?page=Naik" nama ="Cancel" class = "btn btn-warning">Cancel</a>
    </div>
  </form>
</div>