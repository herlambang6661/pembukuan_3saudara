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
    <title>Hal - Tambah Gaji</title>
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
                                    <h2 class="pageheader-title">Form Input Gaji </h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Menu Penggajian</a></li>
                                                <li class="breadcrumb-item"><a href="gaji.php" class="breadcrumb-link">Data Gaji</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Input Data Gaji</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Input Gaji</h5>
                                    <div class="card-body">
                                        <form action="proses.php?aksi=tambah_gaji" method="POST">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="date" name="tgl" class="form-control" required>
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
                                                <label>Ukuran Total <small>( Gunakan titik sebagai koma )</small></label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="ukuran" class="form-control" placeholder="Masukkan total ukuran dengan angka" required>
                                                    <div class="input-group-append"><span class="input-group-text">Meter</span></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Harga</label>
                                                <select name="harga" class="form-control" required>
                                                    <option value="">-- Tentukan Harga --</option>
                                                    <?php
                                                        $query = "SELECT * FROM tb_ketebalan";
                                                        $data = mysqli_query($con,$query);
                                                        while ($a = mysqli_fetch_array($data)) {
                                                    ?>
                                                    <option value="<?php echo $a['harga']; ?>">Rp. <?php echo $a['harga']; ?></option>
                                                        <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Ketebalan</label>
                                                <select name="ketebalan" class="form-control" required>
                                                    <option value="">-- Tentukan Ketebalan --</option>
                                                    <?php
                                                        $queryk = "SELECT * FROM tb_ketebalan";
                                                        $datak = mysqli_query($con,$queryk);
                                                        while ($k = mysqli_fetch_array($datak)) {
                                                    ?>
                                                    <option value="<?php echo $k['ketebalan']; ?>"><?php echo $k['ketebalan']; ?></option>
                                                        <?php } ?>
                                                </select>
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
