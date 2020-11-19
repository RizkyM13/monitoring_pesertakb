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
              <a href="<?php echo base_url() . 'transaksi/datapenduduk/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" width="100px">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>ID KK</th>
                      <th>Pengurutan KK</th>
                      <th>NIK</th>
                      <th>EKTP</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      
                      
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
                      <th><?= $item->kk_id ?></th>
                      <th><?= $item->kk_urut?></th>
                      <th><?= $item->nik?></th>
                      <th><?= $item->ektp?></th>
                      <th><?= $item->nama?></th>
                      <th><?= $item->jenis_kelamin ?></th>
                      
                      
                      <th>
                        
                          <a href="<?php echo base_url() . 'transaksi/datapenduduk/detail'; ?>/<?php echo $item->penduduk_id ?>" class="btn btn-success btn-xs">
                              <i class="fa fa-check"></i>
                          </a>
                          <a href="<?php echo base_url() . 'transaksi/datapenduduk/edit'; ?>/<?php echo $item->penduduk_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'transaksi/datapenduduk/hapus';?>/<?php echo $item->penduduk_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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


