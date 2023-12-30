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
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>0</h3>

                            <p>My Cart</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="my_orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- To Ship -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>0</h3>

                            <p>To Ship</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <a href="my_orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- To Receive -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>0</h3>

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
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>0</h3>

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
                                                    <td><a href="#">OR9842</a></td>
                                                    <td>December 23, 2023 12:32 PM</td>
                                                    <td>Call of Duty IV</td>
                                                    <td>0</td>
                                                    <td>₱0.00</td>
                                                    <td><span class="badge badge-success">Shipped</span></td>
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