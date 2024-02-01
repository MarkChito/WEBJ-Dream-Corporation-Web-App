<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Inventory</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Inventory</li>
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
                                        <th class="d-none">ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Unit Price</th>
                                        <th>Cost Price</th>
                                        <th>Quantity</th>
                                        <th class="d-none">Category ID</th>
                                        <th class="d-none">Supplier ID</th>
                                        <th class="d-none">Image</th>
                                        <th class="text-center">Product Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $products = $this->model->MOD_GET_ALL_PRODUCTS() ?>
                                    <?php if ($products) : ?>
                                        <?php foreach ($products as $product) : ?>
                                            <tr>
                                                <td class="d-none id"><?= $product->id ?></td>
                                                <td class="name"><?= $product->name ?></td>
                                                <td class="description"><?= $product->description ?></td>
                                                <td class="price">₱<?= $product->price ?></td>
                                                <td class="cost_price">₱<?= $product->cost_price ?></td>
                                                <td class="quantity"><?= $product->quantity ?></td>
                                                <td class="d-none category_id"><?= $product->category_id ?></td>
                                                <td class="d-none supplier_id"><?= $product->supplier_id ?></td>
                                                <td class="d-none image"><?= $product->image ?></td>
                                                <td class="text-center">
                                                    <a title="View Product Information" href="javascript:void(0)" class="view_product"><i class="fas fa-eye text-primary"></i></a>
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