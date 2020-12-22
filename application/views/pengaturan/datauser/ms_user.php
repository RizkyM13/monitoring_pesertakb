<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS USER</h4>
      </div>
      <!-- Bootstrap core CSS -->
      <!--external css-->
    </div>
<div class="col-lg-12">
<div class="form-panel">            

               <a href="<?php echo base_url() . 'user/tambah'; ?>" class="btn btn-primary right">Tambah Data</a>
               
        <div class="adv-table">
            <hr>
              <section id="unseen">
                <table class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>Nama Kader</th>
                      <th>Username</th>
                      <th>Status User</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                          
                            $i = 1;
                            foreach ($v_ms_user as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->kader_nama?></td>
                      <td><?= $item->user_name?></td>
                      
                      <td><?= $item->user_status?></td>
                      <td>
                          <a href="<?php echo base_url() . 'user/edit'; ?>/<?php echo $item->user_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                        </a>
                          
                          <a href="<?php echo base_url() . 'profil/hapus'; ?>/<?php echo $item->user_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
            <!-- /content-panel -->
          </div>
          </div>
          
        </section>
      </section>
