<!DOCTYPE html>
<html lang="en">

<head>
    <title>BERITA AMIKOM</title>
    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .jumbotron {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            text-shadow: 2px 2px 4px #000;
            margin-bottom: 0;
        }

        .jumbotron h1 {
            font-size: 3rem;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 20px;
            color: #343A40;
        }

        h2 {
            color: #007BFF;
        }

        h6 {
            color: #6C757D;
        }

        p {
            line-height: 1.6;
        }

        .list-group {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .list-group-item {
            background-color: transparent;
            border: none;
            color: #343A40;
            transition: background-color 0.2s;
        }

        .list-group-item:hover {
            background-color: #007BFF;
            color: white;
        }

        .jumbotron p {
            font-size: 1.5rem;
        }

        .navbar-brand {
            color: #007BFF;
        }

        .login-button {
            display: inline-block;
            margin: 20px 10px 0 10px; /* Membuat margin kiri dan kanan agar tidak terlalu dekat */
            padding: 8px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #218838;
        }

        .daftar-button {
            display: inline-block;
            margin: 20px 10px 0 0; /* Membuat margin kiri dan kanan agar tidak terlalu dekat */
            padding: 8px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .daftar-button:hover {
            background-color: #0056b3;
        }

        .footer {
            background-color: #343A40;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron text-center"
        style="background: url('images/nature.jpg') center center fixed no-repeat; background-size: cover;">
        <h1>BERITA AMIKOM</h1>
        <p>Berita Terkini</p>
        <a href="admin/login.php" class="login-button">Login</a>
        <a href="admin/user_tambah.php" class="daftar-button">Daftar</a>
    </div>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-8">
                <?php
                include "config.php";

                $sql = "SELECT berita_id, berita_judul, berita_isi, berita_gambar, user_nama, berita_tanggal FROM berita ORDER BY berita_id";
                $hasil = mysqli_query($config, $sql);
                $no = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                    ?>
                    <h2>
                        <?php echo $data['berita_judul']; ?>
                    </h2>
                    <h6>
                        <?php echo $data['berita_tanggal']; ?>
                    </h6>
                    <h6>
                        <?php echo $data['user_nama']; ?>
                    </h6>
                    <div>
                        <a class="navbar-brand" href="index.php"><img src="admin/<?php echo $data['berita_gambar'] ?>"
                                width=720></a>
                    </div>
                    <p>
                        <?php echo $data['berita_isi']; ?>
                    </p>
                    <?php
                }
                ?>

            </div>
            <div class="col-sm-4">
                <h3>BERITA UTAMA</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">DAAK</a>
                    <a href="#" class="list-group-item list-group-item-action">INFO KAMPUS</a>
                    <a href="#" class="list-group-item list-group-item-action">KEUANGAN</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        &copy; 2023 Berita AMIKOM
    </div>
</body>

</html>