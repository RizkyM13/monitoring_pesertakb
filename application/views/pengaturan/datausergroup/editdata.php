<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url('setting/usergroup/update'); ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID User</label>
                    <div class="col-sm-10">
                      <input type="number" name="user_id" class="form-control" placeholder="Ubah ID User">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Group</label>
                    <div class="col-sm-10">
                      <input type="number" name="grp_id"class="form-control" placeholder="Ubah ID Group">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Update By</label>
                    <div class="col-sm-10">
                      <input type="text" name="update_by"class="form-control" value="<?= $user_id;?>" placeholder="Ubah Update By"> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Update Time</label>
                    <div class="col-sm-10">
                      <input type="text" name="update_time"class="form-control" value="<?= $timestamp;?>"  placeholder="Ubah Update Time" readonly>
                    </div>
                </div>
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'setting/usergroup'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>