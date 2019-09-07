<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_user        = $_POST['id_user'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$tgl_lahir      = $_POST['tgl_lahir'];
$pekerjaan      = $_POST['pekerjaan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$no_telp        = $_POST['no_telp'];

// update data ke database
$query = "UPDATE users set 
        nama='$nama', 
        alamat='$alamat', 
        tgl_lahir='$tgl_lahir', 
        pekerjaan='$pekerjaan',
        jenis_kelamin='$jenis_kelamin',
        no_telp='$no_telp' where id_user='$id_user'";

mysqli_query($koneksi, $query);

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>