<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'setting/group/tambah_aksi'; ?>">
                
                      <input type="hidden" name="grp_id" class="form-control" placeholder="Masukkan ID Group">
                    
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Group</label>
                    <div class="col-sm-10">
                      <input type="text" name="grp_kode" class="form-control" placeholder="Masukkan Kode Group">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Group</label>
                    <div class="col-sm-10">
                      <input type="text" name="grp_nama"class="form-control" placeholder="Masukkan Nama Group">
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
                  <a href="<?php echo base_url() . 'setting/group'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
