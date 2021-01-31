<section id="main-content">
<section class="wrapper">
<div class="row mt">
  <div class="col-lg-12">
      <div class="form-panel">
      <h4 class="mb">MS USER GROUP</h4>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="form-panel">
         <form class="form-horizontal style-form" method="post" action="<?php echo base_url('usergroup/update'); ?>">
            <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Group</label>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                    <select name="grp_id" class="form-control">
                        
                        <?php
                        foreach ($group as $v) {
                        ?>
                        <option value="<?php echo $v->grp_id ?>"><?php echo $v->grp_nama ?></option>
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
              </div>
            </form>
          </div>
        </div>
            <div class="col-lg-4">
            <div class="form-panel">
            <section id="unseen">
                <table class="display table table-bordered">
                  <thead>
                  <tr>
                      <th><input type="checkbox" checked="checked"></th>
                      <th>Nama User Tidak Masuk Group</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                           
                            foreach ($v_user_group as $item) {
                            ?>
                      <td><input type="checkbox" checked="checked"></td>
                      <td><?= $item->user_name ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
                </table>
              </section>

      </div>
    </div>

    <div class="col-md-4">
    <div class="col-md-6">
      <br>
    <a href="<?= base_url(). 'usergroup/tambah'?>" class="btn btn-primary">Masukkan Group -></a>
  </div>
  <div class="col-lg-8">
    <br>
    <a href="<?php echo base_url() . 'usergroup/hapus';?>/<?php echo $item->user_id ?>" class="btn btn-danger" onclick="return confirm('Yakin Menghapus Data?')"><- Hapus dari Group</a>
  </div>
</div>



     <form class="form-horizontal style-form" method="post" action="<?php echo base_url() . 'usergroup/tambah_aksi'; ?>">
    <div class="col-lg-4">
    <div class="form-panel">
      <section id="unseen">
                <table class="display table table-bordered">
                  <thead>
                  <tr>
                      <th><input type="checkbox" checked="checked"></th>
                      <th>Nama User Dalam Group</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                           
                            foreach ($v_user_group as $item) {
                            ?>
                      <td><input type="checkbox" checked="checked"></td>
                      <td><?= $item->user_name ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
                </table>
              </section>
  </div>


</section>
</section>


