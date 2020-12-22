<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url('usergroup/update'); ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama User</label>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                    <select name="user_id" class="form-control">
                        <option value="">-- Pilih User --</option>
                        <?php
                        foreach ($usernama as $v) {
                        ?>
                        <option value="<?php echo $v->user_id ?>"><?php echo $v->user_name ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Group</label>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                    <select name="grp_id" class="form-control">
                        <option value="">-- Pilih User --</option>
                        <?php
                        foreach ($groupnama as $v) {
                        ?>
                        <option value="<?php echo $v->grp_id ?>"><?php echo $v->grp_nama ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>
          
                 
                  
                    
                      <input type="hidden" name="update_by"class="form-control" value="<?= $user_id;?>" placeholder="Ubah Update By"> 
                    
                
                 
                    
                      <input type="hidden" name="update_time"class="form-control" value="<?= $timestamp;?>"  placeholder="Ubah Update Time" readonly>
                    
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'usergroup'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
