<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'setting/ms_group_menu/ms_group_menu'; ?>">
                <div class="form-group">
                  
                    <div class="col-sm-10">
                      <input type="hidden" name="user_id" class="form-control" placeholder="Masukkan ID Menu">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Group</label>
                    <div class="col-sm-10">
                      <input type="number" name="grp_id"class="form-control" placeholder="Masukkan ID Group">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Update By</label>
                    <div class="col-sm-10">
                      <input type="text" name="update_by"class="form-control" placeholder="Masukkan Update By"> 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Update Time</label>
                    <div class="col-sm-10">
                      <input type="date" name="update_time"class="form-control" placeholder="Masukkan Update Time">
                    </div>
                </div>
                  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'setting/ms_group_menu'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
