<?php
session_start();

// Make sure you are logged in 
include('./includes/logged_in.php');
?>

<?php
$title = "sum";
include('./includes/header.php');
?>

<body>
    <?php
    //Connect to DB
    include './DB-CONFIG.php';
    $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
    if (!$con) {
        echo mysqli_connect_errno();
        exit;
    }

    //select the ad ID
    //edit.php?id=  => $_GET['id']
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $select = "SELECT * FROM `ad` WHERE `ad_ID` = '$id' LIMIT 1";
    $result = mysqli_query($con, $select);
    $row2 = mysqli_fetch_assoc($result);


    $error_fields = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Validation
        if (!(isset($_POST['add_ad']) && !empty($_POST['add_ad']))) {
            $error_fields[] = "ad";
        }

        //Escape any sepcial characters to avoid SQL Injection
        $ad = mysqli_escape_string($con, $_POST['add_ad']);
        $Admin_ID = $_SESSION['A_ID'];

        // If you want to publish the product or not
        if (!empty($_POST['add_public'])): // Display
            $add_public = 1;
        else: // Hidden
            $add_public = 0;
        endif;

        if (!$error_fields) {

            //Update the data
            $query = "UPDATE `ad` SET `ad_content` = '$ad', `ad_Published` = '$add_public', `FK_Admin_ID` = '$Admin_ID' WHERE `ad`.`ad_ID` = '$id';";
            if (mysqli_query($con, $query)) {
                header("Location: page_ecom_ad_add.php");
                exit;
            } else {
                //echo $query;
                echo mysqli_error($con);
            }
        }


        //Close the connection
        mysqli_close($con);
    }
    ?>


    <div id="page-wrapper">


        <!-- Preloader -->
        <?php include('./includes/index_preloader.php'); ?>
        <!-- END Preloader -->


        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">


            <!-- Alternative Sidebar -->
            <?php include('./includes/index_alternative_sidebar.php'); ?>
            <!-- END Alternative Sidebar -->


            <!-- Main Sidebar -->
            <?php
            $active = "NULL";
            include('./includes/index_main_sidebar.php');
            ?>
            <!-- END Main Sidebar -->


            <!-- Main Container -->
            <div id="main-container">


                <!-- Header -->
                <?php include('./includes/index_header.php'); ?>
                <!-- END Header -->


                <!-- Page content -->
                <div id="page-content">
                    <!-- Quick Stats -->
                    <div class="row text-left">
                        <a href="page_ecom_ad_add.php" class="btn btn-alt btn-lg btn-default"><i
                                class="gi gi-chevron-left"></i><strong> ad</strong> List</a><br><br>

                    </div>
                    <!-- END Quick Stats -->

                    <!-- ad add Content -->
                    <div class="row">

                        <div class="col-lg-6">
                            <!-- ad Data Block -->
                            <div class="block">
                                <!-- ad Data Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-plus-square"></i> <strong><b style="color: #32cd32 ">Add New</b>
                                            ad</strong> Data</h2>
                                </div>
                                <!-- END ad Data Title -->

                                <!-- ad Data Content -->
                                <form method="post" class="form-horizontal form-bordered">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">ad
                                                Content:</label>
                                            <div class="col-md-9">
                                                <textarea name="add_ad" class="form-control"
                                                    placeholder="Note: Write HTML code. "
                                                    rows="3"><?= (isset($_POST['add_ad'])) ? $_POST['add_ad'] : $row2['ad_content'] ?></textarea>
                                                <?php if (in_array("ad", $error_fields))
                                                    echo "* Please enter your ad"; ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Published?</label>
                                            <div class="col-md-9">
                                                <label class="switch switch-primary">
                                                    <input type="checkbox" name="add_public"
                                                        <?= (isset($_POST['add_public'])) ? 'checked' : '' ?>><span></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-floppy-o"></i> Save</button>
                                            <button type="reset" class="btn btn-sm btn-warning"><i
                                                    class="fa fa-repeat"></i> Reset</button>
                                            <input type="button" value="Cancel" class="btn btn-sm btn-danger"
                                                onclick="if(confirm('Action Cancel.\nClick OK to continue.')) window.location='page_ecom_ad_add.php';" />
                                        </div>
                                    </div>
                                </form>
                                <!-- END Meta Data Content -->
                            </div>
                            <!-- END Meta Data Block -->
                        </div>
                        <div class="col-lg-6">
                            <!-- All ad Block -->
                            <div class="block full">
                                <!-- All ad Title -->
                                <div class="block-title">
                                    <h2><strong>All</strong> ad</h2>
                                </div>
                                <!-- END All ad Title -->

                                <!-- All ad Content -->
                                <table id="ecom-ad" class="table table-bordered table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 70px;">ID</th>
                                            <th>ad Content</th>
                                            <th class="hidden-xs">Published?</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query_ad = "SELECT `ad_ID`, `ad_content`, `ad_Published`, `ad_Added`, `FK_Admin_ID`, admin_list.Admin_FName, admin_list.Admin_LName 
                                                        FROM `ad`, `admin_list` 
                                                            WHERE `FK_Admin_ID` = admin_list.Admin_ID AND `ad`.`ad_ID` = '$id';";
                                        $result_ad = mysqli_query($con, $query_ad);
                                        $row = mysqli_fetch_assoc($result_ad);
                                        ?>
                                        <tr>
                                            <td class="text-center"><strong style="color:#1bbae1;">adID.
                                                    <?= $row['ad_ID'] ?>
                                                </strong>
                                            </td>
                                            <td style="color:#1bbae1;">
                                                <?= $row['ad_content'] ?>
                                            </td>
                                            <td class="text-center hidden-xs">
                                                <span
                                                    class="label label-<?= ($row['ad_Published'] > 0) ? "primary" : "warning" ?>">
                                                    <?= ($row['ad_Published'] > 0) ? "Published" : "Hidden" ?>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-xs">
                                                    <button onclick="DeleteOrNot(<?= $row['ad_ID'] ?>)"
                                                        data-toggle="tooltip" title="Delete"
                                                        class="btn btn-xs btn-danger"><i
                                                            class="fa fa-times"></i></button>

                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        mysqli_free_result($result_ad);

                                        // Close the connection
                                        mysqli_close($con);
                                        ?>
                                    </tbody>
                                </table>
                                <!-- END All ad Content -->
                            </div>
                            <!-- END All ad Block -->
                        </div>

                    </div>
                    <!-- END ad add Content -->
                </div>
                <!-- END Page Content -->


                <!-- Footer -->
                <?php include('./includes/index_footer.php'); ?>
                <!-- END Footer -->


            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- ================ footer Section start Here =============== -->

    <?php include('./includes/footer.php'); ?>

    <!-- ================ footer Section end Here =============== -->

    <!-- Sends a notification that enables you to complete the deletion or cancellation process  -->
    <script>
        function DeleteOrNot(ID) {
            if (confirm('Action DELETE.\nClick OK to continue.'))
                window.location = 'page_ecom_ad_delete?id=' + ID;
        }
    </script>

    <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
    <script src="js/helpers/ckeditor/ckeditor.js"></script>
</body>

</html>