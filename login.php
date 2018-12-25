
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="#"><img class="logo-img" src="assets/images/logo.png" alt="logo"></a><span class="splash-description">Silahkan Masukkan Username dan Password.</span></div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <!-- <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span> -->
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnLogin">Masuk</button>
                </form>
            </div>
            <!-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> -->
        </div>
    </div>
  
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

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>