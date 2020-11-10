
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
              <a href="<?php echo base_url() . 'transaksi/datapenduduktambah'; ?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                    <th><i>ID Penduduk</i></th>
                    <th><i>ID KK</i></th>
                    <th><i>KK Urut</i></th>
                    <th><i></i>NIK</th>
                    <th><i></i>E-KTP</th>
                    <th><i></i>Nama</th>
                    <th><i>Jenis Kelamin</i></th>
                    <th><i>Tempat Lahir</i></th>
                    <th><i>Tanggal Lahir</i></th>
                    <th><i>Tahun Lahir</i></th>
                    <th><i>Golongan Darah</i></th>
                    <th><i>Rhesus</i> </th>   
                    <th><i>ID Suku</i></th>
                    <th><i>Agama</i></th>
                    <th><i>Pendidikan</i></th>
                    <th><i>Pendidikan Ditempuh</i></th>
                    <th><i>Perkerjaan</i></th>
                    <th><i>Status Perkawinan</i> </th>
                    <th><i>Hubungan Keluarga</i></th>
                    <th><i>Kewarganegaraan</i></th>
                    <th><i>No Pasport</i></th>
                    <th><i>No Kitas</i></th>
                    <th><i>Ayah</i></th>
                    <th><i>Ibu</i> </th>
                    <th><i>STT</i></th>
                    <th><i>ADA</i></th>
                    <th><i>Kode Desa</i></th>
                    <th><i>RT</i></th>
                    <th><i>RW</i></th>
                    <th><i>KK</i></th>
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
