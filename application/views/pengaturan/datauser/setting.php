<section id="main-content">
<section class="wrapper">
<div class="col-lg-12">
<div class="form-panel">
            
              <div class="panel-heading">
                <div class="pull-left">
                  <h5><i class="fa fa-tasks"></i> Setting User</h5>
                </div>
                <br>
              </div>
            </div>
          </div>

           <div class="col-lg-12">
            <div class="form-panel">
              <div class="custom-check goleft mt">
                <h5><i class="fa fa-tasks"></i> </i> Group : <?= $v_ms_user['user_name']; ?></h5>
                <table id="todo" class="table table-hover custom-check">
                  <tbody>    

                    <tr>
                      <?php
                      foreach ($akses as $item) { ?>
                      <td>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value=""checked="checked"><?= $item->grp_nama?>
                          </label>
                        </div>
                      </td>
                      </tr>
                     <?php } ?>
                  </tbody>

                </table>
              </div>
            </div>
            </div>

            

                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?php echo base_url() . 'user'; ?>" class="btn btn-danger">Kembali</a>




      </section>
  </section>