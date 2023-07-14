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
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Id User</th>
                <th>Waktu</th>
                <th>Ip_address</th>
                <th>keterangan</th>
              </tr>
              </thead>
              <tbody>
                <?php $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_userlog ORDER BY id_userlog ASC ");
                $NO = 1;
                while($KELAS = mysqli_fetch_array($DATA)) {
                ?>
              <tr>
                <td><?php echo $NO; ?></td>
                <td><?php echo $KELAS['id_user'];?></td>
                <td><?php echo $KELAS['waktu'];?></td>
                <td><?php echo $KELAS['ip_address'];?></td>
                <td><?php echo $KELAS['keterangan'];?></td></tr>
              <?php 
              $NO++;
              };?>
              </tbody>
              <tfoot>
              <tr>
              <th>No</th>
                <th>Id Kelas</th>
                <th>Tingkat</th>
                <th>Nama_Kelas</th>
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

<script src="../assets/js/print.js"></script>