
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
            <a href="<?php echo base_url() . 'master-data/kader/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
            <div class="navbar-form navbar-left">
            <label> Show
              <select size="1" name="hidden-table-info_length" aria-controls="hidden-table-info">
                <option value="10" selected="selected">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select> 
            </label>
          </div>
            <div class="navbar-form navbar-right">
            <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url('master-data/kader/search') ?>" method ="post">
                <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            </div> 
            
            
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Jenis Kelamin</th>
                      <th>Kelahiran</th>
                      <th>Tanggal Lahir</th>
                      <th>Email</th>
                      <th>Telepon</th>
                      <th>Kader Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $i = 1;
                    foreach ($v_kader as $item) {
                    ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->kader_nama ?></th>
                      <th><?= $item->kader_nik?></th>
                      <th><?= $item->kader_sex?></th>
                      <th><?= $item->kader_kelahiran?></th>
                      <th><?= $item->kader_tglahir?></th>
                      <th><?= $item->kader_email ?></th>
                      <th><?= $item->kader_hp ?></th>
                      <th><?= $item->kader_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'master-data/kader/edit'; ?>/<?php echo $item->kader_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'master-data/kader/hapus';?>/<?php echo $item->kader_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
