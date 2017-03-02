 <?php 
    $id = $_GET['id'];
    $baris  =  mysql_fetch_array(mysql_query("SELECT * FROM ppat where idppat = '".$id."'"));
    $tanggalakta = jin_date_str($baris['tanggalakta']);
    // ubah data ppat
    if (isset($_POST['ubah'])) {
      $tanggalakta = $_POST['tanggalakta'];
             $konverttanggal = jin_date_sql($tanggalakta);
      $query = mysql_query("UPDATE ppat SET namapemohon = '".$_POST['namapemohon']."',
                                            alamatpemohon = '".$_POST['alamatpemohon']."',
                                            alamattanah = '".$_POST['alamattanah']."',
                                            jenisakta = '".$_POST['jenisakta']."',
                                            noakta = '".$_POST['noakta']."',
                                            tanggalakta = '".$konverttanggal."'
                                        where idppat = '".$id."' ");
      if ($query) {
        echo "<script> alert('Data Berhasil Diubah'); location.href='index.php?hal=datappat/list' </script>";exit;
      }
    }
  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>DATA PPAT</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">DATA PPAT</a></li>
        <li class="active">Ubah</li>
        <li class="active"><?php echo $baris['namapemohon']; ?></li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Tambah Data PPAT</h3>
            </div>
           <div class="box-body">
             <form class="role" method="POST">
                <div class="form-group">
                  <label>Nama Pemohon</label>
                  <input type="text" class="form-control" name="namapemohon"   value="<?php echo $baris['namapemohon']; ?>" >
                </div>
                <div class="form-group">
                  <label>Alamat Pemohon</label>
                  <textarea class="form-control" name="alamatpemohon" ><?php echo $baris['alamatpemohon']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Alamat Tanah</label>
                  <textarea class="form-control" name="alamattanah" ><?php echo $baris['alamattanah']; ?></textarea>
                </div>
                 <div class="form-group">
                <label>Jenis Akta</label>
                    <select class="form-control" name="jenisakta" required>
                       <option value="AJB"
                        <?php if($baris['jenisakta']=='AJB'){echo "selected=selected";}?>>
                          AKTA JUAL BELI
                      </option>
                       <option value="Hibah"
                        <?php if($baris['jenisakta']=='Hibah'){echo "selected=selected";}?>>
                          AKTA HIBAH
                      </option>
                       <option value="Tukar-menukar"
                        <?php if($baris['jenisakta']=='Tukar-menukar'){echo "selected=selected";}?>>
                          AKTA TUKAR - MENUKAR
                      </option>
                       <option value="APHB"
                        <?php if($baris['jenisakta']=='APHB'){echo "selected=selected";}?>>
                          AKTA APHB
                      </option>
                       <option value="Inbreng"
                        <?php if($baris['jenisakta']=='Inbreng'){echo "selected=selected";}?>>
                          AKTA Inbreng
                      </option>
                       <option value="APHT"
                        <?php if($baris['jenisakta']=='APHT'){echo "selected=selected";}?>>
                          AKTA APHT
                      </option>
                       <option value="APHGB/HP diatas HM"
                        <?php if($baris['jenisakta']=='APHGB/HP diatas HM'){echo "selected=selected";}?>>
                          AKTA APHGB/HP diatas HM
                      </option>
                       <option value="SKMHT"
                        <?php if($baris['jenisakta']=='SKMHT'){echo "selected=selected";}?>>
                          AKTA SKMHT
                      </option>
                         
                    </select>
                </div>
                <div class="form-group">
                  <label>NO AKTA</label>
                  <input type="text" class="form-control" name="noakta"  value="<?php echo $baris['noakta']; ?>" >
                </div>
                <div class="form-group">
                     <div class="input-group">
                        <span class="input-group-addon"><b>Tanggal Input</b></span>
                        <input type="text" class="form-control" name="tanggalakta" id="tanggalakta" value="<?php echo $tanggalakta; ?>">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
                <div class="form-group pull-right">
                  <button type="submit" class="btn btn-primary" name="ubah"> <span class="fa fa-save"></span> Simpan</button>
                </div>
             </form>
           </div>
          </div>
        </div>
      </div>
    </section>
  </div>