    <!-- Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="<?= base_url() ?>">WEBJ Dream Corporation</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
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
                        <button type="submit" class="btn btn-success" id="new_category_submit">Submit</button>
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
                        <button type="submit" class="btn btn-success" id="update_category_submit">Update</button>
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
                        <button type="submit" class="btn btn-success" id="new_supplier_submit">Submit</button>
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
                        <button type="submit" class="btn btn-success" id="update_supplier_submit">Submit</button>
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
                                    <label for="new_product_price" class="form-label">Price <span class="text-danger">*</span></label>
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
                        <button type="submit" class="btn btn-success" id="new_product_submit">Submit</button>
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
                                    <label for="update_product_price" class="form-label">Price <span class="text-danger">*</span></label>
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
                        <button type="submit" class="btn btn-success" id="update_product_submit">Submit</button>
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
                            <button type="submit" class="btn btn-success d-none" id="customer_details_submit">Submit</button>
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
                            <div class="col-md-5">
                                <img id="view_order_image" src="<?= base_url() ?>dist/images/uploads/1_1.png" class="img-fluid img-bordered" style="width: 100%; height: 100%;" alt="Product Image">
                            </div>
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Order Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <p><strong>Order ID:</strong> <span id="view_order_id">123456</span></p>
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

            $(".nav-link").click(function() {
                $(this).children(".tab_spinner").attr("class", "spinner-border spinner-border-sm text-success float-right tab_spinner");
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
                var price = parent_tr.children("td.price").text();
                var cost_price = parent_tr.children("td.cost_price").text();
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
                var error_message = null;

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
                var error_message = null;

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
        })
    </script>
    </div>

    <?php $this->session->unset_userdata("alert"); ?>
    <?php $this->session->unset_userdata("login_message"); ?>

    </body>

    </html>