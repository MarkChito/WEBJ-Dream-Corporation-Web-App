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
$unread_messages = $this->model->MOD_GET_UNREAD_MESSAGES();
$rate_orders = $this->model->MOD_GET_TO_RATE_ORDERS($this->session->userdata("id"));
$completed = $this->model->MOD_GET_COMPLETED_UNREAD_ORDERS($this->session->userdata("id"));

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

$menu_open = null;
$active = null;
$current_tab = $this->session->userdata("current_tab");

if ($current_tab == "admin/manage_orders" || $current_tab == "admin/manage_deliveries" || $current_tab == "admin/manage_products" || $current_tab == "admin/manage_categories" || $current_tab == "admin/manage_suppliers") {
    $menu_open = "menu-open";
    $active = "active";
}

$menu_open_customer = null;
$active_customer = null;

if ($current_tab == "customer/my_orders") {
    $menu_open_customer = "menu-open";
    $active_customer = "active";
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
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" role="button">
                        <i class="fas fa-cog"></i>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu">
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
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="<?= base_url() ?>" class="brand-link">
                <img src="<?= base_url() ?>dist/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">WEBJ Dream Corp.</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- User Panel -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>dist/images/uploads/<?= $image ? $image : "default_user_image.png" ?>" class="img-circle elevation-2" style="width: 35px; height: 35px;" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?= $this->session->userdata("user_type") == "customer" ? "profile" : "javascript:void(0)" ?>" class="d-block text-truncate"><?= $name ?></a>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search Tab" aria-label="Search" id="search_tab">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <?php if ($this->session->userdata("user_type") == "admin") : ?>
                            <!-- Dashboard Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/dashboard" class="nav-link <?= $this->session->userdata("current_tab") == "admin/dashboard" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                    <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Supply Chain Management -->
                            <li class="nav-item <?= $menu_open ?>">
                                <a href="javascript:void(0)" class="nav-link <?= $active ?>">
                                    <i class="nav-icon fas fa-sitemap"></i>
                                    <p>
                                        Supply Chain
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <!-- Manage Orders Tab -->
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>admin/manage_orders" class="nav-link <?= $this->session->userdata("current_tab") == "admin/manage_orders" ? "active" : null ?>">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>Orders</p>
                                            <div class="counter-badge badge badge-pill badge-danger float-right <?= $pending_orders ? null : "d-none" ?>" role="status"><?= count($pending_orders) ?></div>
                                            <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                        </a>
                                    </li>
                                    <!-- Manage Deliveries Tab -->
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>admin/manage_deliveries" class="nav-link <?= $this->session->userdata("current_tab") == "admin/manage_deliveries" ? "active" : null ?>">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>Deliveries</p>
                                            <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                            <div class="counter-badge badge badge-pill badge-danger float-right <?= $undelivered_items ? null : "d-none" ?>" role="status"><?= $undelivered_items ?></div>
                                        </a>
                                    </li>
                                    <!-- Manage Products Tab -->
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>admin/manage_products" class="nav-link <?= $this->session->userdata("current_tab") == "admin/manage_products" ? "active" : null ?>">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>Products</p>
                                            <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                        </a>
                                    </li>
                                    <!-- Manage Categories Tab -->
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>admin/manage_categories" class="nav-link <?= $this->session->userdata("current_tab") == "admin/manage_categories" ? "active" : null ?>">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>Categories</p>
                                            <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                        </a>
                                    </li>
                                    <!-- Manage Suppliers Tab -->
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>admin/manage_suppliers" class="nav-link <?= $this->session->userdata("current_tab") == "admin/manage_suppliers" ? "active" : null ?>">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>Suppliers</p>
                                            <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Messages Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/messages" class="nav-link <?= $this->session->userdata("current_tab") == "admin/messages" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-envelope"></i>
                                    <p>Messages</p>
                                    <div class="counter-badge badge badge-pill badge-danger float-right <?= $unread_messages ? null : "d-none" ?>" id="counter_unread_messages" role="status"><?= count($unread_messages) ?></div>
                                    <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Inventory Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/inventory" class="nav-link <?= $this->session->userdata("current_tab") == "admin/inventory" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-box-open"></i>
                                    <p>Inventory</p>
                                    <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Customers Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/customers" class="nav-link <?= $this->session->userdata("current_tab") == "admin/customers" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>Customers</p>
                                    <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Sales Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/sales" class="nav-link <?= $this->session->userdata("current_tab") == "admin/sales" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-chart-line"></i>
                                    <p>Sales</p>
                                    <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Rated Items Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/rated_items" class="nav-link <?= $this->session->userdata("current_tab") == "admin/rated_items" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-star"></i>
                                    <p>Rated Items</p>
                                    <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                        <?php else : ?>
                            <!-- Dashboard Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>customer/dashboard" class="nav-link <?= $this->session->userdata("current_tab") == "customer/dashboard" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                    <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- Shopping Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>products" class="nav-link <?= $this->session->userdata("current_tab") == "" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-shopping-cart"></i>
                                    <p>Shopping</p>
                                    <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                            <!-- My Orders -->
                            <li class="nav-item <?= $menu_open_customer ?>">
                                <a href="javascript:void(0)" class="nav-link <?= $active_customer ?>">
                                    <i class="nav-icon fas fa-sitemap"></i>
                                    <p>
                                        My Orders
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <!-- My Orders (Current) Tab -->
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>customer/my_orders?category=current" class="nav-link <?= $this->session->userdata("current_tab") == "customer/my_orders" && $this->input->get("category") == "current" ? "active" : null ?>">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>Current</p>
                                            <div class="counter-badge badge badge-pill badge-danger float-right <?= $my_orders ? null : "d-none" ?>"><?= count($my_orders) ?></div>
                                            <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                        </a>
                                    </li>
                                    <!-- My Orders (Completed) Tab -->
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?>customer/my_orders?category=to_rate" class="nav-link <?= $this->session->userdata("current_tab") == "customer/my_orders" && $this->input->get("category") == "to_rate" ? "active" : null ?>">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>To Rate</p>
                                            <div class="counter-badge badge badge-pill badge-danger float-right <?= $rate_orders ? null : "d-none" ?>"><?= count($rate_orders) ?></div>
                                            <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                        </a>
                                    </li>
                                    <!-- My Orders (Completed) Tab -->
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" id="btn_completed" class="nav-link <?= $this->session->userdata("current_tab") == "customer/my_orders" && $this->input->get("category") == "completed" ? "active" : null ?>">
                                            <i class="nav-icon far fa-circle"></i>
                                            <p>Completed</p>
                                            <div class="counter-badge badge badge-pill badge-danger float-right <?= $completed ? null : "d-none" ?>"><?= count($completed) ?></div>
                                            <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Track My Order Tab -->
                            <li class="nav-item">
                                <a href="<?= base_url() ?>customer/track_my_order" class="nav-link <?= $this->session->userdata("current_tab") == "customer/track_my_order" ? "active" : null ?>">
                                    <i class="nav-icon fas fa-shipping-fast"></i>
                                    <p>Track My Order</p>
                                    <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                                </a>
                            </li>
                        <?php endif ?>

                        <!-- Logout Tab -->
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link btn_logout">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                                <div class="spinner-border spinner-border-sm text-primary float-right d-none tab_spinner" role="status"></div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>