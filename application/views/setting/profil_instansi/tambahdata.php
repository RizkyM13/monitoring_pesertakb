<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'setting\profil_instansi/tambah_aksi'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="number" name="id" class="form-control" placeholder="Masukkan ID">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="number" name="kode" class="form-control" placeholder="Masukkan Kode">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Instansi</label>
                    <div class="col-sm-10">
                      <input type="text" name="instansi" class="form-control" placeholder="Masukkan Instansi">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nick Instansi</label>
                    <div class="col-sm-10">
                      <input type="text" name="instansi_nick" class="form-control" placeholder="Masukkan Nick Instansi">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Kabupaten</label>
                    <div class="col-sm-10">
                      <input type="text" name="kab_kode" class="form-control" placeholder="Masukkan Kode Kabupaten">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" name="telp" class="form-control" placeholder="Masukkan No Telepon">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Website</label>
                    <div class="col-sm-10">
                      <input type="text" name="website" class="form-control" placeholder="Masukkan Website">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Pos</label>
                    <div class="col-sm-10">
                      <input type="text" name="kodepos" class="form-control" placeholder="Masukkan Kode Pos">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Logo</label>
                    <div class="col-sm-10">
                      <input type="text" name="logo" class="form-control" placeholder="Masukkan Logo">
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