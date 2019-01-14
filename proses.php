<?php

	include 'include/db_config.php';

	$aksi = $_GET['aksi'];

	// GAJI
	if ($aksi == "tambah_gaji") {
		$tgl = $_POST['tgl'];
		$karyawan = $_POST['karyawan'];
		$ukuran = $_POST['ukuran'];
		$harga = $_POST['harga'];
		$ketebalan = $_POST['ketebalan'];
		$jumlah = $ukuran * $harga;

		$sql = "INSERT INTO tb_gaji VALUES ('', '$tgl', '$karyawan', '$ketebalan', '$ukuran', '$harga', '$jumlah')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("location: gaji.php?hasil=berhasil");
		}
	}
	if ($aksi == "edit_gaji") {
		$id = $_GET['id'];
		$tgl = $_POST['tgl'];
		$karyawan = $_POST['karyawan'];
		$ukuran = $_POST['ukuran'];
		$harga = $_POST['harga'];
		$ketebalan = $_POST['ketebalan'];
		$jumlah = $ukuran * $harga;

		$sql = "UPDATE tb_gaji SET karyawan='$karyawan', tgl='$tgl', tot_ukuran='$ukuran', harga='$harga', ketebalan='$ketebalan', jumlah='$jumlah' WHERE id='$id'";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header("location: gaji.php?hasil=berhasil");
		} else {
			header("location: gaji.php?hasil=gagal");
		}
	}

	if ($aksi == "hapus_gaji") {
		$id = $_GET['id'];

		$result = mysqli_query($con,"DELETE FROM tb_gaji WHERE id='$id'");
		if ($result) {
			header("location: gaji.php?hasil=berhasil");
		} else {
			header("location: gaji.php?hasil=gagal");
		}
	}

	if ($aksi == "tambah_gaji_karyawan") {
		
		$n = $_POST['jml']; // membaca jumlah data

		// looping
		for ($i=1; $i<=$n; $i++)
		{
		 $tgl = $_POST['tgl'.$i];
		 $nama = $_POST['nama'.$i];
		 $ukuran = $_POST['ukuran'.$i];
		 $ketebalan = $_POST['ketebalan'.$i];
		 $harga = $_POST['harga'.$i];
		 $jumlah = $harga * ukuran;
	
		 if ((!empty($tgl)) && (!empty($nama)) && (!empty($ukuran)) && (!empty($ketebalan)) && (!empty($harga)))
		 {
		 $query = "INSERT INTO tb_gaji (tgl, karyawan, tot_ukuran, ketebalan, harga) VALUES ('$tgl', '$nama', '$ukuran', '$ketebalan', '$harga')";
		 $hasil = mysqli_query($con, $query);	
		   if($hasil){
			header("location: gaji_karyawan_tambah.php?hasil=berhasil");
			}else{
				header("location: gaji_karyawan_tambah.php?hasil=gagal");
			}
		 }
		}
	}
	// KARYAWAN
	if ($aksi ==  "tambah_karyawan") {
		$nama = $_POST['nama'];
		$bag = $_POST['bagian'];

		$sql = "INSERT INTO tb_karyawan VALUES ('','$nama','$bag')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("location: karyawan.php");
		} else {

		}
	}

	if ($aksi == "edit_karyawan") {
		$id = $_GET['id'];
		$nama = $_POST['nama'];
		$bag = $_POST['bagian'];

		$sql = "UPDATE tb_karyawan SET nama='$nama', bagian='$bag' WHERE id='$id'";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header("location: karyawan.php");
		} else {

		}
	}

	if ($aksi == "hapus_karyawan") {
		$id = $_GET['id'];

		$result = mysqli_query($con,"DELETE FROM tb_karyawan WHERE id='$id'");
		if ($result) {
			header("location: karyawan.php");
		} else {
		}
	}

	// UKURAN
	if ($aksi ==  "tambah_ukuran") {
		$ukuran = $_POST['ukuran'];

		$sql = "INSERT INTO tb_ukuran VALUES ('','$ukuran')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("location: ukuran.php");
		} else {

		}
	}

	if ($aksi == "edit_ukuran") {
		$id = $_GET['id'];
		$uk = $_POST['ukuran'];

		$sql = "UPDATE tb_ukuran SET ukuran='$uk' WHERE id='$id'";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header("location: ukuran.php");
		} else {

		}
	}

	if ($aksi == "hapus_ukuran") {
		$id = $_GET['id'];

		$result = mysqli_query($con,"DELETE FROM tb_ukuran WHERE id='$id'");
		if ($result) {
			header("location: ukuran.php");
		} else {
		}
	}

	// KETEBALAN & Harga
	if ($aksi ==  "tambah_ketebalanHarga") {
		$ketebalan = $_POST['ketebalan'];
		$harga = $_POST['harga'];

		$sql = "INSERT INTO tb_ketebalan VALUES ('','$ketebalan','$harga')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("location: ketebalanHarga.php");
		} else {

		}
	}

	if ($aksi == "edit_ketebalanHarga") {
		$id = $_GET['id'];
		$ketebalan = $_POST['ketebalan'];
		$harga = $_POST['harga'];

		$sql = "UPDATE tb_ketebalan SET ketebalan='$ketebalan', harga='$harga' WHERE id='$id'";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header("location: ketebalanHarga.php");
		} else {

		}
	}

	if ($aksi == "hapus_ketebalanHarga") {
		$id = $_GET['id'];

		$result = mysqli_query($con,"DELETE FROM tb_ketebalan WHERE id='$id'");
		if ($result) {
			header("location: ketebalanHarga.php");
		} else {
		}
	}

	// TUNJANGAN
	if ($aksi ==  "tambah_tunjangan") {
		$tgl = $_POST['tanggal'];
		$karyawan = $_POST['karyawan'];
		$thr = $_POST['thr'];
		$uangKerajinan = $_POST['uangKerajinan'];

		$sql = "INSERT INTO tb_tunjangan VALUES ('','$tgl','$karyawan','$thr','$uangKerajinan')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("location: tunjangan.php");
		} else {

		}
	}

	if ($aksi == "edit_tunjangan") {
		$id = $_GET['id'];
		$tgl = $_POST['tanggal'];
		$karyawan = $_POST['karyawan'];
		$thr = $_POST['thr'];
		$uangKerajinan = $_POST['uangKerajinan'];

		$sql = "UPDATE tb_tunjangan SET tanggal='$tgl', nama='$karyawan', thr='$thr', uang_kerajinan='$uangKerajinan' WHERE id='$id'";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header("location: tunjangan.php");
		} else {

		}
	}

	if ($aksi == "hapus_tunjangan") {
		$id = $_GET['id'];

		$result = mysqli_query($con,"DELETE FROM tb_tunjangan WHERE id='$id'");
		if ($result) {
			header("location: tunjangan.php");
		} else {
		}
	}

	// POTONGAN
	if ($aksi ==  "tambah_potongan") {
		$tgl = $_POST['tanggal'];
		$karyawan = $_POST['karyawan'];
		$jamsostek = $_POST['jamsostek'];
		$telat = $_POST['telat'];
		$absen = $_POST['absen'];
		$pph = $_POST['pph'];
		$kasbon = $_POST['kasbon'];

		$sql = "INSERT INTO tb_potongan VALUES ('','$tgl','$karyawan','$jamsostek','$absen', '$telat', '$pph', '$kasbon')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("location: potongan.php");
		} else {

		}
	}

	if ($aksi == "edit_potongan") {
		$id = $_GET['id'];
		$tgl = $_POST['tanggal'];
		$karyawan = $_POST['karyawan'];
		$jamsostek = $_POST['jamsostek'];
		$telat = $_POST['telat'];
		$absen = $_POST['absen'];
		$pph = $_POST['pph'];
		$kasbon = $_POST['kasbon'];

		$sql = "UPDATE tb_potongan SET tanggal='$tgl', nama='$karyawan', potongan_jamsostek='$jamsostek', potongan_absen='$absen', potongan_telat='$telat', pph='$pph', kasbon='$kasbon' WHERE id='$id'";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header("location: potongan.php");
		} else {

		}
	}

	if ($aksi == "hapus_potongan") {
		$id = $_GET['id'];

		$result = mysqli_query($con,"DELETE FROM tb_potongan WHERE id='$id'");
		if ($result) {
			header("location: potongan.php");
		} else {
		}
	}

?>
