<?php include "kop_laporan.php"?>
<a href="javascript:void(0);" onclick="printpageArea('main')" class="btn btn-warning"><i class="fa fa-print"></i>Print</a>
<hr>
  <div id="main">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-globe"></i><?php echo $DATA_INFO['nama_organisasi'] ?></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                    <th>No</th>
                    <th>ID Nasababah</th>
                    <th>Nama Nasababah</th>
                    <th>Jenis Transaksi</th>
                    <th>Kode Transaksi</th>
                    <th>Nominal</th>
                    <th>ID User</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                   $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_kelas ORDER BY id_kelas ASC");
                   $NO=1;
                   while ($KELAS = @mysqli_fetch_array($DATA)) {       
                  ?>
                  <tr>
                  <?php
                  $DATA = mysqli_query($KONEKSI,"SELECT t.*, n.*
                  FROM tbl_transaksi t
                  JOIN tbl_nasabah n ON n.id_nasabah = t.id_nasabah
                  WHERE t.jenis_transaksi = 2 AND (t.status_transaksi = 1 OR t.status_transaksi = 2)
                  ORDER BY t.kode_transaksi ASC");
                  $NO = 1;
                  while ($TRANSAKSI = @mysqli_fetch_array($DATA)) {       
                  ?>
                  <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $TRANSAKSI['id_nasabah']; ?></td>
                    <td><?php echo $TRANSAKSI['nama_nasabah']; ?></td>
                    <td><?php switch ($TRANSAKSI['jenis_transaksi']) {
                       case 1:
                         echo 'Tabungan Siswa';
                         break;

                       case 2:
                         echo 'Penarikan Siswa';
                         break;
                        
                     }
                    ?></td>
                    <td><?php echo $TRANSAKSI['kode_transaksi']; ?></td>
                     <?php $number = $TRANSAKSI['nominal']?>
                    <td><?php echo rupiah("$number"); ?></td>
                    <td><?php echo $TRANSAKSI['id_user']; ?></td>
                    <td><?php echo $TRANSAKSI['tgl_transaksi']; ?></td>
		                    <td><?php if ($TRANSAKSI['status_transaksi']=='1'){
			                echo "Insert";
			                }else if ($TRANSAKSI['status_transaksi']=='2'){echo 'Edit';
			                }else{echo 'Delete';
			                }
		                 ?></td>
                  </tr>
                  <?php
                    $NO++;
                   };
                   ?>
                  <tr>
                  </tr>
                  <?php
                    $NO++;
                   };
                   ?>
                  <tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </body>
  
  <!-- <script>
    window.addEventListener("load", window.print());
  </script> -->

</html>