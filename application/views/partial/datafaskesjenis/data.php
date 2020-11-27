<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA FASKES JENIS</h4>
      </div>
    </div>
<div class="col-lg-12">
  <div class="form-panel">
            <div class="form-panel">
              <a href="<?php echo base_url() . 'master-data/faskesjenis/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
              <div class="navbar-form navbar-right">
            <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url('master-data/faskesjenis/search') ?>" method ="post">
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
                      <th>Kode Faskes Jenis</th>
                      <th>Nama Faskes Jenis</th>
                      <th>Faskes Jenis Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    $i = 1;
                    foreach ($v_ms_faskes_jenis as $item) {
                  ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->faskesjenis_kode  ?></th>
                      <th><?= $item->faskesjenis_nama  ?></th>
                      <th><?= $item->faskesjenis_aktif == 1 ? 'Aktif' : 'Non Aktif' ?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'master-data/faskesjenis/edit'; ?>/<?php echo $item->faskesjenis_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'master-data/faskesjenis/hapus';?>/<?php echo $item->faskesjenis_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
