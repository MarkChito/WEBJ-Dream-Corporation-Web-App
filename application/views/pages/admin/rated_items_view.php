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
                                <table class="table table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Feedback</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $rated_items = $this->model->MOD_GET_RATED_ITEMS() ?>
                                        <?php if ($rated_items) : ?>
                                            <?php foreach ($rated_items as $rated_item) : ?>
                                                <?php $orders = $this->model->MOD_GET_ORDER_DETAILS($rated_item->order_id) ?>
                                                <?php $customers = $this->model->MOD_GET_ADMINISTRATOR_DATA($orders[0]->customer_id) ?>
                                                <tr>
                                                    <td><a class="order_details" href="javascript:void(0)" data-toggle="modal" data-target="#view_order" order_id="<?= $rated_item->order_id ?>">OR<?= str_pad($rated_item->order_id, 5, '0', STR_PAD_LEFT); ?></a></td>
                                                    <td><?= $customers[0]->name ?></td>
                                                    <td><?= $rated_item->feedback ?></td>
                                                    <td><span class="star"><?php echo str_repeat("&#9733;", intval($rated_item->rating)) ?></span></td>
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