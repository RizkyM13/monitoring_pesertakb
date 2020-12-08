
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS MENU</h4>
      </div>
      <!-- Bootstrap core CSS -->
      <!--external css-->
      <link href="<?= base_url() ?>/assets/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
      <link href="<?= base_url() ?>/assets/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
      <link rel="stylesheet" href="<?= base_url() ?>/assets/lib/advanced-datatable/css/DT_bootstrap.css" />
      <link rel="stylesheet" href="<?= base_url() ?>/assets/lib/advanced-datatable/css/jquery.dataTables.css" />
      
    </div>
<div class="col-lg-12">
<div class="form-panel">
<div class="adv-table">            
<div id="hidden-table-info_wrapper" class="dataTables_wrapper form-inline" role="grid">

               <a href="<?php echo base_url() . 'setting/menu/tambah'; ?>" class="btn btn-primary right">Tambah Data</a>
        
              
             <div class = "row-fluid">  
            <div id = "hidden-table-info_length" class="dataTables_length">
              <div class = "navbar-form navbar-left">
                <label> Show
                  <select size="1" name="hidden-table-info_length" aria-controls="hidden-table-info">
                  <option onclick="" value="5" selected="selected">5</option>
                  <option onclick="" value="10">10</option>
                  <option onclick="" value="21">21</option>
                  </select> 
                </label>
              </div>
            </div>
          
          

            <div class = "span6">     
              <div id = "hidden-table-info_filter" class="dataTables_filter">
                <div class="navbar-form navbar-right">
                  <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url() . 'setting/menu/search' ?>" method ="post">
                  <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                  <button type="submit" class="btn btn-success">Cari</button>
              </form>
            </div> 
          </div>
        </div>
      
            <br>
            <br>
            <hr>
              <section id="unseen">
                <table class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th onclick="sortTable(1)">Kode Menu
                      </th>

                      <th onclick="sortTable(0)">Nama Menu
                      </th>

                      <th onclick="sortTable(0)">Level Menu
                      </th>

                      <th onclick="sortTable(1)">Induk Menu
                      </th>

                      <th onclick="sortTable(0)">Icon Menu
                      </th>

                      <th onclick="sortTable(1)">Url Menu
                      </th>

                      <th onclick="sortTable(0)">Menu Aktif
                      </th>

                      <th>Aksi
                      </th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                          
                            $i = $this->uri->segment('3') + 1;
                            foreach ($v_ms_menu as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->mn_kode ?></td>
                      <td><?= $item->mn_nama?></td>
                      <td><?= $item->mn_level?></td>
                      <td><?= $item->mn_induk?></td>
                      <td><?= $item->mn_icon?></td>
                      <td><?= $item->mn_url?></td>
                      <td><?= $item->mn_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <td>
                        <a href="<?php echo base_url() . 'setting/menu/menu'; ?>/<?php echo $item->mn_id ?>"class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                        </a>
                          <a href="<?php echo base_url() . 'setting/menu/edit'; ?>/<?php echo $item->mn_id ?>" class="btn btn-primary btn-xs">
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
                <?php 
                echo $this->pagination->create_links();
                ?>
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
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/advanced-datatable/js/jquery.dataTable.min.js"></script>

  <!--script for this page-->
  <script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("hidden-table-info");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

$(document).ready(function(){
  $('table#hidden-table-info').dataTable({
    "search" : true,
    "pagination": true,
    "pageLenght" : 5
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
