
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS USER GROUP</h4>
      </div>
    </div>
<div class="col-lg-12">
            <div class="form-panel">
              <a href="<?= base_url(). 'usergroup/tambah'?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama User</th>
                      <th>Group</th>
                      <th>Update By</th>
                      <th>Update Time</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                            $i = 1;
                            foreach ($v_user_group as $item) {
                            ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->user_name ?></th>
                      <th><?= $item->grp_nama ?></th>
                      <th><?= $item->update_by?></th>
                      <th><?= $item->update_time?></th>
                      <th>
                          <a href="<?php echo base_url() . 'usergroup/edit'; ?>/<?php echo $item->user_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'usergroup/hapus';?>/<?php echo $item->user_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
