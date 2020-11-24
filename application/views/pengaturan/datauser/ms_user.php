<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS USER</h4>
      </div>
    </div>
<div class="col-lg-12">
            <div class="form-panel">
              <a href="<?php echo base_url() . 'setting/user/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Kader</th>
                      <th>Nama User</th>
                      <th>Password User</th>
                      <th>Status User</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                  $i = 1;
                    foreach ($v_ms_user as $item) {
                  ?>
                      <th><?= $i++        ?></th>
                      <th><?= $item->kader_nama       ?></th>
                      <th><?= $item->user_name       ?></th>
                      <th><?= $item->user_password  ?></th>
                      <th><?= $item->user_status   == 1 ? 'Aktif' : 'Non Aktif' ?></th>
                      
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'setting/user/edit'; ?>/<?php echo $item->user_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'setting/user/hapus';?>/<?php echo $item->user_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
