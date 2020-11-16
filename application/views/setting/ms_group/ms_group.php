<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS Group</h4>
      </div>
    </div>
<div class="col-lg-12">
            <div class="form-panel">
              <a href="<?php echo base_url() . 'setting/ms_group/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode Group</th>
                      <th>Nama Group</th>
                      <th>Group Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                            <?php
                            $i = 1;
                            foreach ($v_ms_group as $item) {
                            ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->grp_kode ?></th>
                      <th><?= $item->grp_nama?></th>
                      <th><?= $item->grp_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <th>
                        <a href="<?php echo base_url() . 'setting/ms_group/menu'; ?>/<?php echo $item->grp_id ?>"class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                        </a>
                          <a href="<?php echo base_url() . 'setting/ms_group/edit'; ?>/<?php echo $item->grp_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'setting/ms_group/hapus';?>/<?php echo $item->grp_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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