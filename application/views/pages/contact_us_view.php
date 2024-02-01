<?php
$isLocalhost = false;

if ($_SERVER['HTTP_HOST'] === 'localhost' || substr($_SERVER['HTTP_HOST'], 0, 9) === '127.0.0.1' || substr($_SERVER['HTTP_HOST'], 0, 3) === '::1') {
    $isLocalhost = true;
}
?>

<div class="container">
    <div class="w3_login">
        <h3>Contact Us</h3>
        <br>
        <div class="panel-body">
            <div class="col-md-5 agileinfo_mail_grid_left">
                <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i></li>
                    <li>address<span>Milaor, Camarines Sur</span></li>
                </ul>
                <ul>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                    <li>email<span><a href="mailto:webjdreamcorp@gmail.com">webjdreamcorp@gmail.com</a></span></li>
                </ul>
                <ul>
                    <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                    <li>call to us<span>(054) 473 53 85</span></li>
                </ul>
            </div>
            <div class="col-md-7 agileinfo_mail_grid_right_2">
                <div class="container">
                    <div class="row">
                        <form action="javascript:void(0)" id="contact_us_form">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 mb-sm-3">
                                            <input type="text" id="contact_us_name" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" id="contact_us_email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 mb-sm-3">
                                            <input type="text" id="contact_us_mobile_number" class="form-control is-invalid" placeholder="Mobile Number" required>
                                            <small class="hidden" style="color: red;" id="error_contact_us_mobile_number">Invalid Mobile Number</small>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" id="contact_us_subject" class="form-control" placeholder="Subject" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_us_message" class="form-control" placeholder="Message" rows="4" required></textarea>
                                </div>
                                <div class="form-group pull-right">
                                    <input type="reset" id="contact_us_clear" class="btn btn-default" value="Clear">
                                    <input type="submit" id="contact_us_submit" class="btn btn-primary" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<?php if (!$isLocalhost) : ?>
    <div class="map">
        <iframe id="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.0102160563115!2d123.17512443102692!3d13.596188042484982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a18c8420312c83%3A0x983350eb68bffa61!2sMunicipality%20of%20Milaor!5e0!3m2!1sen!2ssg!4v1705586569877!5m2!1sen!2ssg" style="border:0"></iframe>
    </div>
<?php else : ?>
    <img id="offline-image" src="<?= base_url() ?>dist/images/offline_map.png" alt="Offline Image" style="width: 100%;">
<?php endif ?>