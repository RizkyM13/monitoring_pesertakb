<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'setting/ms_user_group/tambah_aksi'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID User</label>
                    <div class="col-sm-10">
                      <input type="number" name="user_id" class="form-control" placeholder="Masukkan ID User">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Group</label>
                    <div class="col-sm-10">
                      <input type="number" name="grp_id"class="form-control" placeholder="Masukkan ID Group">
                    </div>
                </div>
                 
                    
                      <input type="hidden" name="update_by"class="form-control" placeholder="Masukkan Update By" value="<?php echo $this->session->userdata('user_id'); ?>> 
                    
                
                  
                      <input type="hidden" name="update_time"class="form-control" placeholder="Masukkan Update Time" value="<?php echo date('Y-m-d H:i:s', time()) ?>">
                    
                  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'setting/ms_user_group'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
