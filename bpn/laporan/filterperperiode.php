  <div class="content-wrapper">
    <section class="content-header">
      <h1>Cetak Laporan</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan</a></li>
        <li class="active">Cetak Laporan Pembuatan Akta Perbulan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Cetak Laporan Pembuatan Akta Perbulan</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <form class="role" method="POST">
                      <div class="form-gruop">
                        <label>Nama P.P.A.T</label>
                        <input type="text" class="form-control" disabled value="<?php echo $_SESSION['namalengkap']; ?>">
                      </div> 
                      <div class="form-group">
                        <label>NPWP</label> 
                        <input type="text" class="form-control" disabled value="<?php echo $_SESSION['NPWP']; ?>">
                      </div>
                      <div class="form-gruop">
                        <label>DAERAH KERJA</label>
                        <input type="text" class="form-control" disabled value="KABUPATEN CIREBON">
                      </div>
                      <div class="form-gruop">
                        <label>Periode</label>
                        <input type="text" class="form-control" id="tgl_periode">
                      </div>
                      <div class="form-group pull-right">
                      <br>
                        <button type="submit" class="btn btn-primary"> <span class="fa fa-print"></span> CETAK</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
             </div> 
          </div>
      </div>
  </section>
</div>