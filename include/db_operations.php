<?php 

	class DbOperations {
		var $host = 'localhost';
		var $user = 'root';
		var $pwd = '';
		var $db = 'db_3saudara';

		function __construct(){
			mysqli_connect($this->host, $this->user, $this->pwd, $this->db);
		}

		function login($user, $pass){
			session_start();
			$query = "SELECT * FROM tb_admin WHERE username='$user' AND password='$pass'";;
			
		}
	}


 ?>