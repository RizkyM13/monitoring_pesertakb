
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS MENU</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">
<div class="adv-table">            
<div id="hidden-table-info_wrapper" class="dataTables_wrapper form-inline" role="grid">

               <a href="<?php echo base_url() . 'group_menu/tambah'; ?>" class="btn btn-primary right">Tambah Data</a>
        
              
            
            <hr>
              <section id="unseen">
                <table class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>ID Menu
                      </th>

                      <th>ID Group
                      </th>

                      <th>Update By
                      </th>

                      <th>Update Time
                      </th>

                      <th>Aksi
                      </th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                          
                            $i =1;
                            foreach ($v_ms_group_menu as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->menu_id ?></td>
                      <td><?= $item->grp_id?></td>
                      <td><?= $item->update_by?></td>
                      <td><?= $item->update_time?></td>
                      <td>
                          <a href="<?php echo base_url() . 'group_menu/edit'; ?>/<?php echo $item->menu_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                        </a>
                          
                          <a class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
                              <i class="fa fa-trash-o "></i>
                          </a> 
                          
                        </td>
                      
                  </tr>
                  <?php } ?>
                </tbody>
                </table>
                
              </section>
  
            </div>
          </div>
            </div>
            <!-- /content-panel -->
          </div>
          </div>
          
        </section>
      </section>
