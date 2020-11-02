
<!-- isi halaman memulai -->
    <section id="main-content">
      <section class="wrapper">

        <h3>
          <i class="fa fa-angle-right"></i> Data Kartu Keluarga
        </h3>

          <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">

                <h4>
                  <i class="fa fa-angle-right"></i>Data Kartu keluarga
                </h4>

                <hr>
                <thead>
                  <tr style="text-align:center">
                    <th>ID KK</th>
                    <th>NO KK</th>
                    <th>Tanggal KK</th>
                    <th>Status KK</th>
                    <th>KK Update</th>
                    <th>KK Update By</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <label class="sr-only"></label>
                      <input type="text" class="form-control" id="kk_id">
                    </td>

                    <td class="hidden-phone">
                      <label class="sr-only"></label>
                      <input type="text" class="form-control" id="kk_no">
                    </td>

                    <td>
                      <label class="sr-only"></label>
                      <input type="date" class="form-control" id="kk_tgl">
                    </td>

                    <td>
                      <label class="sr-only"></label>
                      <input type="text" class="form-control" id="kk_status">
                    </td>

                    <td class="hidden-phone">
                      <label class="sr-only"></label>
                      <input type="text" class="form-control" id="kk_lastupdate">
                    </td>

                    <td>
                      <label class="sr-only"></label>
                      <input type="text" class="form-control" id="kk_lastupdate_by">
                    </td>

                    <td>
                      <a href="<?php echo base_url().'transaksi/datakk/tambah'; ?>" class="btn btn-round btn-info">Input</a>
                    </td>

                  </tr>
                
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- BASIC FORM ELELEMNTS -->

        <div class="row mt">
        <div class="col-md-12">
        <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
        <h4>
          <i class="fa fa-angle-right"></i>Data KK
        </h4>
                <hr>
                <thead>
                  <tr style="text-align:center">
                    <th> ID KK</th>
                    <th> NO KK</th>
                    <th> Tanggal KK</th>
                    <th> Status KK</th>
                    <th> KK Update</th>
                    <th> KK Update By</th>
                    <th> Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                                        

                    <td style="text-align:center">
                      <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i>
                      </button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
                      </button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                    
                    
                      

                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>        <!-- /row -->


        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>

<!-- isi halaman end -->