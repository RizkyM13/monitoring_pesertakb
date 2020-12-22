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

               <a href="<?php echo base_url() . 'menu/tambah'; ?>" class="btn btn-primary right" accesskey="t">Tambah Data</a>

          <div class="adv-table">
            <hr>
              <section id="unseen">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>Kode Menu</th>
                      <th>Nama Menu</th>
                      <th>Level Menu</th>
                      <th>Induk Menu</th>
                      <th>Icon Menu</th>
                      <th>Url Menu</th>
                      <th>Menu Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                        
                            $i = 1;
                            foreach ($v_ms_menu as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->mn_kode ?></td>
                      <td><?= $item->mn_nama?></td>
                      <td><?= $item->mn_level?></td>
                      <td><?= $item->mn_induk?></td>
                      <td><?= $item->mn_icon?></td>
                      <td><?= $item->mn_url?></td>
                      <td><?= $item->mn_aktif == 1 ? 'Aktif' : 'Non Aktif'?></td>
                      <td>

                        <a href="<?php echo base_url() . 'menu/edit'; ?>/<?php echo $item->mn_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                        </a>

                        <a href="<?php echo base_url() . 'menu/hapus'; ?>/<?php echo $item->mn_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
                              <i class="fa fa-trash-o"></i>
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
            </div>
            <!-- /content-panel -->
          
        </section>
      </section>

