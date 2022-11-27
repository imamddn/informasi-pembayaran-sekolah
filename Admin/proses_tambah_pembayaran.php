<?php
include "../koneksi.php";

$Kode = $_POST['Kode'];
$id_transaksi = $_POST['id_transaksi'];
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

$sql = mysql_query("SELECT * FROM `administrasi` WHERE id_transaksi = '$Kode' ") or die(mysql_error());
if(mysql_num_rows($sql) == 0)
{
	$input="INSERT INTO `administrasi` (`id_transaksi`,`tanggal`,`nisn`,`nama_murid`,`dasi`,`kerudung`,`lks_smt_1`,`uts_smt_1`,`pas_smt_1`,`lks_smt_2`,`uts_smt_2`,`pas_smt_2`) VALUES ($id_transaksi','$Tanggal','$Nisn','$Nama_siswa','$dasi','$kerudung','$LKS_1','$UTS_1', '$PAS_1', '$LKS_2', '$UTS_2', '$PAS_2');";
	(mysql_query($input));
	header('location:input_pembayaran.php');
}
else
{
	echo (" <SCRIPT LANGUAGE='JavaScript'>
				window.alert('Kode sudah Dipakai')
				window.location.href='input_pembayaran.php';
			</SCRIPT>");
}
?>