<?php
include "include/db_config.php";

if(isset($_POST['btnLogin'])){

	$username = $_POST['username'];
	$pass     = $_POST['password'];

	if (empty($username)){
		echo "username tidak boleh kosong";
	}
	if (empty($passwword)){
		echo "password tidak boleh kosong";
	}
		$login = mysqli_query($con, "SELECT * FROM tb_admin WHERE username = '$username' AND password='$pass'");
		$row=mysqli_fetch_array($login);
		if ($row['username'] == $username AND $row['password'] == $pass){
		  session_start();
		  $_SESSION['username'] = $row['username'];
		  $_SESSION['status'] = "login";
		  header("location: index.php");
		  echo "login berhasil";
		}
		else{
		  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
		        Username atau Password Anda tidak benar.<br>";
		  echo "<br>";
		  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='login.php'></a></center>";
		}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Tiga Saudara</title>
	<style type="text/css">
		body {
			background: #d5f0f3;
		}
		h1 {
			text-align: center;
			font-weight: 300; /* ketebalan font */
		}
		.tulisan_login {
			text-align: center;
			text-transform: uppercase; /* membuat semua huruf jadi kapital */
		}
		.kotak_login {
			width: 350px;
			background: white;
			/* meletakkan form ke tengah */
			margin: 80px auto;
			padding: 30px 20px;
		}
		label {
			font-size: 11pt;
		}
		.form_login {
			/* membuat lebar form penuh */
			box-sizing: border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		.tombol_login {
			background: #46de48;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
	</style>
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login">Login admin</p>
		<p class="tulisan_login">Tiga Saudara</p>
		<form action="" method="post">
			<label for="username">Username</label>
			<input class="form_login" type="text" name="username">
			<label for="password">Password</label>
			<input class="form_login" type="password" name="password">
			<button name="btnLogin" class="tombol_login" type="submit">Login</button>
		</form>
	</div>
</body>
</html>