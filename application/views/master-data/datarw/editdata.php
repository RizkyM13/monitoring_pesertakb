<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'master-data/datarw/update'; ?>">
                
                      <input type="hidden" name="rw_id" class="form-control" placeholder="Masukkan ID RW" value="<?php echo $v_rw['rw_id'] ?>">
                    
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Desa</label>
                    <div class="col-sm-10">
                    <select name="desa_kode" class="form-control">
                        <option value="">-- Pilih Desa --</option>
                        <?php
                        foreach ($nama as $v) {
                        ?>
                        <option value="<?php echo $v->desa_kode ?>"><?php echo $v->desa_nama ?>
                          
                        </option>
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RW</label>
                    <div class="col-sm-10">
                      <input type="text" name="rw"class="form-control" placeholder="Masukkan nama RW" value="<?php echo $v_rw['rw'] ?>">
                    </div>
                </div>
              
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'master-data/datarw'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>