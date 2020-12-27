<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA RT</h4>
      </div>
    </div>
 <div class="col-lg-12">
    <div class="form-panel">
            <a href="<?php echo base_url() . 'rt/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
            
            <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="hidden-table-info">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>RW</th>
                      <th>RT</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    $i = 1;
                    foreach ($v_rt as $item) {
                  ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->rw   ?></td>
                      <td><?= $item->rt  ?></td>
                      <td>
                        
                          <a href="<?php echo base_url() . 'rt/edit'; ?>/<?php echo $item->rt_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'rt/hapus';?>/<?php echo $item->rt_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
