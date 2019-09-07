<?php include('fungsi.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/bootstrap.css" />
    <link rel="stylesheet" href="../style/dataTables.bootstrap4.min.css" />
    <title>Detail Tabungan Nasabah</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center" style="margin-bottom:40px;">Aplikasi Simpan Pinjam - Koperasi</h2>
                <a class="btn btn-danger pull-right" style="margin-bottom:20px; margin-right:5px;" href="index.php">Kembali</a>
                <h2>Detail Tabungan Nasabah</h2>

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table table-striped">
                                <tr>
                                    <td>No</td>
                                    <td>Setoran</td>
                                    <td>Penarikan</td>
                                    <td>Saldo</td>
                                </tr>
                                <?php                                
                                    include('../koneksi.php');                                
                                    $no = 1;
                                    // $query = "SELECT * FROM users WHERE id_user = $_GET[id_user]";
                                    $data = mysqli_query($koneksi, "SELECT * FROM tabungan WHERE id_user = $_GET[id_user]");
                                    // $result = mysqli_fetch_array($data);
                                    // print_r($result);
                                    while ($result = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo format_rupiah($result['setoran']); ?></td>
                                        <td><?php echo format_rupiah($result['penarikan']); ?></td>
                                        <td><?php echo format_rupiah($result['saldo']); ?></td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </table>                            
                        </div>
                        <div class="col-sm-6">
                            <table class="table">
                                <?php
                                include('../koneksi.php');                                
                                $query = "SELECT * FROM users WHERE id_user = $_GET[id_user]";
                                $data = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_array($data)) {
                                    ?>
                                    <tr>
                                        <td>Nama</td>
                                        <td>: <?php echo $row['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telphone</td>
                                        <td>: <?php echo $row['no_telp']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>: <?php echo $row['alamat']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="../style/jquery.js"></script>
        <script type="text/javascript" src="../style/bootstrap.js"></script>
        <script src="../style/jquery.dataTables.min.js"></script>
        <script src="../style/dataTables.bootstrap4.min.js"></script>        
</body>

</html>