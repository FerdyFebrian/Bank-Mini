<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  
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
            <h3 class="card-title">Data Nasabah</h3><br>
            <a href="index.php?page=Data_Nasabah&hera=tambah" class="btn btn-primary">Tambah data</a>
            <a href="index.php?page=Data_Nasabah&hera=laporan" class="btn btn-warning">Laporan</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>ID NASABAH</th>
                <th>Nama</th>
                <th>Jenkel</th>
                <th>Tempat, Tgl Lahir</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_nasabah ORDER BY id_nasabah ASC ");
                $NO = 1;
                while($DATANASABAH = mysqli_fetch_array($DATA)) {
                ?>
              <tr>
              <td><?php echo $NO; ?></td>
                <td><?php echo $DATANASABAH['id_nasabah'];?></td>
                <td><?php echo $DATANASABAH['nama_nasabah'];?></td>
                <td><?php echo $DATANASABAH['jenkel'];?></td>
                <td><?php echo $DATANASABAH['tempat_lahir'].','.' '.$DATANASABAH['tgl_lahir'];?></td>
                <td><?php echo $DATANASABAH['alamat_nasabah'];?></td>
                <td><?php echo $DATANASABAH['telp_nasabah'];?></td>
                <td>
                  <a href="index.php?page=Data_Nasabah&hera=info&id=<?php echo $DATANASABAH['id_nasabah'];?>"><i class="fa fa-info-circle" style="font-size:20px;color:blue"></i>Info</a><br>
                  <a href="index.php?page=Data_Nasabah&hera=edit&id=<?php echo $DATANASABAH['id_nasabah'];?>"><i class="fas fa-edit" style="font-size:20px;color:red"></i>Edit</a><br>
                  <a href="index.php?page=Data_Nasabah&hera=hapus&id=<?php echo $DATANASABAH['id_nasabah'];?>"><i class="fas fa-trash" style="font-size:20px;color:green"></i>Detele</td>
              </tr>
              <?php 
              $NO++;
              };?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>ID NASABAH</th>
                <th>Nama</th>
                <th>Jenkel</th>
                <th>Tempat, Tgl Lahir</th>
                <th>Alamat</th>
                <th>No Telepon</th>
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

</body>
</html>

<!-- <script>
  window.addEventListener("load", window.print());
</script> -->

<script src="../assets/js/print.js"></script>