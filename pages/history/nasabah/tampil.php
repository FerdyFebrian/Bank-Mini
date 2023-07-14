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
                <th>Id Nasabah</th>
                <th>Nama Nasabah</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tgl Lahir</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>keterangan</th>
              </tr>
              </thead>
              <tbody>
                <?php $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_nasabah ORDER BY id_nasabah ASC ");
                $NO = 1;
                while($NASABAH = mysqli_fetch_array($DATA)) {
               
                ?>
              <tr>
                <td><?php echo $NO; ?></td>
                <td><?php echo $NASABAH['id_nasabah'];?></td>
                <td><?php echo $NASABAH['nama_nasabah'];?></td>
                <td><?php
                if ($NASABAH['jenkel']=='L') {
                  echo 'Laki - Laki';
                } else {
                  echo 'Perempuan';
                }
		            ?></td>
                <td><?php echo $NASABAH['tempat_lahir'].','.' '.$NASABAH['tgl_lahir'];?></td>
                <td><?php echo $NASABAH['alamat_nasabah'];?></td>
                <td><?php echo $NASABAH['telp_nasabah'];?></td>
                <td><?php 
                switch ($NASABAH['jenis_pengenal']){
                  case 1:
                      echo ' Baru Menambahkan Data ';
                      break;
                }
                ?></td></tr>
              <?php 
              $NO++;
              };?>
              </tbody>
              <tfoot>
              <tr>
              <th>No</th>
                <th>Id Nasabah</th>
                <th>Nama Nasabah</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tgl Lahir</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>keterangan</th>
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