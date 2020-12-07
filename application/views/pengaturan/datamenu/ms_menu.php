
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS MENU</h4>
      </div>
      <!-- Bootstrap core CSS -->
      <!--external css-->
      <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
      <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
      <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
      
    </div>
<div class="col-lg-12">
<div class="form-panel">
<div class="adv-table">
<div id = "hidden-table-info_wrapper" class="dataTables_wrapper form-inline" role="grid">             


               <a href="<?php echo base_url() . 'setting/menu/tambah'; ?>" class="btn btn-primary right">Tambah Data</a>


               <div id = "hidden-table-info_length" class="dataTables_length">
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
              <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url() . 'setting/menu/search' ?>" method ="post">
                  <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                  <button type="submit" class="btn btn-success">Cari</button>
              </form>
            </div> 

            
              <br>
              <hr>
              <section id="unseen">
                <table class="display table table-bordered dataTable" id="hidden-table-info" aria-describedby="hidden-table-info_info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th class="sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Kode Menu: activate to sort column ascending">Kode Menu
                      </th>

                      <th class="sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Nama Menu: activate to sort column ascending">Nama Menu
                      </th>

                      <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Level Menu: activate to sort column ascending">Level Menu
                      </th>

                      <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Induk Menu: activate to sort column ascending">Induk Menu
                      </th>

                      <th cclass="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Icon Menu: activate to sort column ascending">Icon Menu
                      </th>

                      <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Url Menu: activate to sort column ascending">Url Menu
                      </th>

                      <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Menu Aktif: activate to sort column ascending">Menu Aktif
                      </th>

                      <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending">Aksi
                      </th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr class="gradeA even">
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
                        <a href="<?php echo base_url() . 'setting/menu/menu'; ?>/<?php echo $item->mn_id ?>"class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                        </a>
                          <a href="<?php echo base_url() . 'setting/menu/edit'; ?>/<?php echo $item->mn_id ?>" class="btn btn-primary btn-xs">
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
                <div class="row-fluid">
                  <div class="span6">
                    <div class="dataTables_info" id="hidden-table-info_info">Showing 1 to 5 of 25 entries
                    </div>
                  </div>
                  <div class="span6">
                    <div class="dataTables_paginate paging_bootstrap pagination">
                      <ul>
                        <li class="prev disabled">
                          <a href="#">← Previous</a>
                        </li>
                        <li class="active">
                          <a href="#">1</a>
                        </li>
                        <li>
                          <a href="#">2</a>
                        </li>
                        <li>
                          <a href="#">3</a>
                        </li>
                        <li class="next">
                          <a href="#">Next → </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                

              </section>
  <script type="text/javascript" language="javascript" src="<?= base_url() ?>/assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/advanced-datatable/js/DT_bootstrap.js"></script>

  <!--script for this page-->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#hidden-table-info').dataTable({
        "columnDefs": [
          {
          "render" : function(data,type,row){
            return data +' ('+row[3]+')';

          },
          "targets" : 0
        },
        {"visible" : false, "targets": [3]}
        ]
        });

    });
  </script>

            </div>
          </div>
            </div>
            <!-- /content-panel -->
          </div>
          </div>
          
        </section>
      </section>
