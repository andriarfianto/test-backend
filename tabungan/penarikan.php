<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/bootstrap.css" />
    <link rel="stylesheet" href="../style/dataTables.bootstrap4.min.css" />
    <title>Tabungan - Penarikan</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center" style="margin-bottom:30px;">Aplikasi Simpan Pinjam - Koperasi</h2>
                <h2>Ambil Penarikan</h2>
                <hr>                

                <form action="input_penarikan.php" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Id user</label>

                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Nomor id user" readonly>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger btn-flat" data-toggle="modal" data-target="#modal">Browse</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama User</label>

                            <div class="col-sm-9">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama User" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Jumlah Penarikan</label>

                            <div class="col-sm-9">
                                <input name="penarikan" type="text" class="form-control" placeholder="Masukkan Jumlah" onkeyup="convertToRupiah(this);">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-danger pull-right" style="margin-right:9%;">Simpan</button>
                        <a href="index.php" class="btn btn-default pull-right" style="margin-right:1%;">Kembali</a>
                    </div>
                </form>

                <div id="modal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form role="form" id="form-tambah" method="post" action="input.php">
                                <div class="modal-header">
                                    <center>
                                        <h3 class="modal-title">Pilih Nasabah</h3>
                                    </center>
                                </div>
                                <div class="modal-body">
                                    <table width="100%" class="table table-hover" id="example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Telepon</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include('../koneksi.php');
                                            $no = 1;
                                            $query = "SELECT * FROM users ORDER BY id_user ASC";
                                            $data = mysqli_query($koneksi, $query);
                                            while ($row = mysqli_fetch_array($data)) {
                                                ?>
                                                <tr id="user" data-id_user="<?php echo $row['id_user']; ?>" data-nama="<?php echo $row['nama']; ?>">
                                                    <td>
                                                        <?php echo $no++; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nama']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['jenis_kelamin']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['no_telp']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['alamat']; ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                    </table>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="../style/jquery.js"></script>
        <script type="text/javascript" src="../style/bootstrap.js"></script>
        <script src="../style/jquery.dataTables.min.js"></script>
        <script src="../style/dataTables.bootstrap4.min.js"></script>        

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();

                $(document).on('click', '#user', function(e) {
                    document.getElementById("id_user").value = $(this).attr('data-id_user');
                    document.getElementById("nama").value = $(this).attr('data-nama');
                    $('#modal').modal('hide');
                });

            });
        </script>
</body>

</html>