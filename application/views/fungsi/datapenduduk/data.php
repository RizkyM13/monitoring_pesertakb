<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">DATA PENDUDUK</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">
	
               <a href="<?php echo base_url() . 'penduduk/tambah'; ?>" class="btn btn-primary right" accesskey="t">Tambah Data</a>

          <div class="adv-table">
            <hr>
              <section id="unseen">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Status Perkawinan</th>
                      <th>Hubungan Keluarga</th>
                      
                      
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                            <?php
                            $no = 1;
                            foreach ($v_penduduk as $item) {
                            ?>
                      <td><?= $no++ ?></td>
                      <td><?= $item->nik?></td>
                      <td><?= $item->nama?></td>
                      <td><?= $item->jenis_kelamin ?></td>
                      <td><?= $item->status_perkawinan ?></td>
                      <td><?= $item->hub_keluarga ?></td>
                      
                      
                      <td>
                        
                          <a href="<?php echo base_url() . 'penduduk/detail'; ?>/<?php echo $item->penduduk_id ?>" class="btn btn-success btn-xs">
                              <i class="fa fa-check"></i>
                          </a>
                          <a href="<?php echo base_url() . 'penduduk/edit'; ?>/<?php echo $item->penduduk_id ?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                          </a>
                          
                          <a href="<?php echo base_url() . 'penduduk/hapus';?>/<?php echo $item->penduduk_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data?')">
                              <i class="fa fa-trash-o "></i>
                          </a> 
                          
                        </td>
                  </tr>
                  <?php } ?>
                </tbody>
                </table>
              </section>
            
          </div>

            </div>
          </div>
            </div>
            <!-- /content-panel -->
          
        </section>
      </section>

