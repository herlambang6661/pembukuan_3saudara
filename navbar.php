<div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown connection">
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">

                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar1.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Selamat Datang <?php echo $_SESSION['username'] ?> </h5>
                                    <!-- <span class="status"></span><span class="ml-2">Available</span> -->
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Data Master</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Data Master</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Data Karyawan</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="karyawan_tambah.php">Tambah Karyawan</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="karyawan.php">Lihat Data Karyawan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ukuran.php">Ukuran</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ketebalanHarga.php">Ketebalan & Harga</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-divider">
                                <i class="fa fa-dolars"></i> Penggajian
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-20" aria-controls="submenu-20"><i class="fas fa-donate"></i>Menu Penggajian</a>
                                <div id="submenu-20" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="gaji_tambah.php">Input Data Gaji</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gaji_karyawan_tambah.php">Input Berdasarkan Karyawan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gaji.php">Lihat Data Gaji</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="laporan_mingguan.php">Laporan Mingguan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                               Tunjangan & Potongan
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-30" aria-controls="submenu-30"><i class="fas fa-plus"></i>Menu Tunjangan</a>
                              <div id="submenu-30" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                      <li class="nav-item">
                                          <a class="nav-link" href="tunjangan_tambah.php">Input Tunjangan</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="tunjangan.php">Lihat Data Tunjangan</a>
                                      </li>
                                  </ul>
                              </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-40" aria-controls="submenu-40"><i class="fas fa-minus"></i>Menu Potongan</a>
                              <div id="submenu-40" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                      <li class="nav-item">
                                          <a class="nav-link" href="potongan_tambah.php">Input Potongan</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="potongan.php">Lihat Data Potongan</a>
                                      </li>
                                  </ul>
                              </div>
                            </li>

                            <li class="nav-divider">
                               Grafik
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-50" aria-controls="submenu-50"><i class="fas fa-chart-area"></i>Menu Grafik</a>
                              <div id="submenu-50" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                      <li class="nav-item">
                                          <a class="nav-link" href="potongan.php">Lihat Grafik Ukuran</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="potongan.php">Lihat Grafik Ukuran</a>
                                      </li>
                                  </ul>
                              </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
