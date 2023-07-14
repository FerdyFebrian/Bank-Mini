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
                    <label for="IdNasabah">ID Nasabah</label>
                    <input type="text" name="IdNasabah" class="form-control" id="IdNasabah" value="<?php echo AutoNumber('tbl_nasabah','id_nasabah',3,"");?>" readonly>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="NamaNasabah">Nama Nasabah</label>
                  <input type="text" name="NamaNasabah" class="form-control" id="NamaNasabah" placeholder="Nama Nasabah">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="Jenkel">Jenis Kelamin</label>
                  <select class="form-control" name="Jenkel">
                    <option value="P">Perempuan</option>
                    <option value="L">Laki - Laki</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="TempatLahir">Tempat Lahir</label>
                  <input type="text" name="TempatLahir" class="form-control" id="TempatLahir" placeholder="Tempat Lahir">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="TanggalLahir">Tanggal Lahir</label>
                  <input type="date" name="TanggalLahir" class="form-control" id="TanggalLahir" placeholder="Nama Kelas">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="Alamat">Alamat</label>
              <input type="text" name="Alamat" class="form-control" id="Alamat" placeholder="Alamat">
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="TelpNasabah">No Telepon Nasabah</label>
                    <input type="text" name="TelpNasabah" class="form-control" id="TelpNasabah" placeholder="No Telp Nasabah">
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="JenisPengenal">Jenis Pengenal</label>
                  <select class="form-control" name="JenisPengenal">
                    <option value="1">KTP</option>
                    <option value="2">SIM</option>
                    <option selected="selected" value="3">Kartu Pelajar</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="NoPengenal">No Pengenal</label>
                    <input type="text" name="NoPengenal" class="form-control" id="NoPengenal" placeholder="No Pengenal">
                  </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label for="Kelas">Kelas</label>
              <select name="Kelas" class="form-control">
                <option value="">Kelas</option>
                <?php $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_kelas");
                  while ($DATANASABAH = mysqli_fetch_array($DATA)) {
                  echo '<option value='.$DATANASABAH['id_kelas'].'>'.$DATANASABAH['id_kelas'].'-'.$DATANASABAH['nama_kelas'].'</option>'
                  ;?><?php } ?>
              </select>
                </div>
              </div>
            </div>
          </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type = "submit" name = "Tambah" class = "btn btn-primary" value = "Tambah Data"></input>
      <input type = "reset" name = "Hapus" class = "btn btn-danger" value = "Reset"></input>
      <a href = "index.php?page=Data_Nasabah" nama ="Cancel" class = "btn btn-warning">Cancel</a>
    </div>
  </form>
</div>