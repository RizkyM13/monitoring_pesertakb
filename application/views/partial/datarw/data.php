<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA RW</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">
            <a href="<?php echo base_url() . 'master-data/rw/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
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
            <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url('master-data/rw/search') ?>" method ="post">
                <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            </div> 
            
           
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Desa</th>
                      <th>RW</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    $i = 1;
                    foreach ($v_rw as $item) {
                  ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->desa_nama  ?></th>
                      <th><?= $item->rw  ?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'master-data/rw/edit'; ?>/<?php echo $item->rw_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'master-data/rw/hapus';?>/<?php echo $item->rw_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
