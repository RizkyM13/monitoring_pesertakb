<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA KECAMATAN</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">
            <a href="<?php echo base_url() . 'master-data/kecamatan/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
            <br>
            <div class="navbar-form navbar-right">
            <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url('master-data/kecamatan/search') ?>" method ="post">
                <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            </div> 
            
            
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode Kecamatan</th>
                      <th>Nama Kecamatan</th>
                      <th>Kecamatan Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $i = 1;
                    foreach ($v_kecamatan as $item) {
                    ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->kec_kode ?></th>
                      <th><?= $item->kec_nama ?></th>
                      <th><?= $item->kec_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                              <a href="<?php echo base_url() . 'master-data/kecamatan/edit'; ?>/<?php echo $item->kec_kode ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                              </a>
                          
                              <a href="<?php echo base_url() . 'master-data/kecamatan/hapus';?>/<?php echo $item->kec_kode ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
                              <i class="fa fa-trash-o "></i>
                              </a> 
                          
                        </th>
                  </tr>
                  
                  <?php } ?>
                </tbody>
                </table>
                <div class="row-fluid">
                  <div class="span6">
                    <div class="dataTables_info" id="hidden-table-info_info">Showing 1 to 5 of 25 entries
                    </div>
                  </div>
                  <div class="span6">
                    <div class="dataTables_paginate paging_bootstrap pagination">
                      <ul>
                        <li class="prev disabled">
                          <a href="#">← Previous</a>
                        </li>
                        <li class="active">
                          <a href="#">1</a>
                        </li>
                        <li>
                          <a href="#">2</a>
                        </li>
                        <li>
                          <a href="#">3</a>
                        </li>
                        <li class="next">
                          <a href="#">Next → </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
</section>
</section>
