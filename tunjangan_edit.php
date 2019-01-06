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
    <title>Hal - Edit Tunjangan</title>
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
                                    <h2 class="pageheader-title">Form Edit Tunjangan </h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data master</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Tunjangan</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Edit Tunjangan</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Edit Tunjangan</h5>
                                    <div class="card-body">
                                      <?php
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM tb_tunjangan WHERE id='$id'";
                                        $data = mysqli_query($con,$query);
                                        while ($a = mysqli_fetch_array($data)) {
                                       ?>
                                        <form action="proses.php?aksi=edit_tunjangan&id=<?php echo $a['id'] ?>" method="POST">
                                          <div class="form-group">
                                              <label>Tanggal</label>
                                              <input type="date" name="tanggal" class="form-control" value="<?php echo $a['tanggal'] ?>" required>
                                          </div>
                                          <div class="form-group">
                                              <label for="inputText3" class="col-form-label">Nama karyawan</label>
                                              <select name="karyawan" class="form-control" required>
                                                  <option value="<?php echo $a['nama'] ?>"><?php echo $a['nama'] ?></option>
                                                  <?php
                                                      $query = "SELECT * FROM tb_karyawan";
                                                      $data = mysqli_query($con,$query);
                                                      while ($b = mysqli_fetch_array($data)) {
                                                  ?>
                                                  <option value="<?php echo $b['nama']; ?>"><?php echo $b['nama']; ?></option>
                                                      <?php } ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>THR <small>(Opsional)</small></label>
                                              <input type="number" name="thr" class="form-control" value="<?php echo $a['thr']; ?>">
                                          </div>
                                          <div class="form-group">
                                              <label>Uang kerajinan <small>(Opsional)</small></label>
                                              <input type="number" name="uangKerajinan" class="form-control" value="<?php echo $a['uang_kerajinan'] ?>">
                                          </div>
                                            <div class="form-group">
                                              <button class="btn btn-primary" type="submit">Simpan</button>
                                              <button class="btn btn-danger" type="reset">Reset</button>
                                              <input TYPE="button" class="btn btn-info" VALUE="Back" onClick="history.go(-1);">
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
