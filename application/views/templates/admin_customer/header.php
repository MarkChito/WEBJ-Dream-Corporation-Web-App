<?php
function isMobileDevice()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $mobileKeywords = array(
        'Android', 'iPhone', 'iPad', 'Windows Phone', 'Mobile Safari', 'BlackBerry', 'Opera Mini', 'Symbian', 'Kindle', 'Mobile'
    );

    foreach ($mobileKeywords as $keyword) {
        if (strpos($userAgent, $keyword) !== false) {
            return true;
        }
    }

    return false;
}

if ($this->session->userdata("user_type") == "admin" && isMobileDevice()) {
    header("location: no_access");

    exit;
}

$my_orders = $this->model->MOD_GET_ORDERS("Cart", $this->session->userdata("id"));
$pending_orders = $this->model->MOD_GET_PENDING_ORDERS();

$undelivered_items = 0;

$deliveries = $this->model->MOD_GET_DELIVERIES();

if ($deliveries) {
    foreach ($deliveries as $delivery) {
        $orders = $this->model->MOD_GET_TRACKING_DATA($delivery->tracking_id);

        if ($orders[0]->status != "Delivered" && $orders[0]->status != "Returned to Sender") {
            $undelivered_items++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>WEBJ Dream Corporation <?= $this->session->userdata("title") ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>dist/images/favicon.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/admin-lte/css/adminlte.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/admin-lte/css/custom_styles.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/daterangepicker/daterangepicker.css">
    <!-- Summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/summernote/summernote-bs4.min.css">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)" role="button" id="btn_pushmenu"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url() ?>dist/images/uploads/<?= $image ? $image : "default_user_image.png" ?>" class="rounded-circle img-bordered-sm" style="width: 32px; height: 32px" alt="">
                        &nbsp;<?= $name ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item btn_edit_login_account" href="javascript:void(0)" data-toggle="modal" data-target="#edit_login_account"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;Account</a>
                        <?php if ($this->session->userdata("user_type") == "customer") : ?>
                            <a class="dropdown-item" href="profile"><i class="fas fa-user-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Profile</a>
                        <?php endif ?>
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#about_the_developers_modal"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;Developers</a>
                        <a class="dropdown-item btn_logout" href="javascript:void(0)"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Log Out</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <div class="w-100 text-center pt-4 py-3">
                <img src="<?= base_url() ?>dist/images/logo.png" style="height: auto; width: 200px !important; padding-top: 10px" id="favicon">
            </div>

            <hr class="bg-light">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <?php if ($this->session->userdata("user_type") == "admin") : ?>
                            <!-- Dashboard Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/dashboard" class="nav-link <?= $this->session->userdata("current_tab") == "admin/dashboard" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-chart-bar"></i>
                                    <p>Dashboard</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Manage Orders Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/manage_orders" class="nav-link <?= $this->session->userdata("current_tab") == "admin/manage_orders" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-shopping-cart"></i>
                                    <p>Manage Orders</p>
                                    <div class="counter-badge badge badge-pill badge-danger float-right <?= $pending_orders ? null : "d-none" ?>" role="status"><?= count($pending_orders) ?></div>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Manage Products Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/manage_products" class="nav-link <?= $this->session->userdata("current_tab") == "admin/manage_products" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-cubes"></i>
                                    <p>Manage Products</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Manage Categories Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/manage_categories" class="nav-link <?= $this->session->userdata("current_tab") == "admin/manage_categories" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-folder-open"></i>
                                    <p>Manage Categories</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Manage Suppliers Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/manage_suppliers" class="nav-link <?= $this->session->userdata("current_tab") == "admin/manage_suppliers" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-truck"></i>
                                    <p>Manage Suppliers</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Customers Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/deliveries" class="nav-link <?= $this->session->userdata("current_tab") == "admin/deliveries" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-shipping-fast"></i>
                                    <p>Deliveries</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                    <div class="counter-badge badge badge-pill badge-danger float-right <?= $undelivered_items ? null : "d-none" ?>" role="status"><?= $undelivered_items ?></div>
                                </a>
                            </li>
                            <!-- Inventory Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/inventory" class="nav-link <?= $this->session->userdata("current_tab") == "admin/inventory" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-box-open"></i>
                                    <p>Inventory</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Customers Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/customers" class="nav-link <?= $this->session->userdata("current_tab") == "admin/customers" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>Customers</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Sales Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/sales" class="nav-link <?= $this->session->userdata("current_tab") == "admin/sales" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-chart-line"></i>
                                    <p>Sales</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                        <?php else : ?>
                            <!-- Dashboard Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>customer/dashboard" class="nav-link <?= $this->session->userdata("current_tab") == "customer/dashboard" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-chart-bar"></i>
                                    <p>Dashboard</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Shopping Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>" class="nav-link <?= $this->session->userdata("current_tab") == "" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-shopping-cart"></i>
                                    <p>Shopping</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- My Orders Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>customer/my_orders" class="nav-link <?= $this->session->userdata("current_tab") == "customer/my_orders" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-list-alt"></i>
                                    <p>My Orders</p>
                                    <div class="counter-badge badge badge-pill badge-danger float-right <?= $my_orders ? null : "d-none" ?>"><?= count($my_orders) ?></div>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Track My Order Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>customer/track_my_order" class="nav-link <?= $this->session->userdata("current_tab") == "customer/track_my_order" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-shipping-fast"></i>
                                    <p>Track My Order</p>
                                    <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                        <?php endif ?>

                        <!-- Logout Tab -->
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link btn_logout">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                                <div class="spinner-border spinner-border-sm text-success float-right d-none tab_spinner" role="status"></div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>