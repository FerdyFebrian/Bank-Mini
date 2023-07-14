<h2>Data informasi</h2>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"> Data infromasi <?php echo $DATA_INFO['nama_organisasi'];?></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <?php
  if (@$_POST['Edit_Info']) {
    include "proses_edit.php";
  }

  ?>
  <form id="quickForm" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Organisasi</label>
        <input type="text" name="Nama_Organisasi" class="form-control" id="Nama_organisasi" value="<?php echo $DATA_INFO['nama_organisasi'];?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="text" name="Email" class="form-control" id="Email" value="<?php echo $DATA_INFO['email_organisasi'];?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <input type="text" name="Alamat" class="form-control" id="Alamat" value="<?php echo $DATA_INFO['alamat_organisasi'];?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Telepon</label>
        <input type="text" name="Telp" class="form-control" id="Telp" value="<?php echo $DATA_INFO['telp_organisasi'];?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Kelurahan Organisasi</label>
        <input type="text" name="kelurahan" class="form-control" id="kelurahan" value="<?php echo $DATA_INFO['kel_organisasi'];?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Kecamatan Organisasi</label>
        <input type="text" name="Kecamatan" class="form-control" id="Kecamatan" value="<?php echo $DATA_INFO['kec_organisasi'];?>">
      </div><div class="form-group">
        <label for="exampleInputPassword1">Kabupaten Organisasi</label>
        <input type="text" name="Kabupaten" class="form-control" id="Kabupaten" value="<?php echo $DATA_INFO['kab_organisasi'];?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Provinsi Organisasi</label>
        <input type="text" name="Provinsi" class="form-control" id="Provinsi" value="<?php echo $DATA_INFO['prov_organisasi'];?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Pimpinan</label>
        <input type="text" name="Pimpinan" class="form-control" id="Pimpinan" value="<?php echo $DATA_INFO['pimpinan'];?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Bendahara</label>
        <input type="text" name="Bendahara" class="form-control" id="Bendahara" value="<?php echo $DATA_INFO['bendahara'];?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Kode Pos Organisasi</label>
        <input type="text" name="Kode" class="form-control" id="Kode" value="<?php echo $DATA_INFO['kode_pos_organisasi'];?>">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <input type="submit" class="btn btn-primary" name="Edit_Info" value="Rubah Data">
    </div>
  </form>
</div>