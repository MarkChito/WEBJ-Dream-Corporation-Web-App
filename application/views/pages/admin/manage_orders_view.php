<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Orders</li>
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
                                <?php $my_orders = $this->model->MOD_GET_PENDING_ORDERS() ?>

                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th class="text-center <?= $my_orders ? null : "d-none" ?>"><input type="checkbox" id="checkAll"></th>
                                            <th>Order ID</th>
                                            <th>Transaction Date</th>
                                            <th>Customer Name</th>
                                            <th>Product Name</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($my_orders) : ?>
                                            <?php foreach ($my_orders as $my_order) : ?>
                                                <?php $product = $this->model->MOD_GET_PRODUCT($my_order->item_id) ?>
                                                <?php $customer = $this->model->MOD_GET_ADMINISTRATOR_DATA($my_order->customer_id) ?>

                                                <tr>
                                                    <td class="text-center"><input type="checkbox" class="selected_item" data-order_id="<?= $my_order->id ?>"></td>
                                                    <td><a class="order_details" href="javascript:void(0)" data-toggle="modal" data-target="#view_order" order_id="<?= $my_order->id ?>">OR<?= str_pad($my_order->id, 5, '0', STR_PAD_LEFT); ?></a></td>
                                                    <td><?= date("F j, Y g:i A", strtotime($my_order->transaction_date)) ?></td>
                                                    <td><?= $customer[0]->name ?></td>
                                                    <td><?= $product[0]->name ?></td>
                                                    <td class="text-center"><?= $my_order->quantity ?></td>
                                                    <td class="text-center">₱<?= number_format($my_order->total_amount, 2) ?></td>
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
            <div class="row d-none" id="btn_approve_reject">
                <div class="col-12">
                    <button class="btn btn-danger float-right px-3 btn_approve_reject" is_approve="false">
                        <i class="fas fa-thumbs-down mr-1"></i>
                        Reject Order
                    </button>
                    <button class="btn btn-success float-right px-3 mr-2 btn_approve_reject" is_approve="true">
                        <i class="fas fa-thumbs-up mr-1"></i>
                        Approve Order
                    </button>
                </div>
            </div>
            <div class="row" style="background-color: transparent; height: 16px;"></div>
        </div>
    </section>
</div>