<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/bootstrap.css" />
    <link rel="stylesheet" href="../style/dataTables.bootstrap4.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center" style="margin-bottom:40px;">Aplikasi Simpan Pinjam - Koperasi</h2>                
                <h2>Edit Data - Nasabah</h2>

                <?php
                    include('../koneksi.php');                    
                    $id_user    = $_GET['id_user'];
                    $query      = "SELECT * FROM users where id_user='$id_user'";
                    $data       = mysqli_query($koneksi, $query);                    
                    while($row = mysqli_fetch_array($data)){
		        ?>
                <form action="update.php" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                        <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea type="text" class="form-control" name="alamat"><?php echo $row['alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" value="<?php echo $row['pekerjaan']; ?>">
                    </div>                    
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>">
                    </div>
                    <div class="form-group">
                        <label>No. Telephone</label>
                        <input type="number" class="form-control" name="no_telp" value="<?php echo $row['no_telp']; ?>">
                    </div>                                        
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <a class="btn btn-danger pull-right" style="margin-right:10px;" href="index.php">Kembali</a>
                </form>
                <?php
                    }
                    ?>            
            </div>
        </div>

        <script type="text/javascript" src="../style/jquery.js"></script>
        <script type="text/javascript" src="../style/bootstrap.js"></script>
        <script src="../style/jquery.dataTables.min.js"></script>
        <script src="../style/dataTables.bootstrap4.min.js"></script>        
</body>

</html>