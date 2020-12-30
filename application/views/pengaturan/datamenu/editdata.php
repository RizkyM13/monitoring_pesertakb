<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'menu/update'; ?>">
                
                  
                   
                      <input type="hidden" name="mn_id" class="form-control" placeholder="Masukkan ID" value="<?php echo $v_ms_menu['mn_id'] ?>">
                   
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Menu</label>
                    <div class="col-sm-10">
                      <input type="number" name="mn_kode" class="form-control" placeholder="Masukkan Kode Menu" value="<?php echo $v_ms_menu['mn_kode'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Menu</label>
                    <div class="col-sm-10">
                      <input type="text" name="mn_nama" class="form-control" placeholder="Masukkan Nama Menu" value="<?php echo $v_ms_menu['mn_nama'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Level Menu</label>
                    <div class="col-sm-10">
                      <input type="number" name="mn_level" class="form-control" placeholder="Masukkan Level Menu" value="<?php echo $v_ms_menu['mn_level'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Menu Induk</label>
                    <div class="col-sm-10">
                      <select name="mn_induk" class="form-control">
                          <option value="0">0</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                       
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Icon</label>
                    <div class="col-sm-10">
                      <input type="text" name="mn_icon" class="form-control" placeholder="Masukkan Nama Icon Menu" value="<?php echo $v_ms_menu['mn_icon'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">mn_url</label>
                    <div class="col-sm-10">
                      <input type="text" name="mn_url" class="form-control" placeholder="Masukkan Url Menu" value="<?php echo $v_ms_menu['mn_url'] ?>">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status Menu</label>
                    <div class="col-sm-10">
                      <select name="mn_aktif" class="form-control">
                          <option value="1">Aktif</option>
                          <option value="0">Non Aktif</option>
                       
                      </select>
                    </div>
                </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'menu'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
        
      </section>
    </section>