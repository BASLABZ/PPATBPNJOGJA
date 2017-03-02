<?php 
	$id  = $_GET['id'];
	$baris = mysql_fetch_array(mysql_query("SELECT * FROM pengguna where idpengguna = '".$id."'"));
	// fungsi ubah data
	if (isset($_POST['ubah'])) {
		$query = mysql_query("UPDATE pengguna SET 
                            NPWP = '".$_POST['NPWP']."',
                            namalengkap = '".$_POST['namalengkap']."',
		  										  username 	= '".$_POST['username']."',
		  										  notelp 	= '".$_POST['notelp']."',
		  										  alamat 	= '".$_POST['alamat']."',
		  										  level 	=  '".$_POST['level']."'	
		  									WHERE idpengguna = '".$id."'");	
		if ($query) {
			echo "<script> alert('Data Berhasil Diubah'); location.href='index.php?hal=pengguna/list' </script>";exit;
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
                <input type="text" class="form-control" value="<?php echo $baris['NPWP']; ?>" name="NPWP" required>
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="namalengkap" required value="<?php echo $baris['namalengkap']; ?>">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" required value="<?php echo $baris['username']; ?>">
              </div>
              <div class="form-group">
                <label>No.Telp</label>
                <input type="number" class="form-control" name="notelp" required value="<?php echo $baris['notelp']; ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" required><?php echo $baris['alamat']; ?></textarea>
              </div>
              <div class="form-group">
                <label>Level Pengguna</label>
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
              <div class="form-group pull-right">
                <button type="submit" name="ubah" class="btn btn-primary"> <span class="fa fa-edit"></span> Ubah</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>