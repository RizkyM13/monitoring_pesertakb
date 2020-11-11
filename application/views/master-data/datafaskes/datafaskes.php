<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA FASKES</h4>
      </div>
    </div>
<div class="col-lg-12">
            <div class="form-panel">
              <a href="<?php echo base_url() . 'master-data/datafaskes/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>ID Faskes</th>
                      <th>ID Faskes Jenis</th>
                      <th>Kode Faskes</th>
                      <th>Nama Faskes</th>
                      <th>Alamat Faskes</th>
                      <th>Kode Desa</th>
                      <th>Faskes Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    foreach ($v_faskes as $item) {
                  ?>
                      <th><?= $item->faskes_id        ?></th>
                      <th><?= $item->faskesjenis_id   ?></th>
                      <th><?= $item->faskes_kode      ?></th>
                      <th><?= $item->faskes_nama      ?></th>
                      <th><?= $item->faskes_alamat    ?></th>
                      <th><?= $item->desa_kode        ?></th>
                      <th><?= $item->faskes_aktif     ?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'master-data/datafaskes/edit'; ?>/<?php echo $item->faskes_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'master-data/datafaskes/hapus';?>/<?php echo $item->faskes_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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