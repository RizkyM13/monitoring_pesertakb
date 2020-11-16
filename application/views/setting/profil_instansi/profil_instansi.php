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
              <a href="<?= base_url(). 'setting\profil_instansi/tambah'?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Instansi</th>
                      <th>Nick Instansi</th>
                      <th>Alamat</th>
                      <th>Kode Kabupaten</th>
                      <th>No Telepon</th>
                      <th>Email</th>
                      <th>Website</th>
                      <th>Kode Pos</th>
                      <th>Logo</th>
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
                      <th><?= $item->instansi_nick ?></th>
                      <th><?= $item->alamat ?></th>
                      <th><?= $item->kab_kode ?></th>
                      <th><?= $item->telp ?></th>
                      <th><?= $item->email ?></th>
                      <th><?= $item->website ?></th>
                      <th><?= $item->kodepos ?></th>
                      <th><?= $item->logo ?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'setting/profil_instansi/edit'; ?>/<?php echo $item->id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'setting/profil_instansi/hapus';?>/<?php echo $item->id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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