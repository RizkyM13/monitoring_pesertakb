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
              <div class="form-panel">
               <a href="<?php echo base_url() . 'transaksi/penduduk/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
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
            <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url('transaksi/penduduk/search') ?>" method ="post">
                <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            </div> 
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" width="100px">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Status Perkawinan</th>
                      <th>Hubungan Keluarga</th>
                      
                      
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                            <?php
                            $no = 1;
                            foreach ($v_penduduk as $item) {
                            ?>
                      <th><?= $no++ ?></th>
                      <th><?= $item->nik?></th>
                      <th><?= $item->nama?></th>
                      <th><?= $item->jenis_kelamin ?></th>
                      <th><?= $item->status_perkawinan ?></th>
                      <th><?= $item->hub_keluarga ?></th>
                      
                      
                      <th>
                        
                          <a href="<?php echo base_url() . 'transaksi/penduduk/detail'; ?>/<?php echo $item->penduduk_id ?>" class="btn btn-success btn-xs">
                              <i class="fa fa-check"></i>
                          </a>
                          <a href="<?php echo base_url() . 'transaksi/penduduk/edit'; ?>/<?php echo $item->penduduk_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'transaksi/penduduk/hapus';?>/<?php echo $item->penduduk_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
                              <i class="fa fa-trash-o "></i>
                          </a> 
                          
                        </th>
                  </tr>
                <?php } ?>
                </tbody>
                </table>
              </section>
            </div>
              </div>
            <!-- /content-panel -->
          </div>
</section>
</section>


