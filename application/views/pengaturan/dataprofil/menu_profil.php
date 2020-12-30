<section id="main-content">
<section class="wrapper">
<div class="row mt">
<div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb">DATA DETAIL PROFIL</h4>
            </div>
          </div>
            <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" method="post">

                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Kode</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['kode'] ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Instansi</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['instansi'] ?></p>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Nick Instansi</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['instansi_nick'] ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">alamat</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['alamat'] ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Nama Kabupaten</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['kab_nama'] ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Telepon</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['telp'] ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['email'] ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Website</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['website'] ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Kode Pos</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['kodepos'] ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Logo</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $v_profil['logo'] ?></p>
                  </div>
                </div>

                <a href="<?php echo base_url() . 'profil'; ?>" class="btn btn-danger">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      </section>
    </section>
