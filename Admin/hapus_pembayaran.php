<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysql_query("delete from administrasi where id_transaksi='$Kode'");
header('location:input_pembayaran.php');
?>