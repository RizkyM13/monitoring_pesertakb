<?php $this->load->view('template/header') ?>
<?php $this->load->view('template/navbar') ?>
<!-- isi halaman memulai -->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Kecamatan</h3>
          <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Input Data Kecamatan</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i></i> Kode Kecamatan</th>
                    <th><i></i> Nama Kecamatan</th>
                    <th><i></i> Kecamatan Aktif</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><label class="sr-only" for="exampleInputEmail2"></label>
                  <input type="email" class="form-control" id="exampleInputEmail2">
                    </td>
                    <td class="hidden-phone"><label class="sr-only" for="exampleInputEmail2"></label>
                  <input type="email" class="form-control" id="exampleInputEmail2"></td>
                    <td><label class="sr-only" for="exampleInputEmail2"></label>
                  <input type="email" class="form-control" id="exampleInputEmail2"></td>
                    <td><button type="submit" class="btn btn-theme">Input</button></td>
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
                <h4><i class="fa fa-angle-right"></i>Table Data Kecamatan</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i></i> NO</th>
                    <th><i></i> Kode Kecamatan</th>
                    <th><i></i> Nama Kecamatan</th>
                    <th><i></i> Kecamatan Aktif</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a>1</a>
                    </td>
                    <td class="hidden-phone">345678908765</td>
                    <td>Mang Oleh</td>
                    <td>Bandung</td>
                    <td>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                
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
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>