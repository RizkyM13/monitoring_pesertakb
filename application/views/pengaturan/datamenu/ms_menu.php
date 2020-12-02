
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
              <div class="form-panel">
               <a href="<?php echo base_url() . 'setting/ms_menu/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
            <div class="navbar-form navbar-left">
            <label> Show
              <select size="1" name="hidden-table-info_length" aria-controls="hidden-table-info">
                <option value="10" selected="selected">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select> 
            </label>
          </div>
              
              <div class="navbar-form navbar-right">
            <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url('setting/menu/search') ?>" method ="post">
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
