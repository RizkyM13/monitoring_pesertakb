<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'setting\profil_instansi/update'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="number" name="" class="form-control" placeholder="Masukkan ID" value="<?php echo $V_['id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="number" name="" class="form-control" placeholder="Masukkan Kode" value="<?php echo $V_['kode'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Instansi</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Instansi" value="<?php echo $V_['instansi'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nick Instansi</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Nick Instansi" value="<?php echo $V_['Instansi_nick'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Alamat" value="<?php echo $V_['alamat'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Kabupaten</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Kode Kabupaten" value="<?php echo $V_['kab_kode'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan No Telepon" value="<?php echo $V_['telp'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Email" value="<?php echo $V_['email'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">website</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan website" value="<?php echo $V_['website'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Pos</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Kode Pos" value="<?php echo $V_['kodepos'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Logo</label>
                    <div class="col-sm-10">
                      <input type="text" name="" class="form-control" placeholder="Masukkan Logo" value="<?php echo $v_['logo'] ?>">
                    </div>
                </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'setting\profil_instansi'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>