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
                      <th>Nama Ayah</th>
                      <th>Nama Ibu</th>
                      <th>Status Kependudukan</th>
                      <th>Domisili di Desa</th>
                      <th>Kode Desa</th>
                      <th>RT</th>
                      <th>RW</th>
                      <th>Nomor Kartu Keluarga</th>
                      
                      
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
                      <th><?= $item->ayah?></th>
                      <th><?= $item->ibu?></th>
                      <th><?= $item->stt?></th>
                      <th><?= $item->ada ?></th>
                      <th><?= $item->kode_desa ?></th>
                      <th><?= $item->rt?></th>
                      <th><?= $item->rw?></th>
                      <th><?= $item->kk?></th>
                      
                      
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


