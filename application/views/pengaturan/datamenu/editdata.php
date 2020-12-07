<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'setting/menu/update'; ?>">
                
                      <input type="hidden" name="mn_id" class="form-control" placeholder="Masukkan ID Group">
                    
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Menu</label>
                    <div class="col-sm-10">
                      <input type="number" name="mn_kode" class="form-control" placeholder="Masukkan Kode Group" value="<?php echo $v_ms_menu['mn_kode'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Menu</label>
                    <div class="col-sm-10">
                      <input type="text" name="mn_nama"class="form-control" placeholder="Masukkan Nama Menu" value="<?php echo $v_ms_menu['mn_nama'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Menu Level</label>
                    <div class="col-sm-10">
                      <input type="text" name="mn_level"class="form-control" placeholder="Masukkan Level" value="<?php echo $v_ms_menu['mn_level'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Induk</label>
                    <div class="col-sm-10">
                      <input type="text" name="mn_induk"class="form-control" placeholder="Masukkan Nama Induk" value="<?php echo $v_ms_menu['mn_induk'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Icon</label>
                    <div class="col-sm-10">
                      <input type="text" name="mn_icon"class="form-control" placeholder="Masukkan Icon" value="<?php echo $v_ms_menu['mn_icon'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Url</label>
                    <div class="col-sm-10">
                      <input type="text" name="mn_url"class="form-control" placeholder="Masukkan url" value="<?php echo $v_ms_menu['mn_url'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Group Aktif</label>
                    <div class="col-sm-10">
                      <select name="mn_aktif" class="form-control">
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
