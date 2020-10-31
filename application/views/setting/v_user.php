<!--TAMPILAN TAMBAH DATA MS USER -->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> MS_User</h3>
          <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Input Data</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i></i> user_id </th>
                    <th><i></i> kader_id </th>
                    <th><i></i> user_name </th>
                    <th><i></i> user_password </th>
                    <th><i></i> user_status </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        <label class="sr-only" for="exampleInputEmail2"></label>
                        <input type="email" class="form-control" id="exampleInputEmail2">
                    </td>

                    <td>
                        <label class="sr-only" for="exampleInputEmail2"></label>
                        <input type="email" class="form-control" id="exampleInputEmail2">
                    </td>

                    <td>
                        <label class="sr-only" for="exampleInputEmail2"></label>
                        <input type="text" class="form-control" id="exampleInputEmail2">
                    </td>

                    <td class="hidden-phone">
                        <label class="sr-only" for="exampleInputEmail2"></label>
                        <input type="text" class="form-control" id="exampleInputEmail2">
                    </td>

                    <td>
                        <label class="sr-only" for="exampleInputEmail2"></label>
                        <input type="text" class="form-control" id="exampleInputEmail2">
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
<!--FUNGSI TAMBAH DATA MS USER -->
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
        <div class="col-md-12">
        <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
        <h4><i class="fa fa-angle-right"></i>Data User</h4>

                <hr>
                <thead>
                  <tr>
                    <th><i></i> user_id </th>
                    <th><i></i> kader_id </th>
                    <th><i></i> user_name </th>
                    <th><i></i> user_password </th>
                    <th><i></i> user_status </th>
                  </tr>
                </thead>

                <tbody>
                    <?php
                            foreach ($user as $item) {
                            ?>

                  <tr>
                    <td><?= $item->user_id ?></td>
                    <td><?= $item->kader_id ?></td>
                    <td><?= $item->user_name ?></td>
                    <td><?= $item->user_password ?></td>
                    <td><?= $item->user_status ?></td>
                    
                    <td>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
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