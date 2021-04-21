
<section id="main-content">
<section class="wrapper">
<div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">LAPORAN</h4>
      </div>
    </div>
<div class="col-lg-12">
<div class="form-panel">

          <div class="adv-table">
            <hr>
              <section id="unseen">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                  <tr role="row">
                      <th>No</th>
                      <th>Tgl</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Faskes</th>
                      <th>Kontrasepsi</th>
                      <th>Kaldaluarsa</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr>
                    <?php
                        
                            $i = 1;
                            foreach ($v_lap as $item) {
                            ?>
                      <td><?= $i++ ?></td>
                      <td><?= $item->tgl?></td>
                      <td><?= $item->nama_akseptor?></td>
                      <td><?= $item->desa_nama ?></td>
                      <td><?= $item->faskesjenis_nama?></td>
                      <td><?= $item->kontransepsi_nama?></td>
                      <td><?= $item->kontransepsi_expired ?></td>
                      
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

