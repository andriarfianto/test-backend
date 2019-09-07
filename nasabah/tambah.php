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
                <h2>Tambah Data - Nasabah</h2>

                <form action="tambah_data.php" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Input nama" required>                        
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" placeholder="Input alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" required>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" placeholder="Input pekerjaan" required>
                    </div>                    
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" placeholder="Input jenis kelamin" required>
                    </div>
                    <div class="form-group">
                        <label>No. Telephone</label>
                        <input type="number" class="form-control" name="no_telp" placeholder="Input nomer telephone" required>
                    </div>                                        
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <a class="btn btn-danger pull-right" style="margin-right:10px;" href="index.php">Kembali</a>
                </form>                
            </div>
        </div>

        <script type="text/javascript" src="../style/jquery.js"></script>
        <script type="text/javascript" src="../style/bootstrap.js"></script>
        <script src="../style/jquery.dataTables.min.js"></script>
        <script src="../style/dataTables.bootstrap4.min.js"></script>        
</body>

</html>