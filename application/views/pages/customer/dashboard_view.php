<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- My Cart -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <?php $cart = $this->model->MOD_GET_ORDERS("Cart", $this->session->userdata("id")) ?>

                            <h3><?= count($cart) ?></h3>

                            <p>My Cart</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="my_orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- To Approve -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <?php $to_ship = $this->model->MOD_GET_ORDERS("To Approve", $this->session->userdata("id")) ?>

                            <h3><?= count($to_ship) ?></h3>

                            <p>To Approve</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <a href="my_orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- To Receive -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <?php $to_receive = $this->model->MOD_GET_ORDERS("To Receive", $this->session->userdata("id")) ?>

                            <h3><?= count($to_receive) ?></h3>

                            <p>To Receive</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <a href="my_orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Total Sales -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php $to_rate = $this->model->MOD_GET_ORDERS("To Rate", $this->session->userdata("id")) ?>

                            <h3><?= count($to_rate) ?></h3>

                            <p>To Rate</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="my_orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Latest Orders -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">My Orders</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Tracking ID</th>
                                            <th>Transaction Date</th>
                                            <th>Product Name</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $my_orders = $this->model->MOD_GET_MY_ORDERS($this->session->userdata("id")) ?>

                                        <?php if ($my_orders) : ?>
                                            <?php foreach ($my_orders as $my_order) : ?>
                                                <tr>
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

                                                    if ($my_order->status == "To Approve") {
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
                                                </tr>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="sales">View All Orders</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>