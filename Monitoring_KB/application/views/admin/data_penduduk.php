<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<?php $this->load->view('template/sidebar') ?>
<!-- isi halaman memulai -->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Penduduk</h3>
          <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Input Data Penduduk</h4>
                <hr>
                <thead>
                  <tr>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> NIK</th>
                    <th><i class="fa fa-bookmark"></i> Nama</th>
                    <th><i class="fa fa-bookmark"></i> Alamat</th>
                    <th><i class=" fa fa-edit"></i> Status KB</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><label class="sr-only" for="exampleInputEmail2">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                    </td>
                    <td class="hidden-phone"><label class="sr-only" for="exampleInputEmail2">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"></td>
                    <td><label class="sr-only" for="exampleInputEmail2">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"></td>
                    <td><label class="sr-only" for="exampleInputEmail2">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"></td>
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
                <h4><i class="fa fa-angle-right"></i>Table Data Penduduk</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> NO</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> NIK</th>
                    <th><i class="fa fa-bookmark"></i> Nama</th>
                    <th><i class="fa fa-bookmark"></i> Alamat</th>
                    <th><i class=" fa fa-edit"></i> Status KB</th>
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
                    <td><span class="label label-info label-mini">Aktif</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
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