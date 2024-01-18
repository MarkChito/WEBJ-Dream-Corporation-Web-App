<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Customers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Customers</li>
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
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover datatable">
                                <thead>
                                    <tr>
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
                                                $useraccounts = $this->model->MOD_GET_ADMINISTRATOR_DATA($customer->useraccount_id);

                                                $name = $useraccounts[0]->name;

                                                $house_number = $customer->house_number;
                                                $subdivision_zone_purok = $customer->subdivision_zone_purok;
                                                $city = $customer->city;
                                                $province = $customer->province;
                                                $country = $customer->country;
                                                $zip_code = $customer->zip_code;

                                                $address = concatenateAddress($house_number, $subdivision_zone_purok, $city, $province, $country, $zip_code);
                                                ?>
                                                <td class="name">
                                                    <img title="Click to view image" style="cursor: pointer; width: 30px; height: 30px;" class="rounded-circle img-bordered-sm view_image mr-1" src="<?= base_url() ."dist/images/uploads/". $useraccounts[0]->image ?>" data-toggle="modal" data-target="#view_profile_picture">
                                                    <a href="javascript:void(0)" class="view_customer" is_update="false" useraccount_id="<?= $customer->useraccount_id ?>">
                                                        <?= $name ?>
                                                    </a>
                                                </td>
                                                <td><?= $customer->mobile_number ?></td>
                                                <td><?= $customer->email ?></td>
                                                <td><?= $address ?></td>
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