<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'transaksi/datakk/update'; ?>">
                <div class="form-group">
                  
                    <div class="col-sm-10">
                      <input type="hidden" name="kk_id" class="form-control" placeholder="Masukkan ID" value="<?php echo $v_kk['kk_id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor KK</label>
                    <div class="col-sm-10">
                      <input type="text" name="kk_no" class="form-control" placeholder="Masukkan Nomor KK" value="<?php echo $v_kk['kk_no'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tanggal KK</label>
                    <div class="col-sm-10">
                      <input type="date" name="kk_tgl"class="form-control" placeholder="" value="<?php echo $v_kk['kk_tgl'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status KK</label>
                    <div class="col-sm-10">
                      
                      <select name="kk_status" class="form-control">
                          <option value="">--Pilih Status--</option>
                          <option value="">Aktif</option>
                          <option value="">Non Aktif</option>
                       
                      </select>
                    </div>
                </div>

                      <input type="hidden" name="kk_lastupdate"class="form-control" placeholder="Masukkan Status KK" value="<?php echo date('Y-m-d H:i:s', time()) ?>">
                      <input type="hidden" name="kk_lastupdate_by"class="form-control" placeholder="Masukkan Status KK" value="<?php echo $this->session->userdata('user_status') ?>">
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'transaksi/datakk'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>