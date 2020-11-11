<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'master-data/datart/update'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID RT</label>
                    <div class="col-sm-10">
                      <input type="number" name="rt_id" class="form-control" placeholder="Masukkan ID RT" value="<?php echo $v_rt['rt_id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID RW</label>
                    <div class="col-sm-10">
                      <input type="number" name="rt_id" class="form-control" placeholder="Masukkan ID RW" value="<?php echo $v_rt['rw_id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RT</label>
                    <div class="col-sm-10">
                      <input type="text" name="rt"class="form-control" placeholder="" value="<?php echo $v_rt['rt'] ?>">
                    </div>
                </div>
              
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'master-data/datart'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>