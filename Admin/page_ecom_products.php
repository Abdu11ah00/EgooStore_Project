<?php 
$title ="sum";
include('./includes/header.php'); 
?>
    <body>


            <!-- Preloader -->
            <?php include('./includes/index_preloader.php'); ?>
            <!-- END Preloader -->


            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">


                <!-- Alternative Sidebar -->
                <?php include('./includes/index_alternative_sidebar.php'); ?>
                <!-- END Alternative Sidebar -->


                <!-- Main Sidebar -->
                <?php 
                $active= "products"; 
                include('./includes/index_main_sidebar.php');
                ?>
                <!-- END Main Sidebar -->


                <!-- Main Container -->
                <div id="main-container">


                    <!-- Header -->
                    <?php include('./includes/index_header.php');?>
                    <!-- END Header -->


                    <!-- Page content -->
                    <div id="page-content">
                        <!-- eCommerce Products Header -->
                        <div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li>
                                    <a href="page_ecom_dashboard.html"><i class="fa fa-bar-chart"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href="page_ecom_orders.html"><i class="gi gi-shop_window"></i> Orders</a>
                                </li>
                                <li>
                                    <a href="page_ecom_order_view.html"><i class="gi gi-shopping_cart"></i> Order View</a>
                                </li>
                                <li class="active">
                                    <a href="page_ecom_products.html"><i class="gi gi-shopping_bag"></i> Products</a>
                                </li>
                                <li>
                                    <a href="page_ecom_product_edit.html"><i class="gi gi-pencil"></i> Product Edit</a>
                                </li>
                                <li>
                                    <a href="page_ecom_customer_view.html"><i class="gi gi-user"></i> Customer View</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END eCommerce Products Header -->

                        <!-- Quick Stats -->
                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="page_ecom_product_edit.html" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Add New</strong> Product</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-danger">
                                        <h4 class="widget-content-light"><strong>Out of</strong> Stock</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-danger animation-expandOpen">71</span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>Top</strong> Sellers</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">20</span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>All</strong> Products</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">4.982</span></div>
                                </a>
                            </div>
                        </div>
                        <!-- END Quick Stats -->

                        <!-- All Products Block -->
                        <div class="block full">
                            <!-- All Products Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                </div>
                                <h2><strong>All</strong> Products</h2>
                            </div>
                            <!-- END All Products Title -->

                            <!-- All Products Content -->
                            <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 70px;">ID</th>
                                        <th>Product Name</th>
                                        <th class="text-right hidden-xs">Price</th>
                                        <th class="hidden-xs">Status</th>
                                        <th class="hidden-xs text-center">Added</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8799</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #99</a></td>
                                        <td class="text-right hidden-xs"><strong>$899,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (7)</span>
                                        </td>
                                        <td class="hidden-xs text-center">03/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8798</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #98</a></td>
                                        <td class="text-right hidden-xs"><strong>$1351,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (227)</span>
                                        </td>
                                        <td class="hidden-xs text-center">18/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8797</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #97</a></td>
                                        <td class="text-right hidden-xs"><strong>$618,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">21/08/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8796</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #96</a></td>
                                        <td class="text-right hidden-xs"><strong>$2250,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (152)</span>
                                        </td>
                                        <td class="hidden-xs text-center">02/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8795</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #95</a></td>
                                        <td class="text-right hidden-xs"><strong>$1137,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (249)</span>
                                        </td>
                                        <td class="hidden-xs text-center">12/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8794</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #94</a></td>
                                        <td class="text-right hidden-xs"><strong>$264,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">06/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8793</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #93</a></td>
                                        <td class="text-right hidden-xs"><strong>$360,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (122)</span>
                                        </td>
                                        <td class="hidden-xs text-center">16/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8792</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #92</a></td>
                                        <td class="text-right hidden-xs"><strong>$1285,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (41)</span>
                                        </td>
                                        <td class="hidden-xs text-center">05/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8791</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #91</a></td>
                                        <td class="text-right hidden-xs"><strong>$2152,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">16/08/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8790</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #90</a></td>
                                        <td class="text-right hidden-xs"><strong>$2241,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">01/03/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8789</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #89</a></td>
                                        <td class="text-right hidden-xs"><strong>$739,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (5)</span>
                                        </td>
                                        <td class="hidden-xs text-center">16/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8788</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #88</a></td>
                                        <td class="text-right hidden-xs"><strong>$564,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">06/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8787</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #87</a></td>
                                        <td class="text-right hidden-xs"><strong>$306,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">06/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8786</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #86</a></td>
                                        <td class="text-right hidden-xs"><strong>$25,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (44)</span>
                                        </td>
                                        <td class="hidden-xs text-center">09/03/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8785</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #85</a></td>
                                        <td class="text-right hidden-xs"><strong>$469,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (194)</span>
                                        </td>
                                        <td class="hidden-xs text-center">18/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8784</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #84</a></td>
                                        <td class="text-right hidden-xs"><strong>$2333,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (135)</span>
                                        </td>
                                        <td class="hidden-xs text-center">11/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8783</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #83</a></td>
                                        <td class="text-right hidden-xs"><strong>$1078,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">06/03/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8782</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #82</a></td>
                                        <td class="text-right hidden-xs"><strong>$1394,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">09/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8781</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #81</a></td>
                                        <td class="text-right hidden-xs"><strong>$42,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (166)</span>
                                        </td>
                                        <td class="hidden-xs text-center">22/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8780</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #80</a></td>
                                        <td class="text-right hidden-xs"><strong>$2016,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">06/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8779</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #79</a></td>
                                        <td class="text-right hidden-xs"><strong>$2469,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (86)</span>
                                        </td>
                                        <td class="hidden-xs text-center">01/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8778</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #78</a></td>
                                        <td class="text-right hidden-xs"><strong>$1027,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (240)</span>
                                        </td>
                                        <td class="hidden-xs text-center">13/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8777</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #77</a></td>
                                        <td class="text-right hidden-xs"><strong>$1741,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">26/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8776</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #76</a></td>
                                        <td class="text-right hidden-xs"><strong>$1461,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">14/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8775</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #75</a></td>
                                        <td class="text-right hidden-xs"><strong>$1428,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">16/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8774</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #74</a></td>
                                        <td class="text-right hidden-xs"><strong>$1874,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">25/09/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8773</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #73</a></td>
                                        <td class="text-right hidden-xs"><strong>$1792,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (218)</span>
                                        </td>
                                        <td class="hidden-xs text-center">11/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8772</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #72</a></td>
                                        <td class="text-right hidden-xs"><strong>$300,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (122)</span>
                                        </td>
                                        <td class="hidden-xs text-center">25/08/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8771</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #71</a></td>
                                        <td class="text-right hidden-xs"><strong>$1667,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">22/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8770</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #70</a></td>
                                        <td class="text-right hidden-xs"><strong>$1646,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (208)</span>
                                        </td>
                                        <td class="hidden-xs text-center">04/09/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8769</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #69</a></td>
                                        <td class="text-right hidden-xs"><strong>$1600,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (28)</span>
                                        </td>
                                        <td class="hidden-xs text-center">16/03/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8768</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #68</a></td>
                                        <td class="text-right hidden-xs"><strong>$758,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">18/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8767</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #67</a></td>
                                        <td class="text-right hidden-xs"><strong>$1011,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (194)</span>
                                        </td>
                                        <td class="hidden-xs text-center">17/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8766</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #66</a></td>
                                        <td class="text-right hidden-xs"><strong>$267,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (219)</span>
                                        </td>
                                        <td class="hidden-xs text-center">09/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8765</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #65</a></td>
                                        <td class="text-right hidden-xs"><strong>$240,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (201)</span>
                                        </td>
                                        <td class="hidden-xs text-center">02/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8764</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #64</a></td>
                                        <td class="text-right hidden-xs"><strong>$1216,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">27/03/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8763</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #63</a></td>
                                        <td class="text-right hidden-xs"><strong>$606,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (74)</span>
                                        </td>
                                        <td class="hidden-xs text-center">23/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8762</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #62</a></td>
                                        <td class="text-right hidden-xs"><strong>$199,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (243)</span>
                                        </td>
                                        <td class="hidden-xs text-center">28/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8761</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #61</a></td>
                                        <td class="text-right hidden-xs"><strong>$1503,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (106)</span>
                                        </td>
                                        <td class="hidden-xs text-center">12/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8760</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #60</a></td>
                                        <td class="text-right hidden-xs"><strong>$129,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (184)</span>
                                        </td>
                                        <td class="hidden-xs text-center">20/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8759</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #59</a></td>
                                        <td class="text-right hidden-xs"><strong>$658,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (106)</span>
                                        </td>
                                        <td class="hidden-xs text-center">06/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8758</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #58</a></td>
                                        <td class="text-right hidden-xs"><strong>$256,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (152)</span>
                                        </td>
                                        <td class="hidden-xs text-center">10/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8757</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #57</a></td>
                                        <td class="text-right hidden-xs"><strong>$1929,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (237)</span>
                                        </td>
                                        <td class="hidden-xs text-center">07/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8756</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #56</a></td>
                                        <td class="text-right hidden-xs"><strong>$765,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (95)</span>
                                        </td>
                                        <td class="hidden-xs text-center">09/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8755</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #55</a></td>
                                        <td class="text-right hidden-xs"><strong>$1672,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">11/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8754</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #54</a></td>
                                        <td class="text-right hidden-xs"><strong>$545,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">22/09/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8753</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #53</a></td>
                                        <td class="text-right hidden-xs"><strong>$32,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">06/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8752</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #52</a></td>
                                        <td class="text-right hidden-xs"><strong>$1294,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">25/09/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8751</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #51</a></td>
                                        <td class="text-right hidden-xs"><strong>$1777,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">17/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8750</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #50</a></td>
                                        <td class="text-right hidden-xs"><strong>$166,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (114)</span>
                                        </td>
                                        <td class="hidden-xs text-center">15/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8749</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #49</a></td>
                                        <td class="text-right hidden-xs"><strong>$1228,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (45)</span>
                                        </td>
                                        <td class="hidden-xs text-center">17/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8748</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #48</a></td>
                                        <td class="text-right hidden-xs"><strong>$524,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">07/09/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8747</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #47</a></td>
                                        <td class="text-right hidden-xs"><strong>$28,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (219)</span>
                                        </td>
                                        <td class="hidden-xs text-center">17/11/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8746</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #46</a></td>
                                        <td class="text-right hidden-xs"><strong>$1768,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">08/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8745</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #45</a></td>
                                        <td class="text-right hidden-xs"><strong>$2207,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">23/03/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8744</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #44</a></td>
                                        <td class="text-right hidden-xs"><strong>$1383,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (201)</span>
                                        </td>
                                        <td class="hidden-xs text-center">19/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8743</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #43</a></td>
                                        <td class="text-right hidden-xs"><strong>$1653,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (5)</span>
                                        </td>
                                        <td class="hidden-xs text-center">07/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8742</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #42</a></td>
                                        <td class="text-right hidden-xs"><strong>$326,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (108)</span>
                                        </td>
                                        <td class="hidden-xs text-center">19/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8741</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #41</a></td>
                                        <td class="text-right hidden-xs"><strong>$2456,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (162)</span>
                                        </td>
                                        <td class="hidden-xs text-center">28/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8740</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #40</a></td>
                                        <td class="text-right hidden-xs"><strong>$1932,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (189)</span>
                                        </td>
                                        <td class="hidden-xs text-center">25/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END All Products Content -->
                        </div>
                        <!-- END All Products Block -->
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
        <script>$(function(){ EcomProducts.init(); });</script>
    </body>
</html>