<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'transaksi/datakk/tambah_aksi'; ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID KK</label>
                    <div class="col-sm-10">
                      <input type="text" name="kk_id" class="form-control" placeholder="Masukkan ID">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor KK</label>
                    <div class="col-sm-10">
                      <input type="text" name="kk_no" class="form-control" placeholder="Masukkan Nomor KK">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tanggal KK</label>
                    <div class="col-sm-10">
                      <input type="date" name="kk_tgl"class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status KK</label>
                    <div class="col-sm-10">
                      <input type="text" name="kk_status"class="form-control" placeholder="Masukkan Status KK">
                    </div>
                </div>
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'transaksi/datakk'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>