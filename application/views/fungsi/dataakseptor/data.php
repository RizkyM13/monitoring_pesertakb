
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA AKSEPTOR KB</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">

               <a href="<?php echo base_url() . 'akseptor/tambah'; ?>" class="btn btn-primary right" accesskey="t">Tambah Data</a>

          <div class="adv-table">
            <hr>
              <section id="unseen">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>Tgl</th>
                      <th>No. Kartu</th>
                      <th>Faskes</th>
                      <th>Nama</th>
                      <th>Suami/Istri</th>
                      <th>Alamat</th>
                      <th>Umur</th>
                      <th>Umur Anak</th>
                      <th>Kontrasepsi</th>
                      <th>Status Keluarga</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                        
                            $i = 1;
                            foreach ($v_akp as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->tgl?></td>
                      <td><?= $item->no_kartu?></td>
                      <td><?= $item->faskesjenis_nama ?></td>
                      <td><?= $item->nama_akseptor?></td>
                      <td><?= $item->nama_pasangan?></td>
                      <td><?= $item->desa_nama ?></td>
                      <td><?= $item->umur ?></td>
                      <td><?= $item->u_anak_terkecil?></td>
                      <td><?= $item->kontransepsi_nama ?></td>
                      <td><?= $item->stt == 1 ? 'Gakin' : 'Non Gakin' ?></td>
                      <td>
                        

                        <a href="<?php echo base_url() . 'akseptor/edit'; ?>/<?php echo $item->akseptor_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                        </a>

                        <a href="<?php echo base_url() . 'akseptor/hapus'; ?>/<?php echo $item->akseptor_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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

