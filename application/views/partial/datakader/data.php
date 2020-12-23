
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA KADER</h4>
      </div>
    </div>

    <div class="col-lg-12">
    <div class="form-panel">
            <a href="<?php echo base_url() . 'kader/tambah'; ?>" class="btn btn-primary">Tambah Data</a>

            
              <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="hidden-table-info">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Kader</th>
                      <th>NIK</th>
                      <th>Jenis Kelamin</th>
                      <th>Kelahiran Kader</th>
                      <th>Tanggal Lahir</th>
                      <th>Email</th>
                      <th>Nomor Telepon</th>
                      <th>Kader Aktif</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    $i = 1;
                    foreach ($v_kader as $item) {
                  ?>
                      <td><?= $i++ ?></th>
                      <td><?= $item->kader_nama   ?></td>
                      <td><?= $item->kader_nik  ?></td>
                      <td><?= $item->kader_sex  ?></td>
                      <td><?= $item->kader_kelahiran ?></td>
                      <td><?= $item->kader_tglahir  ?></td>
                      <td><?= $item->kader_email  ?></td>
                      <td><?= $item->kader_hp  ?></td>
                      <td><?= $item->kader_aktif == 1 ? 'Aktif' : 'Non Aktif'?></th>
                      <td>
                        
                          <a href="<?php echo base_url() . 'kader/edit'; ?>/<?php echo $item->kader_id?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'kader/hapus';?>/<?php echo $item->kader_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
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
