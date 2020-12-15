<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA KONTRASEPSI</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">

               <a href="<?php echo base_url() . 'transaksi/kontrasepsi/tambah'; ?>" class="btn btn-primary right" accesskey="t">Tambah Data</a>

          <div class="adv-table">
            <hr>
              <section id="unseen">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>ID Kontrasepsi</th>
                      <th>Kode Kontransepsi</th>
                      <th>Nama Kontransepsi</th>
                      <th>Kontransepsi Kedaluarsa</th>
                      <th>Kontrasepsi Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                        
                            $i = 1;
                            foreach ($v_kontrasepsi as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->kontrasepsi_id?></td>
                      <td><?= $item->kontransepsi_kode?></td>
                      <td><?= $item->kontransepsi_nama?></td>
                      <td><?= $item->kontransepsi_expired?></td>
                      <td><?= $item->kontrasepsi_aktif == 1 ? 'Aktif' : 'Non Aktif'?></td>
                      <td>
                        <a href="<?php echo base_url() . 'transaksi/kontrasepsi/menu'; ?>/<?php echo $item->kontrasepsi_id ?>"class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                        </a>

                        <a href="<?php echo base_url() . 'transaksi/kontrasepsi/edit'; ?>/<?php echo $item->kontrasepsi_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                        </a>

                        <a href="<?php echo base_url() . 'transaksi/kontrasepsi/hapus'; ?>/<?php echo $item->kontrasepsi_id ?>" class="btn btn-danger btn-xs">
                              <i class="fa fa-trash-o"></i>
                        </a>
                          
                        </td>
                      
                  </tr>
                  <?php } ?>
                </tbody>
                </table>
              </section>
            
          </div>

            </div>
          </div>
            </div>
            <!-- /content-panel -->
          
        </section>
      </section>

