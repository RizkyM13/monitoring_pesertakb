<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'master-data/datakader/tambah_aksi'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Kader</label>
                    <div class="col-sm-10">
                      <input type="number" name="kader_id" class="form-control" placeholder="Masukkan ID Kader">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Kader</label>
                    <div class="col-sm-10">
                      <input type="text" name="kader_nama" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">NIK Kader</label>
                    <div class="col-sm-10">
                      <input type="number" name="kader_nik"class="form-control" placeholder="">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Sex Kader</label>
                    <div class="col-sm-10">
                      <input type="text" name="kader_sex"class="form-control" placeholder=""> 
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kelahiran Kader</label>
                    <div class="col-sm-10">
                      <input type="text" name="kader_kelahiran"class="form-control" placeholder="">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tgl Lahir Kader</label>
                    <div class="col-sm-10">
                      <input type="text" name="kader_tgllahir"class="form-control" placeholder=""> 
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email Kader</label>
                    <div class="col-sm-10">
                      <input type="text" name="kader_email"class="form-control" placeholder=""> 
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Hp Kader</label>
                    <div class="col-sm-10">
                      <input type="number" name="kader_hp"class="form-control" placeholder=""> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kader Aktif</label>
                    <div class="col-sm-10">
                      <select name="kader_aktif" class="form-control">
                          <option value="">--Pilih Status--</option>
                          <option value="1">Aktif</option>
                          <option value="0">Non Aktif</option>
                       
                      </select>
                    </div>
                </div>
                  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'master-data/datadesa'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
