<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <h5><i class="fa fa-tasks"></i>Group : <?= $v_ms_group['grp_nama']; ?></h5>
<div class="col-lg-12">
<div class="form-panel">

            
              <section id="unseen">
                <table class="display table table-bordered">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>Menu</th>
                      <th>Akses</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                          
                            $i = 1;
                            foreach ($menu as $m) {
                            ?>
                            <td><?= $i++ ?></td>
                            <td><?= $m->mn_nama?></td>
                            <td><input type="checkbox" checked="checked" <?= check_access($v_ms_group['grp_id'], $v_ms_group['grp_id']); ?>></td>
                      
                  </tr>
                  <?php } ?>
                </tbody>
                </table>
              </section>
  
            </div>
          </div>
            </div>
          
        </section>
      </section>



<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
<div class="form-panel">
            
              <div class="panel-heading">
                <div class="pull-left">
                  <h5><i class="fa fa-tasks"></i> Menu Group</h5>
                </div>
                <br>
              </div>
            </div>
          </div>

            <div class="col-lg-12">
            <div class="form-panel">
              <div class="custom-check goleft mt">
                <h5><i class="fa fa-tasks"></i> Group : <?= $v_ms_group['grp_nama']; ?></h5>
                <table id="todo" class="table table-hover custom-check">
                  <tbody>

                    <tr>
                      <?php
                      foreach ($menu as $item) { ?>
                      <td>
                        <span class="check"><input type="checkbox" checked="checked"><?= $item->mn_nama?></span>
                      </td>
                    </tr>
                     <?php } ?>
                  </tbody>

                </table>
              </div>
            </div>
            </div>

            

                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'group'; ?>" class="btn btn-danger">Kembali</a>
              
        
      </section>
    </section>

