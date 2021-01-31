<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'akseptor/update'; ?>">
                
                      <input type="hidden" name="akseptor_id" class="form-control" placeholder="Masukkan ID" value="<?php echo $v_akp['akseptor_id'] ?>">
                    
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl" class="form-control" placeholder="Masukkan Tanggal" value="<?php echo $v_akp['tgl'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Kartu</label>
                    <div class="col-sm-10">
                      <input type="number" name="no_kartu"class="form-control" placeholder="Masukkan Nomor Kartu" value="<?php echo $v_akp['no_kartu'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Faskes</label>
                    <div class="col-sm-10">
                    <select name="faskesjenis_id" class="form-control">
                        <?php
                        foreach ($faskes as $v) {
                        ?>
                        <option value="<?php echo $v->faskesjenis_id ?>"><?php echo $v->faskesjenis_nama ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_akseptor"class="form-control" placeholder="Masukkan Nama Akseptor KB" value="<?php echo $v_akp['nama_akseptor'] ?>">
                    </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Suami/Istri</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_pasangan"class="form-control" placeholder="Masukkan Nama Suami/Istri" value="<?php echo $v_akp['nama_pasangan'] ?>">
                    </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                    <select name="desa_kode" class="form-control">
                        <?php
                        foreach ($alamat as $v) {
                        ?>
                        <option value="<?php echo $v->desa_kode ?>"><?php echo $v->desa_nama ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                      <input type="text" name="pekerjaan"class="form-control" placeholder="Masukkan Pekerjaan" value="<?php echo $v_akp['pekerjaan'] ?>">
                    </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Umur</label>
                    <div class="col-sm-10">
                      <input type="number" name="umur"class="form-control" placeholder="Masukkan Umur Akseptor KB" value="<?php echo $v_akp['umur'] ?>">
                    </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Umur Anak Terkecil</label>
                    <div class="col-sm-10">
                      <input type="text" name="u_anak_terkecil"class="form-control" placeholder="Masukkan Umur Anak Terkecil" value="<?php echo $v_akp['u_anak_terkecil'] ?>">
                    </div>
              </div>

             <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kontrasepsi</label>
                    <div class="col-sm-10">
                    <select name="kontrasepsi_id" class="form-control">
                        <?php
                        foreach ($kontrasepsi as $v) {
                        ?>
                        <option value="<?php echo $v->kontrasepsi_id ?>"><?php echo $v->kontransepsi_nama ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status Keluarga</label>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <select name="stt" class="form-control">
                          
                          <option value="1">Gakin</option>
                          <option value="0">Non Gakin</option>
                       
                      </select>
                    </div>
                </div>
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'akseptor'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>