  <!-- fungsi hapus data -->
  <?php 
      if (isset($_GET['hapus'])) {
        $hapus  = mysql_query("DELETE FROM ppat where idppat = '".$_GET['hapus']."'");
        if ($hapus) {
          echo "<script> alert(' Data Berhasil Dihapus'); location.href='index.php?hal=datappat/list' </script>";exit; 
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
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysql_query("SELECT * FROM ppat where verifikasi='DIVERIFIKASI' order by idppat DESC");
                      while ($baris  = mysql_fetch_array($query)) {
                        $tanggalakta = jin_date_str($baris['tanggalakta']);
                        $tanggalinput = jin_date_str($baris['tanggalinput']);
                        echo "<tr>
                                  <td>".$no++."</td>
                                  <td>".$tanggalinput."</td>
                                  <td>".$baris['namapemohon']."</td>
                                  <td>".$baris['alamatpemohon']."</td>
                                  <td>".$baris['alamattanah']."</td>
                                  <td>".$baris['jenisakta']."</td>
                                  <td>".$baris['noakta']."</td>
                                  <td>".$tanggalakta."</td>
                                  <td>".$baris['status']."</td>
                                  <td><button class='btn btn-flat btn-success btn-xs'><span class='fa fa-check'></span> ".$baris['verifikasi']."</button>
                                  </td>
                              </tr>";
                      }
                   ?>
                </tbody>
              </table>
              </div>
             </div> 
          </div>
      </div>
  </section>
</div>