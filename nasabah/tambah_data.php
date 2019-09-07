<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$tgl_lahir      = $_POST['tgl_lahir'];
$pekerjaan      = $_POST['pekerjaan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$no_telp        = $_POST['no_telp'];

// menginput data ke database
$query = "INSERT INTO users values('','$nama','$alamat','$tgl_lahir','$pekerjaan','$jenis_kelamin','$no_telp')";
mysqli_query($koneksi, $query);

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>