<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/bootstrap.css" />
    <link rel="stylesheet" href="style/dataTables.bootstrap4.min.css" />
    <title>Halaman Depan</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center">Aplikasi Simpan Pinjam - Koperasi</h2>

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="rully-studio.blogspot.com">Home</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li><a href="nasabah/index.php">Nasabah</a></li>
                            <li><a href="tabungan/index.php">Tabungan</a></li>
                            <li><a href="bunga/index.php">Bunga</a></li>
                        </ul>
                    </div>
                </nav>            

                <div class="jumbotron">
                    <h1>Selamat Datang</h1>
                    <p>Layanan koperasi - Setoran - Penarikan</p>
                </div>

                <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href="#"> andri arfianto</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="style/jquery.js"></script>
    <script type="text/javascript" src="style/bootstrap.js"></script>
    <script src="style/jquery.dataTables.min.js"></script>
    <script src="style/dataTables.bootstrap4.min.js"></script>    
</body>

</html>