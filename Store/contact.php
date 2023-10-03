<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>BiGamer Contact Us</title>
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



	<!-- ===========PageHeader Section Start Here========== -->
	<section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
	<!-- ===========PageHeader Section Ends Here========== -->

    <!-- ===========Info Section Ends Here========== -->
    <div class="info-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
				<p>Get in touch with us</p>
				<h2>We're Always Eager To Hear From You!</h2>
			</div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/01.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Office Address</h6>
                                <p>1201 park street, Fifth Avenue</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/02.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Phone number</h6>
                                <p>+22698 745 632,02 982 745</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/03.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Send Email</h6>
                                <p>adminbigamer@gmil.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- ===========Info Section Ends Here========== -->


	<!-- ===========Contact Section Ends Here========== -->
    <div class="contact-section">
        <div class="contact-top padding-top padding-bottom bg-attachment" style="background-image:url(assets/images/video/bg.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="contact-form-wrapper text-center">
                            <h2 class="mb-5">Fill The Form Below So We Can Get To Know You And Your Needs Better.</h2>
                            <form class="contact-form" action="contact.php" id="contact-form" method="POST">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Phone" id="phone" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" id="subject" name="subject" required>
                                </div>
                                <div class="form-group w-100">
                                    <textarea name="message" rows="8" id="message" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="form-group w-100 text-center">
                                    <button class="default-button" type="submit"><span>Send our Message</span></button>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14944322.253241181!2d55.73539979575926!3d23.87130844855327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2z2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2ssa!4v1696312804905!5m2!1sar!2ssa" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- ===========Contact Section Ends Here========== -->




	<!-- ================ footer Section start Here =============== -->
    
    <?php include('./includes/footer.php'); ?>

    <!-- ================ footer Section end Here =============== -->




</body>

</html>