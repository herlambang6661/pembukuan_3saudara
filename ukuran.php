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
    <title>Hal - Ukuran</title>
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
                            <h2 class="pageheader-title">Data Ukuran</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Master</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Lihat Data Ukuran</li>
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
                            <h5 class="card-header">Tabel Ukuran</h5>
                            <div class="card-body">
                                <a href="ukuran_tambah.php" class="btn btn-info"><i class="fa fa-plus"></i> Tambah ukuran</a>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tabel1"><br><br>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Ukuran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $query = "SELECT * FROM tb_ukuran";
                                        $sql = mysqli_query($con, $query);
                                        while ($a = mysqli_fetch_array($sql)) {

                                    ?>
                                        <tr class="event gradeX">
                                            <td><?php echo $a['id']; ?></td>
                                            <td><?php echo $a['ukuran']; ?></td>
                                            <td>
                                                <a href="ukuran_edit.php?id=<?php echo $a['id']; ?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>
                                                <button onclick="hapus('<?php echo $a['id'] ?>','<?php echo $a['ukuran'] ?>')" data-toggle="tooltip" class="btn btn-danger"><i class="fa fa-gavel"></i>   Hapus</button>
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
                                                            window.location="proses.php?id="+x+"&aksi=hapus_ukuran"; // if you need redirect page
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
