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
<div class="clearfix"> </div> 

<!-- Edit Mata Pelajaran -->
<div id="Edit_Akun">
	<div class="container">
    <h3 class="w3l-title cl"> Edit  </h3>
    <div class="container margin-atas">
	
	<?php 
include ('../koneksi.php');
$Kode=$_GET['kode'];
$query=mysql_query("select * from administrasi where id_transaksi='$Kode'");
$data=mysql_fetch_array($query);

?>
	
    <form class="form-group" action="" method="post">
    <table class="table">
	<tr>
    	<td> Nama Murid : </td>
        <td> <input type="varchar" name="nama_murid" value="<?php echo "$data[nama_murid]"; ?>" > </td>
    </tr>
	<tr>
    	<td> Tanggal : </td>
        <td> <input type="date" name="Tanggal" value="<?php echo "$data[tanggal]"; ?>" > </td>
    </tr>
	<tr>
    	<td> Dasi 2 jenis warna : </td>
        <td> <input type="int" name="Dasi" value="<?php echo "$data[dasi]"; ?>" > </td>
    </tr>
	<tr>
    	<td> Kerudung 3 jenis warna : </td>
        <td> <input type="int" name="Kerudung" value="<?php echo "$data[kerudung]"; ?>" > </td>
    </tr>
	<tr>
    	<td> LKS Semester I : </td>
        <td> <input type="int" name="lks_smt_1" value="<?php echo "$data[lks_smt_1]"; ?>" > </td>
    </tr>
	<tr>
    	<td> UTS Semester I : </td>
        <td> <input type="int" name="uts_smt_1" value="<?php echo "$data[uts_smt_1]"; ?>" > </td>
    </tr>
	<tr>
    	<td> PAS Semester I: </td>
        <td> <input type="int" name="pas_smt_1" value="<?php echo "$data[pas_smt_1]"; ?>" > </td>
    </tr>
	<tr>
    	<td> LKS Semester II : </td>
        <td> <input type="int" name="lks_smt_2" value="<?php echo "$data[lks_smt_2]"; ?>" > </td>
    </tr>
	<tr>
    	<td> UTS Semester II : </td>
        <td> <input type="int" name="lks_smt_2" value="<?php echo "$data[uts_smt_2]"; ?>" > </td>
    </tr>
	<tr>
    	<td> PAS Semester II : </td>
        <td> <input type="int" name="pas_smt_2" value="<?php echo "$data[pas_smt_2]"; ?>" > </td>
	</tr>
	<tr>
    	<td> Infaq 12 Bulan @10.000 : </td>
        <td> <input type="int" name="infaq_12_bulan" value="<?php echo "$data[infaq_12_bulan]"; ?>" > </td>
	</tr>
    </table>
    
    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
	<a href="input_pembayaran.php" class="btn btn-primary"> Batal </a>
    </form>
	<?php
				include ('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$nama_murid = $_POST['nama_murid'];
					$Tanggal = $_POST['Tanggal'];
					$dasi = $_POST['Dasi'];
					$kerudung = $_POST['Kerudung'];
					$LKS_1 = $_POST['lks_smt_1'];
					$UTS_1 = $_POST['uts_smt_1'];
					$PAS_1 = $_POST['pas_smt_1'];
					$LKS_2 = $_POST['lks_smt_2'];
					$UTS_2 = $_POST['uts_smt_2'];
					$PAS_2 = $_POST['pas_smt_2'];
					$infaq = $_POST['infaq_12_bulan'];

					//query untuk menambahkan data ke database, pastikan urutan nya sama dengan di database
					$datas = mysql_query("update administrasi set nama_murid='$nama_murid', tanggal='$Tanggal', dasi='$dasi', kerudung='$kerudung', lks_smt_1='$LKS_1', uts_smt_1='$UTS_1', pas_smt_1='$PAS_1', lks_smt_2=$LKS_2, uts_smt_2='$UTS_2',pas_smt_2='$PAS_2' ,infaq_12_bulan='$infaq' where id_transaksi='$Kode'") or die(mysql_error($koneksi));
					
					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='input_pembayaran.php';</script>";
				}
				?>   
    </div>
        
    <div class="clearfix margin-bawah"></div>
    </div>
</div>

<!-- //Edit Mata Pelajaran -->

<!-- footer -->

<div class="w3layouts_copy_right">
	<div class="container">
		<p>© 2022 MTs Darul Muawanah </p>
	</div>
</div>
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