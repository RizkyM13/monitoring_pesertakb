<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'master-data/datafaskesjenis/update'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Faskes Data</label>
                    <div class="col-sm-10">
                      <input type="number" name="faskesjenis_id" class="form-control" placeholder="Masukkan ID Faskes Data" value="<?php echo $v_ms_faskes_jenis['faskesjenis_id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Faskes Jenis</label>
                    <div class="col-sm-10">
                      <input type="number" name="faskesjenis_kode" class="form-control" placeholder="Masukkan Kode Faskes Jenis" value="<?php echo $v_ms_faskes_jenis['faskesjenis_kode'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Faskes Jenis</label>
                    <div class="col-sm-10">
                      <input type="text" name="faskesjenis_nama"class="form-control" placeholder="Masukkan Jenis Faskes" value="<?php echo $v_ms_faskes_jenis['faskesjenis_nama'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Faskes Jenis Aktif</label>
                    <div class="col-sm-10">
                      <select name="faskesjenis_aktif" class="form-control">
                          <option value="">--Pilih Status--</option>
                          <option value="1">Aktif</option>
                          <option value="0">Non Aktif</option>
                       
                      </select>
                    </div>
                </div>
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'master-data/datafaskesjenis'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
