<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'desa/tambah_aksi'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Desa</label>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <input type="number" name="desa_kode" class="form-control" placeholder="Masukkan Kode Desa">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kecamatan</label>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                    <select name="kec_kode" class="form-control">
                        
                        <?php
                        foreach ($nama as $v) {
                        ?>
                        <option value="<?php echo $v->kec_kode ?>"><?php echo $v->kec_nama ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Desa</label>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <input type="text" name="desa_nama"class="form-control" placeholder="Masukkan Nama Desa">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Desa Aktif</label>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <select name="desa_aktif" class="form-control">
                          
                          <option value="1">Aktif</option>
                          <option value="0">Non Aktif</option>
                       
                      </select>
                    </div>
                </div>
                  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'desa'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>