
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA KADER</h4>
      </div>
    </div>
<div class="col-lg-12">
            <div class="form-panel">
              <a href="<?= base_url(). 'master-data/datakader/tambah'?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>ID Kader</th>
                      <th>Nama Kader/th>
                      <th>NIK Kader</th>
                      <th>Sex Kader</th>
                      <th>Kelahiran Kader</th>
                      <th>Tgl Lahir Kader</th>
                      <th>Email Kader</th>
                      <th>Hp Kader/th>
                      <th>Kader Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    foreach ($v_kader as $item) {
                    ?>
                      <th><?= $item->kader_id ?></th>
                      <th><?= $item->kader_nama ?></th>
                      <th><?= $item->kader_nik?></th>
                      <th><?= $item->kader_sex?></th>
                      <th><?= $item->kader_kelahiran?></th>
                      <th><?= $item->kader_tglahir?></th>
                      <th><?= $item->kader_email ?></th>
                      <th><?= $item->kader_hp ?></th>
                      <th><?= $item->kader_aktif?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="echo base_url() . 'master-data/datakader/edit'/" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="echo base_url() . 'master-data/datakader/hapus'/" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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