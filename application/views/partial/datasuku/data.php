<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS SUKU</h4>
      </div>
    </div>
<div class="col-lg-12">
            <div class="form-panel">
              <a href="<?= base_url(). 'master-data/suku/tambah'?>" class="btn btn-primary">Tambah Data</a>
              <div class="navbar-form navbar-right">
            <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url('master-data/datasuku/search') ?>" method ="post">
                <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            </div> 
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>ID Suku</th>
                      <th>Kode Suku</th>
                      <th>Nama Suku</th>
                      <th>Suku Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $i = 1;
                    foreach ($v_ms_suku as $item) {
                    ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->suku_id ?></th>
                      <th><?= $item->suku_kode ?></th>
                      <th><?= $item->suku_nama ?></th>
                      <th><?= $item->suku_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                              <a href="<?php echo base_url() . 'master-data/suku/edit'; ?>/<?php echo $item->suku_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                              </a>
                          
                              <a href="<?php echo base_url() . 'master-data/suku/hapus';?>/<?php echo $item->suku_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
