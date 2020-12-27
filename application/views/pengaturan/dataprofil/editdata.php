<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'profil/update'; ?>">
                
                  
                   
                      <input type="hidden" name="id" class="form-control" placeholder="Masukkan ID" value="<?php echo $v_profil['id'] ?>">
                   
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="number" name="kode" class="form-control" placeholder="Masukkan Kode" value="<?php echo $v_profil['kode'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Instansi</label>
                    <div class="col-sm-10">
                      <input type="text" name="instansi" class="form-control" placeholder="Masukkan Instansi" value="<?php echo $v_profil['instansi'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nick Instansi</label>
                    <div class="col-sm-10">
                      <input type="text" name="instansi_nick" class="form-control" placeholder="Masukkan Nick Instansi" value="<?php echo $v_profil['instansi_nick'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="<?php echo $v_profil['alamat'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Kabupaten</label>
                    <div class="col-sm-10">
                      <input type="text" name="kab_kode" class="form-control" placeholder="Masukkan Kode Kabupaten" value="<?php echo $v_profil['kab_kode'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" name="telp" class="form-control" placeholder="Masukkan No Telepon" value="<?php echo $v_profil['telp'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo $v_profil['email'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">website</label>
                    <div class="col-sm-10">
                      <input type="text" name="website" class="form-control" placeholder="Masukkan website" value="<?php echo $v_profil['website'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Pos</label>
                    <div class="col-sm-10">
                      <input type="text" name="kodepos" class="form-control" placeholder="Masukkan Kode Pos" value="<?php echo $v_profil['kodepos'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Logo</label>
                    <div class="col-sm-10">
                      <input type="text" name="logo" class="form-control" placeholder="Masukkan Logo" value="<?php echo $v_profil['logo'] ?>">
                    </div>
                </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'profil'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
        
      </section>
    </section>