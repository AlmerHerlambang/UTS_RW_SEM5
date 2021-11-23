<?php
session_start();
require 'functions.php';

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {

    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username
    $result = mysqli_query($conn, "SELECT user FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if ($key === hash('sha256', $row['user'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location:index.php");
    exit;
}

if (isset($_POST["login"])) {

    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE user='$user'");
    //cek username
    if(mysqli_num_rows($result)===1){
        //cek passwordnya
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row["pass"])) {
            //set session
            $_SESSION["login"] = true;

            //cek remember me
            if (isset($_POST['remember'])) {
                //buat cookie

                setcookie('id', $row['id'], time()+30);
                setcookie('key', hash('sha256', $row['user']), time()+30);

            }

            header("Location:index.php");
            exit;
        }
    }


    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stylelogin.css">
    <title>5190411180_Login</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php if(isset($error)) : ?>
        echo "<script>
            alert('Password / Username Salah!!!')
            </script>";
    <?php endif; ?>
    <div class="container">
    <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
            <form action="" method="post">
                <div class="row">
                    <i class="fas fa-user"></i>
                        <input type="text" name="user" id="user" placeholder="Masukan Username" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                        <input type="password" name="pass" id="pass" placeholder="Masukan Password" required><br>
                </div>
                    <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                <div class="row button">
                    <input type="submit" name="login" value="Login">
                </div>
                <div class="signup">Not a member? <a href="registrasi.php">Signup now</a></div>
            </form>
    </div>
    </div>
</body>
</html>