<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Egoo-Store signup</title>
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
    <script>
        $('.datepicker').datepicker({
            weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            showMonthsShort: true
        })
    </script>
    <?php
    session_start();

    $error_fields = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        //Validation
        if (!(isset($_POST['F_Name']) && !empty($_POST['F_Name']))) {
            $error_fields[] = "F_Name";
        }
        if (!(isset($_POST['login_email']) && filter_input(INPUT_POST, 'login_email', FILTER_VALIDATE_EMAIL))) {
            $error_fields[] = "email";
        }
        if (!(isset($_POST['birthday']) && !empty($_POST['birthday']))) {
            $error_fields[] = "birthday";
        }
        if (!(isset($_POST['login_password']) && strlen($_POST['login_password']) > 5)) {
            $error_fields[] = "Password";
        }

        $img_file = $_FILES["avatar"];
        $img_name = $img_file['name'];

        // Set allowed files Extensions
        $allowed_extensions = array('jpg', 'gif', 'jpeg', 'png');
        //Get files Extension
        $tmp = explode('.', $img_name);
        $image_extension = strtolower(end($tmp));



        // Check file is uploaded
        if ($_FILES["avatar"]['error'] == 4) {
            $error_fields[] = "empty";
        } else {
            // Check fils size
            if ($_FILES["avatar"]['size'] > 800000) {
                $error_fields[] = "file_size";
            }
            // Check if File is valid
            if (!in_array($image_extension, $allowed_extensions)) {
                $error_fields[] = "not_valid";
            }

        }

        //Connect to DB
        if (!$error_fields) {
            include './DB-CONFIG.php';
            $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
            if (!$con) {
                echo mysqli_connect_errno();
                exit;
            }


            //Escape any sepcial characters to avoid SQL Injection
            // trim to deal with the unneeded white lift and right spaces 
            $C_FName = mysqli_escape_string($con, $_POST['F_Name']);
            $C_LName = mysqli_escape_string($con, $_POST['L_Name']);
            $C_birthday = mysqli_escape_string($con, $_POST['birthday']);
            $C_Email = mysqli_escape_string($con, trim($_POST['login_email']));
            $C_Password = password_hash(trim($_POST['login_password']), PASSWORD_DEFAULT);

            $uploads_dir = $_SERVER['DOCUMENT_ROOT'] . '\EgooStose_Project\Store\assets\images\clients\\';
            $avatar = '';
            if ($_FILES["avatar"]['error'] == UPLOAD_ERR_OK) {
                // Get Random Number For File
                $img_random_no = rand(0, 10000000000) . '.' . $image_extension;
                $tmp_name = $_FILES["avatar"]["tmp_name"];
                $avatar = basename($_FILES["avatar"]["name"]);
                $new_img_name = $C_Email . $avatar . $img_random_no;
                move_uploaded_file($tmp_name, "$uploads_dir/$new_img_name");
            } else {
                echo "File can't be uploaded";
                exit;
            }

            //Insert the data
            $query = "INSERT INTO `customer` (`Cust_ID`, `Cust_FName`, `Cust_LName`, `Cust_BirthDate`, `Cust_Email`, `Cust_PSW`, `Cust_Img`, `Cust_Register`)
                                VALUES (NULL, '$C_FName', '$C_LName', '$C_birthday', '$C_Email', '$C_Password', '$new_img_name', CURRENT_TIMESTAMP);";
            if (mysqli_query($con, $query)) {
                header("Location: index.php");
                exit;
            } else {
                //echo $query;
                echo mysqli_error($con);
            }

            //Close the connection
            mysqli_close($con);

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



    <!-- ===========Banner Section start Here========== -->
    <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
        <div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">Registration Page</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration</li>
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
                <h3 class="title">Register Now</h3>
                <form action="#" method="POST" class="account-form" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" placeholder="First Name" name="F_Name"
                            value="<?= (isset($_POST['F_Name'])) ? $_POST['F_Name'] : '' ?>">
                        <?php if (in_array("F_Name", $error_fields))
                            echo "<span class='text-danger'>
                            * Please enter Your First Name</span>"; ?>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Last Name" name="L_Name"
                            value="<?= (isset($_POST['F_Name'])) ? $_POST['F_Name'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your Email" name="login_email"
                            value="<?= (isset($_POST['login_email'])) ? $_POST['login_email'] : '' ?>">
                        <?php if (in_array("email", $error_fields))
                            echo "<span class='text-danger'>
                            * Please enter a valid email</span>"; ?>
                    </div>
                    <div class="form-group">
                        <input type="date" name="birthday">
                        <?php if (in_array("birthday", $error_fields))
                            echo "<span class='text-danger'>
                            * Please enter Your birthday</span>"; ?>
                    </div>
                    <div class="form-group">
                        <input type="file" name="avatar">
                        <?php if (in_array("empty", $error_fields)) {
                            echo "* No File Uploaded!";
                        } else {
                            if (in_array("file_size", $error_fields)) {
                                echo "* Please enter a file size not bigger then 6MB";
                            }
                            if (in_array("not_valid", $error_fields)) {
                                echo "* File is Not Valid";
                            }
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="login_password"
                            value="<?= (isset($_POST['login_password'])) ? $_POST['login_password'] : '' ?>">
                        <?php if (in_array("Password", $error_fields))
                            echo "<span class='text-danger'>
                            * Please enter a password not less then 6 characters</span>"; ?>
                    </div>
                    <div class="form-group">
                        <button class="d-block default-button"><span>Get Started Now</span></button>
                    </div>
                </form>


                <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="login.html">Login</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Register With Social Media</h5>
                    <ul class="match-social-list d-flex flex-wrap align-items-center justify-content-center mt-4">
                        <li><a href="#"><img src="assets/images/match/Snapchat.png" alt="Snapchat"></a></li>
                        <li><a href="#"><img src="assets/images/match/instagram.png" alt="instagram"></a></li>
                        <li><a href="#"><img src="assets/images/match/Whatsapp.png" alt="Whatsapp"></a></li>
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