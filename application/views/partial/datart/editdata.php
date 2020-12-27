<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'rt/update'; ?>">
                
                      <input type="hidden" name="rt_id" class="form-control" placeholder="Masukkan ID RT" value="<?php echo $v_rt['rt_id'] ?>">
                    
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RW</label>
                    <div class="col-sm-10">
                    <select name="rw_id" class="form-control">
                        
                        <?php
                        foreach ($nama as $v) {
                        ?>
                        <option value="<?php echo $v->rw_id ?>"><?php echo $v->rw ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RT</label>
                    <div class="col-sm-10">
                      <input type="text" name="rt"class="form-control" placeholder="Masukkan Nama RT" value="<?php echo $v_rt['rt'] ?>">
                    </div>
                </div>
              
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'rt'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>