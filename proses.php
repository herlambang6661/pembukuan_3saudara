<?php

	include 'include/db_config.php';

	$aksi = $_GET['aksi'];

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

?>
