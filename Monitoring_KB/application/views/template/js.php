<!-- js placed at the end of the document so the pages load faster -->
  <script src="<?= base_url() ?>/assets/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?= base_url() ?>/assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?= base_url() ?>/assets/lib/jquery.scrollTo.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>/assets/lib/jquery.sparkline.js"></script>
  <script type="text/javascript" language="javascript" src="<?= base_url() ?>/assets/lib/advanced-datatable/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="<?= base_url() ?>/assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="<?= base_url() ?>/assets/lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/gritter-conf.js"></script>
  <!--script for this dashboard-->
  <script src="<?= base_url() ?>/assets/lib/sparkline-chart.js"></script>
  <script src="<?= base_url() ?>/assets/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
      <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Selamat datang, Admin!',
        // (string | mandatory) the text inside the notification
        text: 'Silahkan gunakan fitur layanan yang disediakan, gunakanlah dengan bijak. Jangan lupa untuk selalu LogOut setelah anda selesai menggunakan fitur yang disediakan.',
        // (string | optional) the image to display on the left
        image: '<?= base_url() ?>/assets/img/jma.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

  <!-- script for table trader -->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>

  <!--script for this artikel-->
  <script src="<?= base_url() ?>/assets/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="<?= base_url() ?>/assets/lib/advanced-form-components.js"></script>

<!--script for this form validation-->
<script src="<?= base_url() ?>/assets/lib/form-validation-script.js"></script>



  
  </body>

  <div class="modal fade" id="editTraderModal" tabindex="-1" role="dialog" aria-labelledby="editTraderModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 detailed">
              <h4 class="mb">Personal Information</h4>
              <form role="form" class="form-horizontal">
                <div class="form-group">
                  <label class="col-lg-2 control-label"> Foto Profil</label>
                  <div class="col-lg-6">
                    <input type="file" id="exampleInputFile" class="file-pos">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder=" " id="c-name" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Alamat</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder=" " id="c-name" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Tanggal Lahir</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder=" " id="lives-in" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder=" " id="country" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">No HP</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder=" " id="country" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Description</label>
                  <div class="col-lg-10">
                    <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="lihatTraderModal" tabindex="-1" role="dialog" aria-labelledby="lihatTraderModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <div class="activity-panel">
          <p><img src="img/ui-sam.jpg" class="img-circle"></p>
                              <div class="profile-text">
            <h3>Sam Soffes</h3>
            <h6>Main Administrator</h6>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
            <br>
          </div>
                            </div>
          </center>
        <div class="modal-footer">
          
        </div>
        </div>
      </div>
    </div>
  </div>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
</html>
