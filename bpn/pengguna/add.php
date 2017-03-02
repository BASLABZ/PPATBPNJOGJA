  <!-- fungsi simpan -->
  <?php 
        if (isset($_POST['simpan'])) {
          $query= mysql_query("INSERT INTO pengguna (NPWP,namalengkap,username,password,notelp,alamat,level)VALUES('".$_POST['NPWP']."','".$_POST['namalengkap']."','".$_POST['username']."',md5('$_POST[password]'),'".$_POST['notelp']."','".$_POST['alamat']."','".$_POST['level']."')");
          if ($query) {
            echo "<script> alert('Terimakasih Data Berhasil Disimpan'); location.href='index.php?hal=pengguna/list' </script>";exit; 
          }
        }
   ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>Master Pengguna</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Pengguna</a></li>
        <li class="active">Tambah</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Master Pengguna</h3>
            </div>
            <div class="box-body">
              <form class="role" method="POST">
              <div class="form-group">
                <label>NPWP</label>
                  <input type="text" class="form-control" name="NPWP" required>
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="namalengkap" required>
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div class="form-group">
                <label>No.Telp</label>
                <input type="number" class="form-control" name="notelp" required>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" required></textarea>
              </div>
              <div class="form-group">
                <label>Level Pengguna</label>
                <select class="form-control" name="level" required>
                  <option value="null">-Pilih Level Pengguna-</option>
                  <option value="admin">ADMIN</option>
                  <option value="bpn">BPN</option>
                  <option value="ppat">PPAT</option>
                </select>
              </div>
              <div class="form-group pull-right">
                <button type="submit" name="simpan" class="btn btn-primary"> <span class="fa fa-save"></span> Simpan</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>