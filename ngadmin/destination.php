<?php
include 'koneksi.php';

$sql = "SELECT * FROM skripsi";
$run = @mysql_query($sql) or die(mysql_error());
?>

<!DOCTYPE HTML>
<!--
fak dis shit
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pilih Judul &mdash; Skripsi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>

	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index"><em>SIAP</em>-Skripsi <em>.</em></a></div>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<br>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center mt-text animate-box" data-animate-effect="fadeInUp">
					<!-- <div class="row row-mt-15em"> -->
						<label><font color="white" size="5pt">Judul Skripsi</font></label>
						<table class="col-md-12 text-center" border=2 >
							<tr class="text-center">
								<td bgcolor="#fffff">No</td>
								<td bgcolor="#fffff">Judul</td>
								<td bgcolor="#fffff">Tingkat</td>
								<td bgcolor="#fffff">Status</td>
								<td bgcolor="#fffff">Aksi</td>
							</tr>
							<?php 
							$i = 1;
							while($data = mysql_fetch_row($run))
							{
							?>
							<tr class="text-left">
								<td class="text-center"><font color="#fff"><?php echo $i; ?></font></td>
								<td><font color="#fff"><?php echo $data[1]; ?></font></td>
								<td><font color="#fff"><?php echo $data[2]; ?></font></td>
								<td>
								<?php
              							if ($data[3]==1) {
                  						echo '<span class="label label-success">Belum dipilih</span>';
             							} elseif ($data[3]==2) {
                  						echo '<span class="label label-danger">Sudah dipilih</span>';
              							} else {
                  						echo '<span class="label label-warning">Error</span>';
            						 	}
            						?>
            					</td>
								<td class="text-center">
								<a href="delete.php?id=<?php echo $data[0]; ?>" onclick="return konfirmasikan()">Hapus</a>
								<a href="delete.php?id=<?php echo $data[0]; ?>" onclick="return konfirmasikan()">Ubah</a>
								</td>
							</tr>
							<?php $i++; } ?>
						</table>

						
						
					</div>
					
				<!-- </div> -->
				
			</div>			
		</div>
	</header>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	<script type="text/javascript">
		function konfirmasikan()
		{
		var a = confirm('Apakah anda yakin ingin memilih judul ini ?');
		if(a == true)
			return true;
		else
			return false;
}
</script>

	</body>
</html>