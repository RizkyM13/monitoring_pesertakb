<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'penduduk/update'; ?>">
                      
                
                      <input type="hidden" name="penduduk_id" class="form-control" placeholder="Masukkan ID Penduduk" value="<?php echo $v_penduduk['penduduk_id'] ?>">
                   
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID KK</label>
                    <div class="col-sm-10">
                      <input type="number" name="kk_id"class="form-control" placeholder="Masukkan ID KK">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pengurutan KK</label>
                    <div class="col-sm-10">
                      <input type="number" name="kk_urut"class="form-control" placeholder="Masukkan Pengurutan KK" value="<?php echo $v_penduduk['kk_urut'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="number" name="nik"class="form-control" placeholder="Masukkan NIK" value="<?php echo $v_penduduk['nik'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">EKTP</label>
                    <div class="col-sm-10">
                      <input type="number" name="ektp"class="form-control" placeholder="Masukkan EKTP" value="<?php echo $v_penduduk['ektp'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama"class="form-control" placeholder="Masukkan Nama" value="<?php echo $v_penduduk['nama'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <select name="jenis_kelamin" class="form-control">
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" name="tmp_lahir"class="form-control" placeholder="Masukkan Tempat Lahir" value="<?php echo $v_penduduk['tmp_lahir'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl_lahir"class="form-control" placeholder="Masukkan Tanggal Lahir" value="<?php echo $v_penduduk['tgl_lahir'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tahun Lahir</label>
                    <div class="col-sm-10">
                      <input type="number" name="thn_lahir"class="form-control" placeholder="Masukkan Tahun Lahir" value="<?php echo $v_penduduk['thn_lahir'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Golongan Darah</label>
                    <div class="col-sm-10">
                      <select name="goldarah" class="form-control">
                          <option value="A">A</option>
                          <option value="AB">AB</option>
                          <option value="B">B</option>
                          <option value="O">O</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Rhesus</label>
                    <div class="col-sm-10">
                      <select name="rhesus" class="form-control">
                          <option value="+">Positif</option>
                          <option value="-">Negatif</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Suku</label>
                    <div class="col-sm-10">
                    <select name="suku_id" class="form-control">
                        <?php
                        foreach ($suku as $v) {
                        ?>
                        <option value="<?php echo $v->suku_id ?>"><?php echo $v->suku_nama ?></option>
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                      <input type="text" name="agama"class="form-control" placeholder="Masukkan Agama" value="<?php echo $v_penduduk['agama'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-10">
                      <input type="text" name="pendidikan"class="form-control" placeholder="Masukkan Pendidikan" value="<?php echo $v_penduduk['pendidikan'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pendidikan Di Tempuh</label>
                    <div class="col-sm-10">
                      <input type="text" name="pendidikan_ditempuh"class="form-control" placeholder="Masukkan Pendidikan Di Tempuh" value="<?php echo $v_penduduk['pendidikan_ditempuh'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                      <input type="text" name="pekerjaan"class="form-control" placeholder="Masukkan Pekerjaan" value="<?php echo $v_penduduk['pekerjaan'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status Perkawinan</label>
                    <div class="col-sm-10">
                      <input type="text" name="status_perkawinan"class="form-control" placeholder="Masukkan Status Perkawinan" value="<?php echo $v_penduduk['status_perkawinan'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Hubungan Keluarga</label>
                    <div class="col-sm-10">
                      <input type="text" name="hub_keluarga"class="form-control" placeholder="Masukkan Hubungan Keluarga" value="<?php echo $v_penduduk['hub_keluarga'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kewarganegaraan</label>
                    <div class="col-sm-10">
                      <input type="text" name="kewarganegaraan"class="form-control" placeholder="Masukkan Kewarganegaraan" value="<?php echo $v_penduduk['kewarganegaraan'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Paspor</label>
                    <div class="col-sm-10">
                      <input type="number" name="no_paspor"class="form-control" placeholder="Masukkan Nomor Paspor" value="<?php echo $v_penduduk['no_paspor'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Kartu Izin Terbatas (KITAS)</label>
                    <div class="col-sm-10">
                      <input type="number" name="no_kitas"class="form-control" placeholder="Masukkan Nomor Kartu Izin Terbatas" value="<?php echo $v_penduduk['no_kitas'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" name="ayah"class="form-control" placeholder="Masukkan Ayah" value="<?php echo $v_penduduk['ayah'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" name="ibu"class="form-control" placeholder="Masukkan Ibu" value="<?php echo $v_penduduk['ibu'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status Kependudukan</label>
                    <div class="col-sm-10">
                      <select name="stt" class="form-control">
                          <option value="1">Mati</option>
                          <option value="0">Pindah</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Domisili di desa</label>
                    <div class="col-sm-10">
                      <select name="ada" class="form-control">
                          <option value="1">Ya</option>
                          <option value="0">Tidak</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Desa</label>
                    <div class="col-sm-10">
                    <select name="desa_kode" class="form-control">
                        <?php
                        foreach ($desa as $v) {
                        ?>
                        <option value="<?php echo $v->desa_kode ?>"><?php echo $v->desa_nama ?></option>
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RT</label>
                    <div class="col-sm-10">
                    <select name="rt_id" class="form-control">
                        <?php
                        foreach ($rt as $v) {
                        ?>
                        <option value="<?php echo $v->rt_id ?>"><?php echo $v->rt ?></option>
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>
                 
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RW</label>
                    <div class="col-sm-10">
                    <select name="rw_id" class="form-control">
                        <?php
                        foreach ($rw as $v) {
                        ?>
                        <option value="<?php echo $v->rw_id ?>"><?php echo $v->rw ?></option>
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>

                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Kartu Keluarga</label>
                    <div class="col-sm-10">
                      <input type="number" name="kk"class="form-control" placeholder="Masukkan Nomor Kartu Keluarga">
                    </div>
                </div>
                
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'penduduk'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
