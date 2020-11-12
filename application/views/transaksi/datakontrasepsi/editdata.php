<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'transaksi/datakontrasepsi/update'; ?>">
                
                      <input type="hidden" name="kontrasepsi_id" class="form-control" placeholder="Masukkan ID" value="<?php echo $v_kontrasepsi['kontrasepsi_id'] ?>">
                   
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Kontrasepsi</label>
                    <div class="col-sm-10">
                      <input type="number" name="kontransepsi_kode" class="form-control" placeholder="Masukkan Kode Kontrasepsi" value="<?php echo $v_kontrasepsi['kontransepsi_kode'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Kontrasepsi</label>
                    <div class="col-sm-10">
                      <input type="text" name="kontransepsi_nama"class="form-control" placeholder="Masukkan Nama Kontrasepsi" value="<?php echo $v_kontrasepsi['kontransepsi_nama'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Expired Kontrasepsi</label>
                    <div class="col-sm-10">
                      <input type="number" name="kontransepsi_expired"class="form-control" placeholder="Masukkan Expired Kontrasepsi Dalam Satuan Hari" value="<?php echo $v_kontrasepsi['kontransepsi_expired'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kontrasepsi Aktif</label>
                    <div class="col-sm-10">
                      <select name="kontrasepsi_aktif" class="form-control">
                          <option value="">--Pilih Status--</option>
                          <option value="1">Aktif</option>
                          <option value="0">Non Aktif</option>
                       
                      </select>
                    </div>
                </div>
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'transaksi/datakontrasepsi'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
