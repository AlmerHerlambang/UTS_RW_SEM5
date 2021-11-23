<?php

    //koneksi database
    $conn = mysqli_connect("localhost", "root", "",  "uts_rw_sem5");


    //ambil data dari database
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function cari($keyword){
        $query = "SELECT * FROM data_dor WHERE nama LIKE '%$keyword%' OR 
                kebangsaan LIKE '%$keyword%' OR
                tim LIKE '%$keyword%' OR
                tahun LIKE '%$keyword%' OR
                posisi LIKE '%$keyword%'";
        return query($query);
    }

    function registrasi($data) {
        global $conn;
    /*
        $user = strtolower(stripslashes($data["user"]));
        $pass = mysqli_real_escape_string($conn, $data["pass"]);
        $pass2 = mysqli_real_escape_string($conn, $data["pass2"]);

        if($pass !== $pass2){
            echo "<script>
            alert('Konfirmasi password tidak sesuai!')
            </script>";
            return false;
        }
        //enkripsi database
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        //tambahkan data baru ke database
        mysqli_query($conn, "INSERT INTO users VALUES('', '$user', '$pass')");

        return mysqli_affected_rows($conn);
        */

        $user = strtolower(stripslashes($data["user"]));
        $pass = mysqli_real_escape_string($conn, $data["pass"]);
        $pass2 = mysqli_real_escape_string($conn, $data["pass2"]);

        //cek username sudah sudah ada atau belum
        $result = mysqli_query($conn, "SELECT user FROM users WHERE user = '$user'");
        if (mysqli_fetch_assoc($result) ) {
            echo "<script>
            alert('Username Telah Terdaftar!')
            </script>";
            return false;
        }

        if($pass !== $pass2){
            echo "<script>
            alert('Konfirmasi password tidak sesuai!')
            </script>";
            return false;
        }

        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user, pass)
                VALUES (
                    '$user','$pass'
                )";
        $query=mysqli_query($conn, $sql);

        return mysqli_affected_rows($conn);
    }

?>