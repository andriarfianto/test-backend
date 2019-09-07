<?php
include "../koneksi.php";
include 'fungsi.php';

$id_user = $_POST['id_user'];
$penarikan = reset_rupiah($_POST['penarikan']);

$query = "SELECT penarikan, setoran,
            sum(penarikan) as jumlah_penarikan,
            sum(setoran) as jumlah_setoran
        FROM
            tabungan
        WHERE
            id_user = $id_user";

$data = mysqli_query ($koneksi, $query);
$row = mysqli_fetch_array ($data);
$saldo = $row['jumlah_setoran'] - $row['jumlah_penarikan'] - $penarikan;

$query = "INSERT INTO tabungan SET
		id_user = '$id_user',
		penarikan = '$penarikan',
		saldo = '$saldo'";

mysqli_query($koneksi, $query) or die ("Gagal menambah data ".mysql_error());
header('location:index.php');
?>