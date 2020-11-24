
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
              <a href="<?= base_url(). 'setting/menu/tambah'?>" class="btn btn-primary">Tambah Data</a>
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
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
                <tbody>
                  <tr>
                    <?php
                            $i = 1;
                            foreach ($v_ms_menu as $item) {
                            ?>
                      <th><?= $i++ ?></th>
                      <th><?= $item->mn_kode ?></th>
                      <th><?= $item->mn_nama?></th>
                      <th><?= $item->mn_level?></th>
                      <th><?= $item->mn_induk?></th>
                      <th><?= $item->mn_icon?></th>
                      <th><?= $item->mn_url?></th>
                      <th><?= $item->mn_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <th>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a class="btn btn-primary btn-xs">
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
