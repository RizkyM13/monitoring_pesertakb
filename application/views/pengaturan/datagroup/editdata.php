<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'setting/group/update'; ?>">
                
                      <input type="hidden" name="grp_id" class="form-control" placeholder="Masukkan ID Group">
                    
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Group</label>
                    <div class="col-sm-10">
                      <input type="number" name="grp_kode" class="form-control" placeholder="Masukkan Kode Group" value="<?php echo $v_ms_group['grp_kode'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Group</label>
                    <div class="col-sm-10">
                      <input type="text" name="grp_nama"class="form-control" placeholder="Masukkan Nama Group" value="<?php echo $v_ms_group['grp_nama'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Group Aktif</label>
                    <div class="col-sm-10">
                      <select name="grp_aktif" class="form-control">
                          <option value="">--Pilih Status--</option>
                          <option value="1">Aktif</option>
                          <option value="0">Non Aktif</option>
                       
                      </select>
                    </div>
                </div>
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
