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
                            <div class="card">
                                <div class="card-header d-flex">
                                    <h4 class="card-header-title "></h4>
                                    <div class="toolbar card-toolbar-tabs  ml-auto">
                                      <input TYPE="button" class="btn btn-info" VALUE="Kembali" onClick="history.go(-1);">
                                      <button type="button" onclick="printContent('lul')" class="btn btn-success"><i class="fa fa-print"></i>   Print</button>
                                    </div>
                                </div>
                                <div id="lul">
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
                                        <div class="row mb-4">
                                            <div class="col-sm-6">
                                              <table class="table table-striped table-bordered table-hover">
                                                  <tr>
                                                      <td colspan="5"><u><b>Rincian Pendapatan Per Hari</b></u></td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Hari</b></td>
                                                    <td><b>Ukuran</b></td>
                                                    <td><b>Ketebalan</b></td>
                                                    <td><b>Harga</b></td>
                                                    <td><b>Harga total</b></td>
                                                  </tr>
                                                  <?php
                                                    $karyawan = $a['karyawan'];
                                                    $queryb = "SELECT * FROM tb_gaji WHERE karyawan = '$karyawan' AND tgl BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqlb = mysqli_query($con, $queryb);
                                                    while ($b = mysqli_fetch_array($sqlb)) {

                                                  ?>
                                                  <tr>
                                                      <td><?php $tgl2=date('D', strtotime($b['tgl'])); echo $dayList[$tgl2] ?></td>
                                                      <td><?php echo $b['tot_ukuran']?> meter</td>
                                                      <td><?php echo $b['ketebalan']?></td>
                                                      <td>Rp. <?php echo $b['harga']?></td>
                                                      <td>Rp. <?php echo $b['jumlah']; ?></td>
                                                  </tr>
                                                  <?php }
                                                    $queryc = "SELECT SUM(jumlah) AS totalJml FROM tb_gaji WHERE karyawan = '$karyawan' AND tgl BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqlc = mysqli_query($con, $queryc);
                                                    while ($c = mysqli_fetch_array($sqlc)) {
                                                        $totalJml = $c['totalJml'];
                                                    }
                                                    ?>
                                                  <tr>
                                                    <td colspan="3"><h4><b>Total pendapatan</b></h4></td>
                                                    <td colspan="2"><h4><b>Rp. <?php echo $totalJml ?></b></h4></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="5"></td>
                                                  </tr>
                                                  <tr>
                                                      <td colspan="5"><u><b>Rincian Tunjangan </b></u></td>
                                                  </tr>
                                                  <tr>
                                                    <td>THR</td>
                                                    <td>:</td>
                                                    <?php
                                                        $querytuna = "SELECT SUM(thr) AS tunthr FROM tb_tunjangan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                        $sqltuna = mysqli_query($con, $querytuna);
                                                        while ($tuna = mysqli_fetch_array($sqltuna)) {
                                                    ?>
                                                    <td colspan="3"><?php $tun1 = $tuna['tunthr']; echo $tun1 + 0; ?></td>
                                                    <?php } ?>
                                                  </tr>
                                                  <tr>
                                                    <td>Uang Kerajinan</td>
                                                    <td>:</td>
                                                    <?php
                                                        $querytunb = "SELECT SUM(uang_kerajinan) AS kerajinan FROM tb_tunjangan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                        $sqltunb = mysqli_query($con, $querytunb);
                                                        while ($tunb = mysqli_fetch_array($sqltunb)) {
                                                    ?>
                                                    <td colspan="3"><?php $tun2 = $tunb['kerajinan']; echo $tun2 + 0; ?></td>
                                                    <?php } ?>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="3"><h4><b>Total Tunjangan</b></h4></td>
                                                    <td colspan="2"><h4><b>Rp. <?php $tuntot = $tun1 + $tun2; echo $tuntot ?></b></h4></td>
                                                  </tr>
                                              </table>
                                            </div>
                                            <div class="col-sm-6">
                                              <table class="table table-striped table-bordered table-hover">
                                                <tr>
                                                  <td colspan="3"><u><b>Potongan lainnya</b></u></td>
                                                </tr>
                                                <tr>
                                                  <td>Potongan jamsostek</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $queryd = "SELECT SUM(potongan_jamsostek) AS jamS FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqld = mysqli_query($con, $queryd);
                                                    while ($d = mysqli_fetch_array($sqld)) {
                                                  ?>
                                                  <td><?php $jams = $d['jamS']; echo $jams + 0; ?></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                  <td>Potongan absen</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $querye = "SELECT SUM(potongan_absen) AS absen FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqle = mysqli_query($con, $querye);
                                                    while ($e = mysqli_fetch_array($sqle)) {
                                                  ?>
                                                  <td><?php $absen = $e['absen']; echo $absen + 0; ?></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                  <td>Potongan telat</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $queryf = "SELECT SUM(potongan_telat) AS telat FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqlf = mysqli_query($con, $queryf);
                                                    while ($f = mysqli_fetch_array($sqlf)) {
                                                  ?>
                                                  <td><?php $telat = $f['telat']; echo $telat + 0; ?></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                  <td>PPH</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $queryg = "SELECT SUM(pph) AS pajak FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqlg = mysqli_query($con, $queryg);
                                                    while ($g = mysqli_fetch_array($sqlg)) {
                                                  ?>
                                                  <td><?php $pajak = $g['pajak']; echo $pajak + 0; ?></td>
                                                  <?php }?>
                                                </tr>
                                                <tr>
                                                  <td>Kasbon</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $queryh = "SELECT SUM(kasbon) AS bon FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqlh = mysqli_query($con, $queryh);
                                                    while ($h = mysqli_fetch_array($sqlh)) {
                                                  ?>
                                                  <td><?php $bon = $h['bon']; echo $bon + 0; ?></td>
                                                  <?php }?>
                                                </tr>
                                                <tr>
                                                  <td><h4><b>Total potongan</b></h4></td>
                                                  <td><h4><b>:</b></h4></td>
                                                  <td><h4><b>Rp. <?php $tot_pot = $jams + $absen + $telat + $pajak + $bon; echo $tot_pot; ?></b></h4></td>
                                                </tr>
                                                <tr>
                                                  <td> </td>
                                                  <td> </td>
                                                  <td> </td>
                                                </tr>
                                                <tr>
                                                  <td><h4><b>Total Gaji</b></h4></td>
                                                  <td><h4><b>:</b></h4></td>
                                                  <td><h4><b>Rp. <?php $tot_gaji = ($totalJml + $tuntot) - $tot_pot; echo $tot_gaji ?></b></h4></td>
                                                </tr>
                                              </table><br /><br/>
                                            </br/>
                                              <table class="table table-striped table-bordered table-hover">
                                                <tr>
                                                  <td colspan="3"><u><b>Judul Tabel 4</b></u></td>
                                                </tr>
                                                <tr>
                                                  <td>Potongan jamsostek</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $queryd = "SELECT SUM(potongan_jamsostek) AS jamS FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqld = mysqli_query($con, $queryd);
                                                    while ($d = mysqli_fetch_array($sqld)) {
                                                  ?>
                                                  <td><?php $jams = $d['jamS']; echo $jams + 0; ?></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                  <td>Potongan absen</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $querye = "SELECT SUM(potongan_absen) AS absen FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqle = mysqli_query($con, $querye);
                                                    while ($e = mysqli_fetch_array($sqle)) {
                                                  ?>
                                                  <td><?php $absen = $e['absen']; echo $absen + 0; ?></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                  <td>Potongan telat</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $queryf = "SELECT SUM(potongan_telat) AS telat FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqlf = mysqli_query($con, $queryf);
                                                    while ($f = mysqli_fetch_array($sqlf)) {
                                                  ?>
                                                  <td><?php $telat = $f['telat']; echo $telat + 0; ?></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                  <td>PPH</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $queryg = "SELECT SUM(pph) AS pajak FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqlg = mysqli_query($con, $queryg);
                                                    while ($g = mysqli_fetch_array($sqlg)) {
                                                  ?>
                                                  <td><?php $pajak = $g['pajak']; echo $pajak + 0; ?></td>
                                                  <?php }?>
                                                </tr>
                                                <tr>
                                                  <td>Kasbon</td>
                                                  <td width="10px">:</td>
                                                  <?php
                                                    $queryh = "SELECT SUM(kasbon) AS bon FROM tb_potongan WHERE nama = '$karyawan' AND tanggal BETWEEN '$tanggalsb' AND '$tanggal'";
                                                    $sqlh = mysqli_query($con, $queryh);
                                                    while ($h = mysqli_fetch_array($sqlh)) {
                                                  ?>
                                                  <td><?php $bon = $h['bon']; echo $bon + 0; ?></td>
                                                  <?php }?>
                                                </tr>
                                                <tr>
                                                  <td><h4><b>Total potongan</b></h4></td>
                                                  <td><h4><b>:</b></h4></td>
                                                  <td><h4><b>Rp. <?php $tot_pot = $jams + $absen + $telat + $pajak + $bon; echo $tot_pot; ?></b></h4></td>
                                                </tr>
                                                <tr>
                                                  <td> </td>
                                                  <td> </td>
                                                  <td> </td>
                                                </tr>
                                                <tr>
                                                  <td><h4><b>Total Gaji</b></h4></td>
                                                  <td><h4><b>:</b></h4></td>
                                                  <td><h4><b>Rp. <?php $tot_gaji = ($totalJml + $tuntot) - $tot_pot; echo $tot_gaji ?></b></h4></td>
                                                </tr>
                                              </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
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
