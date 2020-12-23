
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">KARTU KELUARGA</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">

               <a href="<?php echo base_url() . 'kk/tambah'; ?>" class="btn btn-primary right" accesskey="t">Tambah Data</a>

          <div class="adv-table">
            <hr>
              <section id="unseen">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>ID KK</th>
                      <th>No KK</th>
                      <th>Tanggal KK</th>
                      <th>Status KK</th>
                      <th>Last Update</th>
                      <th>Last Update By</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                        
                            $i = 1;
                            foreach ($v_kk as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->kk_id ?></td>
                      <td><?= $item->kk_no?></td>
                      <td><?= $item->kk_tgl?></td>
                      <td><?= $item->kk_status == 1 ? 'Aktif' : 'Non Aktif' ?></td>
                      <td><?= $item->kk_lastupdate?></td>
                      <td><?= $item->kk_lastupdate_by?></td>
                      <td>
                        

                        <a href="<?php echo base_url() . 'kk/edit'; ?>/<?php echo $item->kk_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                        </a>

                        <a href="<?php echo base_url() . 'kk/hapus'; ?>/<?php echo $item->kk_id ?>" class="btn btn-danger btn-xs">
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

