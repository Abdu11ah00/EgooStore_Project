<header class="header-section">
    <div class="container">
        <div class="header-holder d-flex flex-wrap justify-content-between align-items-center">
            <div class="brand-logo d-none d-lg-inline-block">
                <div class="logo">
                    <a href="index.php">

                        <!-- <img style="width: 116px; height: 100px; object-fit: cover;"
                            src="./assets/images/logo/logo1.png" alt="logo"> -->

                        <img style="width: 80px; height: 40px; object-fit: cover;" src="./assets/images/logo/logoup.png"
                            alt="logo">

                    </a>
                </div>
            </div>
            <div class="header-menu-part">
                <div class="header-top">
                    <div class="header-top-area">
                        <ul class="left">
                            <li>
                                <i class="icofont-ui-call"></i> <span>+966545138000</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i> Saudi Arabia, Riyadh 111 KSA
                            </li>
                        </ul>
                        <ul class="social-icons d-flex align-items-center">
                            <li>
                                <a href="#" class="twitter"><i class="icofont-telegram"></i></a>
                            </li>
                            <li>
                                <a href="#" class="vimeo"><i class="icofont-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="#" class="skype"><i class="icofont-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#" class="skype"><i class="icofont-instagram"></i></a>



                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-wrapper justify-content-lg-end">
                        <div class="mobile-logo d-lg-none">
                            <a href="index.php"><img src="./assets/images/logo/logoup" alt="logo"></a>
                        </div>
                        <div class="menu-area">
                            <ul class="menu">
                                <li><a href="index.php">Home</a></li>
                                <li>
                                    <a href="#0">accounts</a>
                                    <ul class="submenu">
                                        <li><a href="login.php">login</a></li>
                                        <li><a href="signup.php">signup</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.php">shop</a></li>
                                <li><a href="cart-page.php">Cart Page</a></li>
                                <li>
                                    <a href="#0" class="active">More</a>
                                    <ul class="submenu">
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="partners.php">partners</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <?php if (!empty($_SESSION['Cust_ID'])): ?>
                                <a href="logout.php" class="signup"><i class="icofont-logout"></i> <span>Log Out</span></a>
                            <?php else: ?>
                                <a href="login.php" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                                <a href="signup.php" class="signup"><i class="icofont-users"></i> <span>SIGNUP</span></a>
                            <?php endif; ?>

                            <!-- toggle icons -->
                            <div class="header-bar d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="ellepsis-bar d-lg-none">
                                <i class="icofont-info-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>