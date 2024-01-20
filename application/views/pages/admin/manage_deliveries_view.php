<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Deliveries</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Deliveries</li>
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
                                        <th>Customer Name</th>
                                        <th>Mobile Number</th>
                                        <th>Address</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $deliveries = $this->model->MOD_GET_DELIVERIES() ?>
                                    <?php if ($deliveries) : ?>
                                        <?php foreach ($deliveries as $delivery) : ?>
                                            <?php $orders = $this->model->MOD_GET_TRACKING_DATA($delivery->tracking_id) ?>

                                            <?php
                                            $customers = $this->model->MOD_GET_CUSTOMER_BY_ID($delivery->customer_id);

                                            if (!empty($customers[0]->middle_name)) {
                                                $middle_initial = $customers[0]->middle_name[0];

                                                $name = $customers[0]->first_name . ' ' . $middle_initial . '. ' . $customers[0]->last_name;
                                            } else {
                                                $name = $customers[0]->first_name . ' ' . $customers[0]->last_name;
                                            }

                                            $address_components = array();

                                            if (!empty($customers[0]->house_number)) {
                                                $address_components[] = $customers[0]->house_number;
                                            }

                                            if (!empty($customers[0]->subdivision_zone_purok)) {
                                                $address_components[] = $customers[0]->subdivision_zone_purok;
                                            }

                                            $address_components[] = $customers[0]->city;
                                            $address_components[] = $customers[0]->province;
                                            $address_components[] = $customers[0]->country;
                                            $address_components[] = $customers[0]->zip_code;

                                            $address = implode(', ', array_filter($address_components));
                                            ?>

                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0)" class="view_delivery_order" is_view_only="<?= $orders[0]->status != "Delivered" && $orders[0]->status != "Returned to Sender" ? "false" : "true" ?>" tracking_id="<?= $delivery->tracking_id ?>"><?= $delivery->tracking_id ?></a>
                                                </td>
                                                <td><?= $name ?></td>
                                                <td><?= $customers[0]->mobile_number ?></td>
                                                <td><?= $address ?></td>
                                                <td class="text-center">
                                                    <?php if ($orders[0]->status != "Delivered" && $orders[0]->status != "Returned to Sender") : ?>
                                                        <a href="javascript:void(0)" class="btn btn-success btn-sm view_delivery_order_set_status" tracking_id="<?= $delivery->tracking_id ?>">Set Status</a>
                                                    <?php else : ?>
                                                        <i class="fas fa-ellipsis-h text-muted"></i>
                                                    <?php endif ?>
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
    </section>
</div>