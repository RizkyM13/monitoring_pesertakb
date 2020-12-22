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
            <hr>
           
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="hidden-table-info">
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
                      <td style="text-align:center"><?= $i++ ?></td>
                      <td><?= $item->desa_nama  ?></td>
                      <td><?= $item->rw  ?></td>
                      <td style="text-align:center">
                        
                          <a href="<?php echo base_url() . 'rw/edit'; ?>/<?php echo $item->rw_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'rw/hapus';?>/<?php echo $item->rw_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
                              <i class="fa fa-trash-o "></i>
                          </a> 
                          
                        </td>
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
