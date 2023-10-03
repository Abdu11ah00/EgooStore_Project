<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <title>test Bi-Gamer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- site favicon -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- All stylesheet and icons css  -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/icofont.min.css" />
  <link rel="stylesheet" href="assets/css/swiper.min.css" />
  <link rel="stylesheet" href="assets/css/lightcase.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.min.css" />
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




  <!-- ==========Header Section Starts Here========== -->

  <?php include('./includes/header.php'); ?>

  <!-- ==========Header Section Ends Here========== -->


  <?php
  //Connect to MySQL
  include './DB-CONFIG.php';
  $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
  if (!$con) {
    echo mysqli_connect_errno();
    exit;
  }

  //Select all users
  $query = "SELECT * FROM product LIMIT 5";
  $result = mysqli_query($con, $query);

  ?>


  <!-- ===========Banner Section start Here========== -->
  <div class="banner__slider overflow-hidden">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="banner" style="background-image: url(assets/images/footer/bg.jpg)">
          <div class="container">
            <div class="row g-0">
              <div class="col-lg-6 col-12">
                <div class="banner__content">
                  <h1>Online Game</h1>
                  <h2>Genuine Money Transaction</h2>
                  <p>
                    Assertively communicate an expanded array of mindshare
                    rather than diverse technologies for magnetic applications
                    eamlessly virtual then Conveniently monetize synergistic
                    human capital
                  </p>
                  <a href="login.html" class="default-button"><span>join us today <i
                        class="icofont-play-alt-1"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===========Banner Section Ends Here========== -->


  <!-- ===========About Section start Here========== -->

  <?php include('./includes/include_about.php') ?>

  <!-- ===========About Section Ends Here========== -->



  <!-- ===========Shop Section start Here========== -->

  <div class="video-section padding-top padding-bottom bg-attachment"
    style="background-image: url(assets/images/match/bg-2.jpg)">
    <div class="container">
      <div class="section-header">
        <p>EgoStore t-shirt’s</p>
        <h2>explore our products</h2>
      </div>
      <div class="section-wrapper">
        <div class="row g-4 justify-content-center">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-xl-3 col-md-4 col-sm-6 col-12">
              <div class="product-item">
                <div class="product-inner">
                  <div class="product-thumb">
                    <img style="width: 200px; height: 180px; object-fit: contain;"
                      src="assets/images/product/<?= $row['Prod_Img1'] ?>" alt="product-thumb" class="w-100" />
                  </div>
                  <div class="product-content text-center p-3">
                    <a href="#">
                      <h5 class="product-title">
                        <?= $row['Prod_Name'] ?>
                      </h5>
                    </a>
                    <h5 class="product-price">$
                      <?= $row['Prod_Price'] ?>
                    </h5>
                    <div class="rating">
                      <i class="icofont-ui-rating"></i>
                      <i class="icofont-ui-rating"></i>
                      <i class="icofont-ui-rating"></i>
                      <i class="icofont-ui-rating"></i>
                      <i class="icofont-ui-rating"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- ===========Partner Section Start Here========== -->
  <div class="partner-section padding-top padding-bottom">

    <?php include('./includes/include_partners.php'); ?>

  </div>
  <!-- ===========Partner Section Ends Here========== -->




  <!-- ===========Testimonial Section Start Here========== -->

  <?php include('./includes/include_Testimonial.php'); ?>

  <!-- ===========Testimonial Section Ends Here========== -->
  <?php
  mysqli_free_result($result);
  mysqli_close($con);
  ?>





  <!-- ================ footer Section start Here =============== -->

  <?php include('./includes/footer.php'); ?>

  <!-- ================ footer Section end Here =============== -->


</body>

</html>