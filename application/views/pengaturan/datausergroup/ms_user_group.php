
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
              <div class="adv-table">
              <section id="unseen">
                <table class="display table table-bordered" id="hidden-table-info">
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
                      <td><?= $i++ ?></td>
                      <td><?= $item->user_name ?></td>
                      <td><?= $item->grp_nama ?></td>
                      <td><?= $item->user_name?></td>
                      <td><?= $item->update_time?></td>
                      <td>
                          <a href="<?php echo base_url() . 'usergroup/edit'; ?>/<?php echo $item->user_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'usergroup/hapus';?>/<?php echo $item->user_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
        </div>
</section>
</section>
