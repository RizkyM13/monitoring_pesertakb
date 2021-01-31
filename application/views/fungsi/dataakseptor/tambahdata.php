<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'akseptor/tambah_aksi'; ?>">
                      <input type="hidden" name="akseptor_id" class="form-control" placeholder="Masukkan ID">

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl" class="form-control" placeholder="Masukkan Tanggal">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Kartu</label>
                    <div class="col-sm-10">
                      <input type="number" name="no_kartu"class="form-control" placeholder="Masukkan Nomor Kartu">
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
                      <input type="text" name="nama_akseptor"class="form-control" placeholder="Masukkan Nama Akseptor KB">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Suami/Istri</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_pasangan"class="form-control" placeholder="Masukkan Nama Suami/Istri">
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
                      <input type="text" name="pekerjaan"class="form-control" placeholder="Masukkan Pekerjaan">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Umur</label>
                    <div class="col-sm-10">
                      <input type="number" name="umur"class="form-control" placeholder="Masukkan Umur">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Umur Anak Terkecil</label>
                    <div class="col-sm-10">
                      <input type="text" name="u_anak_terkecil"class="form-control" placeholder="Masukkan Umur Anak Terkecil">
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
                    <div class="col-sm-10">
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