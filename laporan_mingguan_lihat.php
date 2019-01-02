<!doctype html>
<html lang="en">

<head>
    <?php
        $tanggal = $_POST['tgl'];
        $tanggalsb = date('Y-m-d', strtotime('-6 days', strtotime( $tanggal ))); //kurang tanggal sebanyak 6 hari
        include 'lib_header.php';
        $tgl = tanggal_indo($_POST['tgl']); 
        $hari = date('D', strtotime($_POST['tgl']));

    ?>
    <title>Hal - Laporan Mingguan</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->

        <?php
            include 'navbar.php';
        ?>

        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Laporan <?php echo $dayList[$hari].", ".$tgl; ?></h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Menu Penggajian</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Laporan Mingguan</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Lihat Data Laporan</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Tabel Laporan <?php echo $dayList[$hari].", ".$tgl." ".$tanggal; ?></h5>
                            <div class="card-body">
                                <?php                                         
                                        $query = "SELECT DISTINCT karyawan FROM tb_gaji WHERE tgl BETWEEN '$tanggalsb' AND '$tanggal'";
                                        $sql = mysqli_query($con, $query);
                                        while ($a = mysqli_fetch_array($sql)) {            
                                ?>
                                <div class="card">
                                    <div class="card-header">                                            
                                        Slip Gaji : <?php echo $a['karyawan'] ?>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-lg-9">
                                        <table class="table">
                                            <tr>
                                                <td width="150px">Periode</td>
                                                <td>:</td>
                                                <td><?php echo tanggal_indo($tanggalsb)." sampai ".tanggal_indo($tanggal) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Cetak</td>
                                                <td>:</td>
                                                <td><?php $tgl_skrng = date('Y-m-d');echo tanggal_indo($tgl_skrng); ?></td>
                                            </tr>
                                        </table>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover">
                                            <tr>
                                                <td colspan="3"><u><b>Rincian Pendapatan Per Hari</b></u></td>
                                            </tr>                                        
                                            <?php                          
                                                    $karyawan = $a['karyawan'];
                                                    $queryb = "SELECT * FROM tb_gaji WHERE karyawan = '$karyawan'";
                                                    $sqlb = mysqli_query($con, $queryb);
                                                    while ($b = mysqli_fetch_array($sqlb)) {            
                                            ?>
                                            <tr>
                                                <td><?php $tgl2=date('D', strtotime($b['tgl'])); echo $dayList[$tgl2] ?></td>
                                                <td>:</td>
                                                <td><?php echo $b['tot_ukuran']?></td>
                                            </tr>
                                            <?php }?>
                                        </table>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

    <?php
        include 'lib_footer.php';
    ?>
</body>

</html>