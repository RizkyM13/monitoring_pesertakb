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
                      <th>Pendidikan</th>
                      <th>Pendidikan Yang Sedang Ditempuh</th>
                      <th>Pekerjaan</th>
                      <th>Status Perkawinan</th>
                      <th>Hubungan Keluarga</th>
                      <th>Kewarganegaraan</th>
                      <th>Nomor Paspor</th>
                      <th>Nomor Kartu Izin Terbatas (KITAS)</th>
                      
                      
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
                      <th><?= $item->pendidikan ?></th>
                      <th><?= $item->pendidikan_ditempuh ?></th>
                      <th><?= $item->pekerjaan?></th>
                      <th><?= $item->status_perkawinan?></th>
                      <th><?= $item->hub_keluarga?></th>
                      <th><?= $item->kewarganegaraan ?></th>
                      <th><?= $item->no_paspor ?></th>
                      <th><?= $item->no_kitas?></th>
                      
                      
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
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
            <div class="row-fluid">
                <div class="span6">
                  <div class="dataTables_paginate paging_bootstrap pagination">
                    <ul>
                      <li class="prev disabled">
                        <a href="<?php echo base_url('transaksi/datapenduduk'); ?>">? Previous</a>
                      </li>
                      <li class="active">
                        <a href="<?php echo base_url('transaksi/datapenduduk'); ?>">1</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('transaksi/datapenduduk/menu2'); ?>">2</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('transaksi/datapenduduk/menu3'); ?>">3</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('transaksi/datapenduduk/menu4'); ?>">4</a>
                      </li>
                      <li class="next">
                        <a href="#">Next ? </a>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>
              </div>
            <!-- /content-panel -->
          </div>
</section>
</section>


