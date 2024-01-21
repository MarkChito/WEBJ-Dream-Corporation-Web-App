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
            <div class="row">
                <div class="col-12">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="from_date">From Date:</label>
                            <input type="date" class="form-control" id="from_date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="to_date">To Date:</label>
                            <input type="date" class="form-control" id="to_date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="btn_filter_date" class="invisible">Filter Button:</label>
                            <button class="btn btn-primary btn-block" id="btn_filter_date">Filter</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table datatable_sales">
                                        <thead>
                                            <tr>
                                                <th>Tracking ID</th>
                                                <th>Transaction Date</th>
                                                <th>Customer Name</th>
                                                <th>Total Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody id="sales_body">
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
                                                <tr class="table-primary">
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>Total Sales</strong></td>
                                                    <td><strong>₱<?= number_format($this->model->MOD_GET_TOTAL_SALES()[0]->total_sales + ($this->model->MOD_GET_TOTAL_SALES()[0]->total_sales * 0.12), 2) ?></strong></td>
                                                </tr>
                                            <?php endif ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>