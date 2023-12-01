<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Categories</h1>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#new_category">
                        <i class="fas fa-plus"></i>
                        New Category
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
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $categories = $this->model->MOD_GET_PRODUCT_CATEGORIES() ?>
                                    <?php if ($categories): ?>
                                        <?php foreach ($categories as $category): ?>
                                            <tr>
                                                <td class="d-none id"><?= $category->id ?></td>
                                                <td class="name"><?= $category->name ?></td>
                                                <td class="description"><?= $category->description ?></td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" class="update_category"><i class="fas fa-pencil-alt text-success mr-1"></i></a>
                                                    <a href="javascript:void(0)" class="delete_category"><i class="fas fa-trash-alt text-danger"></i></a>
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