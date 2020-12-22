<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA FASKES JENIS</h4>
      </div>
    </div>
<div class="col-lg-12">
  <div class="form-panel">
            <a href="<?php echo base_url() . 'master-data/faskesjenis/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
            
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="hidden-table-info">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode Faskes Jenis</th>
                      <th>Nama Faskes Jenis</th>
                      <th>Faskes Jenis Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    $i = 1;
                    foreach ($v_ms_faskes_jenis as $item) {
                  ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->faskesjenis_kode  ?></td>
                      <td><?= $item->faskesjenis_nama  ?></td>
                      <td><?= $item->faskesjenis_aktif == 1 ? 'Aktif' : 'Non Aktif' ?></td>
                      <td>
                       
                          <a href="<?php echo base_url() . 'faskesjenis/edit'; ?>/<?php echo $item->faskesjenis_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'faskesjenis/hapus';?>/<?php echo $item->faskesjenis_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
