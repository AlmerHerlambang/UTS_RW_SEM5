<?php

    require 'functions.php';

    if (isset($_POST["registrasi"])) {
        if (registrasi($_POST) > 0 ) {
            echo "<script>
            alert('Selamat anda berhasil mendaftar!')
            </script>";
        }else {
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5190411180-Registrasi</title>
    <link rel="stylesheet" href="style/stylelogin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Registrasi Akun</span></div>
            <form method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" id="user" placeholder="Masukan Username">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass" id="pass" placeholder="Masukan Password">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass2" id="pass2" placeholder="Konfirmasi Password">
                </div>
                <div class="row button">
                    <input type="submit" name="registrasi" value="Registrasi">
                </div>
            </form>     
        </div>
    </div>
</body>
</html>