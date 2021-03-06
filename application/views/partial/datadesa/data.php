<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA DESA</h4>
      </div>
    </div>

    <div class="col-lg-12">
    <div class="form-panel">
            <a href="<?php echo base_url() . 'desa/tambah'; ?>" class="btn btn-primary">Tambah Data</a>

              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="hidden-table-info">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode Desa</th>
                      <th>Kecamatan</th>
                      <th>Nama Desa</th>
                      <th>Desa Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    $i = 1;
                    foreach ($v_desa as $item) {
                  ?>
                      <td><?= $i++ ?></th>
                      <td><?= $item->desa_kode  ?></td>
                      <td><?= $item->kec_nama   ?></td>
                      <td><?= $item->desa_nama  ?></td>
                      <td><?= $item->desa_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <td>
                        
                          <a href="<?php echo base_url() . 'desa/edit'; ?>/<?php echo $item->desa_kode ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'desa/hapus';?>/<?php echo $item->desa_kode ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
                              <i class="fa fa-trash-o "></i>
                          </a> 
                          
                        </td>
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