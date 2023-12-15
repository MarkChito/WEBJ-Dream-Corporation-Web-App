<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Suppliers</h1>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#new_supplier">
                        <i class="fas fa-plus"></i>
                        New Supplier
                    </button>
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
                                        <th class="d-none">ID</th>
                                        <th>Name</th>
                                        <th>Contact Person</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th class="d-none">House Number</th>
                                        <th class="d-none">Subdivision/Zone/Purok</th>
                                        <th class="d-none">City/Municipality</th>
                                        <th class="d-none">Province</th>
                                        <th class="d-none">Country</th>
                                        <th class="d-none">Zip Code</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $suppliers = $this->model->MOD_GET_SUPPLIERS() ?>
                                    <?php if ($suppliers) : ?>
                                        <?php foreach ($suppliers as $supplier) : ?>
                                            <tr>
                                                <td class="d-none id"><?= $supplier->id ?></td>
                                                <td class="name"><?= $supplier->name ?></td>
                                                <td class="contact_person"><?= $supplier->contact_person ?></td>
                                                <td class="email"><?= $supplier->email ?></td>
                                                <td class="mobile_number"><?= $supplier->mobile_number ?></td>
                                                <td class="d-none house_number"><?= $supplier->house_number ?></td>
                                                <td class="d-none subdivision_zone_purok"><?= $supplier->subdivision_zone_purok ?></td>
                                                <td class="d-none city"><?= $supplier->city ?></td>
                                                <td class="d-none province"><?= $supplier->province ?></td>
                                                <td class="d-none country"><?= $supplier->country ?></td>
                                                <td class="d-none zip_code"><?= $supplier->zip_code ?></td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" class="update_supplier"><i class="fas fa-pencil-alt text-success mr-1"></i></a>
                                                    <a href="javascript:void(0)" class="delete_supplier"><i class="fas fa-trash-alt text-danger"></i></a>
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