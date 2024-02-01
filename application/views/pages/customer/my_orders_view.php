<?php
$category = $this->input->get("category");

if ($category == "current") {
    $category = "Current";

    $my_orders = $this->model->MOD_GET_CURRENT_ORDERS($this->session->userdata("id"));
} else if ($category == "to_rate") {
    $category = "To Rate";

    $my_orders = $this->model->MOD_GET_TO_RATE_ORDERS($this->session->userdata("id"));
} else if ($category == "completed") {
    $category = "Completed";

    $my_orders = $this->model->MOD_GET_COMPLETED_ORDERS($this->session->userdata("id"));
}

?>

<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">My Orders <?= $category && ($category != "Current") ? "- " . ucfirst($category) : null ?></h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>customer/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">My Orders</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <?php if ($category != "To Rate" && $category != "Completed") : ?>
                                                <th class="text-center"><input type="checkbox" id="checkAll"></th>
                                            <?php endif ?>
                                            <th>Order ID</th>
                                            <th>Tracking ID</th>
                                            <th>Transaction Date</th>
                                            <th>Product Name</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Status</th>
                                            <?php if ($category != "Completed") : ?>
                                                <th class="text-center">Action</th>
                                            <?php endif ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($my_orders) : ?>
                                            <?php foreach ($my_orders as $my_order) : ?>
                                                <tr>
                                                    <?php if ($category != "To Rate" && $category != "Completed") : ?>
                                                        <td class="text-center">
                                                            <?php if ($my_order->status == "Cart") : ?>
                                                                <input type="checkbox" class="selected_item" data-order_id="<?= $my_order->id ?>">
                                                            <?php else : ?>
                                                                <input type="checkbox" checked disabled>
                                                            <?php endif ?>
                                                        </td>
                                                    <?php endif ?>
                                                    <td><a class="order_details" href="javascript:void(0)" data-toggle="modal" data-target="#view_order" order_id="<?= $my_order->id ?>">OR<?= str_pad($my_order->id, 5, '0', STR_PAD_LEFT); ?></a></td>
                                                    <td><?= $my_order->tracking_id ? $my_order->tracking_id : "Not Yet Available"  ?></td>
                                                    <td><?= date("F j, Y g:i A", strtotime($my_order->transaction_date)) ?></td>
                                                    <?php $product = $this->model->MOD_GET_PRODUCT($my_order->item_id) ?>

                                                    <td><?= $product[0]->name ?></td>
                                                    <td class="text-center">
                                                        <?php if ($my_order->status == "Cart") : ?>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-default btn_subtract_item" order_id="<?= $my_order->id ?>" type="button">
                                                                        <span style="font-weight: bold;">&minus;</span>
                                                                    </button>
                                                                </div>
                                                                <input type="text" class="form-control text-center quantity" value="<?= $my_order->quantity ?>">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-default btn_add_item" order_id="<?= $my_order->id ?>" type="button">
                                                                        <span style="font-weight: bold;">&plus;</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="loading_2 d-none">
                                                                <div class="spinner-border spinner-border-sm text-primary"></div>
                                                            </div>
                                                        <?php else : ?>
                                                            <?= $my_order->quantity ?>
                                                        <?php endif ?>
                                                    </td>
                                                    <td class="text-center total_amount">₱<span class="total_amount_2"><?= $my_order->total_amount ?></span></td>
                                                    <?php
                                                    $badge_color = "";

                                                    if ($my_order->status == "Cart") {
                                                        $badge_color = "primary";
                                                    }

                                                    if ($my_order->status == "To Approve") {
                                                        $badge_color = "success";
                                                    }

                                                    if ($my_order->status == "To Receive") {
                                                        $badge_color = "warning";
                                                    }

                                                    if ($my_order->status == "To Rate") {
                                                        $badge_color = "info";
                                                    }

                                                    if ($my_order->status == "Rejected") {
                                                        $badge_color = "danger";
                                                    }

                                                    if ($my_order->status == "Completed") {
                                                        $badge_color = "secondary";
                                                    }
                                                    ?>

                                                    <td class="text-center"><span class="badge badge-<?= $badge_color ?>"><?= $my_order->status ?></span></td>
                                                    <?php if ($category != "Completed") : ?>
                                                        <td class="text-center">
                                                            <?php if ($my_order->status == "Cart") : ?>
                                                                <a title="Cancel Order" href="javascript:void(0)" class="delete_order" order_id="<?= $my_order->id ?>"><i class="fas fa-trash-alt text-danger"></i></a>
                                                            <?php elseif ($my_order->status == "To Approve") : ?>
                                                                <a title="Cancel Order" href="javascript:void(0)" class="delete_order" order_id="<?= $my_order->id ?>"><i class="fas fa-trash-alt text-danger"></i></a>
                                                            <?php elseif ($my_order->status == "To Rate") : ?>
                                                                <a title="Rate Order" href="javascript:void(0)" class="rate_order" order_id="<?= $my_order->id ?>" item_id="<?= $my_order->item_id ?>"><i class="fas fa-edit text-primary"></i></a>
                                                            <?php else : ?>
                                                                <i class="fas fa-ellipsis-h text-muted"></i>
                                                            <?php endif ?>
                                                        </td>
                                                    <?php endif ?>
                                                </tr>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-success float-right d-none px-3" id="btn_place_order">
                        <i class="fas fa-shopping-cart mr-1"></i>
                        Place Order
                    </button>
                </div>
            </div>
            <div class="row" style="background-color: transparent; height: 16px;"></div>
        </div>
    </section>
</div>