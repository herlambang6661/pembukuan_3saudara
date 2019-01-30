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
                    <div class="col-xl-10">
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

                                    <?php
                                        if (isset($_POST['lanjut']))
                                        {
                                            if ($_POST['jml'] > 7) {
                                                echo "
                                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                    Inputan tidak boleh Lebih dari 7.
                                                    <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
                                                        <span aria-hidden='true'>×</span>
                                                    </a>
                                                </div>";
                                            }
                                            elseif ($_POST['jml'] <= 0) {
                                                echo "
                                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                    Inputan tidak boleh Kurang dari 0.
                                                    <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
                                                        <span aria-hidden='true'>×</span>
                                                    </a>
                                                </div>";
                                            }
                                            else {
                                                $kr = $_POST['karyawan'];
                                                $jml = $_POST['jml'];
			                                    echo "<script>window.location='gaji_karyawan_tambah_jumlah.php?kr=$kr&jml=$jml';</script>";
                                            }
                                        }
                                    ?>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama karyawan</label>
                                                <select name="karyawan" class="form-control" required>
                                                    <option value="">-- Pilih Karyawan --</option>
                                                    <?php
                                                        $query = "SELECT * FROM tb_karyawan";
                                                        $data = mysqli_query($con,$query);
                                                        while ($a = mysqli_fetch_array($data)) {
                                                    ?>
                                                        <option value="<?php echo $a['id']; ?>"><?php echo $a['nama']; ?></option>
                                                        <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Inputan Hari</label>
                                                <input type="number" name="jml" class="form-control" placeholder="Masukkan jumlah hari karyawan kerja dengan angka 1 sampai 7" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <script>
                                            function hanyaAngka(evt){
                                                var charCode = (evt.which) ? evt.which : event.keyCode
                                                if (charCode > 31 && (charCode < 48 || charCode >57))
                                                return false;
                                                return true;
                                            }
                                            </script>
                                            <div class="form-group"><br>
                                              <button class="btn btn-primary" type="submit" name="lanjut">Lanjut</button>
                                              <button class="btn btn-danger" type="reset">Reset</button>
                                              <input TYPE="button" class="btn btn-info" VALUE="Back" onClick="history.go(-1);">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
