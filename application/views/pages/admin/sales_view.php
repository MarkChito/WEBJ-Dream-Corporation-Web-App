<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sales</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sales</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Table List Students -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover datatable">
                                <thead>
                                    <tr>
                                        <th>Tracking ID</th>
                                        <th>Transaction Date</th>
                                        <th>Customer Name</th>
                                        <th>Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sales = $this->model->MOD_GET_SALES() ?>
                                    <?php if ($sales) : ?>
                                        <?php foreach ($sales as $sale) : ?>
                                            <?php
                                            $customers = $this->model->MOD_GET_CUSTOMER_BY_ID($sale->customer_id);

                                            if (!empty($customers[0]->middle_name)) {
                                                $middle_initial = $customers[0]->middle_name[0];

                                                $name = $customers[0]->first_name . ' ' . $middle_initial . '. ' . $customers[0]->last_name;
                                            } else {
                                                $name = $customers[0]->first_name . ' ' . $customers[0]->last_name;
                                            }
                                            ?>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0)" class="view_delivery_order" is_view_only="true" tracking_id="<?= $sale->tracking_id ?>"><?= $sale->tracking_id ?></a>
                                                </td>
                                                <td><?= date("F j, Y g:i A", strtotime($sale->transaction_date)) ?></td>
                                                <td><?= $name ?></td>
                                                <td>₱<?= number_format($sale->total_amount + ($sale->total_amount * 0.12), 2) ?></td>
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
    </section>
</div>