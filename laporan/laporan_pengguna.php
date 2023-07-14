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
                    <th>Nama Pengguna</th>
                    <th>Photo</th>
                    <th>User Level</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                   $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_user ORDER BY id_user ASC");
                   $NO=1;
                   while ($PENGGUNA = @mysqli_fetch_array($DATA)) {       
                  ?>
                  <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $PENGGUNA['nama_user']; ?></td>
                    <td><img src="../images/pengguna/<?php echo $PENGGUNA['photo_user']; ?>" alt="Foto Pengguna" width="100px" heigh="100px"></td>
                    <td><?php echo $PENGGUNA['id_userlevel']; ?></td>
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