
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
                    <th>KK Urut</th>
                    <th>NIK</th>
                    <th>E-KTP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Tahun Lahir</th>
                    <th>Golongan Darah</th>
                    <th>Rhesus</th>   
                    <th>ID Suku></th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>Pendidikan Ditempuh</th>
                    <th>Perkerjaan</th>
                    <th>Status Perkawinan</th>
                    <th>Hubungan Keluarga</th>
                    <th>Kewarganegaraan</th>
                    <th>No Pasport</th>
                    <th>No Kitas</th>
                    <th>Ayah</th>
                    <th>Ibu</th>
                    <th>STT</th>
                    <th>ADA</th>
                    <th>Kode Desa<</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>KK</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                            <?php
                            foreach ($v_penduduk as $item) {
                            ?>
                      <th><?= $item->penduduk_id?></th>
                      <th><?= $item->kk_id ?></th>
                      <th><?= $item->kk_urut?></th>
                      <th><?= $item->nik?></th>
                      <th><?= $item->ektp?></th>
                      <th><?= $item->nama?></th>
                      <th><?= $item->jenis_kelamin?></th>
                      <th><?= $item->temp_lahir?></th>
                      <th><?= $item->tgl_lahir?></th>
                      <th><?= $item->thn_lahir?></th>
                      <th><?= $item->gol_darah?></th>
                      <th><?= $item->rhesus?></th>
                      <th><?= $item->suku_id?></th>
                      <th><?= $item->agama?></th>
                      <th><?= $item->pendidikan?></th>
                      <th><?= $item->pendidikan_ditempuh?></th>
                      <th><?= $item->pekerjaan?></th>
                      <th><?= $item->status_perkawinan?></th>
                      <th><?= $item->hub_keluarga?></th>
                      <th><?= $item->kewarganegaraan?></th>
                      <th><?= $item->no_paspor?></th>
                      <th><?= $item->no_kitas?></th>
                      <th><?= $item->ayah?></th>
                      <th><?= $item->ibu?></th>
                      <th><?= $item->stt?></th>
                      <th><?= $item->ada?></th>
                      <th><?= $item->kode_desa?></th>
                      <th><?= $item->rt?></th>
                      <th><?= $item->rw?></th>
                      <th><?= $item->kk?></th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'transaksi/datapenduduk/edit'; ?>/<?php echo $item->kk_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'transaksi/datapenduduk/hapus';?>/<?php echo $item->kk_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
