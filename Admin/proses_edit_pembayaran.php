<?php
include "../koneksi.php";

$Kode_Lama = $_POST['Kode_lama'];
$Kode_Baru = $_POST['Kode_baru_transaksi'];
$Tanggal = $_POST['Tanggal'];
$Nisn = $_POST['nisn'];
$Nama_siswa = $_POST['nama_murid'];
$dasi = $_POST['dasi'];
$kerudung = $_POST['kerudung'];
$LKS_1 = $_POST['lks_smt_1'];
$UTS_1 = $_POST['uts_smt_1'];
$PAS_1 = $_POST['pas_smt_1'];
$LKS_2 = $_POST['lks_smt_2'];
$UTS_2 = $_POST['uts_smt_2'];
$PAS_2 = $_POST['pas_smt_2'];

if ($_POST['Kode_baru_transaksi'] == "")
{
	$sqlstr="UPDATE `administrasi` SET `tanggal` = '$Tanggal', `nisn` = '$Nisn', `nama_murid` = '$Nama_siswa', `dasi` = '$dasi', `kerudung` = '$kerudung', `lks_smt_1` = '$LKS_1', `uts_smt_1` = '$UTS_1', `pas_smt_1` = '$PAS_1', `lks_smt_2` = '$LKS_2', `uts_smt_2` = '$UTS_2', `pas_smt_2` = '$PAS_2' WHERE `id_transaksi` = '$Kode_Lama' ;";
}
else
{
	$sqlstr="UPDATE `administrasi` SET id_transaksi = '$Kode_Baru', `tanggal` = '$Tanggal', `nisn` = '$Nisn', `nama_murid` = '$Nama_siswa', `dasi` = '$dasi', `kerudung` = '$kerudung', `lks_smt_1` = '$LKS_1', `uts_smt_1` = '$UTS_1', `pas_smt_1` = '$PAS_1', `lks_smt_2` = '$LKS_2', `uts_smt_2` = '$UTS_2', `pas_smt_2` = '$PAS_2' WHERE `id_transaksi` = '$Kode_Lama' ;";
}

(mysql_query($sqlstr));

header('location:input_pembayaran.php');
?>