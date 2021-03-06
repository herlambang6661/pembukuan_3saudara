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
    <title>Hal - Tambah Potongan Berdasarkan Karyawan</title>
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
                                    <h2 class="pageheader-title">Form Input Potongan Berdasarkan Karyawan</h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Menu Penggajian</a></li>
                                                <li class="breadcrumb-item"><a href="gaji.php" class="breadcrumb-link">Data Gaji</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Input Data Potongan Berdasarkan Karyawan</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Input Potongan</h5>
                                    <div class="card-body">
                                      <div class="alert alert-info">
                                        <p><strong><i class="fas fa-question"></i> Info :</strong> Jika tidak ada potongan biarkan 0</p>
                                      </div>
                                        <form action="proses.php?aksi=tambah_potongan" method="POST">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="date" name="tanggal" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama karyawan</label>
                                                <select name="karyawan" class="form-control" required>
                                                    <option value="">-- Pilih Karyawan --</option>
                                                    <?php
                                                        $query = "SELECT * FROM tb_karyawan";
                                                        $data = mysqli_query($con,$query);
                                                        while ($a = mysqli_fetch_array($data)) {
                                                    ?>
                                                    <option value="<?php echo $a['nama']; ?>"><?php echo $a['nama']; ?></option>
                                                        <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Potongan Jamsostek</label>
                                                <input type="number" name="jamsostek" class="form-control" value="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Potongan Absen</label>
                                                <input type="number" name="absen" class="form-control" value="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Potongan Telat</label>
                                                <input type="number" name="telat" class="form-control" value="0">
                                            </div>
                                            <div class="form-group">
                                                <label>PPH</label>
                                                <input type="number" name="pph" class="form-control" value="0">
                                            </div>
                                            <div class="form-group">
                                                <label>Total Kasbon</label>
                                                <input type="number" name="kasbon" class="form-control" value="0">
                                            </div>
                                            <div class="form-group"><br>
                                              <button class="btn btn-primary" type="submit">Simpan</button>
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
