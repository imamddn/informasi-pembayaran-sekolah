<!DOCTYPE html>
<html lang="zxx">
<head>
<title>MTs Darul Muawanah</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MTS Darul Muawanah" />
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

<!-- Tambah Mata Pelajaran -->
<div id="Edit_Akun">
	<div class="container">
    <h3 class="w3l-title cl"> Tambah Transaksi </h3>
    <div class="container margin-atas">
	
<?php 
include ('../koneksi.php');
$tampil="SELECT * FROM `murid`";
$hasil=mysql_query($tampil);
?>
	
    <form class="form-group" action="" method="post">
    <table class="table">
	<tr>
    	<td> Tanggal : </td>
        <td> <input type="date" name="Tanggal"> </td>
    </tr>
	<tr>
    	<td> Nama Murid : </td>
   		<td> <select name="nama_murid">
				<?php 
				while ($data=mysql_fetch_array($hasil))
				{
					echo "<option value='$data[nama_murid]'> $data[nama_murid] </option> ";
				}
				?>
			 </select>
		</td>
    </tr>
	<tr>
    	<td> Dasi 2 jenis warna : </td>
        <td> <input type="int" name="Dasi"> </td>
    </tr>
	<tr>
    	<td> Kerudung 3 jenis warna : </td>
        <td> <input type="int" name="Kerudung"> </td>
    </tr>
	<tr>
    	<td> LKS Semester I : </td>
        <td> <input type="int" name="lks_smt_1"> </td>
    </tr>
	<tr>
    	<td> UTS Semester I : </td>
        <td> <input type="int" name="uts_smt_1"> </td>
    </tr>
	<tr>
    	<td> PAS Semester I: </td>
        <td> <input type="int" name="pas_smt_1"> </td>
    </tr>
	<tr>
    	<td> LKS Semester II : </td>
        <td> <input type="int" name="lks_smt_2"> </td>
    </tr>
	<tr>
    	<td> UTS Semester II : </td>
        <td> <input type="int" name="uts_smt_2"> </td>
    </tr>
	<tr>
    	<td> PAS Semester II : </td>
        <td> <input type="int" name="pas_smt_2"> </td>
	</tr>
	<tr>
    	<td> Infaq 12 Bulan @10.000 : </td>
        <td> <input type="int" name="infaq_12_bulan"> </td>
	</tr>
    </table>
    
    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
    <a href="Input_pembayaran.php" class="btn btn-primary"> Batal </a>
    </form>
	<?php
				include ('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$Nama_siswa = $_POST['nama_murid'];
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


					

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysql_query("insert into administrasi (nama_murid,tanggal,dasi,kerudung,lks_smt_1,uts_smt_1,pas_smt_1,lks_smt_2,uts_smt_2,pas_smt_2,infaq_12_bulan)values('$Nama_siswa','$Tanggal','$dasi','$kerudung','$LKS_1','$UTS_1', '$PAS_1', '$LKS_2', '$UTS_2', '$PAS_2', '$infaq')") or die(mysql_error($koneksi));

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='input_pembayaran.php';</script>";
				}
				?>    
	
    </div>
        
    <div class="clearfix margin-bawah"></div>
    </div>
</div>

<script type="text/javascript">
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
    return true;
}
</script>

<!-- //Tambah Mata Pelajaran -->

<!-- footer -->
    <div id="waterdrop"></div>
    <footer>
      <div class="footer-top">
        <div class="pt-exebar">

        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3">
              <div class="widget footer_widget">
                <h5 class="footer-title">Address</h5>
                <div class="gem-contacts">
                  <div class="gem-contacts-item gem-contacts-address">Corporate Office :<br> Penanggalan, Dukuhdimoro, Kabupaten Jombang, Jawa Timur 61482 </br>
                  </div>
                  <div class="gem-contacts-item gem-contacts-phone"><i class="fa fa-phone" aria-hidden="true"></i> Phone: <a href="">+62 856-5505-5134</a></div>
                </div>
              </div>

            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="widget">
                    <h5 class="footer-title">Email Us</h5>
                    <div class="textwidget">
                      <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">

                        <form method="post" class="wpcf7-form" novalidate="novalidate">

                          <div class="contact-form-footer">
                            <p><span class="wpcf7-form-control-wrap your-first-name"><input type="text" name="your-first-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your name"></span></p>
                            <p><span class="wpcf7-form-control-wrap your-email_1"><input type="email" name="your-email_1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Your email"></span></p>
                            <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your message"></textarea></span></p>
                            <div><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
              <div class="widget widget_gallery gallery-grid-4">
                <h5 class="footer-title">Our Gallery</h5>
                <ul class="magnific-image">

                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">

            <div class="col-md-3">
              <div class="footer-site-info">2022 © <a href="https://www.google.co.id/maps/place/MTS+-+MA+DARUL+MUAWANAH+dan+PONDOK+PESANTREN+I'ANATUTTHOLIBIN/@-7.5603549,112.3618066,17z/data=!3m1!4b1!4m5!3m4!1s0x2e786d73736daaa1:0x89b1f8c159f73e9a!8m2!3d-7.5603602!4d112.3640007" target="_blank">MTS-MA Darul Muawanah </a></div>
            </div>

            <div class="col-md-6">
              <nav id="footer-navigation" class="site-navigation footer-navigation centered-box" role="navigation">
                <ul id="footer-menu" class="nav-menu styled clearfix inline-inside">
                  <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26"><a href="#">Support</a></li>
                  <li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a href="#">Contact Us</a></li>
                  <li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="#">Disclaimer</a></li>
                  <li id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29"><a href="#">Add more</a></li>
                </ul>
              </nav>
            </div>

            <div class="col-md-3">
              <div id="footer-socials">
                <div class="socials inline-inside socials-colored">

                  <a href="https://www.facebook.com/mtsdarulmuawanah.muawanah" target="_blank" title="Facebook" class="socials-item">
                    <i class="fab fa-facebook-f facebook"></i>
                  </a>
                  <a href="#" target="_blank" title="Twitter" class="socials-item">
                    <i class="fab fa-twitter twitter"></i>

                  </a>
                  <a href="#" target="_blank" title="Instagram" class="socials-item">
                    <i class="fab fa-instagram instagram"></i>
                  </a>
                  <a href="https://www.youtube.com/channel/UCJnP2xXoHxswR4dXgNOlIfw" target="_blank" title="YouTube" class="socials-item">
                    <i class="fab fa-youtube youtube"></i>
                  </a>
                  <a href="#" target="_blank" title="Telegram" class="socials-item">
                    <i class="fab fa-telegram telegram"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>

 <script> jQuery('#waterdrop').raindrops({color:'#1c1f2f', canvasHeight:150, density: 0.1, frequency: 20});
</script>
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