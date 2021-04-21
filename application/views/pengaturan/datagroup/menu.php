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
          <?php if ($this->session->userdata('kader_id') == 1) { ?>
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

            <?php }elseif ($this->session->userdata('kader_id') == 2) { ?>

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

            <?php }elseif ($this->session->userdata('kader_id') == 2) { ?>
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

          <?php } ?>

                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'group'; ?>" class="btn btn-danger">Kembali</a>
              
        
      </section>
    </section>

