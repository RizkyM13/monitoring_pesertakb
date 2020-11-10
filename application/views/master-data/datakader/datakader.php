
<!-- isi halaman memulai -->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Data Kader</h3>
          <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Data Kader</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i></i>ID Kader</th>
                    <th><i></i>Nama Kader</th>
                    <th><i></i>NIK</th>
                    <th><i></i>Jenis Kelamin</th>
                    <th><i></i>Tempat Lahir</th>
                    <th><i></i>Tanggal Lahir</th>
                    <th><i></i>Email</th>
                    <th><i></i>No HP</th>
                    <th><i></i>Kader Aktif</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="">
                    </td>

                    <td>
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="">
                    </td>

                    <td>
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="">
                    </td>

                    <td>
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="">
                    </td>

                    <td>
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="">
                    </td>

                    <td>
                      <label class="sr-only" for=""></label>
                      <input type="date" class="form-control" id="">
                    </td>

                    <td>
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="">
                    </td>

                    <td>
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="">
                    </td>

                    <td>
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="">
                    </td>

                    <td>
                      <button type="submit" class="btn btn-theme">Input</button>
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
                <h4><i class="fa fa-angle-right"></i>Data Kader</h4>
                <hr>
                <thead>
                  <tr>
          
                    <th><i></i>ID Kader</th>
                    <th><i></i>Nama Kader</th>
                    <th><i></i>NIK</th>
                    <th><i></i>Jenis Kelamin</th>
                    <th><i></i>Tempat Lahir</th>
                    <th><i></i>Tanggal Lahir</th>
                    <th><i></i>Email</th>
                    <th><i></i>No HP</th>
                    <th><i></i>Kader Aktif</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                            foreach ($kdr as $item) {
                            ?>
                  <tr>
                    <td><?= $item->kader_id ?></td>
                    <td><?= $item->kader_nama ?></td>
                    <td><?= $item->kader_nik ?></td>
                    <td><?= $item->kader_sex ?></td>
                    <td><?= $item->kader_kelahiran ?></td>
                    <td><?= $item->kader_tglahir ?></td>
                    <td><?= $item->kader_email ?></td>
                    <td><?= $item->kader_hp ?></td>
                    <td><?= $item->kader_aktif ?></td>
                    <td style="text-align:center">

                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i>
                      </button>
                    </td>
                  </tr>
                <?php } ?>
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