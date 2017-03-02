<?php 
    $id = $_GET['id'];
    $row = mysql_fetch_array(mysql_query("SELECT * FROM ppat where idppat = '".$id."'"));
 ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>DATA PPAT</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">DATA PPAT</a></li>
        <li class="active">Detail PPAT</li>
        <li><?php echo $row['noakta']; ?></li>
      </ol>
    </section>
    <section class="content">
     <div class="row">
      <form method="POST" class="role">
         <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">PPAT PEMOHON & PENERIMA</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama Pemohon</label>
                  <input type="text" class="form-control" name="namapemohon" required value="<?php echo $row['namapemohon']; ?>"> 
                </div>
                <div class="form-group">
                  <label>Alamat Pemhohon</label>
                  <textarea class="form-control" name="alamatpemohon" required><?php echo $row['alamatpemohon']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Nama Penerima</label>
                  <input type="text" name="namapenerima" class="form-control" required value="<?php echo $row['namapenerima']; ?>">
                </div>
                <div class="form-group">
                  <label>Alamat Penerima</label>
                  <textarea class="form-control" name="alamatpenerima" required>
                    <?php echo $row['alamatpenerima']; ?>   
                  </textarea>
                </div>
              </div>
            </div>
          </div>
          
        </div>
       </div>
       <div class="col-md-6">
         <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">DATA TANAH</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
              <div class="form-gruop">
                <label>Tanggal Akta</label>
                <div class="input-group">
                <input type="text" class="form-control" id="tanggalakta" name="tanggalakta" value="<?php echo $row['tanggalakta']; ?>">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
              </div>
              <div class="form-group">
                <label>Alamat Tanah</label>
                <textarea class="form-control" required name="alamattanah"><?php echo $row['alamattanah']; ?></textarea>
              </div>
              <div class="form-group">
                <label>Jenis Akta</label>
                <select class="form-control" name="jenisakta" required>
                       <option value="null">-Pilih Jenis Akta-</option>
                       <option value="AJB"
                        <?php if($row['jenisakta']=='AJB'){echo "selected=selected";}?>>
                          AKTA JUAL BELI
                      </option>
                       <option value="Hibah"
                        <?php if($row['jenisakta']=='Hibah'){echo "selected=selected";}?>>
                          AKTA HIBAH
                      </option>
                       <option value="Tukar-menukar"
                        <?php if($row['jenisakta']=='Tukar-menukar'){echo "selected=selected";}?>>
                          AKTA TUKAR - MENUKAR
                      </option>
                       <option value="APHB"
                        <?php if($row['jenisakta']=='APHB'){echo "selected=selected";}?>>
                          AKTA APHB
                      </option>
                       <option value="Inbreng"
                        <?php if($row['jenisakta']=='Inbreng'){echo "selected=selected";}?>>
                          AKTA Inbreng
                      </option>
                       <option value="APHT"
                        <?php if($row['jenisakta']=='APHT'){echo "selected=selected";}?>>
                          AKTA APHT
                      </option>
                       <option value="APHGB/HP diatas HM"
                        <?php if($row['jenisakta']=='APHGB/HP diatas HM'){echo "selected=selected";}?>>
                          AKTA APHGB/HP diatas HM
                      </option>
                       <option value="SKMHT"
                        <?php if($row['jenisakta']=='SKMHT'){echo "selected=selected";}?>>
                          AKTA SKMHT
                      </option>
                         
                    </select>
              </div>
              <div class="form-group">
                <label>No AKTA</label>
                <input type="text" class="form-control" name="noakta" required value="<?php echo $row['noakta']; ?>">
              </div>
              <div class="form-group">
                <label>Jenis Aset</label>
                <select class="form-control" name="jenisaset" required>
                  <option value="null">-Pilih Aset-</option>
                  <option value="TANAH"
                        <?php if($row['jenisaset']=='TANAH'){echo "selected=selected";}?>>
                          TANAH
                      </option>
                  <option value="BANGUNAN"
                        <?php if($row['jenisaset']=='BANGUNAN'){echo "selected=selected";}?>>
                          BANGUNAN
                      </option>
                      
                </select>
              </div>
              <div class="row">

                <div class="col-md-6">
                   <div class="form-group">
                    <label>LUAS TANAH</label>
                    <input type="text" class="form-control" name="luastanah" value="<?php echo $row['luastanah']; ?>">
                  </div>     
                </div>
                
                <div class="col-md-6">
                  <div class="form-gruop">
                    <label>LUAS BANGUNAN</label>
                    <input type="text" class="form-control" required name="luasbangunan" value="<?php echo $row['luasbangunan']; ?>">
                  </div>    
                </div>

              </div>
              <div class="form-group">
                <label>HARGA ASET</label>
                <input type="text" class="form-control" name="harga" required value="<?php echo $row['harga']; ?>">
              </div>
              <div class="form-group">
                <label>NOP/TAHUN</label>
                <input type="text" class="form-control" name="NOP" required value="<?php echo $row['NOP']; ?>">
              </div>
              <div class="form-group">
                <label>NJOP</label>
                <input type="text" class="form-control" name="NJOP" required value="<?php echo $row['NJOP']; ?>">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label>Tahun</label>
                    <input type="text" class="form-control" name="tahun" required value="<?php echo $row['tahun']; ?>">
                  </div>
                  <div class="col-md-8">
                    <label>Tanggal SSP</label>
                    <input type="text" class="form-control" id="tanggalssp" name="tgl_ssp" required value="<?php echo $row['tgl_ssp']; ?>"> 
                  </div>
                </div>

              </div>
              <div class="form-group">
                <label>Nominal SSP</label>
                <input type="text" class="form-control" name="jumlah_ssp" required value="<?php echo $row['jumlah_ssp']; ?>">
              </div>
              <div class="row">
                <div class="col-md-4">
                  <label>Tanggal BPHTB</label>
                  <input type="text" class="form-control" name="tgl_bphtb" required id="tgl_bphtb" value="<?php echo $row['tgl_ssp']; ?>">
                </div>
                <div class="col-md-8">
                  <label>Nominal BPHTB</label>
                  <input type="text" class="form-control" name="jumlah_bphtb" required value="<?php echo $row['jumlah_bphtb']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" required>
                    <?php echo $row['keterangan']; ?>
                  </textarea>
              </div> 
              <div class="form-group">
                <div class="jumbotron">
                  <center><button type="submit" class="btn btn-primary btn-lg" name="simpan"><span class="fa fa-edit"></span> UBAH</button></center>
                </div>
              </div>
              

              
              </div>
            </div>
          </div>
          
        </div>
       </div>
      </form>
     </div>
    </section>
  </div>