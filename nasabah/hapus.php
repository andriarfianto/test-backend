<?php
// koneksi database
include '../koneksi.php';

$query = "DELETE FROM users WHERE id_user = $_GET[id_user]";

mysqli_query($koneksi, $query) or die ("Gagal menghapus data".mysql_error());
header('location:index.php');
?>

