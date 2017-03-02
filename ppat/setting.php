  <?php 
    $id = $_SESSION['idpengguna']; 
    $baris = mysql_fetch_array(mysql_query("SELECT * FROM pengguna where idpengguna = '".$id."'"));
    // ubah profil
    if (isset($_POST['ubah'])) {
    $query = mysql_query("UPDATE pengguna SET namalengkap = '".$_POST['namalengkap']."',
                            username  = '".$_POST['username']."',
                            notelp  = '".$_POST['notelp']."',
                            alamat  = '".$_POST['alamat']."',
                            level   =  '".$_POST['level']."'  
                        WHERE idpengguna = '".$id."'"); 
    if ($query) {
      echo "<script> alert('Data Berhasil Diubah'); location.href='index.php?hal=setting' </script>";exit;
    }
  }
  // ganti password
  if (isset($_POST['gantipassword'])) {
      $gantipassword = mysql_query("UPDATE pengguna SET password = md5('$_POST[password]') where idpengguna ='".$id."'");
      if ($gantipassword) {
        echo "<script> alert('Password Berhasil Diubah'); location.href='index.php?hal=setting' </script>";exit;   
      }
  }
  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Pengaturan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pengaturan</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../logobpn.png" alt="User profile picture">
              <h3 class="profile-username text-center">SISTEM INFORMASI BPN</h3>
              <p class="text-muted text-center"><?php echo $_SESSION['level']; ?></p>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#profilpengguna" data-toggle="tab">Profil Pengguna</a></li>
              <li><a href="#gantipassword" data-toggle="tab">GantiPassword</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="profilpengguna">
                <form class="form-horizontal" method="POST">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="Nama Lengkap" name="namalengkap" value="<?php echo $baris['namalengkap']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $baris['username']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">No.Telp</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="No Telp" name="notelp" value="<?php echo $baris['notelp']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <textarea class="form-control"  placeholder="Alamat" name="alamat"><?php echo $baris['alamat']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Level</label>
                    <div class="col-sm-10">
                       <select class="form-control" name="level" required>
                          <option value="bpn"
                            <?php if($baris['level']=='bpn'){echo "selected=selected";}?>>
                             BPN
                          </option>
                          <option value="ppat"
                            <?php if($baris['level']=='ppat'){echo "selected=selected";}?>>
                              PPAT
                          </option>       
                       </select> 
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="ubah" class="btn btn-primary"> <span class="fa fa-edit"></span> Ubah</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="gantipassword">
                <form class="form-horizontal" method="POST">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Username" value="<?php echo $baris['username']; ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" placeholder="Password" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="gantipassword" class="btn btn-primary"><span class="fa fa-edit"></span> Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>