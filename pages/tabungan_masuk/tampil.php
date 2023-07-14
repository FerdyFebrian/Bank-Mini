<?php
//Cari nama user yang melakukan input 
$USER = $_SESSION['username'];
// $PASS = $_SESSION['username'];
$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER' ");
$DATA = mysqli_fetch_array($QUERY);
$PETUGAS = $DATA['nama_user'];
$ID_USER = $DATA['id_user'];
$TYPE = $DATA['id_userlevel'];
?>

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
            <h2 class="card-title">Transaksi Masuk</h2><br>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a href="index.php?page=Tabungan_Masuk&ares=tambah" class="btn btn-primary">Tambah data</a>
            <a href="index.php?page=Tabungan_Masuk&ares=laporan" class="btn btn-warning">Laporan</a>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>ID Nasabah</th>
                <th>Nama Nasabah</th>
                <th>Jenis Transaksi</th>
                <th>Kode Transaksi</th>
                <th>Jumlah Tabungan</th>
                <th>Tanggal Transaksi</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody width="">
              <?php
                $DATA = mysqli_query($KONEKSI,"SELECT t.*, n.*
                FROM tbl_transaksi t
                JOIN tbl_nasabah n ON n.id_nasabah = t.id_nasabah
                WHERE t.jenis_transaksi = 1 AND (t.status_transaksi = 1 OR t.status_transaksi = 2)
                ORDER BY t.kode_transaksi ASC");
                $NO = 1;
                while ($TABUNGAN = mysqli_fetch_array($DATA)) {
                ?>
              <tr>
                <td><?php echo $NO; ?></td>
                <td><?php echo $TABUNGAN['id_nasabah']?></td>
                <td><?php echo $TABUNGAN['nama_nasabah'];?></td>
                <td><?php 
                switch ($TABUNGAN['jenis_transaksi']){
                  case 1:
                      echo ' Tabungan Siswa ';
                      break;
  
                  case 2:
                      echo ' Penarikan Tabungan Siswa ';
                      break;
                }
                ?></td>
                <td><?php echo $TABUNGAN['kode_transaksi']?></td>
                <?php $number = $TABUNGAN['nominal']?>
                <td align="right"><?php echo rupiah("$number");?></td>
                <td><?php echo $TABUNGAN['tgl_transaksi']?></td>
                <td>
                <?php
              if ($TYPE == "Admin") {
              //Munculkan fitur Edit dan Delete
              ?>
              <a href="index.php?page=Tabungan_Keluar&hermes=tambah&id=<?php echo $TABUNGAN['id_nasabah'];?>"><i class="fas fa-info-circle" style="font-size:20px;color:blue"></i>Tarik</a><br>
              <a href="index.php?page=Tabungan_Masuk&ares=edit&id=<?php echo $TABUNGAN['id_transaksi'];?>"><i class="fas fa-edit" style="font-size:20px;color:red"></i>Edit</a><br>
              <a href="index.php?page=Tabungan_Masuk&ares=hapus&id=<?php echo $TABUNGAN['id_transaksi'];?>"><i class="fas fa-trash" style="font-size:20px;color:green"></i>Delete</a>
                <?php
                  } else {
                ?>
                  <a><i class="fas fa-info" style="font-size:20px;color:blue"></i>Tarik</a>
                  <a><i class="fas fa-edit" style="font-size:20px;color:red"></i>Edit</a>
                  <a><i class="fas fa-trash" style="font-size:20px;color:green"></i>Delete</a>
                <?php
                  }
                ?>
              </td>
              </tr>
              <?php 
              $NO++;
              };?>

              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>ID Nasabah</th>
                <th>Nama Siswa</th>
                <th>Jenis Transaksi</th>
                <th>Kode Transaksi</th>
                <th>Jumlah Tabungan</th>
                <th>Tanggal Transaksi</th>
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
