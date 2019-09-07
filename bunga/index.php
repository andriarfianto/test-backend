<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/bootstrap.css" />
    <link rel="stylesheet" href="../style/dataTables.bootstrap4.min.css" />
    <title>Data Bunga Nasabah</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center" style="margin-bottom:40px;">Aplikasi Simpan Pinjam - Koperasi</h2>                
                <a class="btn btn-danger pull-right" style="margin-bottom:20px; margin-right:20px;" href="../index.php">Kembali</a>
                <h2>Bunga Nasabah per Tahun</h2>

                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Bunga</th>
                        <th>Saldo</th>                        
                    </tr>
                    <?php
                    include('../koneksi.php');
                    include('fungsi.php');
                    $no = 1;
                    $query = "SELECT tabungan.id_tabungan, 
                                    tabungan.saldo,
                                    tabungan.saldo,
                                    tabungan.tanggal,
                                    tabungan.bunga,
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
                            <td>                            
                                <?php 
                                    $tanggal = strtotime($row['tanggal']);
                                    $year = date('Y', $tanggal);
                                    echo $year;
                                ?>
                            </td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>                         
                            <td>
                                <?php 
                                    $bunga = 6;
                                    $saldo = $row['saldo'];
                                    $hasil = $saldo + ($bunga * $saldo);
                                    echo $hasil;
                                ?>
                            </td>                         
                            <td><?php echo $row['saldo']; ?></td>                                                        
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