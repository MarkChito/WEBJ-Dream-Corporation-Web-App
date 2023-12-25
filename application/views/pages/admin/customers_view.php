<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Customers</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover datatable">
                                <thead>
                                    <tr>
                                        <th class="d-none">ID</th>
                                        <th class="d-none">User Account ID</th>
                                        <th class="d-none">First Name</th>
                                        <th class="d-none">Middle Name</th>
                                        <th class="d-none">Last Name</th>
                                        <th class="d-none">House Number</th>
                                        <th class="d-none">Subdivision/Zone/Purok</th>
                                        <th class="d-none">City</th>
                                        <th class="d-none">Province</th>
                                        <th class="d-none">Country</th>
                                        <th class="d-none">Zip Code</th>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $customers = $this->model->MOD_GET_ALL_CUSTOMERS() ?>
                                    <?php if ($customers) : ?>
                                        <?php
                                        function concatenateAddress($house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code)
                                        {
                                            $address = '';

                                            if (!empty($house_number)) {
                                                $address .= $house_number . ', ';
                                            }

                                            if (!empty($subdivision_zone_purok)) {
                                                $address .= $subdivision_zone_purok . ', ';
                                            }

                                            $address .= $city . ', ' . $province . ', ' . $country . ', ' . $zip_code;

                                            $address = rtrim(trim($address), ',');

                                            return $address;
                                        }
                                        ?>
                                        <?php foreach ($customers as $customer) : ?>
                                            <tr>
                                                <?php
                                                $first_name = $customer->first_name;
                                                $middle_name = $customer->middle_name;
                                                $last_name = $customer->last_name;

                                                $name = $first_name;

                                                if (!empty($middle_name)) {
                                                    $name .= " " . $middle_name[0]. ". ";
                                                }

                                                $name .= " " . $last_name;

                                                $house_number = $customer->house_number;
                                                $subdivision_zone_purok = $customer->subdivision_zone_purok;
                                                $city = $customer->city;
                                                $province = $customer->province;
                                                $country = $customer->country;
                                                $zip_code = $customer->zip_code;

                                                $address = concatenateAddress($house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code);
                                                ?>
                                                <td class="d-none id"><?= $customer->id ?></td>
                                                <td class="d-none useraccount_id"><?= $customer->useraccount_id ?></td>
                                                <td class="d-none first_name"><?= $customer->first_name ?></td>
                                                <td class="d-none middle_name"><?= $customer->middle_name ?></td>
                                                <td class="d-none last_name"><?= $customer->last_name ?></td>
                                                <td class="d-none house_number"><?= $customer->house_number ?></td>
                                                <td class="d-none subdivision_zone_purok"><?= $customer->subdivision_zone_purok ?></td>
                                                <td class="d-none city"><?= $customer->city ?></td>
                                                <td class="d-none province"><?= $customer->province ?></td>
                                                <td class="d-none country"><?= $customer->country ?></td>
                                                <td class="d-none zip_code"><?= $customer->zip_code ?></td>
                                                <td class="name"><?= $name ?></td>
                                                <td class="mobile_number"><?= $customer->mobile_number ?></td>
                                                <td class="email"><?= $customer->email ?></td>
                                                <td class="address"><?= $address ?></td>
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