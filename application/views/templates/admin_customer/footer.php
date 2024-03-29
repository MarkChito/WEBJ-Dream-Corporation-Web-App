    <!-- Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2024 <a href="<?= base_url() ?>">WEBJ Dream Corporation</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.5.0
        </div>
    </footer>

    <!-- Check Delete Status -->
    <div class="modal fade" id="check_delete_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="check_delete_status_title">Checking category items</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="loading text-center py-5">
                        <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                        <h5 class="text-muted">Please Wait...</h5>
                    </div>
                    <div class="error-message py-5 text-center d-none">
                        <h3 class="text-muted">This category is not empty!</h3>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- About the Developers Modal-->
    <div class="modal fade" id="about_the_developers_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">WEBJ Dream Corporation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title text-muted text-bold"><i class="fas fa-bookmark"></i>&nbsp; System Developers</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <p><b>Natividad, Jesavel</b> - Leader</p>
                                    <p><b>Soltes, Maria Jessica</b> - Member</p>
                                    <p><b>Villarino, Lemy</b> - Member</p>
                                    <p><b>Balite, Keia</b> - Member</p>
                                </div>
                                <div class="col-3">
                                    <img class="img-fluid" src="<?= base_url() ?>dist/images/logo.png" alt="Logo">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-sm">
                            <strong>Copyright &copy; 2023 <a href="<?= base_url() ?>">WEBJ Dream Corporation</a>.</strong>
                            All rights reserved.
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Login Account Modal-->
    <div class="modal fade" id="edit_login_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Edit Login Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="actual-form d-none">
                    <form action="javascript:void(0)" id="edit_login_account_form">
                        <div class="modal-body">
                            <div class="text-center">
                                <img id="edit_login_account_image_display" class="rounded-circle img-bordered-sm" width="200" height="200" src="<?= base_url() ?>dist/images/uploads/default_user_image.png">
                            </div>
                            <div class="form-group mt-3">
                                <div class="input-group">
                                    <div class="custom-file" style="width: 400px;">
                                        <input type="file" class="custom-file-input" id="edit_login_account_image" accept=".jpg, .jpeg, .png">
                                        <label class="custom-file-label" for="edit_login_account_image" id="edit_login_account_image_label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-form-label" for="edit_login_account_name">Name</label>
                                <input type="text" class="form-control" id="edit_login_account_name" placeholder="Enter Name" required <?= $this->session->userdata("user_type") == "customer" ? "readonly" : null ?>>
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-form-label" for="edit_login_account_username">Username</label>
                                <input type="text" class="form-control" id="edit_login_account_username" placeholder="Enter Username" required>
                                <small class="text-danger d-none" id="error_edit_login_account_username">Username already exists</small>
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-form-label" for="edit_login_account_password">Password</label>
                                <input type="password" class="form-control" id="edit_login_account_password" placeholder="Password hidden for security">
                                <small class="text-danger" id="error_edit_login_account_password"></small>
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-form-label" for="edit_login_account_confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="edit_login_account_confirm_password" placeholder="Password hidden for security">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="edit_login_account_id">
                            <input type="hidden" id="edit_login_account_old_username">
                            <input type="hidden" id="edit_login_account_old_image">
                            <input type="hidden" id="edit_login_account_old_password">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="edit_login_account_submit">Update</button>
                        </div>
                    </form>
                </div>
                <div class="loading text-center py-5">
                    <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                    <h5 class="text-muted">Please Wait...</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- New Category Modal -->
    <div class="modal fade" id="new_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="new_category_form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="new_category_name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" id="new_category_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="new_category_description" class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea id="new_category_description" class="form-control" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="new_category_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Category Modal -->
    <div class="modal fade" id="update_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="update_category_form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="update_category_name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" id="update_category_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="update_category_description" class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea id="update_category_description" class="form-control" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="update_category_id">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update_category_submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- New Supplier Modal -->
    <div class="modal fade" id="new_supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Add New Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="new_supplier_form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_supplier_name" class="form-label">Supplier Name <span class="text-danger">*</span></label>
                                    <input type="text" id="new_supplier_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_supplier_contact_person" class="form-label">Contact Person <span class="text-danger">*</span></label>
                                    <input type="text" id="new_supplier_contact_person" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_supplier_email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" id="new_supplier_email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_supplier_mobile_number" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="number" id="new_supplier_mobile_number" class="form-control" required>
                                    <small class="text-danger d-none" id="error_new_supplier_mobile_number"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="new_supplier_house_number" class="form-label">House Number</label>
                                    <input type="text" id="new_supplier_house_number" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="new_supplier_subdivision_zone_purok" class="form-label">Subdivision/Zone/Purok</label>
                                    <input type="text" id="new_supplier_subdivision_zone_purok" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="new_supplier_city" class="form-label">City/Municipality <span class="text-danger">*</span></label>
                                    <select class="custom-select" id="new_supplier_city" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Baao">Baao</option>
                                        <option value="Balatan">Balatan</option>
                                        <option value="Bato">Bato</option>
                                        <option value="Bombon">Bombon</option>
                                        <option value="Buhi">Buhi</option>
                                        <option value="Bula">Bula</option>
                                        <option value="Cabusao">Cabusao</option>
                                        <option value="Calabanga">Calabanga</option>
                                        <option value="Camaligan">Camaligan</option>
                                        <option value="Canaman">Canaman</option>
                                        <option value="Caramoan">Caramoan</option>
                                        <option value="Del Gallego">Del Gallego</option>
                                        <option value="Gainza">Gainza</option>
                                        <option value="Garchitorena">Garchitorena</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Iriga City">Iriga City</option>
                                        <option value="Lagonoy">Lagonoy</option>
                                        <option value="Libmanan">Libmanan</option>
                                        <option value="Lupi">Lupi</option>
                                        <option value="Magarao">Magarao</option>
                                        <option value="Milaor">Milaor</option>
                                        <option value="Minalabac">Minalabac</option>
                                        <option value="Nabua">Nabua</option>
                                        <option value="Naga City">Naga City</option>
                                        <option value="Ocampo">Ocampo</option>
                                        <option value="Pamplona">Pamplona</option>
                                        <option value="Pasacao">Pasacao</option>
                                        <option value="Pili">Pili</option>
                                        <option value="Presentacion">Presentacion</option>
                                        <option value="Ragay">Ragay</option>
                                        <option value="Sagnay">Sagnay</option>
                                        <option value="San Fernando">San Fernando</option>
                                        <option value="San Jose">San Jose</option>
                                        <option value="Sipocot">Sipocot</option>
                                        <option value="Siruma">Siruma</option>
                                        <option value="Tigaon">Tigaon</option>
                                        <option value="Tinambac">Tinambac</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="new_supplier_province" class="form-label">Province <span class="text-danger">*</span></label>
                                    <select class="custom-select" id="new_supplier_province" required disabled>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Camarines Sur">Camarines Sur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="new_supplier_country" class="form-label">Country <span class="text-danger">*</span></label>
                                    <select class="custom-select" id="new_supplier_country" required disabled>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Philippines">Philippines</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="new_supplier_zip_code" class="form-label">Zip Code <span class="text-danger">*</span></label>
                                    <input type="number" id="new_supplier_zip_code" class="form-control" disabled required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="new_supplier_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Supplier Modal -->
    <div class="modal fade" id="update_supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Update Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="update_supplier_form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="update_supplier_name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" id="update_supplier_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="update_supplier_contact_person" class="form-label">Contact Person <span class="text-danger">*</span></label>
                                    <input type="text" id="update_supplier_contact_person" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="update_supplier_email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" id="update_supplier_email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="update_supplier_mobile_number" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="number" id="update_supplier_mobile_number" class="form-control" required>
                                    <small class="text-danger d-none" id="error_update_supplier_mobile_number"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="update_supplier_house_number" class="form-label">House Number</label>
                                    <input type="text" id="update_supplier_house_number" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="update_supplier_subdivision_zone_purok" class="form-label">Subdivision/Zone/Purok</label>
                                    <input type="text" id="update_supplier_subdivision_zone_purok" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="update_supplier_city" class="form-label">City/Municipality <span class="text-danger">*</span></label>
                                    <select class="custom-select" id="update_supplier_city" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Baao">Baao</option>
                                        <option value="Balatan">Balatan</option>
                                        <option value="Bato">Bato</option>
                                        <option value="Bombon">Bombon</option>
                                        <option value="Buhi">Buhi</option>
                                        <option value="Bula">Bula</option>
                                        <option value="Cabusao">Cabusao</option>
                                        <option value="Calabanga">Calabanga</option>
                                        <option value="Camaligan">Camaligan</option>
                                        <option value="Canaman">Canaman</option>
                                        <option value="Caramoan">Caramoan</option>
                                        <option value="Del Gallego">Del Gallego</option>
                                        <option value="Gainza">Gainza</option>
                                        <option value="Garchitorena">Garchitorena</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Iriga City">Iriga City</option>
                                        <option value="Lagonoy">Lagonoy</option>
                                        <option value="Libmanan">Libmanan</option>
                                        <option value="Lupi">Lupi</option>
                                        <option value="Magarao">Magarao</option>
                                        <option value="Milaor">Milaor</option>
                                        <option value="Minalabac">Minalabac</option>
                                        <option value="Nabua">Nabua</option>
                                        <option value="Naga City">Naga City</option>
                                        <option value="Ocampo">Ocampo</option>
                                        <option value="Pamplona">Pamplona</option>
                                        <option value="Pasacao">Pasacao</option>
                                        <option value="Pili">Pili</option>
                                        <option value="Presentacion">Presentacion</option>
                                        <option value="Ragay">Ragay</option>
                                        <option value="Sagnay">Sagnay</option>
                                        <option value="San Fernando">San Fernando</option>
                                        <option value="San Jose">San Jose</option>
                                        <option value="Sipocot">Sipocot</option>
                                        <option value="Siruma">Siruma</option>
                                        <option value="Tigaon">Tigaon</option>
                                        <option value="Tinambac">Tinambac</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="update_supplier_province" class="form-label">Province <span class="text-danger">*</span></label>
                                    <select class="custom-select" id="update_supplier_province" required disabled>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Camarines Sur">Camarines Sur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="update_supplier_country" class="form-label">Country <span class="text-danger">*</span></label>
                                    <select class="custom-select" id="update_supplier_country" required disabled>
                                        <option value="" selected disabled>Choose...</option>
                                        <option value="Philippines">Philippines</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="update_supplier_zip_code" class="form-label">Zip Code <span class="text-danger">*</span></label>
                                    <input type="number" id="update_supplier_zip_code" class="form-control" disabled required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="update_supplier_id">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update_supplier_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- New Product Modal -->
    <div class="modal fade" id="new_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="new_product_form">
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="new_product_image_display" class="rounded-circle img-bordered-sm" width="200" height="200" src="<?= base_url() ?>dist/images/uploads/default_user_image.png">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="custom-file" style="width: 400px;">
                                    <input type="file" class="custom-file-input" id="new_product_image" accept=".jpg, .jpeg, .png">
                                    <label class="custom-file-label" for="new_product_image" id="new_product_image_label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="new_product_name" class="form-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" id="new_product_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_product_category_id" class="form-label">Category <span class="text-danger">*</span></label>
                                    <select id="new_product_category_id" class="custom-select">
                                        <option value selected disabled>Choose...</option>
                                        <?php $categories = $this->model->MOD_GET_PRODUCT_CATEGORIES() ?>
                                        <?php if ($categories) : ?>
                                            <?php foreach ($categories as $category) : ?>
                                                <option value="<?= $category->id ?>"><?= $category->name ?></option>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_product_supplier_id" class="form-label">Supplier <span class="text-danger">*</span></label>
                                    <select id="new_product_supplier_id" class="custom-select">
                                        <option value selected disabled>Choose...</option>
                                        <?php $suppliers = $this->model->MOD_GET_SUPPLIERS() ?>
                                        <?php if ($suppliers) : ?>
                                            <?php foreach ($suppliers as $supplier) : ?>
                                                <option value="<?= $supplier->id ?>"><?= $supplier->name ?></option>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="new_product_price" class="form-label">Unit Price <span class="text-danger">*</span></label>
                                    <input type="number" step="any" id="new_product_price" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="new_product_cost_price" class="form-label">Cost Price <span class="text-danger">*</span></label>
                                    <input type="number" step="any" id="new_product_cost_price" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="new_product_quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                                    <input type="number" id="new_product_quantity" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="new_product_description" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea id="new_product_description" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="new_product_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Product Modal -->
    <div class="modal fade" id="update_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Update Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="update_product_form">
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="update_product_image_display" class="rounded-circle img-bordered-sm" width="200" height="200" src="<?= base_url() ?>dist/images/uploads/default_user_image.png">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="custom-file" style="width: 400px;">
                                    <input type="file" class="custom-file-input" id="update_product_image" accept=".jpg, .jpeg, .png">
                                    <label class="custom-file-label" for="update_product_image" id="update_product_image_label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="update_product_name" class="form-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" id="update_product_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="update_product_category_id" class="form-label">Category <span class="text-danger">*</span></label>
                                    <select id="update_product_category_id" class="custom-select">
                                        <option value selected disabled>Choose...</option>
                                        <?php $categories = $this->model->MOD_GET_PRODUCT_CATEGORIES() ?>
                                        <?php if ($categories) : ?>
                                            <?php foreach ($categories as $category) : ?>
                                                <option value="<?= $category->id ?>"><?= $category->name ?></option>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="update_product_supplier_id" class="form-label">Supplier <span class="text-danger">*</span></label>
                                    <select id="update_product_supplier_id" class="custom-select">
                                        <option value selected disabled>Choose...</option>
                                        <?php $suppliers = $this->model->MOD_GET_SUPPLIERS() ?>
                                        <?php if ($suppliers) : ?>
                                            <?php foreach ($suppliers as $supplier) : ?>
                                                <option value="<?= $supplier->id ?>"><?= $supplier->name ?></option>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="update_product_price" class="form-label">Unit Price <span class="text-danger">*</span></label>
                                    <input type="number" step="any" id="update_product_price" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="update_product_cost_price" class="form-label">Cost Price <span class="text-danger">*</span></label>
                                    <input type="number" step="any" id="update_product_cost_price" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="update_product_quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                                    <input type="number" id="update_product_quantity" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="update_product_description" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea id="update_product_description" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="update_product_id">
                        <input type="hidden" id="update_product_old_image">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update_product_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Customer Details Modal -->
    <div class="modal fade" id="customer_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="customer_details_title">Customer Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="actual-form d-none">
                    <form action="javascript:void(0)" id="customer_details_form">
                        <div class="modal-body">
                            <div class="text-center">
                                <img id="customer_details_image_display" class="rounded-circle img-bordered-sm" width="200" height="200" src="<?= base_url() ?>dist/images/uploads/default_user_image.png">
                            </div>
                            <div class="form-group mt-3"></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_details_first_name" class="form-label">First Name <span class="text-danger required d-none">*</span></label>
                                        <input type="text" id="customer_details_first_name" class="form-control" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_details_middle_name" class="form-label">Middle Name <span class="text-danger required d-none">*</span></label>
                                        <input type="text" id="customer_details_middle_name" class="form-control" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_details_last_name" class="form-label">Last Name <span class="text-danger required d-none">*</span></label>
                                        <input type="text" id="customer_details_last_name" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_details_mobile_number" class="form-label">Mobile Number <span class="text-danger required d-none">*</span></label>
                                        <input type="number" id="customer_details_mobile_number" class="form-control" required readonly>
                                        <small class="text-danger d-none" id="error_customer_details_mobile_number"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_details_email" class="form-label">Email <span class="text-danger required d-none">*</span></label>
                                        <input type="email" id="customer_details_email" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_details_house_number" class="form-label">House Number <span class="text-danger required d-none">*</span></label>
                                        <input type="number" id="customer_details_house_number" class="form-control" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_details_subdivision_zone_purok" class="form-label">Subdivision/Zone/Purok <span class="text-danger required d-none">*</span></label>
                                        <input type="text" id="customer_details_subdivision_zone_purok" class="form-control" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_details_city" class="form-label">City/Municipality <span class="text-danger required d-none">*</span></label>
                                        <select class="custom-select" id="customer_details_city" required disabled>
                                            <option value="" selected="" disabled="">Choose...</option>
                                            <option value="Baao">Baao</option>
                                            <option value="Balatan">Balatan</option>
                                            <option value="Bato">Bato</option>
                                            <option value="Bombon">Bombon</option>
                                            <option value="Buhi">Buhi</option>
                                            <option value="Bula">Bula</option>
                                            <option value="Cabusao">Cabusao</option>
                                            <option value="Calabanga">Calabanga</option>
                                            <option value="Camaligan">Camaligan</option>
                                            <option value="Canaman">Canaman</option>
                                            <option value="Caramoan">Caramoan</option>
                                            <option value="Del Gallego">Del Gallego</option>
                                            <option value="Gainza">Gainza</option>
                                            <option value="Garchitorena">Garchitorena</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Iriga City">Iriga City</option>
                                            <option value="Lagonoy">Lagonoy</option>
                                            <option value="Libmanan">Libmanan</option>
                                            <option value="Lupi">Lupi</option>
                                            <option value="Magarao">Magarao</option>
                                            <option value="Milaor">Milaor</option>
                                            <option value="Minalabac">Minalabac</option>
                                            <option value="Nabua">Nabua</option>
                                            <option value="Naga City">Naga City</option>
                                            <option value="Ocampo">Ocampo</option>
                                            <option value="Pamplona">Pamplona</option>
                                            <option value="Pasacao">Pasacao</option>
                                            <option value="Pili">Pili</option>
                                            <option value="Presentacion">Presentacion</option>
                                            <option value="Ragay">Ragay</option>
                                            <option value="Sagnay">Sagnay</option>
                                            <option value="San Fernando">San Fernando</option>
                                            <option value="San Jose">San Jose</option>
                                            <option value="Sipocot">Sipocot</option>
                                            <option value="Siruma">Siruma</option>
                                            <option value="Tigaon">Tigaon</option>
                                            <option value="Tinambac">Tinambac</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_details_province" class="form-label">Province <span class="text-danger required d-none">*</span></label>
                                        <select class="custom-select" id="customer_details_province" required disabled>
                                            <option value="" selected="" disabled="">Choose...</option>
                                            <option value="Camarines Sur">Camarines Sur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_details_country" class="form-label">Country <span class="text-danger required d-none">*</span></label>
                                        <select class="custom-select" id="customer_details_country" required disabled>
                                            <option value="" selected="" disabled="">Choose...</option>
                                            <option value="Philippines">Philippines</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_details_zip_code" class="form-label">Zip Code <span class="text-danger required d-none">*</span></label>
                                        <input type="email" id="customer_details_zip_code" class="form-control" required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="customer_details_useraccount_id">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary d-none" id="customer_details_submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="loading text-center py-5">
                    <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                    <h5 class="text-muted">Please Wait...</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- View Profile Picture Modal-->
    <div class="modal fade" id="view_profile_picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: transparent !important;">
                <img src="" id="proof_img_container" alt="" style="text-align: center; width: 100%">
            </div>
        </div>
    </div>

    <!-- View Order Modal -->
    <div class="modal fade" id="view_order" tabindex="-1" role="dialog" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewOrderModalLabel">View Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="actual-form d-none">
                        <div class="row">
                            <div class="col-md-5 d-flex align-items-center">
                                <div class="card">
                                    <div class="card-body">
                                        <img id="view_order_image" src="<?= base_url() ?>dist/images/uploads/1_1.png" class="img-fluid" alt="Product Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Order Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <p><strong>Order ID:</strong> <span id="view_order_id">123456</span></p>
                                        <p><strong>Tracking ID:</strong> <span id="view_order_tracking_id">123456</span></p>
                                        <p><strong>Transaction Date:</strong> <span id="view_order_transaction_date">January 1, 2024 12:02 AM</span></p>
                                        <p><strong>Product Name:</strong> <span id="view_order_product_name">Product Name</span></p>
                                        <p><strong>Quantity:</strong> <span id="view_order_quantity">0</span></p>
                                        <p><strong>Amount:</strong> ₱<span id="view_order_total_amount">0.00</span></p>
                                        <p><strong>Status:</strong> <span id="view_order_status">Cart</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loading text-center py-5">
                        <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                        <h5 class="text-muted">Please Wait...</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Order Modal -->
    <div class="modal fade" id="edit_order" tabindex="-1" role="dialog" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewOrderModalLabel">Edit Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="actual-form d-none">
                    <form action="javascript:void(0)" id="edit_order_form">
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-lg-7 col-6">
                                                    <p id="edit_order_name">Product Name</p>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <input type="text" class="form-control text-center" id="edit_order_quantity" style="height: 25px !important;">
                                                </div>
                                                <div class="col-lg-3 col-3">
                                                    <p class="float-right">₱<span id="edit_order_total_amount">0.00</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="edit_order_id">
                            <input type="hidden" id="edit_order_price">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="edit_order_submit">Update</button>
                        </div>
                    </form>
                </div>
                <div class="loading text-center py-5">
                    <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                    <h5 class="text-muted">Please Wait...</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Place Order Modal -->
    <div class="modal fade" id="place_order" tabindex="-1" role="dialog" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewOrderModalLabel">Place Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="actual-form d-none">
                    <form action="javascript:void(0)" id="place_order_form">
                        <div class="modal-body">
                            <h5 class="mb-3">Do you want to place these order/s?</h5>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <div class="row" id="place_order_row">
                                        <!-- Data from AJAX -->
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-9">
                                            <strong class="float-right">Gross Amount</strong>
                                        </div>
                                        <div class="col-3">
                                            <span class="float-right">₱<span id="place_order_subtotal">1234.00</span></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <strong class="float-right">12% VAT</strong>
                                        </div>
                                        <div class="col-3">
                                            <span class="float-right">₱<span id="place_order_tax">34.00</span></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <strong class="float-right">Total Amount</strong>
                                        </div>
                                        <div class="col-3">
                                            <span class="float-right font-weight-bold">₱<span id="place_order_total">1268.00</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger d-none" id="error_stock">*Some item/s have insufficient stock. Please edit your order/s first.</small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="place_order_submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="loading text-center py-5">
                    <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                    <h5 class="text-muted">Please Wait...</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Approve/Reject Order Modal -->
    <div class="modal fade" id="approve_reject_order" tabindex="-1" role="dialog" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewOrderModalLabel"><span class="approve_reject_status">Approve</span> Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="actual-form d-none">
                    <form action="javascript:void(0)" id="approve_reject_order_form">
                        <div class="modal-body">
                            <h5 class="mb-3">Do you want to <span class="approve_reject_status">Approve</span> these order/s?</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row" id="approve_reject_order_row">
                                        <!-- Data from AJAX -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="approve_reject_order_status">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="approve_reject_order_submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="loading text-center py-5">
                    <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                    <h5 class="text-muted">Please Wait...</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- View Delivery Order Modal -->
    <div class="modal fade" id="view_delivery_order" tabindex="-1" role="dialog" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewOrderModalLabel">Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="actual-form d-none">
                    <form action="javascript:void(0)" id="view_delivery_order_form">
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-header">
                                    Customer Details
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Customer Name:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="view_delivery_order_customer_name"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Mobile Number:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="view_delivery_order_mobile_number"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Email:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="view_delivery_order_email"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="view_delivery_order_address"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Ordered Items
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row" id="view_delivery_order_row">
                                        <!-- Data from AJAX -->
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-9">
                                            <strong class="float-right">Gross Amount</strong>
                                        </div>
                                        <div class="col-3">
                                            <span class="float-right">₱<span id="view_delivery_order_subtotal">1234.00</span></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <strong class="float-right">12% VAT</strong>
                                        </div>
                                        <div class="col-3">
                                            <span class="float-right">₱<span id="view_delivery_order_tax">34.00</span></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <strong class="float-right">Total Amount</strong>
                                        </div>
                                        <div class="col-3">
                                            <span class="float-right font-weight-bold">₱<span id="view_delivery_order_total">1268.00</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="view_delivery_order_tracking_id">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" id="btn_print_receipt"><i class="fas fa-print"></i>&nbsp;&nbsp;Print Receipt</button>
                        </div>
                    </form>
                </div>
                <div class="loading text-center py-5">
                    <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                    <h5 class="text-muted">Please Wait...</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Set Delivery Status Modal -->
    <div class="modal fade" id="set_delivery_status" tabindex="-1" role="dialog" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewOrderModalLabel">Set Delivery Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="actual-form d-none">
                    <form action="javascript:void(0)" id="set_delivery_status_form">
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-header">
                                    Customer Details
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Tracking ID:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="set_delivery_status_tracking_id"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Customer Name:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="set_delivery_status_name"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Mobile Number:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="set_delivery_status_mobile_number"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Email:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="set_delivery_status_email"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="set_delivery_status_address"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <strong>Status:</strong>
                                                </div>
                                                <div class="col-9">
                                                    <span id="set_delivery_status_delivery_status"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    Delivery Status
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="set_delivery_status_set_status">Status <span class="text-danger">*</span></label>
                                        <select id="set_delivery_status_set_status" class="custom-select" required>
                                            <option value disabled selected>Choose...</option>
                                            <option value="Processing">Processing</option>
                                            <option value="Shipped/Dispatched">Shipped/Dispatched</option>
                                            <option value="In Transit">In Transit</option>
                                            <option value="Out for Delivery">Out for Delivery</option>
                                            <option value="Delivered">Delivered</option>
                                            <option value="Failed Delivery Attempt">Failed Delivery Attempt</option>
                                            <option value="Returned to Sender">Returned to Sender</option>
                                            <option value="Awaiting Pickup">Awaiting Pickup</option>
                                            <option value="On Hold">On Hold</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="set_delivery_status_description">Description <span class="text-danger">*</span></label>
                                        <textarea id="set_delivery_status_description" rows="5" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="set_delivery_status_set_tracking_id">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="set_delivery_status_submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="loading text-center py-5">
                    <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                    <h5 class="text-muted">Please Wait...</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- View Product Modal -->
    <div class="modal fade" id="view_product" tabindex="-1" role="dialog" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewOrderModalLabel">Product Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="actual-form d-none">
                        <div class="row">
                            <div class="col-md-5 d-flex align-items-center">
                                <div class="card">
                                    <div class="card-body">
                                        <img id="view_product_image" src="<?= base_url() ?>dist/images/uploads/1_1.png" class="img-fluid" alt="Product Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Product Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <p><strong>Product Name:</strong> <span id="view_product_name">Product Name</span></p>
                                        <p><strong>Description:</strong> <span id="view_product_description">Product Description</span></p>
                                        <p><strong>Unit Price:</strong> <span id="view_product_price">0.00</span></p>
                                        <p><strong>Cost Price:</strong> <span id="view_product_cost_price">0.00</span></p>
                                        <p><strong>Category:</strong> <span id="view_product_category">Product Category</span></p>
                                        <p><strong>Supplier:</strong> <span id="view_product_supplier">Product Supplier</span></p>
                                        <p><strong>Quantity:</strong> <span id="view_product_quantity">0</span> stocks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loading text-center py-5">
                        <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                        <h5 class="text-muted">Please Wait...</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Message Modal -->
    <div class="modal fade" id="view_message" tabindex="-1" role="dialog" aria-labelledby="emailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="emailModalLabel">Message Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="message-header">
                        <p><strong>From:</strong> <span id="view_message_name"></span></p>
                        <p><strong>Date:</strong> <span id="view_message_date"></span></p>
                        <p><strong>Subject:</strong> <span id="view_message_subject"></span></p>
                    </div>
                    <hr>
                    <div class="message-content">
                        <p id="view_message_message"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reply Message Modal -->
    <div class="modal fade" id="reply_message" tabindex="-1" role="dialog" aria-labelledby="replyMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="replyMessageModalLabel">Reply with Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="reply_message_form">
                    <div class="modal-body">
                        <div class="actual-form">
                            <div class="form-group">
                                <label for="reply_message_email">To:</label>
                                <input type="text" class="form-control" id="reply_message_email" readonly>
                            </div>
                            <div class="form-group">
                                <label for="reply_message_subject">Subject:</label>
                                <input type="text" class="form-control" id="reply_message_subject" required>
                            </div>
                            <div class="form-group">
                                <label for="reply_message_message">Message:</label>
                                <textarea class="form-control" id="reply_message_message" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="loading text-center py-5 d-none">
                            <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                            <h5 class="text-muted">Please Wait...</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="reply_message_name">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="reply_message_submit">Send Reply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Rate Order Modal -->
    <div class="modal fade" id="rate_order" tabindex="-1" role="dialog" aria-labelledby="ratingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ratingModalLabel">Rate Your Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="actual-form d-none">
                    <form action="javascript:void(0)" id="rate_order_form">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img id="rate_order_item_image" src="<?= base_url() ?>dist/images/uploads/1_1.png" alt="Item Image" style="width: 145px; height: 145px;" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <h5 id="rate_order_item_name">Item Name</h5>
                                    <p>Description: <span id="rate_order_item_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>
                                </div>
                            </div>

                            <hr>

                            <span>Please Rate Your Order</span>

                            <div class="rating">
                                <span class="star" data-rating="1" style="font-size: 50px;" role="button">&#9733;</span>
                                <span class="star" data-rating="2" style="font-size: 50px;" role="button">&#9733;</span>
                                <span class="star" data-rating="3" style="font-size: 50px;" role="button">&#9733;</span>
                                <span class="star" data-rating="4" style="font-size: 50px;" role="button">&#9733;</span>
                                <span class="star" data-rating="5" style="font-size: 50px;" role="button">&#9733;</span>
                            </div>

                            <div class="star-interpretation">
                                Your Rating: <span id="rate_order_rating_text">0 Stars</span>
                            </div>

                            <div class="form-group mt-3">
                                <label for="rate_order_feedback">Feedback:</label>
                                <textarea class="form-control" id="rate_order_feedback" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="rate_order_rating" value="0">
                            <input type="hidden" id="rate_order_id">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="rate_order_submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="loading text-center py-5">
                    <img src="<?= base_url() ?>dist/images/loading.gif" alt="loading_gif" class="mb-3">
                    <h5 class="text-muted">Please Wait...</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>plugins/admin-lte/js/adminlte.js"></script>
    <!-- Sweetalert -->
    <script src="<?= base_url() ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Custom Javascript -->
    <script>
        $(document).ready(function() {
            var alert = <?= $this->session->userdata("alert") ? json_encode($this->session->userdata("alert")) : json_encode(array()) ?>;
            var login_message = "<?= $this->session->userdata("login_message") ?>";
            var current_tab = "<?= $this->session->userdata("current_tab") ?>";
            var base_url = "<?= base_url() ?>";
            var user_id = "<?= $this->session->userdata("id") ?>";
            var order_id_to_be_placed = "";
            var currentDate = new Date();
            var currentMonth = currentDate.getMonth() + 1;
            var currentYear = currentDate.getFullYear();
            var monthNames = [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];
            var currentMonthName = monthNames[currentMonth - 1];

            const zipCodes = {
                "Baao": "4432",
                "Balatan": "4436",
                "Bato": "4435",
                "Bombon": "4407",
                "Buhi": "4433",
                "Bula": "4427",
                "Cabusao": "4410",
                "Calabanga": "4405",
                "Camaligan": "4406",
                "Canaman": "4402",
                "Caramoan": "4420",
                "Del Gallego": "4405",
                "Gainza": "4412",
                "Garchitorena": "4429",
                "Goa": "4422",
                "Iriga City": "4431",
                "Lagonoy": "4428",
                "Libmanan": "4409",
                "Lupi": "4404",
                "Magarao": "4403",
                "Milaor": "4414",
                "Minalabac": "4417",
                "Nabua": "4434",
                "Naga City": "4400",
                "Ocampo": "4419",
                "Pamplona": "4415",
                "Pasacao": "4411",
                "Pili": "4418",
                "Presentacion": "4421",
                "Ragay": "4408",
                "Sagnay": "4426",
                "San Fernando": "4416",
                "San Jose": "4423",
                "Sipocot": "4401",
                "Siruma": "4424",
                "Tigaon": "4425",
                "Tinambac": "4427"
            };

            login_alert(login_message);
            sweetalert(alert);

            if (current_tab == "admin/dashboard") {
                populate_chart(currentMonth.toString(), currentYear.toString());
            }

            $(".datatable").DataTable({
                "responsive": true,
                "lengthChange": true,
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "targets": 'no-sort',
                "bSort": false,
                "order": []
            })

            $(".datatable_sales").DataTable({
                "responsive": true,
                "lengthChange": false,
                "bPaginate": false,
                "bLengthChange": true,
                "bFilter": false,
                "bInfo": false,
                "bAutoWidth": false,
                "targets": 'no-sort',
                "bSort": false,
                "order": []
            })

            $(".btn_subtract_item").click(function() {
                var order_id = $(this).attr("order_id");
                var parent_row = $(this).parent("div.input-group-prepend").parent("div.input-group");
                var quantity = parseInt(parent_row.children("input.quantity").val());
                var display_price = parent_row.parent("td.text-center").parent("tr").children("td.total_amount").children("span.total_amount_2").text();
                var original_price = parseFloat(parseFloat(display_price) / parseFloat(quantity)).toFixed(2);

                if (quantity > 1) {
                    quantity -= 1;

                    var total_amount = parseFloat(parseFloat(original_price) * parseInt(quantity)).toFixed(2);

                    parent_row.addClass("d-none");
                    parent_row.parent("td.text-center").children("div.loading").removeClass("d-none");

                    var formData = new FormData();

                    formData.append('order_id', order_id);
                    formData.append('quantity', quantity);
                    formData.append('total_amount', total_amount);

                    $.ajax({
                        url: base_url + 'server/update_order_quantity',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            parent_row.children("input.quantity").val(quantity);
                            parent_row.parent("td.text-center").parent("tr").children("td.total_amount").children("span.total_amount_2").text(total_amount);

                            parent_row.parent("td.text-center").children("div.loading_2").addClass("d-none");
                            parent_row.removeClass("d-none");

                            var Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 2000
                            });

                            Toast.fire({
                                icon: 'success',
                                title: 'Order quantity has been updated!'
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            })

            $(".btn_add_item").click(function() {
                var order_id = $(this).attr("order_id");
                var parent_row = $(this).parent("div.input-group-append").parent("div.input-group");
                var quantity = parseInt(parent_row.children("input.quantity").val());
                var display_price = parent_row.parent("td.text-center").parent("tr").children("td.total_amount").children("span.total_amount_2").text();
                var original_price = parseFloat(parseFloat(display_price) / parseFloat(quantity)).toFixed(2);

                if (quantity >= 1) {
                    quantity += 1;

                    var total_amount = parseFloat(parseFloat(original_price) * parseInt(quantity)).toFixed(2);

                    parent_row.addClass("d-none");
                    parent_row.parent("td.text-center").children("div.loading").removeClass("d-none");

                    var formData = new FormData();

                    formData.append('order_id', order_id);
                    formData.append('quantity', quantity);
                    formData.append('total_amount', total_amount);

                    $.ajax({
                        url: base_url + 'server/update_order_quantity',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            parent_row.children("input.quantity").val(quantity);
                            parent_row.parent("td.text-center").parent("tr").children("td.total_amount").children("span.total_amount_2").text(total_amount);

                            parent_row.parent("td.text-center").children("div.loading_2").addClass("d-none");
                            parent_row.removeClass("d-none");

                            var Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 2000
                            });

                            Toast.fire({
                                icon: 'success',
                                title: 'Order quantity has been updated!'
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            })

            $(".quantity").keydown(function(event) {
                event.preventDefault();
            })

            $(".nav-link").click(function() {
                $(this).children(".counter-badge").addClass("d-none");
                $(this).children(".tab_spinner").removeClass("d-none");
            })

            $(".btn_logout").click(function() {
                var formData = new FormData();

                formData.append('logout', true);

                $.ajax({
                    url: base_url + 'server/logout',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#new_category_form").submit(function() {
                var name = $("#new_category_name").val();
                var description = $("#new_category_description").val();

                $("#new_category_submit").text("Processing Request...");
                $("#new_category_submit").attr("disabled", true);

                $("#new_category_name").attr("disabled", true);
                $("#new_category_description").attr("disabled", true);

                var formData = new FormData();

                formData.append('name', name);
                formData.append('description', description);

                $.ajax({
                    url: base_url + 'server/new_category',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(document).on('click', '.update_category', function() {
                var parent_tr = $(this).parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();
                var name = parent_tr.children("td.name").text();
                var description = parent_tr.children("td.description").text();

                $("#update_category_id").val(id);
                $("#update_category_name").val(name);
                $("#update_category_description").val(description);

                $("#update_category").modal().show();
            })

            $("#update_category_form").submit(function() {
                var id = $("#update_category_id").val();
                var name = $("#update_category_name").val();
                var description = $("#update_category_description").val();

                $("#update_category_submit").text("Processing Request...");
                $("#update_category_submit").attr("disabled", true);

                $("#update_category_name").attr("disabled", true);
                $("#update_category_description").attr("disabled", true);

                var formData = new FormData();

                formData.append('id', id);
                formData.append('name', name);
                formData.append('description', description);

                $.ajax({
                    url: base_url + 'server/update_category',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(document).on('click', '.delete_category', function() {
                var parent_tr = $(this).parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();

                $("#check_delete_status_title").text("Checking category items");
                $(".loading").removeClass("d-none");
                $(".error-message").addClass("d-none");

                $("#check_delete_status").modal('show');

                setTimeout(function() {
                    var formData = new FormData();

                    formData.append('id', id);

                    $.ajax({
                        url: base_url + 'server/check_category_items',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response) {
                                $("#check_delete_status_title").text("Category cannot be deleted");
                                $(".loading").addClass("d-none");
                                $(".error-message").removeClass("d-none");
                                $(".error-message").children("h3").text("This category is not empty!");
                            } else {
                                $("#check_delete_status").modal('hide');

                                Swal.fire({
                                    title: "Are you sure?",
                                    text: "You won't be able to revert this!",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Yes, delete it!"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        var formData = new FormData();

                                        formData.append('id', id);

                                        $.ajax({
                                            url: base_url + 'server/delete_category',
                                            data: formData,
                                            type: 'POST',
                                            dataType: 'JSON',
                                            processData: false,
                                            contentType: false,
                                            success: function(response) {
                                                location.href = base_url + current_tab;
                                            },
                                            error: function(xhr, status, error) {
                                                console.error(error);
                                            }
                                        });
                                    }
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }, 1000);
            })

            $("#new_supplier_city").change(function() {
                var city = $(this).val();
                var province = $("#new_supplier_province").val();
                var country = $("#new_supplier_country").val();
                var zipCode = zipCodes[city];

                if (province && country) {
                    $("#new_supplier_zip_code").val(zipCode);
                }

                $("#new_supplier_province").removeAttr("disabled");
            })

            $("#new_supplier_province").change(function() {
                $("#new_supplier_country").removeAttr("disabled");
            })

            $("#new_supplier_country").change(function() {
                var city = $("#new_supplier_city").val();
                var zipCode = zipCodes[city];

                $("#new_supplier_zip_code").val(zipCode);
            })

            $("#new_supplier_form").submit(function() {
                var name = $("#new_supplier_name");
                var contact_person = $("#new_supplier_contact_person");
                var email = $("#new_supplier_email");
                var mobile_number = $("#new_supplier_mobile_number");
                var house_number = $("#new_supplier_house_number");
                var subdivision_zone_purok = $("#new_supplier_subdivision_zone_purok");
                var city = $("#new_supplier_city");
                var province = $("#new_supplier_province");
                var country = $("#new_supplier_country");
                var zip_code = $("#new_supplier_zip_code");

                var mobile_number_error_label = $("#error_new_supplier_mobile_number");

                if (verify_mobile_number(mobile_number, mobile_number_error_label)) {
                    $("#new_supplier_submit").text("Processing Request...");
                    $("#new_supplier_submit").attr("disabled", true);

                    name.attr("disabled", true);
                    contact_person.attr("disabled", true);
                    email.attr("disabled", true);
                    mobile_number.attr("disabled", true);
                    house_number.attr("disabled", true);
                    subdivision_zone_purok.attr("disabled", true);
                    city.attr("disabled", true);
                    province.attr("disabled", true);
                    country.attr("disabled", true);
                    zip_code.attr("disabled", true);

                    var formData = new FormData();

                    formData.append('name', name.val());
                    formData.append('contact_person', contact_person.val());
                    formData.append('email', email.val());
                    formData.append('mobile_number', mobile_number.val());
                    formData.append('house_number', house_number.val());
                    formData.append('subdivision_zone_purok', subdivision_zone_purok.val());
                    formData.append('city', city.val());
                    formData.append('province', province.val());
                    formData.append('country', country.val());
                    formData.append('zip_code', zip_code.val());

                    $.ajax({
                        url: base_url + 'server/new_supplier',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            location.href = base_url + current_tab;
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            })

            $("#new_supplier_mobile_number").keypress(function() {
                $("#new_supplier_mobile_number").removeClass("is-invalid");
                $("#error_new_supplier_mobile_number").addClass("d-none");
            })

            $(document).on('click', '.update_supplier', function() {
                var parent_tr = $(this).parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();
                var name = parent_tr.children("td.name").text();
                var contact_person = parent_tr.children("td.contact_person").text();
                var email = parent_tr.children("td.email").text();
                var mobile_number = parent_tr.children("td.mobile_number").text();
                var house_number = parent_tr.children("td.house_number").text();
                var subdivision_zone_purok = parent_tr.children("td.subdivision_zone_purok").text();
                var city = parent_tr.children("td.city").text();
                var province = parent_tr.children("td.province").text();
                var country = parent_tr.children("td.country").text();
                var zip_code = parent_tr.children("td.zip_code").text();

                $("#update_supplier_name").val(name);
                $("#update_supplier_contact_person").val(contact_person);
                $("#update_supplier_email").val(email);
                $("#update_supplier_mobile_number").val(mobile_number);
                $("#update_supplier_house_number").val(house_number);
                $("#update_supplier_subdivision_zone_purok").val(subdivision_zone_purok);
                $("#update_supplier_city").val(city);
                $("#update_supplier_province").val(province);
                $("#update_supplier_country").val(country);
                $("#update_supplier_zip_code").val(zip_code);

                $("#update_supplier_id").val(id);

                $("#update_supplier_city").removeAttr("disabled");
                $("#update_supplier_province").removeAttr("disabled");
                $("#update_supplier_country").removeAttr("disabled");

                $("#update_supplier").modal().show();
            })

            $("#update_supplier_city").change(function() {
                var city = $(this).val();
                var province = $("#update_supplier_province").val();
                var country = $("#update_supplier_country").val();
                var zipCode = zipCodes[city];

                if (province && country) {
                    $("#update_supplier_zip_code").val(zipCode);
                }

                $("#update_supplier_province").removeAttr("disabled");
            })

            $("#update_supplier_province").change(function() {
                $("#update_supplier_country").removeAttr("disabled");
            })

            $("#update_supplier_country").change(function() {
                var city = $("#update_supplier_city").val();
                var zipCode = zipCodes[city];

                $("#update_supplier_zip_code").val(zipCode);
            })

            $("#update_supplier_form").submit(function() {
                var id = $("#update_supplier_id");
                var name = $("#update_supplier_name");
                var contact_person = $("#update_supplier_contact_person");
                var email = $("#update_supplier_email");
                var mobile_number = $("#update_supplier_mobile_number");
                var house_number = $("#update_supplier_house_number");
                var subdivision_zone_purok = $("#update_supplier_subdivision_zone_purok");
                var city = $("#update_supplier_city");
                var province = $("#update_supplier_province");
                var country = $("#update_supplier_country");
                var zip_code = $("#update_supplier_zip_code");

                var mobile_number_error_label = $("#error_update_supplier_mobile_number");

                if (verify_mobile_number(mobile_number, mobile_number_error_label)) {
                    $("#update_supplier_submit").text("Processing Request...");
                    $("#update_supplier_submit").attr("disabled", true);

                    name.attr("disabled", true);
                    contact_person.attr("disabled", true);
                    email.attr("disabled", true);
                    mobile_number.attr("disabled", true);
                    house_number.attr("disabled", true);
                    subdivision_zone_purok.attr("disabled", true);
                    city.attr("disabled", true);
                    province.attr("disabled", true);
                    country.attr("disabled", true);
                    zip_code.attr("disabled", true);

                    var formData = new FormData();

                    formData.append('id', id.val());
                    formData.append('name', name.val());
                    formData.append('contact_person', contact_person.val());
                    formData.append('email', email.val());
                    formData.append('mobile_number', mobile_number.val());
                    formData.append('house_number', house_number.val());
                    formData.append('subdivision_zone_purok', subdivision_zone_purok.val());
                    formData.append('city', city.val());
                    formData.append('province', province.val());
                    formData.append('country', country.val());
                    formData.append('zip_code', zip_code.val());

                    $.ajax({
                        url: base_url + 'server/update_supplier',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            location.href = base_url + current_tab;
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            })

            $("#update_supplier_mobile_number").keypress(function() {
                $("#update_supplier_mobile_number").removeClass("is-invalid");
                $("#error_update_supplier_mobile_number").addClass("d-none");
            })

            $(document).on('click', '.delete_supplier', function() {
                var parent_tr = $(this).parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();

                $("#check_delete_status_title").text("Checking supplier items");
                $(".loading").removeClass("d-none");
                $(".error-message").addClass("d-none");

                $("#check_delete_status").modal('show');

                setTimeout(function() {
                    var formData = new FormData();

                    formData.append('id', id);

                    $.ajax({
                        url: base_url + 'server/check_supplier_items',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response) {
                                $("#check_delete_status_title").text("Supplier cannot be deleted");
                                $(".loading").addClass("d-none");
                                $(".error-message").removeClass("d-none");
                                $(".error-message").children("h3").text("This supplier is not empty!");
                            } else {
                                $("#check_delete_status").modal('hide');

                                Swal.fire({
                                    title: "Are you sure?",
                                    text: "You won't be able to revert this!",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Yes, delete it!"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        var formData = new FormData();

                                        formData.append('id', id);

                                        $.ajax({
                                            url: base_url + 'server/delete_supplier',
                                            data: formData,
                                            type: 'POST',
                                            dataType: 'JSON',
                                            processData: false,
                                            contentType: false,
                                            success: function(response) {
                                                location.href = base_url + current_tab;
                                            },
                                            error: function(xhr, status, error) {
                                                console.error(error);
                                            }
                                        });
                                    }
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }, 1000);
            })

            $("#edit_login_account_image").change(function() {
                $('#edit_login_account_image_label').text(this.files[0].name);
                $('#edit_login_account_image_display').attr('src', window.URL.createObjectURL(this.files[0]));
            })

            $("#new_product_image").change(function() {
                $('#new_product_image_label').text(this.files[0].name);
                $('#new_product_image_display').attr('src', window.URL.createObjectURL(this.files[0]));
            })

            $(".btn_edit_login_account").click(function() {
                var id = user_id;

                var formData = new FormData();

                formData.append('id', id);

                $.ajax({
                    url: base_url + 'server/get_user_data',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $("#edit_login_account_image_display").attr("src", response[0].image ? base_url + "dist/images/uploads/" + response[0].image : base_url + "dist/images/uploads/default_user_image.png");
                        $("#edit_login_account_image_label").text(response[0].image ? response[0].image : "Choose File");
                        $("#edit_login_account_name").val(response[0].name);
                        $("#edit_login_account_username").val(response[0].username);

                        $("#edit_login_account_id").val(response[0].id);
                        $("#edit_login_account_old_username").val(response[0].username);
                        $("#edit_login_account_old_password").val(response[0].password);
                        $("#edit_login_account_old_image").val(response[0].image);

                        $(".loading").addClass("d-none");
                        $(".actual-form").removeClass("d-none");
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#edit_login_account_form").submit(function() {
                var id = $("#edit_login_account_id");
                var name = $("#edit_login_account_name");
                var username = $("#edit_login_account_username");
                var old_username = $("#edit_login_account_old_username");
                var password = $("#edit_login_account_password");
                var old_password = $("#edit_login_account_old_password");
                var confirm_password = $("#edit_login_account_confirm_password");
                var image = $("#edit_login_account_image")[0].files[0];
                var old_image = $("#edit_login_account_old_image");

                var password_error_label = $("#error_edit_login_account_password");

                if (verify_password(password, confirm_password, password_error_label)) {
                    $("#edit_login_account_submit").text("Processing Request...");
                    $("#edit_login_account_submit").attr("disabled", true);

                    name.attr("disabled", true);
                    username.attr("disabled", true);
                    password.attr("disabled", true);
                    confirm_password.attr("disabled", true);
                    $("#edit_login_account_image").attr("disabled", true);

                    var formData = new FormData();

                    formData.append('id', id.val());
                    formData.append('name', name.val());
                    formData.append('username', username.val());
                    formData.append('old_username', old_username.val());
                    formData.append('password', password.val());
                    formData.append('old_password', old_password.val());
                    formData.append('image', image);
                    formData.append('old_image', old_image.val());

                    $.ajax({
                        url: base_url + 'server/update_account',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response) {
                                location.href = base_url + current_tab;
                            } else {
                                $("#error_edit_login_account_username").removeClass("d-none");
                                $("#edit_login_account_username").addClass("is-invalid");

                                $("#edit_login_account_submit").text("Submit");
                                $("#edit_login_account_submit").removeAttr("disabled");

                                name.removeAttr("disabled");
                                username.removeAttr("disabled");
                                password.removeAttr("disabled");
                                confirm_password.removeAttr("disabled");
                                $("#edit_login_account_image").removeAttr("disabled");
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            })

            $("#edit_login_account_password").keypress(function() {
                $("#edit_login_account_password").removeClass("is-invalid");
                $("#edit_login_account_confirm_password").removeClass("is-invalid");
                $("#error_edit_login_account_password").addClass("d-none");
            })

            $("#edit_login_account_confirm_password").keypress(function() {
                $("#edit_login_account_password").removeClass("is-invalid");
                $("#edit_login_account_confirm_password").removeClass("is-invalid");
                $("#error_edit_login_account_password").addClass("d-none");
            })

            $("#edit_login_account_username").keypress(function() {
                $("#edit_login_account_username").removeClass("is-invalid");
                $("#error_edit_login_account_username").addClass("d-none");
            })

            $("#new_product_form").submit(function() {
                var name = $("#new_product_name");
                var category_id = $("#new_product_category_id");
                var supplier_id = $("#new_product_supplier_id");
                var description = $("#new_product_description");
                var price = $("#new_product_price");
                var cost_price = $("#new_product_cost_price");
                var quantity = $("#new_product_quantity");
                var description = $("#new_product_description");
                var image = $("#new_product_image")[0].files[0];

                $("#new_product_submit").text("Processing Request...");
                $("#new_product_submit").attr("disabled", true);

                $("#new_product_name").attr("disabled", true);
                $("#new_product_category_id").attr("disabled", true);
                $("#new_product_supplier_id").attr("disabled", true);
                $("#new_product_description").attr("disabled", true);
                $("#new_product_price").attr("disabled", true);
                $("#new_product_cost_price").attr("disabled", true);
                $("#new_product_quantity").attr("disabled", true);
                $("#new_product_descrition").attr("disabled", true);
                $("#new_product_image").attr("disabled", true);

                var formData = new FormData();

                formData.append('name', name.val());
                formData.append('category_id', category_id.val());
                formData.append('supplier_id', supplier_id.val());
                formData.append('description', description.val());
                formData.append('price', price.val());
                formData.append('cost_price', cost_price.val());
                formData.append('quantity', quantity.val());
                formData.append('description', description.val());
                formData.append('image', image);

                $.ajax({
                    url: base_url + 'server/new_product',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(document).on('click', '.delete_product', function() {
                var parent_tr = $(this).parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var formData = new FormData();

                        formData.append('id', id);

                        $.ajax({
                            url: base_url + 'server/delete_product',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                location.href = base_url + current_tab;
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                });
            })

            $(document).on('click', '.update_product', function() {
                var parent_tr = $(this).parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();
                var name = parent_tr.children("td.name").text();
                var category_id = parent_tr.children("td.category_id").text();
                var supplier_id = parent_tr.children("td.supplier_id").text();
                var description = parent_tr.children("td.description").text();
                var price = parent_tr.children("td.price").text().replace('₱', '');
                var cost_price = parent_tr.children("td.cost_price").text().replace('₱', '');
                var quantity = parent_tr.children("td.quantity").text();
                var image = parent_tr.children("td.image").text();

                $("#update_product_id").val(id);
                $("#update_product_name").val(name);
                $("#update_product_category_id").val(category_id);
                $("#update_product_supplier_id").val(supplier_id);
                $("#update_product_description").val(description);
                $("#update_product_price").val(price);
                $("#update_product_cost_price").val(cost_price);
                $("#update_product_quantity").val(quantity);
                $("#update_product_image_display").attr("src", base_url + "dist/images/uploads/" + image);
                $("#update_product_image_label").text(image);
                $("#update_product_old_image").val(image);

                $("#update_product").modal().show();
            })

            $("#update_product_image").change(function() {
                $('#update_product_image_label').text(this.files[0].name);
                $('#update_product_image_display').attr('src', window.URL.createObjectURL(this.files[0]));
            })

            $("#update_product_form").submit(function() {
                var id = $("#update_product_id");
                var name = $("#update_product_name");
                var category_id = $("#update_product_category_id");
                var supplier_id = $("#update_product_supplier_id");
                var description = $("#update_product_description");
                var price = $("#update_product_price");
                var cost_price = $("#update_product_cost_price");
                var quantity = $("#update_product_quantity");
                var description = $("#update_product_description");
                var old_image = $("#update_product_old_image");
                var image = $("#update_product_image")[0].files[0];

                $("#update_product_submit").text("Processing Request...");
                $("#update_product_submit").attr("disabled", true);

                $("#update_product_name").attr("disabled", true);
                $("#update_product_category_id").attr("disabled", true);
                $("#update_product_supplier_id").attr("disabled", true);
                $("#update_product_description").attr("disabled", true);
                $("#update_product_price").attr("disabled", true);
                $("#update_product_cost_price").attr("disabled", true);
                $("#update_product_quantity").attr("disabled", true);
                $("#update_product_descrition").attr("disabled", true);
                $("#update_product_image").attr("disabled", true);

                var formData = new FormData();

                formData.append('id', id.val());
                formData.append('name', name.val());
                formData.append('category_id', category_id.val());
                formData.append('supplier_id', supplier_id.val());
                formData.append('description', description.val());
                formData.append('price', price.val());
                formData.append('cost_price', cost_price.val());
                formData.append('quantity', quantity.val());
                formData.append('description', description.val());
                formData.append('image', image);
                formData.append('old_image', old_image.val());

                $.ajax({
                    url: base_url + 'server/update_product',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(document).on('click', '.view_customer', function() {
                var id = $(this).attr("useraccount_id");
                var is_update = $(this).attr("is_update");

                if (is_update == "true") {
                    $("#customer_details_title").text("Edit Personal Information");
                    $("#customer_details_first_name").removeAttr("readonly");
                    $("#customer_details_middle_name").removeAttr("readonly");
                    $("#customer_details_last_name").removeAttr("readonly");
                    $("#customer_details_mobile_number").removeAttr("readonly");
                    $("#customer_details_email").removeAttr("readonly");
                    $("#customer_details_house_number").removeAttr("readonly");
                    $("#customer_details_subdivision_zone_purok").removeAttr("readonly");
                    $("#customer_details_city").removeAttr("disabled");
                    $("#customer_details_province").removeAttr("disabled");
                    $("#customer_details_country").removeAttr("disabled");
                    $("#customer_details_submit").removeClass("d-none");
                }

                $("#customer_details").modal("show");

                var formData = new FormData();

                formData.append('id', id);

                $.ajax({
                    url: base_url + 'server/get_userdata',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var username = response[0].username;
                        var password = response[0].password;
                        var image = response[0].image;

                        $("#customer_details_image_display").attr("src", base_url + "dist/images/uploads/" + image);

                        formData.append("id", id);

                        $.ajax({
                            url: base_url + 'server/get_customer_data',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response_2) {
                                var useraccount_id = response_2[0].useraccount_id;
                                var first_name = response_2[0].first_name;
                                var middle_name = response_2[0].middle_name;
                                var last_name = response_2[0].last_name;
                                var mobile_number = response_2[0].mobile_number;
                                var email = response_2[0].email;
                                var house_number = response_2[0].house_number;
                                var subdivision_zone_purok = response_2[0].subdivision_zone_purok;
                                var city = response_2[0].city;
                                var province = response_2[0].province;
                                var country = response_2[0].country;
                                var zip_code = response_2[0].zip_code;

                                $("#customer_details_useraccount_id").val(useraccount_id);
                                $("#customer_details_first_name").val(first_name);
                                $("#customer_details_middle_name").val(middle_name);
                                $("#customer_details_last_name").val(last_name);
                                $("#customer_details_mobile_number").val(mobile_number);
                                $("#customer_details_email").val(email);
                                $("#customer_details_house_number").val(house_number);
                                $("#customer_details_subdivision_zone_purok").val(subdivision_zone_purok);
                                $("#customer_details_city").val(city);
                                $("#customer_details_province").val(province);
                                $("#customer_details_country").val(country);
                                $("#customer_details_zip_code").val(zip_code);

                                $(".actual-form").removeClass("d-none");
                                $(".loading").addClass("d-none");
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#customer_details_city").change(function() {
                var city = $(this).val();
                var province = $("#customer_details_province").val();
                var country = $("#customer_details_country").val();
                var zipCode = zipCodes[city];

                if (province && country) {
                    $("#customer_details_zip_code").val(zipCode);
                }

                $("#customer_details_province").removeAttr("disabled");
            })

            $("#customer_details_province").change(function() {
                $("#customer_details_country").removeAttr("disabled");
            })

            $("#customer_details_country").change(function() {
                var city = $("#customer_details_city").val();
                var zipCode = zipCodes[city];

                $("#customer_details_zip_code").val(zipCode);
            })

            $("#customer_details_form").submit(function() {
                var useraccount_id = $("#customer_details_useraccount_id");
                var first_name = $("#customer_details_first_name");
                var middle_name = $("#customer_details_middle_name");
                var last_name = $("#customer_details_last_name");
                var mobile_number = $("#customer_details_mobile_number");
                var email = $("#customer_details_email");
                var house_number = $("#customer_details_house_number");
                var subdivision_zone_purok = $("#customer_details_subdivision_zone_purok");
                var city = $("#customer_details_city");
                var province = $("#customer_details_province");
                var country = $("#customer_details_country");
                var zip_code = $("#customer_details_zip_code");
                var mobile_number_error_label = $("#error_customer_details_mobile_number");

                if (verify_mobile_number(mobile_number, mobile_number_error_label)) {
                    $("#customer_details_submit").text("Processing Request...");
                    $("#customer_details_submit").attr("disabled", true);

                    first_name.attr("disabled", true);
                    middle_name.attr("disabled", true);
                    last_name.attr("disabled", true);
                    mobile_number.attr("disabled", true);
                    email.attr("disabled", true);
                    house_number.attr("disabled", true);
                    subdivision_zone_purok.attr("disabled", true);
                    city.attr("disabled", true);
                    province.attr("disabled", true);
                    country.attr("disabled", true);
                    zip_code.attr("disabled", true);

                    var formData = new FormData();

                    formData.append("useraccount_id", useraccount_id.val());
                    formData.append("first_name", first_name.val());
                    formData.append("middle_name", middle_name.val());
                    formData.append("last_name", last_name.val());
                    formData.append("mobile_number", mobile_number.val());
                    formData.append("email", email.val());
                    formData.append("house_number", house_number.val());
                    formData.append("subdivision_zone_purok", subdivision_zone_purok.val());
                    formData.append("city", city.val());
                    formData.append("province", province.val());
                    formData.append("country", country.val());
                    formData.append("zip_code", zip_code.val());

                    $.ajax({
                        url: base_url + 'server/update_customer',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            location.href = base_url + current_tab;
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            })

            $("#customer_details_mobile_number").keypress(function() {
                $("#customer_details_mobile_number").removeClass("is-invalid");
                $("#error_customer_details_mobile_number").addClass("d-none");
            })

            $(".view_image").click(function() {
                src = $(this).attr("src");

                $("#proof_img_container").attr("src", src);
            })

            $(".order_details").click(function() {
                var id = $(this).attr("order_id");

                $(".loading").removeClass("d-none");
                $(".actual-form").addClass("d-none");

                var formData = new FormData();

                formData.append('id', id);

                $.ajax({
                    url: base_url + 'server/get_order_details',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var order_id = "OR" + addZeros(response[0].id);
                        var tracking_id = response[0].tracking_id ? response[0].tracking_id : "Not Yet Available";
                        var transaction_date = formatDate(response[0].transaction_date);
                        var quantity = response[0].quantity;
                        var total_amount = response[0].total_amount;
                        var status = response[0].status;
                        var item_id = response[0].item_id;

                        var formData = new FormData();

                        formData.append('id', item_id);

                        $.ajax({
                            url: base_url + 'server/get_item_info',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                var product_name = response[0].name;
                                var image = response[0].image;

                                $("#view_order_image").attr("src", base_url + "dist/images/uploads/" + image);
                                $("#view_order_id").text(order_id);
                                $("#view_order_tracking_id").text(tracking_id);
                                $("#view_order_transaction_date").text(transaction_date);
                                $("#view_order_product_name").text(product_name);
                                $("#view_order_quantity").text(quantity);
                                $("#view_order_total_amount").text(total_amount);
                                $("#view_order_status").text(status);

                                $(".loading").addClass("d-none");
                                $(".actual-form").removeClass("d-none");
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $('#checkAll').on('change', function() {
                if ($(this).is(':checked')) {
                    $('.selected_item').prop('checked', true);

                    var isChecked = $('.selected_item:checked').length > 0;

                    if (isChecked) {
                        $("#btn_place_order").removeClass("d-none");
                        $("#btn_approve_reject").removeClass("d-none");
                    }
                } else {
                    $('.selected_item').prop('checked', false);

                    $("#btn_place_order").addClass("d-none");
                    $("#btn_approve_reject").addClass("d-none");
                }
            })

            $('.selected_item').on('change', function() {
                var isChecked = $('.selected_item:checked').length > 0;
                var allChecked = $('.selected_item:checked').length === $('.selected_item').length;

                $('#checkAll').prop("checked", allChecked);

                if (isChecked) {
                    $("#btn_place_order").removeClass("d-none");
                    $("#btn_approve_reject").removeClass("d-none");
                } else {
                    $('#checkAll').prop("checked", false);
                    $("#btn_place_order").addClass("d-none");
                    $("#btn_approve_reject").addClass("d-none");
                }
            })

            $(document).on('click', '.update_order', function() {
                var order_id = $(this).attr("order_id");

                $(".loading").removeClass("d-none");
                $(".actual-form").addClass("d-none");
                $("#edit_order_quantity").removeClass("border-danger");

                var formData = new FormData();

                formData.append('id', order_id);

                $.ajax({
                    url: base_url + 'server/get_order_details',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var quantity = response[0].quantity;
                        var total_amount = response[0].total_amount;
                        var item_id = response[0].item_id;

                        var formData = new FormData();

                        formData.append('id', item_id);

                        $.ajax({
                            url: base_url + 'server/get_item_info',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                var product_name = response[0].name;
                                var product_price = response[0].price;

                                $("#edit_order_id").val(order_id);
                                $("#edit_order_name").text(product_name);
                                $("#edit_order_quantity").val(quantity);
                                $("#edit_order_total_amount").text(total_amount);
                                $("#edit_order_price").val(product_price);

                                $(".loading").addClass("d-none");
                                $(".actual-form").removeClass("d-none");
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });

                $("#edit_order").modal().show();
            })

            $('#edit_order_quantity').on('keypress', function(event) {
                var keyCode = event.which ? event.which : event.keyCode;

                if (keyCode < 48 || keyCode > 57) {
                    event.preventDefault();
                }
            })

            $('#edit_order_quantity').on('keyup', function(event) {
                var quantity = $(this).val();
                var price = $('#edit_order_price').val();
                var total_amount = 0;

                if (quantity) {
                    total_amount = price * quantity;

                    $(this).removeClass("border-danger");
                } else {
                    $(this).addClass("border-danger");
                }

                $("#edit_order_total_amount").text(total_amount.toFixed(2));
            })

            $("#edit_order_form").submit(function() {
                var id = $("#edit_order_id").val();
                var quantity = $("#edit_order_quantity").val();
                var total_amount = $("#edit_order_total_amount").text();

                if (quantity) {
                    $("#edit_order_submit").attr("disabled", true);
                    $("#edit_order_submit").text("Processing Request...");

                    var formData = new FormData();

                    formData.append('id', id);
                    formData.append('quantity', quantity);
                    formData.append('total_amount', total_amount);

                    $.ajax({
                        url: base_url + 'server/update_order',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            location.href = base_url + current_tab;
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            })

            $(document).on('click', '.delete_order', function() {
                var order_id = $(this).attr("order_id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var formData = new FormData();

                        formData.append('id', order_id);

                        $.ajax({
                            url: base_url + 'server/delete_order',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                location.href = base_url + current_tab;
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                });
            })

            $("#btn_place_order").click(function() {
                const order_ids = getCheckedOrderIds();

                order_id_to_be_placed = order_ids;

                $("#place_order_submit").removeClass("d-none");
                $("#error_stock").addClass("d-none");

                $(".loading").removeClass("d-none");
                $(".actual-form").addClass("d-none");

                $("#place_order").modal("show");

                var formData = new FormData();

                formData.append('order_ids', order_ids);

                $.ajax({
                    url: base_url + 'server/get_order_ids',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(responses) {
                        const row = $('#place_order_row');
                        let content = '';
                        var sub_total = 0;
                        var tax = 0;
                        var total = 0;

                        $.each(responses, function(index, response) {
                            var item_name = "";
                            var remaining_stocks = "";
                            var is_invalid = "";

                            sub_total = sub_total + parseFloat(response.total_amount);
                            tax = sub_total * 0.12;
                            total = sub_total + tax;

                            var formData = new FormData();

                            formData.append('id', response.item_id);

                            $.ajax({
                                url: base_url + 'server/get_item_info',
                                data: formData,
                                type: 'POST',
                                dataType: 'JSON',
                                processData: false,
                                contentType: false,
                                success: function(response_2) {
                                    item_name = response_2[0].name;
                                    remaining_stocks = response_2[0].quantity;

                                    if (response.quantity > remaining_stocks) {
                                        $("#error_stock").removeClass("d-none");
                                        $("#place_order_submit").addClass("d-none");

                                        is_invalid = "border-danger";
                                    }

                                    content += `
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-lg-7 col-6">
                                                    <p id="place_order_name">` + item_name + `</p>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <input type="text" class="form-control text-center ` + is_invalid + `" id="place_order_quantity_` + response.id + `" style="height: 25px !important;" readonly value="` + response.quantity + `">
                                                </div>
                                                <div class="col-lg-3 col-3">
                                                    <p class="float-right">₱<span id="place_order_total_amount">` + response.total_amount + `</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    `;

                                    row.html(content);

                                    $("#place_order_subtotal").text(sub_total.toFixed(2));
                                    $("#place_order_tax").text(tax.toFixed(2));
                                    $("#place_order_total").text(total.toFixed(2));

                                    $(".loading").addClass("d-none");
                                    $(".actual-form").removeClass("d-none");
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                }
                            });
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#place_order_form").submit(function() {
                var order_ids = order_id_to_be_placed;

                $("#place_order_submit").attr("disabled", true);
                $("#place_order_submit").text("Processing Request...");

                var formData = new FormData();

                formData.append('order_ids', order_ids);

                $.ajax({
                    url: base_url + 'server/place_order',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(".btn_approve_reject").click(function() {
                var is_approve = $(this).attr("is_approve");
                const order_ids = getCheckedOrderIds();
                var status = "";

                order_id_to_be_placed = order_ids;

                $(".loading").removeClass("d-none");
                $(".actual-form").addClass("d-none");

                $("#approve_reject_order").modal("show");

                var formData = new FormData();

                formData.append('order_ids', order_ids);

                $.ajax({
                    url: base_url + 'server/get_order_ids',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(responses) {
                        const row = $('#approve_reject_order_row');
                        let content = '';

                        $.each(responses, function(index, response) {
                            var item_name = "";
                            var formData = new FormData();

                            formData.append('id', response.item_id);

                            $.ajax({
                                url: base_url + 'server/get_item_info',
                                data: formData,
                                type: 'POST',
                                dataType: 'JSON',
                                processData: false,
                                contentType: false,
                                success: function(response_2) {
                                    item_name = response_2[0].name;

                                    content += `
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-7">
                                                    <p id="approve_reject_name">` + item_name + `</p>
                                                </div>
                                                <div class="col-2">
                                                    <input type="text" class="form-control text-center" id="approve_reject_order_quantity_` + response.id + `" style="height: 25px !important;" readonly value="` + response.quantity + `">
                                                </div>
                                                <div class="col-3">
                                                    <p class="float-right">₱<span id="approve_reject_order_total_amount">` + response.total_amount + `</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    `;

                                    row.html(content);

                                    if (is_approve == "true") {
                                        $(".approve_reject_status").text("Approve");
                                        $("#approve_reject_order_status").val("Approved");
                                    } else {
                                        $(".approve_reject_status").text("Reject");
                                        $("#approve_reject_order_status").val("Rejected");
                                    }

                                    $(".loading").addClass("d-none");
                                    $(".actual-form").removeClass("d-none");
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                }
                            });
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#approve_reject_order_form").submit(function() {
                var order_ids = order_id_to_be_placed;
                var status = $("#approve_reject_order_status").val();

                $("#approve_reject_order_submit").attr("disabled", true);
                $("#approve_reject_order_submit").text("Processing Request...");

                var formData = new FormData();

                formData.append('order_ids', order_ids);
                formData.append('status', status);

                $.ajax({
                    url: base_url + 'server/approve_reject_order',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(document).on('click', '.view_delivery_order', function() {
                var tracking_id = $(this).attr("tracking_id");
                var is_view_only = $(this).attr("is_view_only");

                $(".actual-form").addClass("d-none");
                $(".loading").removeClass("d-none");

                $("#view_delivery_order").modal("show");

                var formData = new FormData();

                formData.append('tracking_id', tracking_id);

                $.ajax({
                    url: base_url + 'server/get_delivery_orders',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(responses) {
                        var customer_id = responses[0].customer_id;
                        const row = $('#view_delivery_order_row');
                        let content = '';
                        var sub_total = 0;
                        var tax = 0;
                        var total = 0;

                        $.each(responses, function(_, response) {
                            sub_total = sub_total + parseFloat(response.total_amount);
                            tax = sub_total * 0.12;
                            total = sub_total + tax;

                            var formData = new FormData();

                            formData.append('id', customer_id);

                            $.ajax({
                                url: base_url + 'server/get_customer_data',
                                data: formData,
                                type: 'POST',
                                dataType: 'JSON',
                                processData: false,
                                contentType: false,
                                success: function(response_2) {
                                    var first_name = response_2[0].first_name;
                                    var middle_name = response_2[0].middle_name;
                                    var last_name = response_2[0].last_name;
                                    var middle_initial = middle_name ? middle_name[0] + ". " : "";
                                    var name = first_name + " " + middle_initial + last_name;
                                    var mobile_number = response_2[0].mobile_number;
                                    var email = response_2[0].email;
                                    var house_number = response_2[0].house_number ? response_2[0].house_number + ", " : "";
                                    var subdivision_zone_purok = response_2[0].subdivision_zone_purok ? response_2[0].subdivision_zone_purok + ", " : "";
                                    var city = response_2[0].city;
                                    var province = response_2[0].province;
                                    var country = response_2[0].country;
                                    var zip_code = response_2[0].zip_code;
                                    var address = house_number + subdivision_zone_purok + city + ", " + province + ", " + country + ", " + zip_code;

                                    var formData = new FormData();

                                    formData.append('id', response.item_id);

                                    $.ajax({
                                        url: base_url + 'server/get_item_info',
                                        data: formData,
                                        type: 'POST',
                                        dataType: 'JSON',
                                        processData: false,
                                        contentType: false,
                                        success: function(response_3) {
                                            item_name = response_3[0].name;

                                            content += `
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p id="view_delivery_order_name">` + item_name + `</p>
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" class="form-control text-center" id="view_delivery_order_quantity_` + response.id + `" style="height: 25px !important;" readonly value="` + response.quantity + `">
                                                        </div>
                                                        <div class="col-3">
                                                            <p class="float-right">₱<span id="view_delivery_order_total_amount">` + response.total_amount + `</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            `;

                                            row.html(content);

                                            if (is_view_only == "true") {
                                                $("#btn_print_receipt").addClass("d-none");
                                            } else {
                                                $("#btn_print_receipt").removeClass("d-none");
                                            }

                                            $("#view_delivery_order_customer_name").text(name);
                                            $("#view_delivery_order_mobile_number").text(mobile_number);
                                            $("#view_delivery_order_email").text(email);
                                            $("#view_delivery_order_address").text(address);

                                            $("#view_delivery_order_subtotal").text(sub_total.toFixed(2));
                                            $("#view_delivery_order_tax").text(tax.toFixed(2));
                                            $("#view_delivery_order_total").text(total.toFixed(2));

                                            $("#view_delivery_order_tracking_id").val(tracking_id);

                                            $(".actual-form").removeClass("d-none");
                                            $(".loading").addClass("d-none");
                                        },
                                        error: function(xhr, status, error) {
                                            console.error(error);
                                        }
                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                }
                            });
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(document).on('click', '.view_delivery_order_set_status', function() {
                var tracking_id = $(this).attr("tracking_id");

                $(".actual-form").addClass("d-none");
                $(".loading").removeClass("d-none");

                $("#set_delivery_status").modal("show");

                var formData = new FormData();

                formData.append('tracking_id', tracking_id);

                $.ajax({
                    url: base_url + 'server/get_delivery_orders',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var customer_id = response[0].customer_id;
                        var delivery_status = response[0].delivery_status ? response[0].delivery_status : "Not Yet Available";

                        var formData = new FormData();

                        formData.append('id', customer_id);

                        $.ajax({
                            url: base_url + 'server/get_customer_data',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response_2) {
                                var first_name = response_2[0].first_name;
                                var middle_name = response_2[0].middle_name;
                                var last_name = response_2[0].last_name;
                                var middle_initial = middle_name ? middle_name[0] + ". " : "";
                                var name = first_name + " " + middle_initial + last_name;
                                var mobile_number = response_2[0].mobile_number;
                                var email = response_2[0].email;
                                var house_number = response_2[0].house_number ? response_2[0].house_number + ", " : "";
                                var subdivision_zone_purok = response_2[0].subdivision_zone_purok ? response_2[0].subdivision_zone_purok + ", " : "";
                                var city = response_2[0].city;
                                var province = response_2[0].province;
                                var country = response_2[0].country;
                                var zip_code = response_2[0].zip_code;
                                var address = house_number + subdivision_zone_purok + city + ", " + province + ", " + country + ", " + zip_code;

                                $("#set_delivery_status_tracking_id").text(tracking_id);
                                $("#set_delivery_status_name").text(name);
                                $("#set_delivery_status_mobile_number").text(mobile_number);
                                $("#set_delivery_status_email").text(email);
                                $("#set_delivery_status_address").text(address);
                                $("#set_delivery_status_delivery_status").text(delivery_status);

                                $("#set_delivery_status_set_tracking_id").val(tracking_id);
                                $("#set_delivery_status_set_status").val(delivery_status != "Not Yet Available" ? delivery_status : "");

                                $(".actual-form").removeClass("d-none");
                                $(".loading").addClass("d-none");
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#set_delivery_status_form").submit(function() {
                var status = $("#set_delivery_status_set_status").val();
                var description = $("#set_delivery_status_description").val();
                var tracking_id = $("#set_delivery_status_set_tracking_id").val();

                $("#set_delivery_status_submit").text("Processing Request...");
                $("#set_delivery_status_submit").attr("disabled", true);

                $("#set_delivery_status_set_status").attr("disabled", true);
                $("#set_delivery_status_description").attr("disabled", true);

                var formData = new FormData();

                formData.append('status', status);
                formData.append('description', description);
                formData.append('tracking_id', tracking_id);

                $.ajax({
                    url: base_url + 'server/update_delivery_status',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#track_order_form").submit(function() {
                var tracking_id = $("#track_order_tracking_id").val();

                var errors = 0;

                if (tracking_id.length != 14) {
                    $("#track_order_tracking_id").addClass("is-invalid");
                    $("#error_track_order_tracking_id").removeClass("d-none");

                    errors++;
                }

                if (errors == 0) {
                    $("#track_order_tracking_id").attr("disabled", true);
                    $("#track_order_submit").attr("disabled", true);
                    $("#track_order_submit").text("Processing Request...");

                    $(".loading").removeClass("d-none");
                    $(".no-data").addClass("d-none");
                    $(".tracking-results").addClass("d-none");

                    var content = "";
                    var tracking_details = $(".tracking-details");

                    var formData = new FormData();

                    formData.append('tracking_id', tracking_id);
                    formData.append('customer_id', user_id);

                    $.ajax({
                        url: base_url + 'server/get_tracking_data',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(responses) {
                            if (responses) {
                                $.each(responses, function(_, response) {
                                    var status = response.status;
                                    var iconClass;

                                    switch (status) {
                                        case "Order Confirmed":
                                            iconClass = "fas fa-check-square";
                                            break;
                                        case "Processing":
                                            iconClass = "fas fa-cog";
                                            break;
                                        case "Shipped/Dispatched":
                                            iconClass = "fas fa-truck";
                                            break;
                                        case "In Transit":
                                            iconClass = "fas fa-shipping-fast";
                                            break;
                                        case "Out for Delivery":
                                            iconClass = "fas fa-truck-loading";
                                            break;
                                        case "Delivered":
                                            iconClass = "fas fa-check-circle";
                                            break;
                                        case "Failed Delivery Attempt":
                                            iconClass = "fas fa-times-circle";
                                            break;
                                        case "Returned to Sender":
                                            iconClass = "fas fa-undo";
                                            break;
                                        case "Awaiting Pickup":
                                            iconClass = "fas fa-hand-paper";
                                            break;
                                        case "On Hold":
                                            iconClass = "fas fa-pause-circle";
                                            break;
                                        default:
                                            iconClass = "fas fa-question-circle";
                                    }

                                    content += `
                                        <li class="timeline-event">
                                            <div class="timeline-event-icon">
                                                <i class="` + iconClass + `"></i>
                                            </div>
                                            <div class="timeline-event-content ml-3">
                                                <h3 class="timeline-event-title">` + response.status + `</h3>
                                                <p class="timeline-event-date">` + formatDate(response.transaction_date) + `</p>
                                                <p class="timeline-event-desc">` + response.description + `</p>
                                            </div>
                                        </li>
                                    `;
                                })

                                tracking_details.html(content);

                                $(".tracking-results").removeClass("d-none");
                            } else {
                                $(".no-data").removeClass("d-none");
                            }

                            $(".loading").addClass("d-none");

                            $("#track_order_tracking_id").removeAttr("disabled");
                            $("#track_order_submit").removeAttr("disabled");
                            $("#track_order_submit").text("Track my Order");
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            })

            $("#track_order_tracking_id").keypress(function() {
                $("#track_order_tracking_id").removeClass("is-invalid");
                $("#error_track_order_tracking_id").addClass("d-none");
            })

            $("#btn_print_receipt").click(function() {
                var tracking_id = $("#view_delivery_order_tracking_id").val();

                $("#btn_print_receipt").text("Processing Request...");
                $("#btn_print_receipt").attr("disabled", true);

                var formData = new FormData();

                formData.append('tracking_id', tracking_id);

                $.ajax({
                    url: base_url + 'server/print_receipt',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $("#btn_print_receipt").html(`<i class="fas fa-print"></i>&nbsp;&nbsp;Print Receipt`);
                        $("#btn_print_receipt").removeAttr("disabled");

                        window.open(base_url + "admin/print_receipt", "_blank");
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(document).on('click', '.view_product', function() {
                var parent_tr = $(this).parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();
                var name = parent_tr.children("td.name").text();
                var category_id = parent_tr.children("td.category_id").text();
                var supplier_id = parent_tr.children("td.supplier_id").text();
                var description = parent_tr.children("td.description").text();
                var price = parent_tr.children("td.price").text();
                var cost_price = parent_tr.children("td.cost_price").text();
                var quantity = parent_tr.children("td.quantity").text();
                var image = parent_tr.children("td.image").text();

                $(".actual-form").addClass("d-none");
                $(".loading").removeClass("d-none");

                $("#view_product").modal("show");

                var formData = new FormData();

                formData.append('category_id', category_id);

                $.ajax({
                    url: base_url + 'server/get_category_data',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var category_name = response[0].name;

                        var formData = new FormData();

                        formData.append('supplier_id', supplier_id);

                        $.ajax({
                            url: base_url + 'server/get_supplier_data',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response_2) {
                                var supplier_name = response_2[0].name;

                                $("#view_product_image").attr("src", base_url + "dist/images/uploads/" + image);
                                $("#view_product_name").text(name);
                                $("#view_product_description").text(description);
                                $("#view_product_price").text(price);
                                $("#view_product_cost_price").text(cost_price);
                                $("#view_product_category").text(category_name);
                                $("#view_product_supplier").text(supplier_name);
                                $("#view_product_quantity").text(quantity);

                                $(".actual-form").removeClass("d-none");
                                $(".loading").addClass("d-none");
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(".view_message, .reply_message, .delete_message").on("click", function() {
                var parent_tr = $(this).parent("div.action-buttons").parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();

                $(this).closest('tr').removeClass('font-weight-bold');

                parent_tr.children("td.actn-btns").children("div.table-spinner").removeClass("d-none");
                parent_tr.children("td.actn-btns").children("div.action-buttons").addClass("d-none");

                var formData = new FormData();

                formData.append('id', id);

                $.ajax({
                    url: base_url + 'server/update_message_status',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var formData = new FormData();

                        formData.append('none', true);

                        $.ajax({
                            url: base_url + 'server/get_unread_messages',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response_2) {
                                if (response_2.length > 0) {
                                    $("#counter_unread_messages").text(response_2.length);
                                } else {
                                    $("#counter_unread_messages").addClass("d-none");
                                }

                                parent_tr.children("td.actn-btns").children("div.action-buttons").removeClass("d-none");
                                parent_tr.children("td.actn-btns").children("div.table-spinner").addClass("d-none");
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(document).on('click', '.view_message', function() {
                var parent_tr = $(this).parent("div.action-buttons").parent("td.text-center").parent("tr");
                var name = parent_tr.children("td.name").text();
                var message_date = parent_tr.children("td.message_date").text();
                var mobile_number = parent_tr.children("td.mobile_number").text();
                var email = parent_tr.children("td.email").text();
                var subject = parent_tr.children("td.subject").text();
                var message = parent_tr.children("td.message").text();

                $("#view_message_name").text(name);
                $("#view_message_date").text(formatDate(message_date));
                $("#view_message_mobile_number").text(mobile_number);
                $("#view_message_email").text(email);
                $("#view_message_subject").text(subject);
                $("#view_message_message").text(message);

                $("#view_message").modal("show");
            })

            $(document).on('click', '.delete_message', function() {
                var parent_tr = $(this).parent("div.action-buttons").parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var formData = new FormData();

                        formData.append('id', id);

                        $.ajax({
                            url: base_url + 'server/delete_message',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                location.href = base_url + current_tab;
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                });
            })

            $(document).on('click', '.reply_message', function() {
                var parent_tr = $(this).parent("div.action-buttons").parent("td.text-center").parent("tr");
                var id = parent_tr.children("td.id").text();
                var name = parent_tr.children("td.name").text();
                var email = parent_tr.children("td.email").text();

                $("#reply_message_email").val(email);
                $("#reply_message_name").val(name);
                $("#reply_message_subject").val("");
                $("#reply_message_message").val("");

                $("#reply_message").modal("show");
            })

            $("#reply_message_form").submit(function() {
                var name = $("#reply_message_name").val();
                var email = $("#reply_message_email").val();
                var subject = $("#reply_message_subject").val();
                var message = $("#reply_message_message").val();

                $(".actual-form").addClass("d-none");
                $(".loading").removeClass("d-none");

                $("#reply_message_subject").attr("disabled", true);
                $("#reply_message_message").attr("disabled", true);

                $("#reply_message_submit").attr("disabled", true);
                $("#reply_message_submit").text("Processing Request...");

                var formData = new FormData();

                formData.append('name', name);
                formData.append('email', email);
                formData.append('subject', subject);
                formData.append('message', message);

                $.ajax({
                    url: base_url + 'server/reply_with_email',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $(document).on('click', '.rate_order', function() {
                var order_id = $(this).attr("order_id");
                var item_id = $(this).attr("item_id");

                $('.actual-form').addClass("d-none");
                $('.loading').removeClass("d-none");

                $("#rate_order").modal("show");

                var formData = new FormData();

                formData.append('id', item_id);

                $.ajax({
                    url: base_url + 'server/get_item_info',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var item_name = response[0].name;
                        var item_description = response[0].description;
                        var item_image = response[0].image;

                        $('.star').removeClass('checked');
                        $('.star[data-rating="0"]').addClass('checked');
                        $('#rate_order_rating').val('0');
                        $('#rate_order_rating_text').text('0 Stars');
                        $('#rate_order_feedback').val('');
                        $('#rate_order_id').val(order_id);

                        $('#rate_order_item_name').text(item_name);
                        $('#rate_order_item_description').text(item_description);
                        $('#rate_order_item_image').attr("src", base_url + "dist/images/uploads/" + item_image);

                        $('.actual-form').removeClass("d-none");
                        $('.loading').addClass("d-none");
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $('.star').on('click', function() {
                var rating = $(this).data('rating');

                $('#rate_order_rating').val(rating);
                $('.star').removeClass('checked');
                $(this).prevAll('.star').addBack().addClass('checked');

                $('#rate_order_rating_text').text(rating + ' Stars');
            })

            $("#rate_order_form").submit(function() {
                var order_id = $("#rate_order_id").val();
                var rating = $("#rate_order_rating").val();
                var feedback = $("#rate_order_feedback").val();

                $('#rate_order_submit').attr("disabled", true);
                $('#rate_order_submit').text("Processing Request...");

                var formData = new FormData();

                formData.append('order_id', order_id);
                formData.append('rating', rating);
                formData.append('feedback', feedback);

                $.ajax({
                    url: base_url + 'server/rate_order',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab + "?category=to_rate";
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#btn_completed").click(function() {
                var formData = new FormData();

                formData.append('user_id', user_id);

                $.ajax({
                    url: base_url + 'server/update_unread_rated_orders',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + "customer/my_orders?category=completed";
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#from_date").change(function() {
                var from_date = $("#from_date").val();
                var to_date = $("#to_date").val();

                $("#from_date").removeClass("is-invalid");

                if (from_date <= to_date) {
                    $("#to_date").removeClass("is-invalid");
                }
            })

            $("#to_date").change(function() {
                var from_date = $("#from_date").val();
                var to_date = $("#to_date").val();

                $("#from_date").removeClass("is-invalid");

                if (from_date <= to_date) {
                    $("#to_date").removeClass("is-invalid");
                }
            })

            $("#btn_filter_date").click(function() {
                var from_date = $("#from_date").val();
                var to_date = $("#to_date").val();
                var sales_body = $("#sales_body");

                var content = "";
                var errors = 0;
                var total_sales = 0;

                if (to_date) {
                    to_date = new Date(to_date);
                    to_date.setDate(to_date.getDate() + 1);
                    to_date = to_date.toISOString().split('T')[0];
                }

                if (from_date > to_date) {
                    $("#from_date").addClass("is-invalid");
                    $("#to_date").addClass("is-invalid");

                    errors++;
                }

                if (from_date && !to_date) {
                    $("#to_date").addClass("is-invalid");

                    errors++;
                }

                if (!from_date && to_date) {
                    $("#from_date").addClass("is-invalid");

                    errors++;
                }

                if (errors == 0 && from_date && to_date) {
                    content = `
                        <tr class="odd">
                            <td colspan="4" class="dataTables_empty">
                                <div class="loading text-center py-5">
                                    <img src="` + base_url + `dist/images/loading.gif" alt="loading_gif" class="mb-3">
                                    <h5 class="text-muted">Please Wait...</h5>
                                </div>
                            </td>
                        </tr>
                    `;

                    $("#btn_filter_date").attr("disabled", true);
                    $("#btn_filter_date").text("Processing Request...");

                    var formData = new FormData();

                    formData.append('from_date', from_date);
                    formData.append('to_date', to_date);

                    $.ajax({
                        url: base_url + 'server/get_filtered_sales',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(responses) {
                            var total_sales = 0;

                            content = "";

                            if (responses) {
                                var ajaxRequests = [];

                                $.each(responses, function(_, response) {
                                    var total_amount = 0;

                                    var innerFormData = new FormData();

                                    innerFormData.append('id', response.customer_id);

                                    var innerAjaxRequest = $.ajax({
                                        url: base_url + 'server/get_userdata',
                                        data: innerFormData,
                                        type: 'POST',
                                        dataType: 'JSON',
                                        processData: false,
                                        contentType: false,
                                        success: function(response_2) {
                                            total_amount = parseFloat(response.total_amount) + (parseFloat(response.total_amount) * 0.12);

                                            content += `
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="view_delivery_order" is_view_only="true" tracking_id="` + response.tracking_id + `">` + response.tracking_id + `</a>
                                                    </td>
                                                    <td>` + formatDate(response.transaction_date) + `</td>
                                                    <td>` + response_2[0].name + `</td>
                                                    <td>₱` + formatNumberWithCommas(total_amount.toFixed(2)) + `</td>
                                                </tr>
                                            `;

                                            total_sales += parseFloat(response.total_amount);
                                        },
                                        error: function(xhr, status, error) {
                                            console.error(error);
                                        }
                                    });

                                    ajaxRequests.push(innerAjaxRequest);
                                });

                                $.when.apply($, ajaxRequests).done(function() {
                                    total_sales = total_sales + (total_sales * 0.12);

                                    content += `
                                        <tr class="table-primary">
                                            <td></td>
                                            <td></td>
                                            <td><strong>Total Sales</strong></td>
                                            <td><strong>₱` + formatNumberWithCommas(total_sales.toFixed(2)) + `</strong></td>
                                        </tr>
                                    `;

                                    $("#btn_filter_date").removeAttr("disabled");
                                    $("#btn_filter_date").text("Filter");

                                    sales_body.html(content);
                                });
                            } else {
                                $("#btn_filter_date").removeAttr("disabled");
                                $("#btn_filter_date").text("Filter");

                                content = `
                                    <tr class="odd">
                                        <td valign="top" colspan="4" class="dataTables_empty">No data available in table</td>
                                    </tr>
                                `;

                                sales_body.html(content);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });

                }
            })

            $("#btn_filter_date_chart").click(function() {
                var date_input = $("#date_input").val();
                const dateObject = new Date(date_input + "-01");
                const month = dateObject.getMonth() + 1;
                const year = dateObject.getFullYear();

                $("#btn_filter_date_chart").attr("disabled", true);
                $("#btn_filter_date_chart").text("Processing...");

                $(".actual-form").addClass("d-none");
                $(".loading").addClass("d-flex");
                $(".loading").removeClass("d-none");

                populate_chart(month, year);
            })

            function populate_chart(input_month, input_year) {
                var formData = new FormData();

                formData.append('month', input_month);
                formData.append('year', input_year);

                $.ajax({
                    url: base_url + 'server/get_sales_data',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(responses) {
                        var total_sales = 0;

                        $.each(responses, function(_, response) {
                            total_sales += parseFloat(response.total_sales);
                        })

                        total_sales = total_sales + (total_sales * 0.12);

                        $("#btn_filter_date_chart").removeAttr("disabled");
                        $("#btn_filter_date_chart").text("Filter");

                        $(".actual-form").removeClass("d-none");
                        $(".loading").addClass("d-none");
                        $(".loading").removeClass("d-flex");

                        $("#total_sales").text(total_sales.toFixed(2));

                        createChart(responses, input_month, input_year);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            function createChart(data, input_month, input_year) {
                var display_month = monthNames[input_month - 1];
                var display_year = input_year.toString();

                var taxedData = data.map(item => {
                    return {
                        day_of_month: item.day_of_month,
                        total_sales: (parseFloat(item.total_sales) * 1.12).toFixed(2)
                    };
                });

                var salesData = {
                    labels: taxedData.map(item => formatDate_2(item.day_of_month)),
                    datasets: [{
                        label: 'Daily Sales',
                        borderColor: 'rgb(75, 192, 192)',
                        data: taxedData.map(item => parseFloat(item.total_sales))
                    }]
                };

                var ctx = document.getElementById('salesChart').getContext('2d');

                var salesChart = new Chart(ctx, {
                    type: 'line',
                    data: salesData,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        title: {
                            display: true,
                            text: 'Sales for the Month of ' + display_month + " " + display_year
                        },
                        scales: {
                            xAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Days'
                                }
                            }],
                            yAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Sales (₱)'
                                },
                                ticks: {
                                    callback: function(value, index, values) {
                                        return '₱' + value.toFixed(2);
                                    }
                                }
                            }]
                        }
                    }
                });
            }

            function formatNumberWithCommas(number) {
                return parseFloat(number).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            function getCheckedOrderIds() {
                const checkedOrderIds = $('.selected_item:checked').map(function() {
                    return $(this).data('order_id');
                }).get();

                return checkedOrderIds;
            }

            function addZeros(str) {
                const zerosToAdd = 5 - str.length;

                if (zerosToAdd > 0) {
                    const zeros = '0'.repeat(zerosToAdd);
                    return zeros + str;
                }

                return str;
            }

            function verify_password(password, confirm_password, password_error_label) {
                var error = 0;
                var error_message = "";

                if (password.val() || confirm_password.val()) {
                    if (!/[A-Z]/.test(password.val())) {
                        error_message = "Password must have at least one uppercase letter (A-Z)";

                        error++;
                    }

                    if (!/[a-z]/.test(password.val())) {
                        error_message = "Password must have at least one lowercase letter (a-z)";

                        error++;
                    }

                    if (!/[0-9]/.test(password.val())) {
                        error_message = "Password must have at least one digit (0-9)";

                        error++;
                    }

                    if (!/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password.val())) {
                        error_message = "Password must have at least one special character (e.g., !@#$%^&*()_+-=[]{};':\"\\|,.<>/?)";

                        error++;
                    }

                    if (password.val().length < 8) {
                        error_message = "Password must be at least 8 characters long";

                        error++;
                    }

                    if (password.val() != confirm_password.val()) {
                        error_message = "Passwords do not match";

                        error++;
                    }
                }

                if (error > 0) {
                    password_error_label.html(error_message);
                    password_error_label.removeClass("d-none");

                    password.addClass("is-invalid");
                    confirm_password.addClass("is-invalid");

                    return false;
                } else {
                    return true;
                }
            }

            function verify_mobile_number(mobile_number, mobile_number_error_label) {
                var error_message = "";

                error = 0;

                mobile_number_input = mobile_number;
                mobile_number = mobile_number.val().replace(/[^\d]/g, '');

                var validPrefix = ['09'];
                var prefix = mobile_number.substr(0, 2);

                if (mobile_number.length !== 11) {
                    error_message = "Mobile Number must be 11 digits long";

                    error++;
                }

                if (!validPrefix.includes(prefix)) {
                    error_message = "Mobile Number must start with '09'";

                    error++;
                }

                if (error == 0) {
                    return true;
                } else {
                    mobile_number_input.addClass("is-invalid");
                    mobile_number_error_label.removeClass("d-none");
                    mobile_number_error_label.html(error_message);

                    return false;
                }
            }

            function sweetalert(alert) {
                if (alert.length != 0) {
                    Swal.fire(
                        alert["title"],
                        alert["message"],
                        alert["type"]
                    );
                }
            }

            function login_alert(login_message) {
                if (login_message) {
                    var Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000
                    });

                    Toast.fire({
                        icon: 'info',
                        title: '' + login_message
                    });
                }
            }

            function formatDate(inputDate) {
                const months = [
                    'January', 'February', 'March', 'April', 'May', 'June', 'July',
                    'August', 'September', 'October', 'November', 'December'
                ];

                const dateObj = new Date(inputDate);
                const month = months[dateObj.getMonth()];
                const day = dateObj.getDate();
                const year = dateObj.getFullYear();
                let hours = dateObj.getHours();
                const minutes = (dateObj.getMinutes() < 10 ? '0' : '') + dateObj.getMinutes();
                const meridiem = hours >= 12 ? 'PM' : 'AM';

                hours = hours % 12;
                hours = hours ? hours : 12;

                const formattedDate = `${month} ${day}, ${year} ${hours}:${minutes} ${meridiem}`;

                return formattedDate;
            }

            function formatDate_2(dateString) {
                var date = new Date(dateString);
                return date.toLocaleDateString('en-US', {
                    month: 'numeric',
                    day: 'numeric'
                });
            }
        })
    </script>
    </div>

    <?php $this->session->unset_userdata("alert"); ?>
    <?php $this->session->unset_userdata("login_message"); ?>

    </body>

    </html>