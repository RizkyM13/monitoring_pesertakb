<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'master-data/datakecamatan/update'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Kecamatan</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Kode Kecamatan" value="<?php echo $v_kk['k'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Nama Kecamatan" value="<?php echo $v_kk[''] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kecamatan Aktif</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Kecamatan  Aktif" value="<?php echo $v_kk[''] ?>">
                    </div>
                </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'master-data/datakecamatan'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>