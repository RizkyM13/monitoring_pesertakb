<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'master-data/datafaskes/tambah_aksi'; ?>">
                
                      <input type="hidden" name="faskes_id" class="form-control" placeholder="Masukkan ID Faskes">
                    
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Faskes Jenis</label>
                    <div class="col-sm-10">
                      <input type="number" name="faskesjenis_id" class="form-control" placeholder="Masukkan ID Faskes Jenis">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Faskes</label>
                    <div class="col-sm-10">
                      <input type="number" name="faskes_kode"class="form-control" placeholder="Masukkan Kode Faskes">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Faskes</label>
                    <div class="col-sm-10">
                      <input type="text" name="faskes_nama" class="form-control" placeholder="Masukkan Nama Faskes">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat Faskes</label>
                    <div class="col-sm-10">
                      <input type="text" name="faskes_alamat" class="form-control" placeholder="Masukkan Alamat Faskes">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Desa</label>
                    <div class="col-sm-10">
                    <select name="desa_kode" class="form-control">
                        <option value="">-- Pilih Desa --</option>
                        <?php
                        foreach ($nama as $v) {
                        ?>
                        <option value="<?php echo $v->desa_kode ?>"><?php echo $v->desa_nama ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Faskes Aktif</label>
                    <div class="col-sm-10">
                      <select name="faskes_aktif" class="form-control">
                          <option value="">--Pilih Status--</option>
                          <option value="1">Aktif</option>
                          <option value="0">Non Aktif</option>
                       
                      </select>
                    </div>
                </div>
                  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'master-data/datafaskes'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>