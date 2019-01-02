<?php

	include 'include/db_config.php';

	$aksi = $_GET['aksi'];

	// GAJI
	if ($aksi == "tambah_gaji") {
		$tgl = $_POST['tgl'];
		$karyawan = $_POST['karyawan'];
		$ukuran = $_POST['ukuran'];
		$harga = $_POST['harga'];
		$bonus = $_POST['bonus'];

		$sql = "INSERT INTO tb_gaji VALUES ('', '$tgl', '$karyawan', '$bonus', '$ukuran', '$harga')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			header("location: gaji.php");
		}
	}
	if ($aksi == "edit_gaji") {
		$id = $_GET['id'];
		$tgl = $_POST['tgl'];
		$karyawan = $_POST['karyawan'];
		$ukuran = $_POST['ukuran'];
		$harga = $_POST['harga'];
		$bonus = $_POST['bonus'];

		$sql = "UPDATE tb_gaji SET karyawan='$karyawan', tgl='$tgl', tot_ukuran='$ukuran', harga='$harga', bonus='$bonus' WHERE id='$id'";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header("location: gaji.php");
		} else {

		}
	}

	if ($aksi == "hapus_gaji") {
		$id = $_GET['id'];

		$result = mysqli_query($con,"DELETE FROM tb_gaji WHERE id='$id'");
		if ($result) {
			header("location: gaji.php");
		} else {
		}
	}
	
	if ($aksi == "tambah_gaji_karyawan") {
		

		$n = 7; // membaca jumlah data

		// looping
		for ($i=1; $i<=$n; $i++)
		{
		//  $hari = $_POST['hari'.$i];
		 $tgl = $_POST['tgl'.$i];
		 $nama = $_POST['nama'.$i];
		 $ukuran = $_POST['ukuran'.$i];
		 $harga = $_POST['harga'.$i];
	
		 if ((!empty($no)) && (!empty($nama)) && (!empty($kode)) && (!empty($value)))
		 {
		 $query = "INSERT INTO tb_gaji (tgl, karyawan, tot_ukuran, harga) VALUES ('$tgl', '$nama', '$ukuran', '$harga')";
		 $hasil = mysqli_query($conn, $query);	
		   if($hasil){
			header("location: karyawan.php");
		}else{
			header("location: karyawan.php");
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

?>
