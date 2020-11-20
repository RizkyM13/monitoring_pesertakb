<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'setting/ms_user/update'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID User</label>
                    <div class="col-sm-10">
                      <input type="number" name="user_id" class="form-control" placeholder="Masukkan ID User" value="<?php echo $v_ms_user['user_id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kader</label>
                    <div class="col-sm-10">
                    <select name="kader_id" class="form-control">
                        <option value="">-- Pilih Kader --</option>
                        <?php
                        foreach ($nama as $v) {
                        ?>
                        <option value="<?php echo $v->kader_id ?>"><?php echo $v->kader_nama ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="user_name"class="form-control" placeholder="Masukkan Username" value="<?php echo $v_ms_user['user_name'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="user_password"class="form-control" placeholder="Masukkan Password" value="<?php echo $v_ms_user['user_password'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status User</label>
                    <div class="col-sm-10">
                      <select name="user_status" class="form-control">
                          <option value="">--Pilih Status--</option>
                          <option value="1">Aktif</option>
                          <option value="0">Non Aktif</option>
                       
                      </select>
                    </div>
                </div>
                
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'setting/ms_user'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
