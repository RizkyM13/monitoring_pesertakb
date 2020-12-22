<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA KECAMATAN</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">
            <a href="<?php echo base_url() . 'master-data/kecamatan/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
            
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="hidden-table-info">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode Kecamatan</th>
                      <th>Nama Kecamatan</th>
                      <th>Kecamatan Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $i = 1;
                    foreach ($v_kecamatan as $item) {
                    ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->kec_kode ?></td>
                      <td><?= $item->kec_nama ?></td>
                      <td><?= $item->kec_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <td>
                        
                              <a href="<?php echo base_url() . 'kecamatan/edit'; ?>/<?php echo $item->kec_kode ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                              </a>
                          
                              <a href="<?php echo base_url() . 'kecamatan/hapus';?>/<?php echo $item->kec_kode ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
