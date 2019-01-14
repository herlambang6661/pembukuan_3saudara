<!doctype html>
<html lang="en">

<head>
    <?php

		// session_start();
		// if ($_SESSION['status'] != "login") {
		// 	header("location: ./login.php");
        // }

        include 'lib_header.php';

        $id = $_GET['kr'];
        $query = "SELECT * FROM tb_karyawan WHERE id='$id'";
        $data = mysqli_query($con,$query);
        while ($a = mysqli_fetch_array($data)) {
            $karyawan = $a['nama'];
        }
    ?>
    <title>Hal - Tambah Gaji Berdasarkan Karyawan</title>
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
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Form Input Gaji Berdasarkan Karyawan</h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Menu Penggajian</a></li>
                                                <li class="breadcrumb-item"><a href="gaji.php" class="breadcrumb-link">Data Gaji</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Input Data Gaji Berdasarkan Karyawan</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Input Gaji Berdasarkan Karyawan</h5>
                                    <div class="card-body">
                                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tr>
                                                <td>Nama Karyawan</td>
                                                <td>:</td>
                                                <td><?php echo $karyawan ?></td>
                                            </tr>
                                        </table><br>

                                        </div>
                                        <form method="POST" action="proses.php?aksi=tambah_gaji_karyawan">
                                            <table class="table table-striped table-bordered table-hover">
                                            <tr>
                                            <td>No.</td>
                                            <!-- <td>Hari</td> -->
                                            <td>Tanggal</td>
                                            <td>Nama Karyawan</td>
                                            <td>Ukuran Total</td>
                                            <td>Ketebalan</td>
                                            <td>Harga</td>
                                            </tr>

                                            <?php
                                            $no = 1;
                                            $n = $_GET['jml']; // membaca jumlah data

                                            for ($i=1; $i<=$n; $i++){
                                            echo "
                                                    <tr>
                                                    <td>$no</td>

                                                    <td>
                                                        <input type='date' name='tgl".$i."' class='form-control' required>
                                                    </td>

                                                    <td>
                                                        <input type='hidden' name='nama".$i."' class='form-control' value='$karyawan'>
                                                        <input type='text' class='form-control' value='$karyawan' readonly>
                                                    </td>

                                                    <td>
                                                        <input type='text' name='ukuran".$i."' class='form-control' value='0'>
                                                    </td>

                                                    <td>
                                                        <select class='form-control' name='ketebalan".$i."'>".
                                                                $queryb = 'SELECT * FROM tb_ketebalan';
                                                                $datab = mysqli_query($con,$queryb);
                                                                while ($b = mysqli_fetch_array($datab)) {
                                                                    echo "<option value='".$b['ketebalan']."'> ".$b['ketebalan']."</option>";
                                                                }
                                                        echo "
                                                        </select>
                                                    </td>

                                                    <td>
                                                        <select class='form-control' name='harga".$i."'>".
                                                                $queryb = 'SELECT * FROM tb_ketebalan';
                                                                $datab = mysqli_query($con,$queryb);
                                                                while ($b = mysqli_fetch_array($datab)) {
                                                                    echo "<option value='".$b['harga']."'> ".$b['harga']."</option>";
                                                                }
                                                            echo "
                                                        </select>
                                                    </td>
                                                </tr>";
                                                $no++;
                                            }
                                            ?>

                                            </table><br>
                                            <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-block">
                                            <input type="hidden" name="jml" value="<?php echo $n; ?>">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
