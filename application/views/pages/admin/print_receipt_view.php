<?php
$name = "Not Yet Available";
$address = "Not Yet Available";
$contact_number = "Not Yet Available";
$transaction_date = "Not Yet Available";
$tracking_id = $this->session->userdata("tracking_id");
$gross_amount = 0;

$my_orders = $this->model->MOD_GET_DELIVERY_ORDERS($tracking_id);

if ($my_orders) {
    $transaction_date = $my_orders[0]->transaction_date;
    $timestamp = strtotime($transaction_date);
    $transaction_date = date("F j, Y", $timestamp);

    $customer = $this->model->MOD_GET_CUSTOMER_BY_ID($my_orders[0]->customer_id);

    if ($customer) {
        $first_name = $customer[0]->first_name;
        $middle_name = $customer[0]->middle_name;
        $last_name = $customer[0]->last_name;

        if (!empty($middle_name)) {
            $middle_initial = $middle_name[0];

            $name = $first_name . ' ' . $middle_initial . '. ' . $last_name;
        } else {
            $name = $first_name . ' ' . $last_name;
        }

        $contact_number = $customer[0]->mobile_number;
        $address = $customer[0]->city;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>WEBJ Dream Corporation - Print Receipt</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>dist/images/favicon.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/admin-lte/css/adminlte.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/admin-lte/css/custom_styles.css">
</head>

<body>
    <div class="container mt-3">
        <div class="text-center">
            <p class="font-weight-bold mb-0">WEBJ Dream Corporation</p>
            <p class="mb-0">National Highway, Balagbag, Milaor, Camarines Sur</p>
            <p class="mb-0"><?= strtoupper($name) ?> - Prop</p>
            <p><?= $contact_number ?></p>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3">Delivery Receipt</h4>

                <div class="row">
                    <div class="col-2">
                        <p class="float-right">Customer Name</p>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-3">
                        <strong><?= strtoupper($first_name) ?></strong>
                    </div>
                    <div class="col-2">
                        <p class="float-right">Transaction Date</p>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-3">
                        <strong><?= $transaction_date ?></strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p class="float-right">Customer Address</p>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-3">
                        <strong><?= strtoupper($address) ?></strong>
                    </div>
                    <div class="col-2">
                        <p class="float-right">Tracking ID</p>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-3">
                        <strong><?= $tracking_id ?></strong>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <p class="float-right">Contact Number</p>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-3">
                        <strong><?= $contact_number ?></strong>
                    </div>
                    <div class="col-2">
                        <p class="float-right">Sales Rep.</p>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-3">
                        <strong>____________________</strong>
                    </div>
                </div>

                <table class="table table-bordered mb-5">
                    <thead>
                        <tr>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Particulars</th>
                            <th class="text-center">Unit Price</th>
                            <th class="text-center">Total Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($my_orders) :  ?>
                            <?php foreach ($my_orders as $my_order) : ?>
                                <?php $products = $this->model->MOD_GET_PRODUCT($my_order->item_id) ?>

                                <?php $gross_amount += $my_order->total_amount ?>

                                <tr>
                                    <td class="text-center"><?= $my_order->quantity ?></td>
                                    <td><?= $products[0]->name ?></td>
                                    <td class="text-right">₱<?= number_format($products[0]->price, 2) ?></td>
                                    <td class="text-right">₱<?= number_format($my_order->total_amount, 2) ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php endif  ?>
                    </tbody>
                </table>

                <table class="table table-bordered mb-5">
                    <tbody>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12 font-weight-bold">CONTAINER</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">DELIVERED</div>
                                            <div class="col-1">:</div>
                                            <div class="col-7">_________________________</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">RETURNED</div>
                                            <div class="col-1">:</div>
                                            <div class="col-7">_________________________</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">FOR DEPOSIT</div>
                                            <div class="col-1">:</div>
                                            <div class="col-7">_________________________</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">FOR DEDUCTION</div>
                                            <div class="col-1">:</div>
                                            <div class="col-7">_________________________</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">OTHERS</div>
                                            <div class="col-1">:</div>
                                            <div class="col-7">_________________________</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">&nbsp;</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">&nbsp;</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">&nbsp;</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="float-right">Gross Amount</span>
                                            </div>
                                            <div class="col-1">
                                                <span class="float-right">:</span>
                                            </div>
                                            <div class="col-5">
                                                <span class="float-right">₱<?= number_format($gross_amount, 2) ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="float-right">12% VAT</span>
                                            </div>
                                            <div class="col-1">
                                                <span class="float-right">:</span>
                                            </div>
                                            <div class="col-5">
                                                <span class="float-right">₱<?= number_format($gross_amount * 0.12, 2) ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="float-right">Invoice Total</span>
                                            </div>
                                            <div class="col-1">
                                                <span class="float-right">:</span>
                                            </div>
                                            <div class="col-5">
                                                <span class="float-right font-weight-bold">₱<?= number_format($gross_amount + ($gross_amount * 0.12), 2) ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <span class="font-weight-bold float-right">RECEIVED BY:</span>
                            </div>
                            <div class="col-6 under-line text-center">
                                <span class="font-weight-bold fill-width underline"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <span class="d-none">&nbsp;</span>
                            </div>
                            <div class="col-6 text-center">
                                <span>Print Name Over Signature</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="no-print">
            <span id="measurement">&nbsp;</span>
            <button type="button" class="btn btn-success float-right mb-3" id="btn_print_receipt"><i class="fas fa-print"></i>&nbsp;&nbsp;Print</button>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            check_screen_width();

            $(window).resize(function() {
                check_screen_width();
            })

            $("#btn_print_receipt").click(function() {
                window.print();
            })

            function check_screen_width() {
                var divWidth = $(".under-line").width();
                var nbspWidth = document.getElementById('measurement').offsetWidth;
                var numSpaces = Math.floor((divWidth / nbspWidth) - (nbspWidth * 4));

                $(".fill-width").html('&nbsp;'.repeat(numSpaces));
            }
        })
    </script>

    <?php $this->session->unset_userdata("tracking_id"); ?>
</body>

</html>