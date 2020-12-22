<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">PROFIL INSTANSI</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">            

               <a href="<?php echo base_url() . 'profil/tambah'; ?>" class="btn btn-primary right">Tambah Data</a>
        
            <div class="adv-table">
            <hr>
              <section id="unseen">
                <table class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>Kode</th>
                      <th>Instansi</th>
                      <th>Alamat</th>
                      <th>Kode Kabupaten</th>
                      <th>Telepon</th>
                      <th>Website</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                          
                            $i = 1;
                            foreach ($v_profil as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->kode?></td>
                      <td><?= $item->instansi?></td>
                      <td><?= $item->alamat?></td>
                      <td><?= $item->kab_kode?></td>
                      <td><?= $item->telp?></td>
                      <td><?= $item->kodepos?></td>
                     
                    
                      <td>
                        <a href="<?php echo base_url() . 'profil/detail'; ?>/<?php echo $item->id ?>"class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                        </a>

                        <a href="<?php echo base_url() . 'profil/edit'; ?>/<?php echo $item->id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                        </a>
                          
                        <a href="<?php echo base_url() . 'profil/hapus'; ?>/<?php echo $item->id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
