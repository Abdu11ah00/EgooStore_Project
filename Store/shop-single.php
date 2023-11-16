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

    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            padding: 20px;
            width: 450px;
            word-wrap: break-word;
            background-color: transparent;
            border: none;
            -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
        }

        .rating {
            display: flex;
            margin-top: -10px;
            flex-direction: row-reverse;
            margin-left: -4px;
            float: left
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 30px;
            font-size: 40px;
            color: #ecb341;
            cursor: pointer;
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }
    </style>

</head>

<body>

    <?php
    session_start();

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

    $select_AVG = "SELECT AVG(`Fee_Rating`), COUNT(`Fee_Rating`) FROM `feedback` WHERE `FK_Prod_ID` = '$id'";
    $result_AVG = mysqli_query($con, $select_AVG);
    $row_AVG = mysqli_fetch_assoc($result_AVG);

    $query_categories = "SELECT * FROM categories";
    $result_categories = mysqli_query($con, $query_categories);

    $query_feedback = "SELECT `Fee_ID`, product.Prod_Name, customer.Cust_FName, customer.Cust_LName, customer.Cust_Img,`Fee_Rating`, `Fee_Commit`, `Posted_on` 
                            FROM `feedback`, `product`, `customer` 
                                WHERE `FK_Cust_ID` = customer.Cust_ID AND `FK_Prod_ID` = product.Prod_ID AND `FK_Prod_ID` = $id ";
    $result_feedback = mysqli_query($con, $query_feedback);


    if (isset($_POST['Submit_Review'])) {

        if (!isset($_SESSION['Cust_ID'])) {
            header("Location: login.php");
            exit;
        } else {

            // Validation 
            if (!(isset($_POST['massage']) && !empty($_POST['massage']))) {
                $error_fields[] = "massage";
            }
            if (!(isset($_POST['rating']) && !empty($_POST['rating']))) {
                $error_fields[] = "rating";
            }

            if (!$error_fields) {

                //Escape any sepcial characters to avoid SQL Injection
                $add_Massage = mysqli_escape_string($con, $_POST['massage']);
                $add_rating = $_POST['rating'];
                $add_Cust_ID = $_SESSION['Cust_ID'];

                $query_feedback = "INSERT INTO `feedback`(`Fee_ID`, `FK_Cust_ID`, `FK_Prod_ID`, `Fee_Rating`, `Fee_Commit`) 
                                                    VALUES (NULL, '$add_Cust_ID', '$id', '$add_rating', '$add_Massage')";
                if (mysqli_query($con, $query_feedback)) {
                    header("Location: shop-single?id=" . $id);
                    exit;
                } else {
                    echo mysqli_error($con);
                }
            }

        }


    }
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
                        <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
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
                                        $explode_img = explode(',', $row['Prod_Img']);

                                        $img_count = count($explode_img);
                                        if (1 == $img_count): ?>
                                            <div class="swiper-container pro-single-top">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="single-thumb"><img
                                                                src=".\assets\images\product\<?= $row['Prod_Img'] ?>"
                                                                alt="Product Image"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                        elseif ($img_count >= 2):
                                            ?>
                                            <div class="swiper-container pro-single-top">
                                                <div class="swiper-wrapper">
                                                    <?php
                                                    foreach ($explode_img as $img):
                                                        ?>
                                                        <div class="swiper-slide">
                                                            <div class="single-thumb"><img
                                                                    src=".\assets\images\product\<?= $img ?>"
                                                                    alt="Product Image"></div>
                                                        </div>
                                                        <?php
                                                    endforeach;
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="swiper-container pro-single-thumbs">
                                                <div class="swiper-wrapper">
                                                    <?php
                                                    foreach ($explode_img as $img):
                                                        ?>
                                                        <div class="swiper-slide">
                                                            <div class="single-thumb"><img src=".\assets\images\product\<?= $img ?>"
                                                                    alt="shop"></div>
                                                        </div>
                                                        <?php
                                                    endforeach;
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="pro-single-next"><i class="icofont-rounded-left"></i></div>
                                            <div class="pro-single-prev"><i class="icofont-rounded-right"></i></div>

                                        <?php endif; ?>

                                    </div>
                                </div>


                                <!-- Product Description -->
                                <div class="col-md-6 col-12">
                                    <div class="post-content">
                                        <h4>
                                            <?= (isset($row['Prod_Name'])) ? $row['Prod_Name'] : '' ?>
                                        </h4>
                                        <p class="rating">
                                            <?php
                                            for ($i = 0; $i < round($row_AVG['AVG(`Fee_Rating`)']); $i++) {
                                                ?>
                                                <i class="icofont-star"></i>
                                                <?php
                                            }
                                            ?>
                                            (
                                            <?= $row_AVG['COUNT(`Fee_Rating`)'] ?> review)
                                        </p><br>
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
                                <li class="rev active" data-target="review-content-show">Reviews
                                    <?= $row_AVG['COUNT(`Fee_Rating`)'] ?>
                                </li>
                            </ul>

                            <div class="review-content review-content-show">
                                <div class="review-showing">
                                    <ul class="content lab-ul">
                                        <?php
                                        // this loop to print all Feedback
                                        while ($row2 = mysqli_fetch_assoc($result_feedback)) {
                                            ?>

                                            <li>
                                                <div class="post-thumb">
                                                    <img src="./assets/images/clients/<?= (!empty($row2['Cust_Img'])) ? $row2['Cust_Img'] : 'unknown.png' ?>"
                                                        alt="Personal Img">
                                                </div>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <div class="posted-on">
                                                            <a href="#">
                                                                <?= $row2['Cust_FName'] . " " . $row2['Cust_LName'] ?>
                                                            </a>
                                                            <p>Posted on December
                                                                <?= $row2['Posted_on'] ?>
                                                            </p>
                                                        </div>

                                                        <div class="rating">
                                                            <?php
                                                            for ($i = 0; $i < $row2['Fee_Rating']; $i++) {
                                                                ?>
                                                                <i class="icofont-star"></i>
                                                                <?php
                                                            }
                                                            ?>


                                                        </div>

                                                    </div>
                                                    <div class="entry-content">
                                                        <p>
                                                            <?= $row2['Fee_Commit'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>

                                        <?php } ?>




                                    </ul>

                                    <div class="client-review">
                                        <div class="review-form">
                                            <div class="review-title">
                                                <h5>Add a Review</h5>
                                            </div>
                                            <form action="" method="POST" class="row">
                                                <div class="col-md-4 col-12">
                                                    <div class="rating">
                                                        <input type="radio" name="rating" value="5" id="5"><label
                                                            for="5">☆</label>
                                                        <input type="radio" name="rating" value="4" id="4"><label
                                                            for="4">☆</label>
                                                        <input type="radio" name="rating" value="3" id="3"><label
                                                            for="3">☆</label>
                                                        <input type="radio" name="rating" value="2" id="2"><label
                                                            for="2">☆</label>
                                                        <input type="radio" name="rating" value="1" id="1"><label
                                                            for="1">☆</label>
                                                        <?php if (!isset($_POST['Submit_Review']))
                                                            null;
                                                        elseif (in_array("rating", $error_fields))
                                                            echo "<div class='text-danger'> * Please Chose Rating </div><br>";
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <textarea name="massage" rows="5"
                                                        placeholder="Type Here Message"></textarea>
                                                    <?php if (!isset($_POST['Submit_Review']))
                                                        null;
                                                    elseif (in_array("massage", $error_fields))
                                                        echo "<div class='text-danger'> * Please Write Your Massage </div>";
                                                    ?>
                                                </div>
                                                <div class="col-12">
                                                    <button name="Submit_Review" class="default-button"
                                                        type="submit"><span>Submit
                                                            Review</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="description">
                                    <p>
                                        <?= (isset($row['Prod_Short_Desc'])) ? $row['Prod_Short_Desc'] : '' ?>
                                    </p>
                                    <?php 
                                    // if there is more than one img, the first img is taken.
                                    $explode_img = explode(',', $row['Prod_Img']);?>
                                    <div class="post-item">
                                        <div class="post-thumb">
                                            <img src="assets/images/product/<?= (isset($explode_img[1])) ? $explode_img[1] : $row['Prod_Img'] ?>"
                                                alt="shop">
                                        </div>
                                        <div class="post-content">
                                            <ul class="lab-ul">
                                                <li>
                                                    "PRO" Donec non est at libero vulputate rutrum. 
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
                                        <?= (isset($row['Prod_Below_Desc'])) ? $row['Prod_Below_Desc'] : '' ?>
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
                                <h5>Search Your keywords "PRO"</h5>
                            </div>
                            <form action="/" class="search-wrapper">
                                <input type="text" name="s" placeholder="Search Here...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

                        <div class="widget shop-widget">
                            <div class="widget-header">
                                <h5>All Categories "PRO"</h5>
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
                        $query = "SELECT `Prod_Name`, `Prod_Img`, `Prod_Price`, `Prod_Published`, AVG(Fee_Rating)
                                    FROM `product`, `feedback` WHERE feedback.FK_Prod_ID = product.Prod_ID AND `Prod_Published` = 1
                                        LIMIT 2";

                        $result2 = mysqli_query($con, $query);

                        ?>
                        <div class="widget widget-post recent-product">
                            <div class="widget-header">
                                <h5>Recent Product</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper">
                                <?php
                                while ($row = mysqli_fetch_assoc($result2)) {
                                    ?>
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="shop-single.html"><img
                                                    style="width: 200px; height: 180px; object-fit: contain;"
                                                    src="assets/images/product/<?= $row['Prod_Img'] ?>" alt="product"></a>
                                        </div>
                                        <div class="post-content ps-4">
                                            <a href="shop-single.html">
                                                <h6>
                                                    <?= $row['Prod_Name'] ?>
                                                </h6>
                                            </a>
                                            <p>
                                                <?php
                                                for ($i = 0; $i < round($row['AVG(Fee_Rating)']); $i++) {
                                                    ?>
                                                    <i class="icofont-star"></i>
                                                    <?php
                                                }
                                                ?>
                                            </p>
                                            <p class="price">$
                                                <?= $row['Prod_Price'] ?>
                                            </p>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
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
    mysqli_free_result($result_feedback);
    mysqli_free_result($result_AVG);
    mysqli_free_result($result_categories);
    mysqli_close($con);
    ?>
    <!-- ================ footer Section start Here =============== -->

    <?php include('./includes/footer.php'); ?>

    <!-- ================ footer Section end Here =============== -->






</body>

</html>