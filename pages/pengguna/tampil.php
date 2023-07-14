<div class="text-center">
		<h1 class="lap"><?php echo @$DATA_INFO['nama_organisasi']; ?></h1>
		<p class="lead_lap"><?php echo @$DATA_INFO['deskripsi_organisasi']; ?></p>
		<i>
			<p><?php echo @$DATA_INFO['alamat_organisasi']; ?></p>
			<p>Kel. <?php echo @$DATA_INFO['kel_organisasi']; ?>, Kec. <?php echo @$DATA_INFO['kec_organisasi']; ?>, Kab. <?php echo @$DATA_INFO['kab_organisasi']; ?>, Prov. <?php echo @$DATA_INFO['prov_organisasi']; ?>, Kode Pos : <?php echo @$DATA_INFO['kode_pos_organisasi']; ?></p>
		</i>
			<p>Telp : <?php echo @$DATA_INFO['telp_organisasi']; ?>, Email : <?php echo @$DATA_INFO['email_organisasi']; ?></p>
	<hr class="garis">
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data tambah Pengguna</h3><br>
            <a href="index.php?page=Pengguna&hades=tambah" class="btn btn-primary">Tambah data</a>
            <a href="index.php?page=Pengguna&hades=laporan" class="btn btn-warning">Laporan</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Photo</th>
                <th>User Level</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_user ORDER BY nama_user ASC ");
                $NO = 1;
                while($PENGGUNA = mysqli_fetch_array($DATA)) {
                ?>
              <tr>
              <td><?php echo $NO; ?></td>
                <td><?php echo $PENGGUNA['nama_user'];?></td>
                <td><center><img src="../images/pengguna/<?php echo $PENGGUNA['photo_user'];?>" alt="Foto pengguna" width="75px" height="75px"></center></td>
                <td><?php echo $PENGGUNA['id_userlevel'];?></td>
                <td>
                  <a href="index.php?page=Pengguna&hades=edit&id=<?php echo $PENGGUNA['id_user'];?>"><i class="fas fa-edit" style="font-size:20px;color:red"></i>Edit</a><br>
                  <a href="index.php?page=Pengguna&hades=hapus&id=<?php echo $PENGGUNA['id_user'];?>"><i class="fas fa-trash" style="font-size:20px;color:green"></i>Detele</td>
              </tr>
              <?php 
              $NO++;
              };?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Photo</th>
                <th>User Level</th>
                <th>Aksi</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

<!-- <script>
  window.addEventListener("load", window.print());
</script> -->

<script src="../assets/js/print.js"></script>