<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS GROUP</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">

               <a href="<?php echo base_url() . 'group/tambah'; ?>" class="btn btn-primary right">Tambah Data</a>
        
            <div class="adv-table">
            <hr>
              <section id="unseen">
                <table class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>Kode Group</th>
                      <th>Nama Group</th>
                      <th>Group Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                          
                            $i = 1;
                            foreach ($v_ms_group as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->grp_kode?></td>
                      <td><?= $item->grp_nama?></td>
                      <td><?= $item->grp_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <td>
                        <a href="<?php echo base_url() . 'group/menu'; ?>/<?php echo $item->grp_id ?>"class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                        </a>
                          <a href="<?php echo base_url() . 'group/edit'; ?>/<?php echo $item->grp_id?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                        </a>
                          
                          <a href="<?php echo base_url() . 'group/hapus'; ?>/<?php echo $item->grp_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
            <!-- /content-panel -->
          </div>
          
          
        </section>
      </section>
