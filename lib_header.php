
    <?php 
        session_start();
        include 'include/db_config.php';
     ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- DATE PICKER -->
    <script src="assets/datePicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <link href="assets/datePicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- SWEET ALERT -->
    <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.min.css">
    <script src="assets/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- DATA TABLES -->
    <link rel="stylesheet" href="assets/dataTables/dataTables.bootstrap4.min.css">

    <?php
        date_default_timezone_set('Asia/Jakarta');
        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );

        function tanggal_indo($tanggal)
        {
            
            $bulan = array (1 =>   
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
            );
        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];    
        }
    ?>
