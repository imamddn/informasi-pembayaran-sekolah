<!DOCTYPE html>
<html lang="zxx">
<head>
<title>MTs Darul Muawanah</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MTs Darul Muawanah" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="../css/swipebox.css">
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link rel="stylesheet" href="../css/roma.css"/>
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>

<?php include ('../napigasi2.php'); ?>

<div id="Akun_Control">
	<div class="container">
    <h3 class="w3l-title"> Administrasi </h3>    
    <a href="tambah_pembayaran.php"> <button class="btn"> Tambah Transaksi </button> </a>
    <div>
	<table class="table table-bordered text-center">
	<thead>	
	<tr>
            <td width="150" align="center">No</td>
            <td width="150" align="center">Tanggal</td>
		    <td width="150" align="center">Nama Murid</td>
		    <td width="80" align="center">Dasi 2 jenis warna </td>
		    <td width="80" align="center">Kerudung 3 jenis warna </td> 
		    <td width="80" align="center">LKS Semester I </td>
		    <td width="80" align="center">UTS Semester I </td>
			<td width="80" align="center">PAS Semester I </td>
			<td width="80" align="center">LKS Semester II </td>	
    		<td width="80" align="center">UTS Semester II </td>
			<td width="80" align="center">PAS Semester II </td>
			<td width="80" align="center">INFAQ 12 Bulan </td>
            <td colspan="2" ><b> Aksi </td>
        </tr>
</thead>
<tbody>
		<?php
							include('koneksi.php'); //memanggil file koneksi
							$datas = mysql_query( "select * from administrasi") or die(mysql_error($koneksi));
							//script untuk menampilkan data barang

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							while($row = mysql_fetch_assoc($datas)) {
						?>	
				
 
		<?php $no++; } ?>
        
<?php
include ('../koneksi.php');
$tampil="SELECT * FROM `administrasi`";
$hasil=mysql_query($tampil);

while ($data=mysql_fetch_array($hasil))
{	
	$tampil_murid="SELECT * FROM `murid` WHERE nisn = '$data[nisn]'";
	$hasil_murid=mysql_query($tampil_murid);
	$data_murid=mysql_fetch_array($hasil_murid);

	echo "	</TR>

            <td> $data[id_transaksi] </td>
            <td width='200'> $data[tanggal] </td>
			<td width='200'> $data[nama_murid] </td>
			<td width='100'> $data[dasi] </td>
            <td width='100'> $data[kerudung] </td>
			<td width='100'> $data[lks_smt_1] </td>
            <td width='100'> $data[uts_smt_1] </td>
			<td width='100'> $data[pas_smt_1] </td>
			<td width='100'> $data[lks_smt_2] </td>
            <td width='100'> $data[uts_smt_2] </td>
			<td width='100'> $data[pas_smt_2] </td>
			<td width='100'> $data[infaq_12_bulan] </td>


			<td width='100'><a href='edit_pembayaran.php?kode=$data[id_transaksi]'> Edit </a></td>
			<td width='100'><a href='hapus_pembayaran.php?kode=$data[id_transaksi]'> Hapus</a></td>
			</TR>";
}		
?>        
</tbody>
        </table>
    </div>
    
    <div class="clearfix margin-bawah"></div>
    </div>
</div>
<!-- //Laporan Nilai -->


<!-- footer -->

<!-- //footer -->

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
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
		$().UItoTop({ easingType: 'easeOutQuart' });
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
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>