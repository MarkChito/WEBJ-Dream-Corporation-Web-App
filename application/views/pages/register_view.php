<div class="container">
    <div class="w3_login">
        <h3>Create an Account</h3>
        <br>
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="javascript:void(0)" id="register_form">
                    <div class="text-center">
                        <img id="register_image_display" class="img-circle img-bordered" width="200" height="200" src="./dist/images/uploads/default_user_image.png">

                        <button type="button" class="btn btn-success" id="register_upload_button" style="width: 100%; margin-top: 10px; display:block;">Upload Image</button>
                        <input type="file" id="register_image" style="display: none;">
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_first_name">First Name: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="register_first_name" required>
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_middle_name">Middle Name:</label>
                            <input type="text" class="form-control" id="register_middle_name">
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_last_name">Last Name: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="register_last_name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6 col-12">
                            <label for="register_mobile_number">Mobile Number: <span style="color: red;">*</span></label>
                            <input type="number" class="form-control" id="register_mobile_number" required>
                            <small class="hidden" style="color: red;" id="error_register_mobile_number"></small>
                        </div>
                        <div class="form-group col-lg-6 col-12">
                            <label for="register_email">Email: <span style="color: red;">*</span></label>
                            <input type="email" class="form-control" id="register_email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_house_number">House Number:</label>
                            <input type="number" class="form-control" id="register_house_number">
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_subdivision_zone_purok">Subdivision/Zone/Purok:</label>
                            <input type="text" class="form-control" id="register_subdivision_zone_purok">
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_city">City/Municipality: <span style="color: red;">*</span></label>
                            <select class="form-control" id="register_city" required>
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
                    <div class="row">
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_province">Province: <span style="color: red;">*</span></label>
                            <select class="form-control" id="register_province" required disabled>
                                <option value="" selected disabled>Choose...</option>
                                <option value="Camarines Sur">Camarines Sur</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_country">Country: <span style="color: red;">*</span></label>
                            <select class="form-control" id="register_country" required disabled>
                                <option value="" selected disabled>Choose...</option>
                                <option value="Philippines">Philippines</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_zip_code">Zip Code: <span style="color: red;">*</span></label>
                            <input type="number" class="form-control" id="register_zip_code" readonly required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_username">Username: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="register_username" required>
                            <small class="hidden" style="color: red;" id="error_register_username"></small>
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_password">Password: <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" id="register_password" required>
                            <small class="hidden" style="color: red;" id="error_register_password"></small>
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="register_confirm_password">Confirm Password: <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" id="register_confirm_password" required>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" id="register_submit" value="Register" style="width: 49%;">
                    <input type="reset" class="btn btn-danger" id="register_clear" value="Clear" style="width: 49%; float: right;">
                </form>
            </div>
        </div>
    </div>
</div>