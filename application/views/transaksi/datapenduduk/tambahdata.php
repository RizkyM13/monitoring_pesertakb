<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
          <div class="form-panel">
            <br>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'transaksi/datapenduduk/tambah_aksi'; ?>">
                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Penduduk</label>
                    <div class="col-sm-10">
                      <input type="hidden" name="penduduk_id" class="form-control" placeholder="Masukkan ID Penduduk">
                    </div>
                  </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID KK</label>
                    <div class="col-sm-10">
                      <input type="number" name="kk_id" class="form-control" placeholder="Masukkan ID KK">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pengurutan KK</label>
                    <div class="col-sm-10">
                      <input type="number" name="kk_urut"class="form-control" placeholder="Masukkan Pengurutan KK">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="number" name="nik"class="form-control" placeholder="Masukkan NIK">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">EKTP</label>
                    <div class="col-sm-10">
                      <input type="number" name="ektp"class="form-control" placeholder="Masukkan EKTP">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama"class="form-control" placeholder="Masukkan Nama">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" name="jenis_kelamin"class="form-control" placeholder="Masukkan Jenis Kelamin">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" name="temp_lahir"class="form-control" placeholder="Masukkan Tempat Lahir">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="number" name="tgl_lahir"class="form-control" placeholder="Masukkan Tanggal Lahir">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tahun Lahir</label>
                    <div class="col-sm-10">
                      <input type="number" name="thn_lahir"class="form-control" placeholder="Masukkan Tahun Lahir">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Golongan Darah</label>
                    <div class="col-sm-10">
                      <input type="text" name="gol_darah"class="form-control" placeholder="Masukkan Golongan Darah">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Rhesus</label>
                    <div class="col-sm-10">
                      <input type="number" name="rhesus"class="form-control" placeholder="Masukkan Rhesus">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID Suku</label>
                    <div class="col-sm-10">
                      <input type="number" name="suku_id"class="form-control" placeholder="Masukkan ID Suku">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                      <input type="text" name="agama"class="form-control" placeholder="Masukkan Agama">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-10">
                      <input type="text" name="pendidikan"class="form-control" placeholder="Masukkan Pendidikan">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pendidikan Di Tempuh</label>
                    <div class="col-sm-10">
                      <input type="text" name="pendidikan_ditempuh"class="form-control" placeholder="Masukkan Pendidikan Di Tempuh">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                      <input type="text" name="pekerjaan"class="form-control" placeholder="Masukkan Pekerjaan">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status Perkawinan</label>
                    <div class="col-sm-10">
                      <input type="text" name="status_perkawinan"class="form-control" placeholder="Masukkan Status Perkawinan">
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Hubungan Keluarga</label>
                    <div class="col-sm-10">
                      <input type="text" name="hub_keluarga"class="form-control" placeholder="Masukkan Hubungan Keluarga">
                    </div>
                    <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kewarganegaraan</label>
                    <div class="col-sm-10">
                      <input type="text" name="kewarganegaraan"class="form-control" placeholder="Masukkan Kewarganegaraan">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Paspor</label>
                    <div class="col-sm-10">
                      <input type="number" name="no_paspor"class="form-control" placeholder="Masukkan Nomor Paspor">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Kitas</label>
                    <div class="col-sm-10">
                      <input type="number" name="no_kitas"class="form-control" placeholder="Masukkan Nomor Kitas">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" name="ayah"class="form-control" placeholder="Masukkan Ayah">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" name="ibu"class="form-control" placeholder="Masukkan Ibu">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">STT</label>
                    <div class="col-sm-10">
                      <input type="number" name="stt"class="form-control" placeholder="Masukkan STT">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ada</label>
                    <div class="col-sm-10">
                      <input type="text" name="ada"class="form-control" placeholder="Masukkan Ada">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kode Desa</label>
                    <div class="col-sm-10">
                      <input type="number" name="kode_desa"class="form-control" placeholder="Masukkan Kode Desa">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RT</label>
                    <div class="col-sm-10">
                      <input type="number" name="rt"class="form-control" placeholder="Masukkan RT">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">RW</label>
                    <div class="col-sm-10">
                      <input type="number" name="rw"class="form-control" placeholder="Masukkan RW">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">KK</label>
                    <div class="col-sm-10">
                      <input type="number" name="kk"class="form-control" placeholder="Masukkan KK">
                    </div>
                </div>
                
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'transaksi/datapenduduk'; ?>" class="btn btn-danger">Kembali</a>
                
              </form>
              
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
    </section>
