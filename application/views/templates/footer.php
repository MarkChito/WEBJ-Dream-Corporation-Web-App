    <!-- Alert Modal -->
    <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="loginModalLabel">
                        <?= $this->session->userdata("alert")["title"] ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <div style="height: 50px;">
                        <h3 style="margin-top: 25px;" class="text-center <?= $this->session->userdata("alert")["type"] == "success" ? "text-success" : "text-danger" ?>">
                            <span class="glyphicon glyphicon-<?= $this->session->userdata("alert")["type"] == "success" ? "check" : "exclamation-sign" ?>" aria-hidden="true"></span>
                            <?= $this->session->userdata("alert")["message"] ?>
                        </h3>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Login or Register</h4>
                </div>
                <form action="javascript:void(0)" id="login_form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="login_username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="login_username" required>
                        </div>
                        <div class="form-group">
                            <label for="login_password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="login_password" required>
                        </div>

                        <span>Don't have an account? </span><a href="register">Register Now!</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="login_btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="w3agile_newsletter_left">
                <h3>sign up for our newsletter</h3>
            </div>
            <div class="w3agile_newsletter_right">
                <form action="javascript:void(0)" id="newsletter_form">
                    <input type="email" id="newsletter_email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" autocomplete="true" required>
                    <input type="submit" id="newsletter_submit" value="subscribe now">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <!-- Information -->
            <div class="col-md-4 w3_footer_grid">
                <h3>information</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="./">Home</a></li>
                    <li><a href="about_us">About Us</a></li>
                    <li><a href="products">Products</a></li>
                </ul>
            </div>
            <!-- Policy Info -->
            <div class="col-md-4 w3_footer_grid">
                <h3>policy info</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="faqs">FAQ</a></li>
                    <li><a href="privacy_policy">privacy policy</a></li>
                    <li><a href="terms_of_use">terms of use</a></li>
                </ul>
            </div>
            <div class="col-md-4 w3_footer_grid">
                <h3>what's in our store</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="products">All Products</a></li>
                    <?php $categories = $this->model->MOD_GET_PRODUCT_CATEGORIES() ?>
                    <?php if ($categories) : ?>
                        <?php $category_count = 0 ?>
                        <?php foreach ($categories as $category) : ?>
                            <?php if ($category_count < 2) : ?>
                                <li><a href="products?category=<?= $category->id ?>"><?= $category->name ?></a></li>
                            <?php endif ?>

                            <?php $category_count++; ?>
                        <?php endforeach ?>
                    <?php endif ?>
                </ul>
            </div>
            <div class="clearfix"></div>
            <!-- What's in Our Store -->
            <div class="agile_footer_grids">
                <div class="col-md-12 w3_footer_grid agile_footer_grids_w3_footer">
                    <div class="w3_footer_grid_bottom">
                        <h5>connect with us</h5>
                        <ul class="agileits_social_icons">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- All Rights Reserved -->
            <div class="wthree_footer_copy">
                <p>© 2023 WEBJ Dream Corporation. All rights reserved.</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="./dist/js/bootstrap.min.js"></script>
    <!-- WMUSlider JS -->
    <script src="./dist/js/jquery.wmuSlider.js"></script>

    <!-- Custom Javascript -->
    <script>
        $(document).ready(function() {
            var alert = <?= $this->session->userdata("alert") ? json_encode($this->session->userdata("alert")) : json_encode(array()) ?>;
            var current_tab = "<?= $this->session->userdata("current_tab") ?>";
            var base_url = "<?= base_url() ?>";

            if (alert.length != 0) {
                $("#alert").modal().show();
            }

            $(".testimonial").wmuSlider();

            $().UItoTop({
                easingType: 'easeOutQuart'
            })

            $("#login_form").submit(function() {
                var username = $("#login_username").val();
                var password = $("#login_password").val();

                $("#login_username").attr("disabled", true);
                $("#login_password").attr("disabled", true);

                $("#login_btn").text("Processing Request...");
                $("#login_btn").attr("disabled", true);

                var formData = new FormData();

                formData.append('username', username);
                formData.append('password', password);

                $.ajax({
                    url: 'server/login',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response) {
                            location.href = base_url + "admin/dashboard";
                        } else {
                            location.href = base_url + current_tab;
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            })

            $("#newsletter_form").submit(function() {
                var email = $("#newsletter_email").val();

                $("#newsletter_submit").val("Processing...");
                $("#newsletter_submit").attr("disabled", true);

                var formData = new FormData();

                formData.append('email', email);

                $.ajax({
                    url: 'server/add_newsletter_email',
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

            $("#contact_us_form").submit(function() {
                var name = $("#contact_us_name").val();
                var mobile_number = $("#contact_us_mobile_number").val();
                var email = $("#contact_us_email").val();
                var subject = $("#contact_us_subject").val();
                var message = $("#contact_us_message").val();

                $("#contact_us_name").attr("disabled", true);
                $("#contact_us_mobile_number").attr("disabled", true);
                $("#contact_us_email").attr("disabled", true);
                $("#contact_us_subject").attr("disabled", true);
                $("#contact_us_message").attr("disabled", true);

                $("#contact_us_submit").val("Processing Request...");
                $("#contact_us_submit").attr("disabled", true);
                $("#contact_us_reset").attr("disabled", true);

                var formData = new FormData();

                formData.append('name', name);
                formData.append('mobile_number', mobile_number);
                formData.append('email', email);
                formData.append('subject', subject);
                formData.append('message', message);

                $.ajax({
                    url: 'server/add_contact_message',
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

            $('#register_upload_button').click(function() {
                $('#register_image').click();
            })
        });
    </script>

    <?php $this->session->unset_userdata("alert"); ?>

    </body>

    </html>