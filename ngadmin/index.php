	<?php
	include 'koneksi.php';
	session_start();
	if($_SESSION){
		header("Location: input");
	}
	?>
	<!DOCTYPE HTML>

	<html>
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Input Data &mdash; Aplikasi Pendataan Jurusan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
		<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
		<meta name="author" content="GetTemplates.co" />

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
						<div id="gtco-logo"><a href="index">Input Data <em>.</em></a></div>
					</div>
				</div>
				
			</div>
		</nav>
		
		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<!--<div class="row row-mt-15em">-->
						<br>
						<br>
						<br>
						<br>
						<br>

						<?php
						if(isset($_POST['login'])){
						include("koneksi.php");
						
						$username	= $_POST['username'];
						$password	= md5($_POST['password']);
						$level		= $_POST['level'];
						
						$query = mysqli_query($koneksi,"SELECT * FROM login WHERE username='$username' AND password='$password'");
						if(mysqli_num_rows($query) == 0){
							echo '<div class="alert alert-danger">Login gagal !</div>';
						}else{
							$row = mysqli_fetch_assoc($query);
							
							if($row['level'] == 1 && $level == 1){
								$_SESSION['username']=$username;
								$_SESSION['level']='admin';
								header("Location: input");
								echo '<div class="alert alert-success">Login berhasil !</div>';
							}else{
								echo '<div class="alert alert-danger" class="tab-content-inner active" >Login Gagal !</div>';
							}
						}
					}
					?>

							<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
								<img width="100px" src="/css/images/logo.png">
								<h1>Administrator</h1>	
							</div>
							<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
								<div class="form-wrap">
									<div class="tab">
										
										<div class="tab-content">
											<div class="tab-content-inner active" data-content="signup">
												<h3>Login</h3>

												<form method="post" action="" >
													<div class="row form-group">
														<div class="col-md-12">
															<label for="username">Username</label>
															<input type="text" id="username" name="username" class="form-control">
														</div>
													</div>

													<div class="row form-group">
														<div class="col-md-12">
															<label for="password">Password</label>
															<input type="password" id="password" name="password" class="form-control">
														</div>
													</div>
													
													<div class="row form-group">
														<div class="col-md-12">
															<label for="level">Pilih Level</label>
															<select name='level' id="level" class="form-control">
																<option name="level" value="1">Administrator</option>
															</select>
														</div>
													</div>

													<div class="row form-group">
														<div class="col-md-12">
															<input type="submit" name="login" class="btn btn-primary btn-block" value="Masuk">
														</div>
													</div>

													<!-- <button type="button" class="btn" data-toggle="modal" data-target="#mediumModal">Medium</button> -->
												</form>	
											</div>
										</div>
									</div>
								</div>
							</div>
						<!--</div>-->
					</div>
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

		</body>
	</html>

