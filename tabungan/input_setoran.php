<?php
include '../koneksi.php';
include 'fungsi.php';

$id_user = $_POST['id_user'];
$setoran = reset_rupiah($_POST['setoran']);

$query = "SELECT penarikan, setoran,
            sum(penarikan) as jumlah_penarikan,
            sum(setoran) as jumlah_setoran
        FROM
            tabungan
        WHERE
            id_user = $id_user";

$data = mysqli_query ($koneksi, $query);
$row = mysqli_fetch_array ($data);
$saldo = $row['jumlah_setoran'] - $row['jumlah_penarikan'] + $setoran;

$query_insert = "INSERT INTO tabungan SET
				id_user = '$id_user',
				setoran = '$setoran',
                saldo = '$saldo'";

mysqli_query($koneksi, $query_insert) or die ("Gagal menambah data ".mysql_error());
header('location:index.php');
?>

