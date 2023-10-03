<!doctype html>
<html class="no-js" lang="en">

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
                <h2 class="pageheader-title">Shop Cart</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ===========PageHeader Section Ends Here========== -->



    <!-- ===========Cart Section Ends Here========== -->
    <div class="shop-cart padding-top padding-bottom">
        <div class="container">
            <div class="section-wrapper">
                <div class="cart-top">
                    <table>
                        <thead>
                            <tr>
                                <th class="cat-product">Product</th>
                                <th class="cat-price">Price</th>
                                <th class="cat-quantity">Quantity</th>
                                <th class="cat-toprice">Total</th>
                                <th class="cat-edit">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-item cat-product">
                                    <div class="p-thumb">
                                        <a href="#"><img src="assets/images/shop/die3.png" alt="product"></a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#">Product Text Here</a>
                                    </div>
                                </td>
                                <td class="cat-price">$250</td>
                                <td class="cat-quantity">
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="3">
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </td>
                                <td class="cat-toprice">$750</td>
                                <td class="cat-edit">
                                    <a href="#"><img src="assets/images/shop/del.png" alt="product"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="cart-bottom">
                    <div class="cart-checkout-box">
                        <form class="coupon" action="/">
                            <input type="text" name="coupon" placeholder="Coupon Code..." class="cart-page-input-text">
                            <button type="submit" class="default-button ms-2 px-4"><span>Apply</span></button>
                        </form>
                        <form class="cart-checkout" action="/">
                            <button type="submit" class="default-button m-2"><span>Update Cart</span></button>
                            <button type="submit" class="default-button reverse-effect m-2"><span>Proceed to
                                    Checkout</span></button>
                        </form>
                    </div>
                    <div class="shiping-box">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="calculate-shiping">
                                    <h3>Calculate Shipping</h3>
                                    <div class="outline-select">
                                        <select>
                                            <option value="volvo">United Kingdom (UK)</option>
                                            <option value="saab">Bangladesh</option>
                                            <option value="saab">Pakisthan</option>
                                            <option value="saab">India</option>
                                            <option value="saab">Nepal</option>
                                        </select>
                                        <span class="select-icon"><i class="icofont-rounded-down"></i></span>
                                    </div>
                                    <div class="outline-select shipping-select">
                                        <select>
                                            <option value="volvo">State/Country</option>
                                            <option value="saab">Dhaka</option>
                                            <option value="saab">Benkok</option>
                                            <option value="saab">Kolkata</option>
                                            <option value="saab">Kapasia</option>
                                        </select>
                                        <span class="select-icon"><i class="icofont-rounded-down"></i></span>
                                    </div>
                                    <input type="text" name="coupon" placeholder="Postcode/ZIP"
                                        class="cart-page-input-text" />
                                    <button type="submit" class="default-button reverse-effect"><span>Update
                                            Total</span></button>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="cart-overview">
                                    <h3>Cart Totals</h3>
                                    <ul class="codex">
                                        <li>
                                            <span class="pull-left">Cart Subtotal</span>
                                            <p class="pull-right">$ 0.00</p>
                                        </li>
                                        <li>
                                            <span class="pull-left">Shipping and Handling</span>
                                            <p class="pull-right">Free Shipping</p>
                                        </li>
                                        <li>
                                            <span class="pull-left">Order Total</span>
                                            <p class="pull-right">$ 2940.00</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========Cart Section Ends Here========== -->




    <!-- ================ footer Section start Here =============== -->

    <?php include('./includes/footer.php'); ?>

    <!-- ================ footer Section end Here =============== -->





</body>

</html>