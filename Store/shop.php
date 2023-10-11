<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Egoo-Store Shop</title>
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

    <?php include('./includes/header.php') ?>

    <!-- ==========Header Section Ends Here========== -->


    <?php
    //Connect to MySQL
    include './DB-CONFIG.php';
    $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
    if (!$con) {
        echo mysqli_connect_errno();
        exit;
    }

    //Select all product
    $query = "SELECT * FROM product";

    //Select all categories
    $query_categories = "SELECT * FROM categories";


    //Search by the name or the email
    // if (isset($_GET['add_search'])) {
    //     $search = mysqli_escape_string($con, $_GET['add_search']);
    //     $query .= " WHERE `listpro`.`name` LIKE '%" . $search . "%' OR `listpro`.`email` LIKE '%" . $search . "%'";
    // }
    
    $result_product = mysqli_query($con, $query);

    $result_categories = mysqli_query($con, $query_categories);

    ?>


    <!-- ===========PageHeader Section Start Here========== -->
    <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
        <div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">shop page</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ===========PageHeader Section Ends Here========== -->



    <!-- ===========Shop Section Ends Here========== -->
    <div class="shop-page padding-top padding-bottom aside-bg">
        <div class="container">
            <div class="row justify-content-center pb-15">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="shop-title d-flex flex-wrap justify-content-between">
                            <p>Showing 01 - 12 of 139 Results</p>
                            <div class="product-view-mode">
                                <a class="active" data-target="grid"><i class="icofont-ghost"></i></a>
                                <a data-target="list"><i class="icofont-listine-dots"></i></a>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid row justify-content-center g-4">

                            <!-- Print all the products -->
                            <?php
                            while ($row = mysqli_fetch_assoc($result_product)) {
                                ?>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <div class="pro-thumb">
                                                <img style="width: 200px; height: 180px; object-fit: contain;"
                                                    src="assets/images/product/<?= $row['Prod_Img1'] ?>" alt="shop">
                                            </div>
                                            <div class="product-action-link">
                                                <a href="shop-single?id=<?= $row['Prod_ID'] ?>"><i
                                                        class="icofont-eye"></i></a>
                                                <a href="#"><i class="icofont-heart"></i></a>
                                                <a href="#"><i class="icofont-cart-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5><a href="#">
                                                    <?= $row['Prod_Name'] ?>
                                                </a></h5>
                                            <p><i class="icofont-star"></i><i class="icofont-star"></i><i
                                                    class="icofont-star"></i><i class="icofont-star"></i><i
                                                    class="icofont-star"></i></p>
                                            <h6>$
                                                <?= $row['Prod_Price'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <div class="pro-thumb">
                                                <img src="assets/images/product/<?= $row['Prod_Img1'] ?>" alt="shop">
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#"><i class="icofont-eye"></i></a>
                                                <a href="#"><i class="icofont-heart"></i></a>
                                                <a href="#"><i class="icofont-cart-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h5><a href="#">
                                                    <?= $row['Prod_Name'] ?>
                                                </a></h5>
                                            <p><i class="icofont-star"></i><i class="icofont-star"></i><i
                                                    class="icofont-star"></i><i class="icofont-star"></i><i
                                                    class="icofont-star"></i></p>
                                            <h6>$
                                                <?= $row['Prod_Price'] ?>
                                            </h6>
                                            <p>
                                                <?= $row['Prod_Short_Desc'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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

                        $result_product_recent = mysqli_query($con, $query);


                        while ($row = mysqli_fetch_assoc($result_product_recent)) {
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

            <div class="modal" id="quick_view">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal"><i class="icofont-close"></i></button>
                        <div class="modal-body">
                            <div class="product-details-inner">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-12">
                                        <div class="thumb text-center">
                                            <div class="pro-thumb">
                                                <img src="assets/images/shop/09.jpg" alt="shop">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="product-content">
                                            <h5><a href="#">Product Title Here111</a></h5>
                                            <p>
                                                <i class="icofont-star"></i><i class="icofont-star"></i><i
                                                    class="icofont-star"></i><i class="icofont-star"></i><i
                                                    class="icofont-star"></i>
                                            </p>
                                            <h6>$200</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo</p>
                                        </div>
                                        <div class="cart-button">
                                            <div class="cart-plus-minus">
                                                <div class="dec qtybutton">-</div>
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="2">
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                            <a href="#" class="default-button"><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="ss">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal"><i class="icofont-close"></i></button>
                        <div class="modal-body">
                            <div class="product-details-inner">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-12">
                                        <div class="thumb text-center">
                                            <div class="pro-thumb">
                                                <img src="assets/images/shop/09.jpg" alt="shop">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="product-content">
                                            <h5><a href="#">Product Title Here22</a></h5>
                                            <p>
                                                <i class="icofont-star"></i><i class="icofont-star"></i><i
                                                    class="icofont-star"></i><i class="icofont-star"></i><i
                                                    class="icofont-star"></i>
                                            </p>
                                            <h6>$200</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo</p>
                                        </div>
                                        <div class="cart-button">
                                            <div class="cart-plus-minus">
                                                <div class="dec qtybutton">-</div>
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="2">
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                            <a href="#" class="default-button"><span>Add to Cart</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ===========Shop Section Ends Here========== -->



    <?php
    mysqli_free_result($result_product);
    mysqli_free_result($result_product_recent);
    mysqli_free_result($result_categories);
    mysqli_close($con);
    ?>
    <!-- ================ footer Section start Here =============== -->
    <?php include('./includes/footer.php') ?>
    <!-- ================ footer Section end Here =============== -->




</body>

</html>