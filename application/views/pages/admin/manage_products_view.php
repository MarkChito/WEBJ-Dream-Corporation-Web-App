<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Products</h1>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#new_product">
                        <i class="fas fa-plus"></i>
                        New Product
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
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Cost Price</th>
                                        <th>Quantity</th>
                                        <th class="d-none">Category ID</th>
                                        <th class="d-none">Supplier ID</th>
                                        <th class="d-none">Image</th>
                                        <th class="text-center">Actions</th>
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
                                                <td class="price"><?= $product->price ?></td>
                                                <td class="cost_price"><?= $product->cost_price ?></td>
                                                <td class="quantity"><?= $product->quantity ?></td>
                                                <td class="d-none category_id"><?= $product->category_id ?></td>
                                                <td class="d-none supplier_id"><?= $product->supplier_id ?></td>
                                                <td class="d-none image"><?= $product->image ?></td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" class="update_product"><i class="fas fa-pencil-alt text-success mr-1"></i></a>
                                                    <a href="javascript:void(0)" class="delete_product"><i class="fas fa-trash-alt text-danger"></i></a>
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