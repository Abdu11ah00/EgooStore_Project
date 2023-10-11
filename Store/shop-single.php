<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>BiGamer Shop</title>
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
    //Connect to DB
    include './DB-CONFIG.php';
    $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
    if (!$con) {
        echo mysqli_connect_errno();
        exit;
    }

    //shop-single.php?id= => $_GET['id']
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $select = "SELECT * FROM product WHERE `product`.`Prod_ID` = " . $id . " LIMIT 1";
    $result = mysqli_query($con, $select);
    $row = mysqli_fetch_assoc($result);


    $query_categories = "SELECT * FROM categories";
    $result_categories = mysqli_query($con, $query_categories);

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



    <!-- ===========PageHeader Section Start Here========== -->
    <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
        <div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">our Shop Single</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ===========PageHeader Section Ends Here========== -->



    <!-- ===========Shop Single Section Ends Here========== -->
    <div class="shop-single padding-top padding-bottom aside-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="product-details">
                            <div class="row align-items-center">


                                <div class="col-md-6 col-12">
                                    <div class="product-thumb">


                                        <?php
                                        // 1- Image Viewer
                                        
                                        /*This if statement is that 
                                            if there is only one image, it's displayed in a specific design"without the image scrolling and button",,
                                            another way, if there're tow or more images, it's displayed with another design. */
                                        if (isset($row['Prod_Img1']) && isset($row['Prod_Img2']) && isset($row['Prod_Img3'])) {
                                            echo "<div class='swiper-container pro-single-top'>
                                            <div class='swiper-wrapper'>";

                                            for ($i = 1; $i <= 3; $i++) {
                                                $img = "Prod_Img" . $i;
                                                echo "<div class='swiper-slide'>
                                                            <div class='single-thumb'><img src='assets/images/product/" . $row[$img] . "' alt='shop'></div>
                                                            </div>";
                                            }

                                            echo "</div>
                                        </div>";
                                        } else if (isset($row['Prod_Img1']) && isset($row['Prod_Img2'])) {
                                            echo "<div class='swiper-container pro-single-top'>
                                            <div class='swiper-wrapper'>";
                                            for ($i = 1; $i <= 2; $i++) {
                                                $img = "Prod_Img" . $i;
                                                echo "<div class='swiper-slide'>
                                                            <div class='single-thumb'><img src='assets/images/product/" . $row[$img] . "' alt='shop'></div>
                                                            </div>";
                                            }

                                            echo "</div>
                                        </div>";
                                        } else if (isset($row['Prod_Img1'])) {
                                            echo "<div class='swiper-container pro-single-top'>
                                                <div class='swiper-wrapper'>";

                                            echo "<div class='swiper-slide'>
                                                    <div class='single-thumb'><img src='assets/images/product/" . $row['Prod_Img1'] . "' alt='shop'></div>
                                                    </div>";

                                            echo "</div>
                                        </div>";
                                        }else{
                                            echo "";
                                        }
                                        ?>

                                        <?php
                                        // 2- To Change the image by scrolling and button
                                        
                                        if (isset($row['Prod_Img1']) && isset($row['Prod_Img2']) && isset($row['Prod_Img3'])) {
                                            echo "<div class='swiper-container pro-single-thumbs'>
                                            <div class='swiper-wrapper'>";

                                            for ($i = 1; $i <= 3; $i++) {
                                                $img = "Prod_Img" . $i;
                                                echo "<div class='swiper-slide'>
                                            <div class='single-thumb'><img src='assets/images/product/" . $row[$img] . "' alt='shop'></div>
                                            </div>";
                                            }

                                            echo "</div>
                                        </div>";
                                            echo "<div class='pro-single-next'><i class='icofont-rounded-left'></i></div>
                                            <div class='pro-single-prev'><i class='icofont-rounded-right'></i></div>";

                                        } else if (isset($row['Prod_Img1']) && isset($row['Prod_Img2'])) {
                                            echo "<div class='swiper-container pro-single-thumbs'>
                                            <div class='swiper-wrapper'>";
                                            for ($i = 1; $i <= 2; $i++) {
                                                $img = "Prod_Img" . $i;
                                                echo "<div class='swiper-slide'>
                                            <div class='single-thumb'><img src='assets/images/product/" . $row[$img] . "' alt='shop'></div>
                                            </div>";
                                            }

                                            echo "</div>
                                        </div>";
                                            echo "<div class='pro-single-next'><i class='icofont-rounded-left'></i></div>
                                        <div class='pro-single-prev'><i class='icofont-rounded-right'></i></div>";
                                        } else {
                                            echo "";
                                        }
                                        ?>

                                    </div>
                                </div>


                                <!-- Product Description -->
                                <div class="col-md-6 col-12">
                                    <div class="post-content">
                                        <h4>
                                            <?= (isset($row['Prod_Name'])) ? $row['Prod_Name'] : '' ?>
                                        </h4>
                                        <p class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            (3 review)
                                        </p>
                                        <h4>$
                                            <?= (isset($row['Prod_Price'])) ? $row['Prod_Price'] : '' ?>
                                        </h4>
                                        <br>
                                        <h6>Product Description: </h6>
                                        <p>
                                            <?= (isset($row['Prod_Short_Desc'])) ? $row['Prod_Short_Desc'] : '' ?>
                                        </p>

                                        <form>
                                            <div class="cart-plus-minus">
                                                <div class="dec qtybutton">-</div>
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="1">
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                            <button type="submit" class="default-button"><span>Add To
                                                    Cart</span></button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review and Description -->
                        <div class="review">
                            <ul class="review-nav lab-ul">
                                <li class="desc" data-target="description-show">Description</li>
                                <li class="rev active" data-target="review-content-show">Reviews 4</li>
                            </ul>

                            <div class="review-content review-content-show">
                                <div class="review-showing">
                                    <ul class="content lab-ul">
                                        <li>
                                            <div class="post-thumb">
                                                <img src="assets/images/clients/die0.png" alt="shop">
                                            </div>
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <div class="posted-on">
                                                        <a href="#">Ganelon Boileau</a>
                                                        <p>Posted on December 25, 2017 at 6:57 am</p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                    </div>
                                                </div>
                                                <div class="entry-content">
                                                    <p>Enthusiast build innovativ initiatives before lonterm
                                                        high-impact
                                                        awesome theme seo psd porta monetize covalent leadership
                                                        after
                                                        without resource.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="client-review">
                                        <div class="review-form">
                                            <div class="review-title">
                                                <h5>Add a Review</h5>
                                            </div>
                                            <form action="action" class="row">
                                                <div class="col-md-4 col-12">
                                                    <input type="text" name="name" placeholder="Full Name">
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <input type="text" name="email" placeholder="Email Adress">
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="rating">
                                                        <span class="rating-title">Your Rating : </span>
                                                        <ul class="lab-ul">
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <textarea rows="5" placeholder="Type Here Message"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button class="default-button" type="submit"><span>Submit
                                                            Review</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                        eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                        in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <div class="post-item">
                                        <div class="post-thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shop">
                                        </div>
                                        <div class="post-content">
                                            <ul class="lab-ul">
                                                <li>
                                                    Donec non est at libero vulputate rutrum.
                                                </li>
                                                <li>
                                                    Morbi ornare lectus quis justo gravida semper.
                                                </li>
                                                <li>
                                                    Pellentesque aliquet, sem eget laoreet ultrices.
                                                </li>
                                                <li>
                                                    Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                                    nulla.
                                                </li>
                                                <li>
                                                    Donec a neque libero.
                                                </li>
                                                <li>
                                                    Pellentesque aliquet, sem eget laoreet ultrices.
                                                </li>
                                                <li>
                                                    Morbi ornare lectus quis justo gravida semper..
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>


                </div>
                <div class="col-lg-4 col-md-7 col-12">
                    <aside class="ps-lg-4">
                        <div class="widget widget-search">
                            <div class="widget-header">
                                <h5>Search Your keywords</h5>
                            </div>
                            <form action="/" class="search-wrapper">
                                <input type="text" name="s" placeholder="Search Here...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

                        <div class="widget shop-widget">
                            <div class="widget-header">
                                <h5>All Categories</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="shop-menu lab-ul">
                                <?php
                                    // this while loop to print all categories
                                    while ($row = mysqli_fetch_assoc($result_categories)) {
                                        ?>
                                        <li><a href="#0">
                                                <?= $row['Cate_Name'] ?>
                                            </a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                        <?php
                        $query = "SELECT * FROM product LIMIT 1";

                        $result2 = mysqli_query($con, $query);


                        while ($row = mysqli_fetch_assoc($result2)) {
                            ?>
                            <div class="widget widget-post recent-product">
                                <div class="widget-header">
                                    <h5>Recent Product</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="shop-single.html"><img
                                                    style="width: 200px; height: 180px; object-fit: contain;"
                                                    src="assets/images/product/<?= $row['Prod_Img1'] ?>" alt="product"></a>
                                        </div>
                                        <div class="post-content ps-4">
                                            <a href="shop-single.html">
                                                <h6>
                                                    <?= $row['Prod_Name'] ?>
                                                </h6>
                                            </a>
                                            <p>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </p>
                                            <p class="price">$
                                                <?= $row['Prod_Price'] ?>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========Shop Single Section Ends Here========== -->



    <?php
    mysqli_free_result($result);
    mysqli_free_result($result2);
    mysqli_free_result($result_categories);
    mysqli_close($con);
    ?>
    <!-- ================ footer Section start Here =============== -->

    <?php include('./includes/footer.php'); ?>

    <!-- ================ footer Section end Here =============== -->






</body>

</html>