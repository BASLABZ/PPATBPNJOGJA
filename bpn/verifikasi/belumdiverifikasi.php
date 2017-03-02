<?php 
  if (isset($_GET['verifikasi'])&&($_GET['status'])&&($_GET['idppat'])) {
    $query = "UPDATE ppat SET status='".$_GET['status']."',verifikasi='".$_GET['verifikasi']."' where idppat='".$_GET['idppat']."' ";
    mysql_query($query);
    if ($query) {
       echo "<script> alert(' Data Berhasil Diverifikasi'); location.href='index.php?hal=verifikasi/terverifikasi' </script>";exit;   
    }
    
  }
   ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>DATA PPAT</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data PPAT</a></li>
        <li class="active">Daftar</li>
        
      </ol>
    </section>
    <section class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Data PPAT</h3>
              </div>
              <div class="box-body">
                <table class="table table-responsive table-bordered" id="table">
                <thead>
                  <th>No</th>
                  <th>Tanggal Input</th>
                  <th>Nama Pemohon</th>
                  <th>Alamat Pemohon</th>
                  <th>Alamat Tanah</th>
                  <th>Jenis Akta</th>
                  <th>No Akta</th>
                  <th>Tanggal Akta</th>
                  <th>Status</th>
                  <th>Verifikasi</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysql_query("SELECT * FROM ppat where verifikasi='BELUM DIVERIFIKASI' order by idppat DESC ");
                      while ($baris  = mysql_fetch_array($query)) {
                        $tanggalakta = jin_date_str($baris['tanggalakta']);
                        $tanggalinput = jin_date_str($baris['tanggalinput']);
                        ?>
                        <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $tanggalinput; ?></td>
                                  <td><?php echo $baris['namapemohon']; ?></td>
                                  <td><?php echo $baris['alamatpemohon']; ?></td>
                                  <td><?php echo $baris['alamattanah']; ?></td>
                                  <td><?php echo $baris['jenisakta']; ?></td>
                                  <td><?php echo $baris['noakta']; ?></td>
                                  <td><?php echo $tanggalakta; ?></td>
                                  <td><?php echo $baris['status'] ?></td>
                                  <td>

                                    <a href="index.php?hal=verifikasi/belumdiverifikasi&status=DITERIMA&verifikasi=DIVERIFIKASI&idppat=<?php echo $baris['idppat']; ?>"><span class="fa fa-exclamation-triangle"></span> <?php echo $baris['verifikasi']; ?> </a>
                                  </td>
                                  <td>
                                    <a href='index.php?hal=verifikasi/detail&id=<?php echo $baris['idppat']; ?>' class='btn btn-success btn-xs'> <span class='fa fa-eye'></span> Lihat</a>
                                    </td>
                              </tr>
                      
                   <?php } ?>
                </tbody>
              </table>
              </div>
             </div> 
          </div>
      </div>
  </section>
</div>