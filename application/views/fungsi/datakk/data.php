
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA KARTU KELUARGA</h4>
      </div>
    </div>
<div class="col-lg-12">
            <div class="form-panel">
              <div class = "col-md-10 col-md-10 col-md-10">
              
              <form class="form-inline my-2 my-lg-0-right" action = "<?php echo base_url('transaksi/kk/search') ?>" method ="post">
                  <input class="form-control mr-sm-2" type="search" placeholder="Pencarian" aria-label="Search" autocomplete="off" autofocus="" name="keyword">
                  <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name = "submit">
              </form>
              
              </div>

            <div class="form-panel">
              <a href="<?php echo base_url() . 'transaksi/kk/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Nomor KK</th>
                      <th>Tanggal KK</th>
                      <th>Status KK</th>
                      <th>Last Update</th>
                      <th>Last Update By</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                            <?php
                            $i = 1;
                            foreach ($v_kk as $item) {
                            ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->kk_no ?></th>
                      <th><?= $item->kk_tgl?></th>
                      <th><?= $item->kk_status == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <th><?= $item->kk_lastupdate ?></th>
                      <th><?= $item->user_name ?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'transaksi/kk/edit'; ?>/<?php echo $item->kk_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'transaksi/kk/hapus';?>/<?php echo $item->kk_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
