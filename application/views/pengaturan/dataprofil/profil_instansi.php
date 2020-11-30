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
              <a href="<?= base_url(). 'setting/profil/tambah'?>" class="btn btn-primary">Tambah Data</a>
            <div class="navbar-form navbar-right">
            <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url('setting/profil/search') ?>" method ="post">
                <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            </div> 
              <hr>
              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Instansi</th>
                      <th>Alamat</th>
                      <th>No Telepon</th>
                      <th>Email</th>
                      <th>Website</th>
                      <th>Kode Pos</th>
                      
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $i = 1;
                    foreach ($v_profil as $item) {
                    ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->kode ?></th>
                      <th><?= $item->instansi ?></th>
                      <th><?= $item->alamat ?></th>
                      <th><?= $item->telp ?></th>
                      <th><?= $item->email ?></th>
                      <th><?= $item->website ?></th>
                      <th><?= $item->kodepos ?></th>
                      
                      <th>
                        
                          <a href="<?php echo base_url() . 'setting/profil/detail'; ?>/<?php echo $item->id ?>" class="btn btn-success btn-xs">
                              <i class="fa fa-cogs"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'setting/profil/edit'; ?>/<?php echo $item->id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'setting/profil/hapus';?>/<?php echo $item->id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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