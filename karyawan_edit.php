<!doctype html>
<html lang="en">

<head>
    <?php

		// session_start();
		// if ($_SESSION['status'] != "login") {
		// 	header("location: ./login.php");
        // }

        include 'lib_header.php';
    ?>
    <title>Hal - Edit Karyawan</title>
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
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Form Edit Karyawan </h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data master</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data karyawan</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Edit karyawan</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Edit karyawan</h5>
                                    <div class="card-body">
                                      <?php
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM tb_karyawan WHERE id='$id'";
                                        $data = mysqli_query($con,$query);
                                        while ($a = mysqli_fetch_array($data)) {
                                       ?>
                                        <form action="proses.php?aksi=edit_karyawan&id=<?php echo $id ?>" method="POST">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama karyawan</label>
                                                <input type="text" class="form-control" name="nama" value="<?php echo $a['nama'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Pilih bagian</label>
                                                <select class="form-control" name="bagian" required>
                                                    <option value="<?php echo $a['bagian'] ?>">-- <?php echo $a['bagian'] ?> --</option>
                                                    <option value="Bagian Produksi">Bagian Produksi</option>
                                                    <option value="Bagian Finishing">Bagian Finishing</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                              <button class="btn btn-primary" type="submit">Simpan</button>
                                              <button class="btn btn-danger" type="reset">Reset</button>
                                              <button class="btn btn-info" onClick=”history.go(-1);”>Kembali</button>
                                            </div>
                                        </form><?php } ?>
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
