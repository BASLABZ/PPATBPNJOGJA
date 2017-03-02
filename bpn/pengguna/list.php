  <!-- fungsi hapus data -->
  <?php 
      if (isset($_GET['hapus'])) {
        $hapus = mysql_query("DELETE FROM pengguna where idpengguna = '".$_GET['hapus']."'");
        if ($hapus) {
          echo "<script> alert(' Data Berhasil Dihapus'); location.href='index.php?hal=pengguna/list' </script>";exit; 
        }
      }
   ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Master Pengguna</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Pengguna</a></li>
        <li class="active">Daftar</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Data Master Pengguna</h3>
                <a href="index.php?hal=pengguna/add" class="btn btn-success"> <span class="fa fa-plus"></span> Tambah Data</a>
              </div>
              <div class="box-body">
                <table class="table table-responsive table-bordered" id="table">
                <thead>
                  <th>No</th>
                  <th>NPWP</th>
                  <th>Nama Lengkap</th>
                  <th>Username</th>
                  <th>No.Telp</th>
                  <th>Alamat</th>
                  <th>Level Pengguna</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysql_query("SELECT * FROM pengguna order by idpengguna DESC");
                      while ($baris  = mysql_fetch_array($query)) {
                        echo "<tr>
                                    <td>".++$no."</td>
                                    <td>".$baris['NPWP']."</td>
                                    <td>".$baris['namalengkap']."</td>
                                    <td>".$baris['username']."</td>
                                    <td>".$baris['notelp']."</td>
                                    <td>".$baris['alamat']."</td>
                                    <td>".$baris['level']."</td>
                                    <td><a href='index.php?hal=pengguna/edit&id=".$baris['idpengguna']."' class='btn btn-warning btn-xs'> <span class='fa fa-edit'></span> Ubah</a>
                                      <a href='index.php?hal=pengguna/list&hapus=".$baris['idpengguna']."' class='btn btn-danger btn-xs'> <span class='fa fa-trash'></span> Hapus</a>
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