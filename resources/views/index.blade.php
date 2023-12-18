<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Galerie | Maborne</title>
	<meta charset="UTF-8">
	<meta name="description" content="Boto Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/fresco.css"/>
	<link rel="stylesheet" href="css/slick.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-md-3 order-2 order-sm-1">
					<div class="header__social">
						
					</div>
				</div>
				<div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
					<a href="{{ route('index') }}" class="site-logo">
						<img src="img/maborne/logo_black.png" width="150px" alt="">
					</a>
				</div>
			</div>
			
		</div>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section -->
	<section class="hero__section" style="margin-top:-50px;">
		<h2 style="text-align:center; color:#dd3333; padding-bottom:15px;">Welcome to my cake gallery</h2>
		<div class="hero-slider">
			<div class="slide-item">
				<a class="fresco" href="img/maborne/1.png" data-fresco-group="projects">
					<img src="img/maborne/1.png" alt="">
				</a>
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/maborne/2.png" data-fresco-group="projects">
					<img src="img/maborne/2.png" alt="">
					</a>
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/maborne/3.png" data-fresco-group="projects">
					<img src="img/maborne/3.png" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/maborne/4.png" data-fresco-group="projects">
					<img src="img/maborne/4.png" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/maborne/5.png" data-fresco-group="projects">
					<img src="img/maborne/5.png" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/maborne/6.png" data-fresco-group="projects">
					<img src="img/maborne/6.png" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/maborne/7.png" data-fresco-group="projects">
					<img src="img/maborne/7.png" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/maborne/8.png" data-fresco-group="projects">
					<img src="img/maborne/8.png" alt="">
				</a>	
			</div>
		</div>
		<div class="hero-text-slider">
			<div class="text-item">
				<h2></h2>
				<a href="{{ route('gallery') }}"><h5 style="color:#e00b00;">Voir la galerie</h5></a>
			</div>
			<div class="text-item">
				<h2></h2>
				<a href="{{ route('gallery') }}"><h5 style="color:#e00b00;">Voir la galerie</h5></a>
			</div>
			<div class="text-item">
				<h2></h2>
				<a href="{{ route('gallery') }}"><h5 style="color:#e00b00;">Voir la galerie</h5></a>
			</div>
			<div class="text-item">
				<h2></h2>
				<a href="{{ route('gallery') }}"><h5 style="color:#e00b00;">Voir la galerie</h5></a>
			</div>
			<div class="text-item">
				<h2></h2>
				<a href="{{ route('gallery') }}"><h5 style="color:#e00b00;">Voir la galerie</h5></a>
			</div>
			<div class="text-item">
				<h2></h2>
				<a href="{{ route('gallery') }}"><h5 style="color:#e00b00;">Voir la galerie</h5></a>
			</div>
			<div class="text-item">
				<h2></h2>
				<a href="{{ route('gallery') }}"><h5 style="color:#e00b00;">Voir la galerie</h5></a>
			</div>
			<div class="text-item">
				<h2></h2>
				<a href="{{ route('gallery') }}"><h5 style="color:#e00b00;">Voir la galerie</h5></a>
			</div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Footer Section -->
	<footer class="footer__section">
		<div class="container">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<div class="footer__copyright__text">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Pastry Shop</a></p>
			</div>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</div>
	</footer>
	<!-- Footer Section end -->

	<!-- Search Begin -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search End -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
