<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA KONTRASEPSI</h4>
      </div>
    </div>
<div class="col-lg-12">
            <div class="form-panel">
              <a href="<?php echo base_url() . 'transaksi/kontrasepsi/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      
                      <th>No</th>
                      <th>Kode Kontrasepsi</th>
                      <th>Nama Kontrasepsi</th>
                      <th>Kontrasepsi Kadaluarsa</th>
                      <th>Kontrasepsi Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                            <?php
                            $i = 1;
                            foreach ($v_kontrasepsi as $item) {
                            ?>
                      <th><?= $i++    ?></th>
                      <th><?= $item->kontransepsi_kode     ?></th>
                      <th><?= $item->kontransepsi_nama     ?></th>
                      <th><?= $item->kontransepsi_expired  ?></th>
                      <th><?= $item->kontrasepsi_aktif  == 1 ? 'Aktif' : 'Non Aktif'  ?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'transaksi/kontrasepsi/edit'; ?>/<?php echo $item->kontrasepsi_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'transaksi/kontrasepsi/hapus';?>/<?php echo $item->kontrasepsi_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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