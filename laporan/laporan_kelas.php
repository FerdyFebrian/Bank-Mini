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
                  <h2 class="page-header"><i class="fa fa-globe"></i>  <?php echo $DATA_INFO['nama_organisasi'] ?></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id Kelas</th>
                        <th>Tingkat</th>
                        <th>Nama Kelas</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                   $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_kelas ORDER BY id_kelas ASC");
                   $NO=1;
                   while ($KELAS = @mysqli_fetch_array($DATA)) {       
                  ?>
                  <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $KELAS['id_kelas']; ?></td>
                    <td><?php echo $KELAS['tingkat']; ?></td>
                    <td><?php echo $KELAS['nama_kelas']; ?></td>
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