<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>Big- Gamer Team Single</title>
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
                <h2 class="pageheader-title">Login for gaming</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
	<!-- ===========Banner Section Ends Here========== -->



	<!-- Login Section Section Starts Here -->
    <div class="login-section padding-top padding-bottom">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">Login</h3>
                <form class="account-form">
                    <div class="form-group">
                        <input type="text" placeholder="User Name" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                            <a href="#">Forget Password?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="d-block default-button"><span>Submit Now</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Don’t Have any Account? <a href="registration.html"> Sign Up</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Login With Social Media</h5>
                    <ul class="match-social-list d-flex flex-wrap align-items-center justify-content-center mt-4">
                        <li><a href="#"><img src="assets/images/match/Whatsapp.png" alt="vimeo"></a></li>
                        <li><a href="#"><img src="assets/images/match/instagram.png" alt="youtube"></a></li>
                        <li><a href="#"><img src="assets/images/match/snapchat.png" alt="twitch"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->




    <!-- ================ footer Section start Here =============== -->

    <?php include('./includes/footer.php'); ?>

    <!-- ================ footer Section end Here =============== -->




</body>

</html>