
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
      <div class="container-fluid">
          <div class="row">
              <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
              </div>
              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                  <div class="text-md-right footer-links d-none d-sm-block">
                    Copyright © 2019 CV 3 Saudara. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                      <!-- <a href="javascript: void(0);">About</a>
                      <a href="javascript: void(0);">Support</a>
                      <a href="javascript: void(0);">Contact Us</a> -->
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js" type="text/javascript"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js" type="text/javascript"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js" type="text/javascript"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js" type="text/javascript"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js" type="text/javascript"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js" type="text/javascript"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js" type="text/javascript"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js" type="text/javascript"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js" type="text/javascript"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js" type="text/javascript"></script>

    <!-- DataTables -->
    <script src="assets/dataTables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/dataTables/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script>
      $(document).ready(function () {
          $('#tabel1').dataTable();
      });
    </script>

    <script>
      $(document).ready(function () {
          $('#tabel2').dataTable();
      });
    </script>

    <script>
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
    </script>

    <script type="text/javascript">
      function printContent(el)
      {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
      }
    </script>
