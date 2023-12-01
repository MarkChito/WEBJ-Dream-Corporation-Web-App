    <!-- Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="<?= base_url() ?>">WEBJ Dream Corporation</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>

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
                            <label for="new_category_name" class="form-label">Name</label>
                            <input type="text" id="new_category_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="new_category_description" class="form-label">Description</label>
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
                            <label for="update_category_name" class="form-label">Name</label>
                            <input type="text" id="update_category_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="update_category_description" class="form-label">Description</label>
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
            })

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
        })
    </script>
    </div>

    <?php $this->session->unset_userdata("alert"); ?>
    <?php $this->session->unset_userdata("login_message"); ?>

    </body>

    </html>