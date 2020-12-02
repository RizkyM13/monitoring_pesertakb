
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS GROUP MENU</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">
              <div class="form-panel">
               <a href="<?php echo base_url() . 'setting/ms_group_menu/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
            <div class="navbar-form navbar-left">
            <label> Show
              <select size="1" name="hidden-table-info_length" aria-controls="hidden-table-info">
                <option value="10" selected="selected">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select> 
            </label>
          </div>
              
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>ID Group</th>
                      <th>Update By</th>
                      <th>Update Time</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                            $i = 1;
                            foreach ($v_group_menu as $item) {
                            ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->grp_id ?></th>
                      <th><?= $item->update_by?></th>
                      <th><?= $item->update_time?></th>
                      <th>
                       <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'setting/groupmenu/edit'; ?>/<?php echo $item->grp_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
