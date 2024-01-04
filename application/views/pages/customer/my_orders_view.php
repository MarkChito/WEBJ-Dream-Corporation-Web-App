<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Orders</h1>
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
                                            <th class="text-center"><input type="checkbox" id="checkAll"></th>
                                            <th>Order ID</th>
                                            <th>Tracking ID</th>
                                            <th>Transaction Date</th>
                                            <th>Product Name</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $my_orders = $this->model->MOD_GET_MY_ORDERS($this->session->userdata("id")) ?>

                                        <?php if ($my_orders) : ?>
                                            <?php foreach ($my_orders as $my_order) : ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php if ($my_order->status == "Cart") : ?>
                                                            <input type="checkbox" class="selected_item" order_id="<?= $my_order->id ?>">
                                                        <?php endif ?>
                                                    </td>
                                                    <td><a class="order_details" href="javascript:void(0)" data-toggle="modal" data-target="#view_order" order_id="<?= $my_order->id ?>">OR<?= str_pad($my_order->id, 5, '0', STR_PAD_LEFT); ?></a></td>
                                                    <td><?= $my_order->tracking_id ? $my_order->tracking_id : "Not Yet Available"  ?></td>
                                                    <td><?= date("F j, Y g:i A", strtotime($my_order->transaction_date)) ?></td>
                                                    <?php $product = $this->model->MOD_GET_PRODUCT($my_order->item_id) ?>

                                                    <td><?= $product[0]->name ?></td>
                                                    <td class="text-center"><?= $my_order->quantity ?></td>
                                                    <td class="text-center">₱<?= $my_order->total_amount ?></td>
                                                    <?php
                                                    $badge_color = "";

                                                    if ($my_order->status == "Cart") {
                                                        $badge_color = "primary";
                                                    }

                                                    if ($my_order->status == "To Ship") {
                                                        $badge_color = "success";
                                                    }

                                                    if ($my_order->status == "To Receive") {
                                                        $badge_color = "warning";
                                                    }

                                                    if ($my_order->status == "To Rate") {
                                                        $badge_color = "info";
                                                    }
                                                    ?>

                                                    <td class="text-center"><span class="badge badge-<?= $badge_color ?>"><?= $my_order->status ?></span></td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" class="update_order" order_id="<?= $my_order->id ?>"><i class="fas fa-pencil-alt text-success mr-1"></i></a>
                                                        <a href="javascript:void(0)" class="delete_order" order_id="<?= $my_order->id ?>"><i class="fas fa-trash-alt text-danger"></i></a>
                                                    </td>
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
        </div>
    </section>
</div>