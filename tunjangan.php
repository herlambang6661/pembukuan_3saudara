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
    <title>Hal - Tunjangan</title>
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
                            <h2 class="pageheader-title">Data Tunjangan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Menu Penggajian</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Tunjangan</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Lihat Data Tunjangan</li>
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
                            <h5 class="card-header">Tabel Tunjangan</h5>
                            <div class="card-body">
                            <a href="tunjangan_tambah.php" class="btn btn-info"><i class="fa fa-plus"></i> Input Tunjangan</a>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tabel1"><br><br>
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Tanggal</center></th>
                                            <th><center>Nama Karyawan</center></th>
                                            <th><center>THR</center></th>
                                            <th><center>Uang Kerajinan</center></th>
                                            <th><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        $query = "SELECT * FROM tb_tunjangan";
                                        $sql = mysqli_query($con, $query);
                                        while ($a = mysqli_fetch_array($sql)) {
                                            $tgl = tanggal_indo($a['tanggal']);
                                            $hari = date('D', strtotime($a['tanggal']));

                                    ?>
                                        <tr class="event gradeX">
                                            <td><center><?php echo $i=1;$i++; ?></center></td>
                                            <td><center><?php echo $dayList[$hari].", ".$tgl; ?></center></td>
                                            <td><center><?php echo $a['nama']; ?></center></td>
                                            <td><center><?php echo $a['thr']; ?></center></td>
                                            <td><center><?php echo $a['uang_kerajinan']; ?></center></td>
                                            <td>
                                                <center>
                                                <a href="tunjangan_edit.php?id=<?php echo $a['id']; ?>"><button class="btn btn-outline-brand" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Data"><i class="fa fa-edit"></i></button></a>
                                                <button onclick="hapus('<?php echo $a['id'] ?>','<?php echo $a['nama'] ?>')" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus Data"><i class="fa fa-trash"></i></button>
                                                <script>
                                                    function hapus(x,y){
                                                        swal({
                                                        title: 'Apakah Anda Yakin Ingin Menghapus? '+y,
                                                        type: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Ya',
                                                        cancelButtonText: 'Tidak',
                                                        }).then((result) => {
                                                        if (result.value) {
                                                            window.location="proses.php?id="+x+"&aksi=hapus_tunjangan"; // if you need redirect page
                                                            // swal({
                                                            //   // position: 'top-end',
                                                            //   type: 'success',
                                                            //   title: 'Data Berhasil Dihapus',
                                                            //   showConfirmButton: false,
                                                            //   timer: 500,
                                                            //   // html: 'logout.php'; // if you need redirect page
                                                            // });
                                                        }
                                                        })
                                                    }
                                                </script>

                                                </center>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
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
