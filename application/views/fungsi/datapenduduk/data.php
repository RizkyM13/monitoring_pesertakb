<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA PENDUDUK</h4>
      <link rel="stylesheet" href="<?= base_url() ?>/assets/lib/advanced-datatable/css/DT_bootstrap.css" />
      <link rel="stylesheet" href="<?= base_url() ?>/assets/lib/advanced-datatable/css/jquery.dataTables.css" />
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">
               <a href="<?php echo base_url() . 'transaksi/penduduk/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
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
                  <form class="form-inline my-2 my-lg-0" action = "<?php echo base_url() . 'transaksi/penduduk/search' ?>" method ="post">
                  <input type="text" name="keyword" class="form-control" placeholder="search" autofocus="" autocomplete="off">
                  <button type="submit" class="btn btn-success">Cari</button>
              </form>
            </div> 
          </div>
        </div>
      </div>
      
            <br>
            <br>
            <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="hidden-table-info">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th onclick="sortTable(1)">ID Penduduk</th>
                      <th onclick="sortTable(1)">ID KK</th>
                      <th onclick="sortTable(1)">Urut KK</th>
                      <th onclick="sortTable(1)">NIK</th>
                      <th onclick="sortTable(1)">EKTP</th>
                      <th onclick="sortTable(0)">Nama</th>
                      <th onclick="sortTable(0)">Jenis Kelamin</th>
                      <th onclick="sortTable(0)">Tempat Lahir</th>
                      <th onclick="sortTable(0)">Tanggal Lahir</th>
                      <th onclick="sortTable(0)">Tahun Lahir</th>
                      <th onclick="sortTable(0)">Golongan Darah</th>
                      <th onclick="sortTable(0)">Rhesus</th>
                      <th onclick="sortTable(1)">ID Suku</th>
                      <th onclick="sortTable(0)">Agama</th>
                      <th onclick="sortTable(0)">Pendidikan</th>
                      <th onclick="sortTable(0)">Pendidikan Di Tempuh</th>
                      <th onclick="sortTable(0)">Pekerjaan</th>
                      <th onclick="sortTable(0)">Status Perkawinan</th>
                      <th onclick="sortTable(0)">Hubungan Keluarga</th>
                      <th onclick="sortTable(0)">Kewarganegaraan</th>
                      <th onclick="sortTable(1)">Nomor Paspor</th>
                      <th onclick="sortTable(1)">Nomor Kitas</th>
                      <th onclick="sortTable(0)">Ayah</th>
                      <th onclick="sortTable(0)">Ibu</th>
                      <th onclick="sortTable(0)">Stt</th>
                      <th onclick="sortTable(0)">Ada</th>
                      <th onclick="sortTable(1)">Kode Desa</th>
                      <th onclick="sortTable(0)">RT</th>
                      <th onclick="sortTable(0)">RW</th>
                      <th onclick="sortTable(0)">KK</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                            <?php
                            $i = 1;
                            foreach ($v_penduduk as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->penduduk_id ?></td>
                      <td><?= $item->kk_id?></td>
                      <td><?= $item->kk_urut?></td>
                      <td><?= $item->nik?></td>
                      <td><?= $item->ektp?></td>
                      <td><?= $item->nama?></td>
                      <td><?= $item->jenis_kelamin?></td>
                      <td><?= $item->tmp_lahir?></td>
                      <td><?= $item->tgl_lahir?></td>
                      <td><?= $item->thn_lahir?></td>
                      <td><?= $item->goldarah?></td>
                      <td><?= $item->rhesus?></td>
                      <td><?= $item->suku_id?></td>
                      <td><?= $item->agama?></td>
                      <td><?= $item->pendidikan?></td>
                      <td><?= $item->pendidikan_ditempuh?></td>
                      <td><?= $item->pekerjaan?></td>
                      <td><?= $item->status_perkawinan?></td>
                      <td><?= $item->hub_keluarga?></td>
                      <td><?= $item->kewarganegaraan?></td>
                      <td><?= $item->no_paspor?></td>
                      <td><?= $item->no_kitas?></td>
                      <td><?= $item->ayah?></td>
                      <td><?= $item->ibu?></td>
                      <td><?= $item->stt?></td>
                      <td><?= $item->ada?></td>
                      <td><?= $item->kode_desa?></td>
                      <td><?= $item->rt?></td>
                      <td><?= $item->rw?></td>
                      <td><?= $item->kk?></td>
                      <td>
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-check"></i>
                          </button>
                          <a href="<?php echo base_url() . 'transaksi/penduduk/edit'; ?>/<?php echo $item->penduduk_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'transaksi/penduduk/hapus';?>/<?php echo $item->penduduk_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
                              <i class="fa fa-trash-o "></i>
                          </a> 
                          
                        </td>
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
</script>
            </div>
            <!-- /content-panel -->
          </div>
</section>
</section>
