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
                <!-- New Orders -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>0</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="manage_orders" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- All Products -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= count($this->model->MOD_GET_ALL_PRODUCTS()) ?></h3>

                            <p>All Products</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <a href="manage_products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Registered Customers -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= count($this->model->MOD_GET_ALL_CUSTOMERS()) ?></h3>

                            <p>Customers</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="customers" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Total Sales -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>0</h3>

                            <p>Total Sales</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <a href="sales" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Latest Orders -->
                <div class="col-lg-7 col-12">
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Latest Orders</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center"><span class="badge badge-success">Shipped</span></td>
                                        </tr> -->
                                        <tr>
                                            <td colspan="4" class="text-center text-muted">
                                                <h1 class="py-3">No Recent Orders</h1>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="sales">View All Orders</a>
                        </div>
                    </div>
                </div>
                <!-- Latest Registered Customers -->
                <div class="col-lg-5 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Latest Registered Customers</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="users-list clearfix">
                                <?php $customers = $this->model->MOD_GET_CUSTOMERS() ?>
                                <?php if ($customers) : ?>
                                    <?php foreach ($customers as $customer) : ?>
                                        <?php $customers_useraccount = $this->model->MOD_GET_ADMINISTRATOR_DATA($customer->useraccount_id) ?>
                                        <li>
                                            <img class="rounded-circle img-bordered-sm view_image" data-toggle="modal" data-target="#view_profile_picture" style="cursor: pointer; width: 91.75px; height: 91.75px;" src="<?= base_url() ?>dist/images/uploads/<?= $customers_useraccount[0]->image ?>" alt="User profile picture">
                                            <a class="users-list-name view_customer" href="javascript:void(0)" is_update="false" useraccount_id="<?= $customer->useraccount_id ?>"><?= $customer->first_name . " " . $customer->last_name[0] . "." ?></a>
                                            <?php
                                            $dateToCompare = $customer->date_registered;

                                            $now = new DateTime();
                                            $providedDate = new DateTime($dateToCompare);
                                            $interval = $now->diff($providedDate);

                                            $yearsDifference = $interval->y;
                                            $monthsDifference = $interval->m;
                                            $daysDifference = $interval->d;
                                            $date_interval = null;

                                            if ($yearsDifference > 0) {
                                                $date_interval = $yearsDifference . ($yearsDifference === 1 ? " year ago" : " years ago");
                                            } elseif ($monthsDifference > 0) {
                                                $date_interval = $monthsDifference . ($monthsDifference === 1 ? " month ago" : " months ago");
                                            } elseif ($daysDifference === 0) {
                                                $date_interval = "Today";
                                            } elseif ($daysDifference === 1) {
                                                $date_interval = "Yesterday";
                                            } else {
                                                $date_interval = $daysDifference . " days ago";
                                            }
                                            ?>

                                            <span class="users-list-date"><?= $date_interval ?></span>
                                        </li>
                                    <?php endforeach ?>
                                <?php else : ?>
                                    <div class="text-center text-muted">
                                        <h1 class="py-3">No Recent Customers</h1>
                                    </div>
                                <?php endif ?>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="customers">View All Customers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>