<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA DESA</h4>
      </div>
    </div>

    <div class="col-lg-12">
    <div class="form-panel">
            <a href="<?php echo base_url() . 'master-data/desa/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
            <br>
            <div class="navbar-form navbar-right">
            <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url('master-data/desa/search') ?>" method ="post">
                <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            </div> 
            
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode Desa</th>
                      <th>Kecamatan</th>
                      <th>Nama Desa</th>
                      <th>Desa Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    $i = 1;
                    foreach ($v_desa as $item) {
                  ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->desa_kode  ?></th>
                      <th><?= $item->kec_nama   ?></th>
                      <th><?= $item->desa_nama  ?></th>
                      <th><?= $item->desa_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'master-data/desa/edit'; ?>/<?php echo $item->desa_kode ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'master-data/desa/hapus';?>/<?php echo $item->desa_kode ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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