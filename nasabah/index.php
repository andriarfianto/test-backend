<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/bootstrap.css" />
    <link rel="stylesheet" href="../style/dataTables.bootstrap4.min.css" />
    <title>Data Nasabah</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center" style="margin-bottom:40px;">Aplikasi Simpan Pinjam - Koperasi</h2>
                <a class="btn btn-primary pull-right" style="margin-bottom:20px;" href="tambah.php">Tambah</a>
                <a class="btn btn-danger pull-right" style="margin-bottom:20px; margin-right:10px;" href="../index.php">Kembali</a>
                <h2>Data Nasabah</h2>            

                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Pekerjaan</th>
                        <th>Jenis Kelamin</th>
                        <th>Telepon</th>
                        <th>Opsi</th>
                    </tr>
                    <?php
                    include('../koneksi.php');
                    $no = 1;
                    $query = "SELECT * FROM users";
                    $data = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['tgl_lahir']; ?></td>
                            <td><?php echo $row['pekerjaan']; ?></td>
                            <td><?php echo $row['jenis_kelamin']; ?></td>
                            <td><?php echo $row['no_telp']; ?></td>
                            <td>
                                <a href="edit.php?id_user=<?php echo $row['id_user']; ?>">Edit</a> |
                                <a href="hapus.php?id_user=<?php echo $row['id_user']; ?>">Hapus</a>
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