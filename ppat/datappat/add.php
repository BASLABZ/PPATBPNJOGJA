<?php 
      $tahun = date('Y');
      if (isset($_POST['simpan'])) {
        $tanggalakta = $_POST['tanggalakta'];
        $konverttanggal = jin_date_sql($tanggalakta);
        $tahun = date('Y');
        $konversitgl_ssp = jin_date_sql($_POST['tgl_ssp']);
        $konversitgl_bphtb = jin_date_sql($_POST['tgl_bphtb']);
        $query  = mysql_query("INSERT INTO ppat (tanggalinput, namapemohon,
                                     alamatpemohon, namapenerima, alamatpenerima,
                                     alamattanah, jenisakta, noakta,
                                     tanggalakta, jenisaset, luastanah,
                                     luasbangunan, harga, NOP,
                                     NJOP, tahun, tgl_ssp,
                                     jumlah_ssp, tgl_bphtb, jumlah_bphtb,
                                     status, verifikasi, keterangan
                                     ) 
                              VALUES (
                                    NOW(),'".$_POST['namapemohon']."',
                                    '".$_POST['alamatpemohon']."', '".$_POST['namapenerima']."',
                                    '".$_POST['alamatpenerima']."', '".$_POST['alamattanah']."',
                                    '".$_POST['jenisakta']."', '".$_POST['noakta']."',
                                    '".$konverttanggal."', '".$_POST['jenisaset']."', '".$_POST['luastanah']."', '".$_POST['luasbangunan']."', '".$_POST['harga']."', '".$_POST['NOP']."', '".$_POST['NJOP']."', '".$tahun."', '".$konversitgl_ssp."', '".$_POST['jumlah_ssp']."', '".$konversitgl_bphtb."', '".$_POST['jumlah_bphtb']."', 'MENUNGGU', 'BELUM DIVERIFIKASI', '".$_POST['keterangan']."');

        ");
        if ($query) {
          
        }
      }
 ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>DATA PPAT</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">DATA PPAT</a></li>
        <li class="active">Tambah</li>
      </ol>
    </section>
    <section class="content">
    <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Data PPAT</h3>
              </div>
     <div class="box-body">
        <div class="row">
              <form class="role" method="POST">
                <div class="stepwizard col-md-offset-3">
                  <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                      <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                      <p>Step 1</p>
                    </div>
                    <div class="stepwizard-step">
                      <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                      <p>Step 2</p>
                    </div>
                    <div class="stepwizard-step">
                      <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                      <p>Step 3</p>
                    </div>
                  </div>
              </div>
          <div class="row setup-content" id="step-1">
            <div class="col-xs-6 col-md-offset-3">
              <div class="col-md-12">
                <h3> INPUT PPAT PEMOHON & PENERIMA</h3>
                <div class="form-group">
                  <label class="control-label">Nama Pemohon</label>
                  <input  maxlength="100" type="text" required class="form-control" placeholder="Masukkan Nama Pemohon"  name="namapemohon" />
                </div>
                <div class="form-group">
                  <label class="control-label">Alamat Pemohon</label>
                  <textarea required class="form-control" name="alamatpemohon" placeholder="Masukkan Alamat Pemohon" ></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Nama Penerima</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama Penerima" name="namapenerima">
                </div>
                 <div class="form-group">
                  <label class="control-label">Alamat Penerima</label>
                  <textarea required class="form-control" placeholder="Masukkan Alamat Penerima" name="alamatpenerima" ></textarea>
                </div>
                <button class="btn btn-primary nextBtn btn-sm pull-right" type="button" >Selanjutnya  <span class="fa fa-arrow-right"></span> </button>
              </div>
            </div>
          </div>
          <div class="row setup-content" id="step-2">
            <div class="col-xs-6 col-md-offset-3">
              <div class="col-md-12">
                <h3> DATA TANAH / ASET</h3>
                <div class="form-group">
                  <label class="control-label">No AKTA</label>
                  <input type="text" class="form-control" name="noakta" required>
                </div>
                <div class="form-gruop">
                  <label>Tanggal Akta</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="tanggalakta" name="tanggalakta">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
                <div class="form-group">
                      <label>Alamat Tanah</label>
                      <textarea class="form-control" required name="alamattanah"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Jenis Akta</label>
                      <select class="form-control" name="jenisakta" required>
                        <option value="null">-Pilih Jenis Akta-</option>
                       <option value="AJB">Akta Jual Beli</option>
                       <option value="Hibah">AKTA HIBAH</option>
                       <option value="Tukar-menukar">AKTA TUKAR - MENUKAR</option>
                       <option value="APHB">AKTA APHB</option>
                       <option value="Inbreng">AKTA Inbreng</option>
                       <option value="APHT">AKTA APHT</option>
                       <option value="APHGB/HP diatas HM">AKTA APHGB/HP diatas HM</option>
                       <option value="SKMHT">AKTA SKMHT</option>
                    </select>
                    </div>

                <button class="btn btn-primary nextBtn btn-sm pull-right" type="button" >Selanjutnya  <span class="fa fa-arrow-right"></span> </button>
              </div>
            </div>
          </div>
          <div class="row setup-content" id="step-3">
            <div class="col-xs-6 col-md-offset-3">
              <div class="col-md-12">
                <h3> Detail TANAH / ASET</h3>
                <div class="form-group">
                      <label>Jenis Aset</label>
                      <select class="form-control" name="jenisaset" required id="jenisaset">
                        <option value="null">-Pilih Aset-</option>
                        <option value="TANAH">TANAH</option>
                        <option value="BANGUNAN">BANGUNAN</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                         <div class="form-group">
                          <label>LUAS TANAH</label>
                          <input type="text" class="form-control" name="luastanah" id="luastanah">
                        </div>     
                      </div>
                      <div class="col-md-6">
                        <div class="form-gruop">
                          <label>LUAS BANGUNAN</label>
                          <input type="text" class="form-control" required name="luasbangunan" id="luasbangunan">
                        </div>    
                      </div>
                    </div>
                     <div class="form-group">
                      <label>HARGA (Rp.)</label>
                      <input type="text" class="form-control" name="harga" required>
                    </div>
                    <div class="form-group">
                      <label>NOP/TAHUN</label>
                      <input type="text" class="form-control" name="NOP" required>
                    </div>
                    <div class="form-group">
                      <label>NJOP(Rp.)</label>
                      <input type="text" class="form-control" name="NJOP" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                          <label>Tahun</label>
                          <input type="text" class="form-control" name="tahun" required disabled value="<?php echo $tahun; ?>">
                        </div>
                        <div class="col-md-8">
                          <label>Tanggal SSP</label>
                          <input type="text" class="form-control" id="tanggalssp" name="tgl_ssp" required> 
                        </div>
                      </div>
                      <div class="form-group">
                      <label>Nominal SSP (Rp.)</label>
                      <input type="text" class="form-control" name="jumlah_ssp" required>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <label>Tanggal BPHTB</label>
                        <input type="text" class="form-control" name="tgl_bphtb" required id="tgl_bphtb">
                      </div>
                      <div class="col-md-8">
                        <label>Nominal BPHTB (Rp.)</label>
                        <input type="text" class="form-control" name="jumlah_bphtb" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Keterangan</label>
                        <textarea class="form-control" name="keterangan" required></textarea>
                    </div> 
                    </div>
                <button class="btn btn-success btn-lg pull-right" type="submit" name="simpan"><span class="fa fa-save"></span> SIMPAN</button>
              </div>
            </div>
          </div>
        </form>
      </div>
     </div>
     </div>
    </section>
</div>
<script type="text/javascript">
  $('#jenisaset').change(function () {
    $("#luastanah").attr("disabled", $("#jenisaset").val() == "TANAH");
});
</script>