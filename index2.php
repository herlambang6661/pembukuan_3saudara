<!DOCTYPE html>
<html>
<head>
	<title>Admin - Tiga Saudara</title>
</head>
<body>

	<?php 
		session_start();
		if ($_SESSION['status'] != "login") {
			header("location: ./login.php");
		}
	?>

	<h4>Selamat datang <?php echo $_SESSION['username'] ?></h4>
	<a href="logout.php">Logout</a>

</body>
</html>