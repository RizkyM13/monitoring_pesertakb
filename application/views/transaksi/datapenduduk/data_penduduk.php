<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA PENDUDUK</h4>
      </div>
    </div>
<div class="col-lg-12">
            <div class="form-panel">
              <a href="<?php echo base_url() . 'transaksi/datapenduduk/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>ID Penduduk</th>
                      <th>ID KK</th>
                      <th>Pengurutan KK</th>
                      <th>NIK</th>
                      <th>EKTP</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Tahun Lahir</th>
                      <th>Golongan Darah</th>
                      <th>Rhesus</th>
                      <th>Agama</th>
                      <th>Pendidikan</th>
                      <th>Pendidikan Yang Sedang Ditempuh</th>
                      <th>Pekerjaan</th>
                      <th>Status Perkawinan</th>
                      <th>Hubungan Keluarga</th>
                      <th>Kewarganegaraan</th>
                      <th>Nomor Paspor</th>
                      <th>Nomor Kartu Izin Terbatas (KITAS)</th>
                      <th>Nama Ayah</th>
                      <th>Nama Ibu</th>
                      <th>Status Kependudukan</th>
                      <th>Domisili di Desa</th>
                      <th>Kode Desa</th>
                      <th>RT</th>
                      <th>RW</th>
                      <th>Nomor Kartu Keluarga</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                            <?php
                            foreach ($v_penduduk as $item) {
                            ?>
                      <th><?= $item->penduduk_id ?></th>
                      <th><?= $item->kk_id ?></th>
                      <th><?= $item->kk_urut?></th>
                      <th><?= $item->nik?></th>
                      <th><?= $item->ektp?></th>
                      <th><?= $item->nama?></th>
                      <th><?= $item->jenis_kelamin ?></th>
                      <th><?= $item->tmp_lahir ?></th>
                      <th><?= $item->tgl_lahir?></th>
                      <th><?= $item->thn_lahir?></th>
                      <th><?= $item->goldarah?></th>
                      <th><?= $item->rhesus?></th>
                      <th><?= $item->agama ?></th>
                      <th><?= $item->pendidikan ?></th>
                      <th><?= $item->pendidikan_ditempuh ?></th>
                      <th><?= $item->pekerjaan?></th>
                      <th><?= $item->status_perkawinan?></th>
                      <th><?= $item->hub_keluarga?></th>
                      <th><?= $item->kewarganegaraan ?></th>
                      <th><?= $item->no_paspor ?></th>
                      <th><?= $item->no_kitas?></th>
                      <th><?= $item->ayah?></th>
                      <th><?= $item->ibu?></th>
                      <th><?= $item->stt?></th>
                      <th><?= $item->ada ?></th>
                      <th><?= $item->kode_desa ?></th>
                      <th><?= $item->rt?></th>
                      <th><?= $item->rw?></th>
                      <th><?= $item->kk?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'transaksi/datapenduduk/edit'; ?>/<?php echo $item->penduduk_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'transaksi/datapenduduk/hapus';?>/<?php echo $item->penduduk_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
                              <i class="fa fa-trash-o "></i>
                          </a> 
                          
                        </th>
                  </tr>
                <?php } ?>
                </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
</section>
</section>