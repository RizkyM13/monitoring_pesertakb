<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'transaksi/penduduk/update'; ?>">
                      
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Penduduk</label>
                    <div class="col-sm-10">
                      <input type="hidden" name="penduduk_id" class="form-control" placeholder="Masukkan ID Penduduk" value="<?php echo $v_penduduk['penduduk_id'] ?>">
                    </div>
                   
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID KK</label>
                    <div class="col-sm-10">
                      <input type="number" name="kk_id" class="form-control" placeholder="Masukkan ID KK" value="<?php echo $v_penduduk['kk_id'] ?>">
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
                  <label class="col-sm-2 col-sm-2 control-label">NAMA</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama"class="form-control" placeholder="Masukkan Nama" value="<?php echo $v_penduduk['nama'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" name="jenis_kelamin"class="form-control" placeholder="Masukkan Jenis Kelamin" value="<?php echo $v_penduduk['jenis_kelamin'] ?>">
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
                      <input type="number" name="tgl_lahir"class="form-control" placeholder="Masukkan Tanggal Lahir" value="<?php echo $v_penduduk['tgl_lahir'] ?>">
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
                      <input type="text" name="goldarah"class="form-control" placeholder="Masukkan Golongan Darah" value="<?php echo $v_penduduk['goldarah'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Rhesus</label>
                    <div class="col-sm-10">
                      <input type="text" name="reshus"class="form-control" placeholder="Masukkan Rhesus" value="<?php echo $v_penduduk['rhesus'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Suku</label>
                    <div class="col-sm-10">
                      <input type="number" name="suku_id"class="form-control" placeholder="Masukkan ID Suku" value="<?php echo $v_penduduk['suku_id'] ?>">
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
                      <input type="number" name="pendidikan_ditempuh"class="form-control" placeholder="Masukkan Pendidikan Di Tempuh" value="<?php echo $v_penduduk['pendidikan_ditempuh'] ?>">
                    </div>
                </div>
                div class="form-group">
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
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Kitas</label>
                    <div class="col-sm-10">
                      <input type="number" name="no_kitas"class="form-control" placeholder="Masukkan Nomor Kitas" value="<?php echo $v_penduduk['no_kitas'] ?>">
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
                  <label class="col-sm-2 col-sm-2 control-label">STT</label>
                    <div class="col-sm-10">
                      <input type="number" name="stt"class="form-control" placeholder="Masukkan STT" value="<?php echo $v_penduduk['stt'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ada</label>
                    <div class="col-sm-10">
                      <input type="text" name="ada"class="form-control" placeholder="Masukkan Ada" value="<?php echo $v_penduduk['ada'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Desa</label>
                    <div class="col-sm-10">
                      <input type="number" name="kode_desa"class="form-control" placeholder="Masukkan Kode Desa" value="<?php echo $v_penduduk['kode_desa'] ?>">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RT</label>
                    <div class="col-sm-10">
                      <input type="text" name="rt"class="form-control" placeholder="Masukkan RT" value="<?php echo $v_penduduk['rt'] ?>">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RW</label>
                    <div class="col-sm-10">
                      <input type="text" name="rw"class="form-control" placeholder="Masukkan RW" value="<?php echo $v_penduduk['rw'] ?>">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">KK</label>
                    <div class="col-sm-10">
                      <input type="number" name="kk"class="form-control" placeholder="Masukkan KK" value="<?php echo $v_penduduk['kk'] ?>">
                    </div>
                </div>
                
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'transaksi/penduduk'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
