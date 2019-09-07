<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/bootstrap.css" />
    <link rel="stylesheet" href="../style/dataTables.bootstrap4.min.css" />
    <title>Data Tabungan Nasabah</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center" style="margin-bottom:40px;">Aplikasi Simpan Pinjam - Koperasi</h2>
                <a class="btn btn-warning pull-right" style="margin-bottom:20px;" href="penarikan.php">Penarikan</a>
                <a class="btn btn-success pull-right" style="margin-bottom:20px; margin-right:5px;" href="setoran.php">Setoran</a>
                <a class="btn btn-danger pull-right" style="margin-bottom:20px; margin-right:5px;" href="../index.php">Kembali</a>
                <h2>Tabungan Nasabah</h2>

                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Saldo</th>
                        <th>Opsi</th>
                    </tr>
                    <?php
                    include('../koneksi.php');
                    include('fungsi.php');
                    $no = 1;
                    $query = "SELECT tabungan.id_tabungan, 
                                    tabungan.saldo,
                                    tabungan.saldo, 
                                    users.id_user,
                                    users.nama,
                                    users.alamat,                                    
                                    sum(tabungan.penarikan) as jumlah_penarikan,
                                    sum(tabungan.setoran) as jumlah_setoran
                                FROM
                                    users, tabungan
                                WHERE
                                    users.id_user = tabungan.id_user
                                GROUP BY users.nama ASC";
                    $data = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>                            
                            <td><?php echo format_rupiah($row['jumlah_setoran'] - $row['jumlah_penarikan']); ?></td>
                            <td>
						        <a href="detail.php?id_user=<?php echo $row['id_user']; ?>" class="btn btn-success btn-sm">Detail</a>                                
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>


        <script type="text/javascript" src="../style/jquery.js"></script>
        <script type="text/javascript" src="../style/bootstrap.js"></script>
        <script src="../style/jquery.dataTables.min.js"></script>
        <script src="../style/dataTables.bootstrap4.min.js"></script>        
</body>

</html>