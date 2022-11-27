<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>MTs Darul Muawanah</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mts Darul Muawanah, Mts Darul Mu'awanah, Dukuhdimoro, Mojoagung, jombang, Mondok Plus sekolah Di jombang" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="../css/swipebox.css">
	<link rel="stylesheet" href="../css/jquery-ui.css" />
	<link rel="stylesheet" href="../css/roma.css" />

	<!-- //css files -->
	<!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>

	<?php include('../napigasi2.php'); ?>

	<div class="clearfix"> </div>
	<!-- //Modal2 -->
	<!-- Laporan administrasi -->

	<div id="Laporan administrasi">
		<div class="container roma-batasan">

			<?php
			//$NISN=$_POST['NISN'];
			$query = mysql_query("select * from murid where username='$_SESSION[username]'");
			$dataMurid = mysql_fetch_array($query);
			?>

			<table class="table-condensed">
				<h3 align="center"> REKAPITULASI PEMBAYARAN</h3>
				<h3 align="center"> MTs Darul Muawanah</h3>
				<tr>
					<td> Nama </td>
					<td> : </td>
					<td><?php echo $dataMurid['nama_murid']; ?></td>
				</tr>
				<tr>
					<td> Kelas </td>
					<td> : </td>
					<td><?php echo $dataMurid['kelas']; ?></td>
			</table>

			<br>

			<style type="text/css">
				.tg {
					border-collapse: collapse;
					border-spacing: 0;
				}

				.tg td {
					border-color: black;
					border-style: solid;
					border-width: 1px;
					font-family: Arial, sans-serif;
					font-size: 14px;
					overflow: hidden;
					padding: 10px 5px;
					word-break: normal;
				}

				.tg th {
					border-color: black;
					border-style: solid;
					border-width: 1px;
					font-family: Arial, sans-serif;
					font-size: 14px;
					font-weight: normal;
					overflow: hidden;
					padding: 10px 5px;
					word-break: normal;
				}

				.tg .tg-ycr8 {
					background-color: #ffffff;
					text-align: left;
					vertical-align: top
				}

				.tg .tg-sh07 {
					background-color: #cbcefb;
					text-align: center;
					vertical-align: top
				}
			</style>
			<table class="tg" style="undefined;table-layout: fixed; width: 800px">
				<colgroup>
					<col style="width: 184.5px">
					<col style="width: 179.5px">
					<col style="width: 182.5px">
					<col style="width: 185.5px">
					<col style="width: 180.5px">
					<col style="width: 180.5px">
				</colgroup>
				<thead>
					<tr>
						<th class="tg-sh07" colspan="2">Tagihan Pembayaran</th>
						<th class="tg-sh07" colspan="2">Yang Sudah Dibayar</th>
						<th class="tg-sh07" colspan="2">Kekurangan Pembayaran</th>
					</tr>
					<tr>
						<th class="tg-sh07" colspan="2">Rincian</th>
						<th class="tg-sh07">Tanggal</th>
						<th class="tg-sh07">Jumlah</th>
						<th class="tg-sh07">Keterangan</th>
						<th class="tg-sh07">Jumlah</th>
					</tr>
				</thead>

				<?php

				$Nama_Murid = $dataMurid['nama_murid'];
				$queryAdministrasi = "SELECT * FROM administrasi WHERE nama_murid = '$Nama_Murid'";
				$hasilAdministrasi = mysql_query($queryAdministrasi);
				$dataAdministrasi = mysql_fetch_array($hasilAdministrasi);

				$Jumlah_Pengurangan_Dasi = $dataAdministrasi['dasi'] - 25000;
				if ($Jumlah_Pengurangan_Dasi == 0) {
					$Result_Jumlah_Pengurangan_Dasi = "Lunas";
				} else {
					$Result_Jumlah_Pengurangan_Dasi = "Belum Lunas";
				}

				$Jumlah_Pengurangan_Kerudung = $dataAdministrasi['kerudung'] - 75000;
				if ($Jumlah_Pengurangan_Kerudung == 0) {
					$Result_Jumlah_Pengurangan_Kerudung = "Lunas";
				} else {
					$Result_Jumlah_Pengurangan_Kerudung = "Belum Lunas";
				}

				$Jumlah_Pengurangan_LKS1 = $dataAdministrasi['lks_smt_1'] - 105000;
				if ($Jumlah_Pengurangan_LKS1 == 0) {
					$Result_Jumlah_Pengurangan_LKS1 = "Lunas";
				} else {
					$Result_Jumlah_Pengurangan_LKS1 = "Belum Lunas";
				}

				$Jumlah_Pengurangan_UTS1 = $dataAdministrasi['uts_smt_1'] - 15000;
				if ($Jumlah_Pengurangan_UTS1 == 0) {
					$Result_Jumlah_Pengurangan_UTS1 = "Lunas";
				} else {
					$Result_Jumlah_Pengurangan_UTS1 = "Belum Lunas";
				}

				$Jumlah_Pengurangan_PAS1 = $dataAdministrasi['pas_smt_1'] - 25000;
				if ($Jumlah_Pengurangan_PAS1 == 0) {
					$Result_Jumlah_Pengurangan_PAS1 = "Lunas";
				} else {
					$Result_Jumlah_Pengurangan_PAS1 = "Belum Lunas";
				}

				$Jumlah_Pengurangan_LKS2 = $dataAdministrasi['lks_smt_2'] - 105000;
				if ($Jumlah_Pengurangan_LKS2 == 0) {
					$Result_Jumlah_Pengurangan_LKS2 = "Lunas";
				} else {
					$Result_Jumlah_Pengurangan_LKS2 = "Belum Lunas";
				}

				$Jumlah_Pengurangan_UTS2 = $dataAdministrasi['uts_smt_2'] - 15000;
				if ($Jumlah_Pengurangan_UTS2 == 0) {
					$Result_Jumlah_Pengurangan_UTS2 = "Lunas";
				} else {
					$Result_Jumlah_Pengurangan_UTS2 = "Belum Lunas";
				}

				$Jumlah_Pengurangan_PAS2 = $dataAdministrasi['pas_smt_2'] - 25000;
				if ($Jumlah_Pengurangan_PAS2 == 0) {
					$Result_Jumlah_Pengurangan_PAS2 = "Lunas";
				} else {
					$Result_Jumlah_Pengurangan_PAS2 = "Belum Lunas";
				}

				$Jumlah_Pengurangan_Infaq = $dataAdministrasi['infaq_12_bulan'] - 120000;
				if ($Jumlah_Pengurangan_Infaq == 0) {
					$Result_Jumlah_Pengurangan_Infaq = "Lunas";
				} else {
					$Result_Jumlah_Pengurangan_Infaq = "Belum Lunas";
				}

				// $tangga = $datatanggal['id_transaksi'];
				// $tampiltanggal = "SELECT * FROM administrasi WHERE tanggal = '$tanggal'";
				// $hasiltanggal = mysql_query($tampiltanggal);
				// $datatanggal = mysql_fetch_array($hasiltanggal);

				// var_dump($dataAdministrasi);

				echo "
<tbody>
  <tr>
    <td class='tg-ycr8'>Dasi 2 jenis warna</td>
    <td class='tg-ycr8'>Rp. 25.000</td>
    <td class='tg-ycr8'> $dataAdministrasi[tanggal]</td>
    <td class='tg-ycr8'> Rp $dataAdministrasi[dasi] </td>
    <td class='tg-ycr8'> $Result_Jumlah_Pengurangan_Dasi </td>
	<td class='tg-ycr8'> Rp $Jumlah_Pengurangan_Dasi </td>
  </tr>
  <tr>
    <td class='tg-ycr8'>Kerudung 3 jenis warna</td>
    <td class='tg-ycr8'>Rp. 75.000</td>
    <td class='tg-ycr8'> $dataAdministrasi[tanggal] </td>
    <td class='tg-ycr8'> Rp $dataAdministrasi[kerudung] </td>
    <td class='tg-ycr8'>$Result_Jumlah_Pengurangan_Kerudung</td>
	<td class='tg-ycr8'>Rp $Jumlah_Pengurangan_Kerudung</td>
  </tr>
  <tr>
    <td class='tg-ycr8'>LKS Semester I</td>
    <td class='tg-ycr8'>Rp. 105.000</td>
	<td class='tg-ycr8'> $dataAdministrasi[tanggal] </td>
    <td class='tg-ycr8'> Rp $dataAdministrasi[lks_smt_1] </td>
    <td class='tg-ycr8'>$Result_Jumlah_Pengurangan_LKS1</td>
	<td class='tg-ycr8'> Rp $Jumlah_Pengurangan_LKS1 </td>
  </tr>
  <tr>
    <td class='tg-ycr8'>UTS Semester I</td>
    <td class='tg-ycr8'>Rp. 15.000</td>
	<td class='tg-ycr8'> $dataAdministrasi[tanggal] </td>
    <td class='tg-ycr8'> Rp $dataAdministrasi[uts_smt_1] </td>
    <td class='tg-ycr8'>$Result_Jumlah_Pengurangan_UTS1</td>
	<td class='tg-ycr8'>Rp $Jumlah_Pengurangan_UTS1</td>
  </tr>
  <tr>
    <td class='tg-ycr8'>PAS Semester I</td>
    <td class='tg-ycr8'>Rp. 25.000</td>
	<td class='tg-ycr8'> $dataAdministrasi[tanggal] </td>
    <td class='tg-ycr8'> Rp $dataAdministrasi[pas_smt_1] </td>
    <td class='tg-ycr8'>$Result_Jumlah_Pengurangan_PAS1</td>
	<td class='tg-ycr8'>Rp $Jumlah_Pengurangan_PAS1</td>
  </tr>
  <tr>
    <td class='tg-ycr8'>LKS Semester II</td>
    <td class='tg-ycr8'>Rp. 105.000</td>
	<td class='tg-ycr8'> $dataAdministrasi[tanggal] </td>
    <td class='tg-ycr8'> Rp $dataAdministrasi[lks_smt_2] </td>
    <td class='tg-ycr8'>$Result_Jumlah_Pengurangan_LKS2</td>
	<td class='tg-ycr8'>Rp $Jumlah_Pengurangan_LKS2</td>
  </tr>
  <tr>
    <td class='tg-ycr8'>UTS Semester II</td>
    <td class='tg-ycr8'>Rp. 15.000</td>
	<td class='tg-ycr8'> $dataAdministrasi[tanggal] </td>
    <td class='tg-ycr8'> Rp $dataAdministrasi[uts_smt_2] </td>
    <td class='tg-ycr8'>$Result_Jumlah_Pengurangan_UTS2</td>
	<td class='tg-ycr8'>Rp $Jumlah_Pengurangan_UTS2</td>
  </tr>
  <tr>
    <td class='tg-ycr8'>PAS Semester II</td>
    <td class='tg-ycr8'>Rp. 25.000</td>
	<td class='tg-ycr8'> $dataAdministrasi[tanggal] </td>
    <td class='tg-ycr8'> Rp $dataAdministrasi[pas_smt_2] </td>
    <td class='tg-ycr8'>$Result_Jumlah_Pengurangan_PAS2</td>
	<td class='tg-ycr8'>Rp $Jumlah_Pengurangan_PAS2</td>
  </tr>
  <tr>
    <td class='tg-ycr8'>INFAQ 12 Bulan</td>
    <td class='tg-ycr8'>Rp. 120.000</td>
	<td class='tg-ycr8'> $dataAdministrasi[tanggal] </td>
    <td class='tg-ycr8'>  Rp $dataAdministrasi[infaq_12_bulan]  </td>
    <td class='tg-ycr8'>$Result_Jumlah_Pengurangan_Infaq</td>
	<td class='tg-ycr8'>Rp $Jumlah_Pengurangan_Infaq</td>
  </tr>
</tbody>
";
				?>

			</table>
			</table>

		</div>
	</div>

	<!-- js-scripts -->
	<!-- js-files -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js-files -->
	<!-- Baneer-js -->



	<!-- smooth scrolling -->
	<script src="../js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- stats -->
	<script type="text/javascript" src="../js/numscroller-1.0.js"></script>
	<!-- //stats -->
	<!-- moving-top scrolling -->
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //moving-top scrolling -->
	<!-- gallery popup -->
	<script src="../js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //gallery popup -->
	<!--/script-->
	<script src="../js/simplePlayer.js"></script>
	<script>
		$("document").ready(function() {
			$("#video").simplePlayer();
		});
	</script>
	<!-- //Baneer-js -->
	<!-- Calendar -->
	<script src="../js/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#datepicker").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- //js-scripts -->
</body>

</html>