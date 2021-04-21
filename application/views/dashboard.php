<?php if ($this->session->userdata('kader_id') == 1) { ?>
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h1>Halaman Admin</h1>
              <h3>Selamat Datang di Halaman Admin Sistem Pendataan Peserta Keluarga Berencana</h3>
            </div>
            
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
<?php }elseif ($this->session->userdata('kader_id') == 2) { ?>
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h1>Halaman Petugas</h1>
              <h3>Selamat Datang di Halaman Petugas Sistem Pendataan Peserta Keluarga Berencana</h3>
            </div>
            
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
<?php }elseif ($this->session->userdata('kader_id') == 3) { ?>
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h1>Halaman User Dinas</h1>
              <h3>Selamat Datang di Halaman User Dinas Sistem Pendataan Peserta Keluarga Berencana</h3>
            </div>
            
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <?php } ?>
    <!--main content end-->

<!-- isi halaman end -->