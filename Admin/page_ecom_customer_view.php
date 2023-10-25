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
            $active = "customer_view";
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
                    <!-- eCommerce Customer Header -->
                    <?php
                    $act = "Customer";
                    include('./includes/page_ecom_dashboard_header.php');
                    ?>
                    <!-- END eCommerce Customer Header -->

                    <!-- Datatables Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="fa fa-table"></i>Datatables<br><small>HTML tables can become fully dynamic
                                    with cool features!</small>
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Tables</li>
                        <li><a href="">Datatables</a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    <!-- Datatables Content -->
                    <div class="block full">
                        <div class="block-title">
                            <h2><strong>Datatables</strong> integration</h2>
                        </div>
                        <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the
                            Jquery Javascript library. It is a highly flexible tool, based upon the foundations of
                            progressive enhancement, which will add advanced interaction controls to any HTML table.
                            It is integrated with template's design and it offers many features such as on-the-fly
                            filtering and variable length pagination.</p>

                        <div class="table-responsive">
                            <table id="example-datatable" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center"><i class="gi gi-user"></i></th>
                                        <th>Client</th>
                                        <th>Email</th>
                                        <th>Subscription</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg"
                                                alt="avatar" class="img-circle"></td>
                                        <td><a href="javascript:void(0)">client1</a></td>
                                        <td>client1@company.com</td>
                                        <td><span class="label label-info">Business</span></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit"
                                                    class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete"
                                                    class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center"><img src="img/placeholders/avatars/avatar2.jpg"
                                                alt="avatar" class="img-circle"></td>
                                        <td><a href="javascript:void(0)">client2</a></td>
                                        <td>client2@company.com</td>
                                        <td><span class="label label-primary">Personal</span></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit"
                                                    class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete"
                                                    class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center"><img src="img/placeholders/avatars/avatar13.jpg"
                                                alt="avatar" class="img-circle"></td>
                                        <td><a href="javascript:void(0)">client6</a></td>
                                        <td>client6@company.com</td>
                                        <td><span class="label label-success">VIP</span></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit"
                                                    class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete"
                                                    class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center"><img src="img/placeholders/avatars/avatar8.jpg"
                                                alt="avatar" class="img-circle"></td>
                                        <td><a href="javascript:void(0)">client7</a></td>
                                        <td>client7@company.com</td>
                                        <td><span class="label label-warning">Trial</span></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit"
                                                    class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete"
                                                    class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Datatables Content -->




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

    <!-- Load and execute javascript code used only in this page -->
    <script src="js/pages/ecomProducts.js"></script>
    <script>$(function () { EcomProducts.init(); });</script>
</body>

</html>