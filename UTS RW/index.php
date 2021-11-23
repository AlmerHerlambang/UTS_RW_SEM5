<?php
    session_start();
    if ( !isset($_SESSION["login"])) {
        header("Location:login.php");
        exit;
    }

    require 'functions.php';

    $datad = query("SELECT * FROM data_dor");
    if (isset($_POST["cari"])) {
        $datad = cari($_POST["keyword"]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleindex.css">
    <title>5190411180</title>
</head>
<body>

    <h1>
        Data Pemain Peraih Blon D'or Tahun 2000 - 2004
    </h1>

    <a href="logout.php">
        <button class=button>
            Logout!
        </button>
    </a>

    <div class="form">
    <form method="POST">
        <input type="text" name="keyword" autofocus placeholder="masukan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    </div>

<br>

    <table class="table">
        <thead>
            <th>No.</th>
            <th>Tahun</th>
            <th>Posisi</th>
            <th>Profile</th>
            <th>nama</th>
            <th>Kebangsaan</th>
            <th>Tim</th>
        </thead>

        <?php $i = 1; ?>
        <?php foreach( $datad as $row ) : ?>

        <tbody>
            <td data-label="No."><?= $i; ?></td>
            <td data-label="Tahun"><?= $row["tahun"]; ?></td>
            <td data-label="Posisi"><?= $row["posisi"]; ?></td>
            <td data-label="Profile"><img src="img/<?= $row["foto"]; ?>" width="30px" alt="Profile"></td>
            <td data-label="Nama"><?= $row["nama"]; ?></td>
            <td data-label="Kenagsaan"><?= $row["kebangsaan"]; ?></td>
            <td data-label="Tim"><?= $row["tim"]; ?></td>
        </tbody>
        
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>