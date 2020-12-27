<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA FASKES</h4>
      </div>
    </div>

    <div class="col-lg-12">
    <div class="form-panel">
            <a href="<?php echo base_url() . 'faskes/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
            
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="hidden-table-info">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Jenis Faskes</th>
                      <th>Kode Faskes</th>
                      <th>Nama Faskes</th>
                      <th>Alamat Faskes</th>
                      <th>Kode Desa</th>
                      <th>Faskes Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    $i = 1;
                    foreach ($v_faskes as $item) {
                  ?>
                      <td><?= $i++ ?></th>
                      <td><?= $item->faskesjenis_nama   ?></td>
                      <td><?= $item->faskes_kode  ?></td>
                      <td><?= $item->faskes_nama  ?></td>
                      <td><?= $item->faskes_alamat  ?></td>
                      <td><?= $item->desa_nama  ?></td>
                      <td><?= $item->faskes_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <td>

                          <a href="<?php echo base_url() . 'faskes/edit'; ?>/<?php echo $item->faskes_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'faskes/hapus';?>/<?php echo $item->faskes_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
