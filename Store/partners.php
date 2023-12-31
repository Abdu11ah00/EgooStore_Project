<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<title>Egoo-Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/icofont.min.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>
	<?php
	session_start();
	?>
	
	<!-- preloader start here -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- preloader ending here -->

	<!-- scrollToTop start here -->
	<a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
	<!-- scrollToTop ending here -->

	<!-- ==========shape image Starts Here========== -->
	<div class="body-shape">
		<img src="assets/images/shape/body-shape.png" alt="shape">
	</div>
	<!-- ==========shape image end Here========== -->




	<!-- ==========Header Section Starts Here========== -->

	<?php include('./includes/header.php'); ?>


	<!-- ==========Header Section Ends Here========== -->



	<!-- ===========Banner Section start Here========== -->
	<section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
		<div class="container">
			<div class="section-wrapper text-center text-uppercase">
				<h2 class="pageheader-title">our partners</h2>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center mb-0">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">partners</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>
	<!-- ===========Banner Section Ends Here========== -->



	<!-- ===========Partner Section Start Here========== -->
	<div class="partner-section padding-top padding-bottom">

		<?php include('./includes/include_partners.php'); ?>

	</div>
	<!-- ===========Partner Section Ends Here========== -->


	<!-- ================ footer Section start Here =============== -->

	<?php include('./includes/footer.php'); ?>

	<!-- ================ footer Section end Here =============== -->




</body>

</html>