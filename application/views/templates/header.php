<?php
function isMobileDevice()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $mobileKeywords = array(
        'Android', 'iPhone', 'iPad', 'Windows Phone', 'Mobile Safari', 'BlackBerry', 'Opera Mini', 'Symbian', 'Kindle', 'Mobile'
    );

    foreach ($mobileKeywords as $keyword) {
        if (strpos($userAgent, $keyword) !== false) {
            return true;
        }
    }

    return false;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />

    <title>WEBJ Dream Corporation <?= $this->session->userdata("title") ?></title>

    <link rel="shortcut icon" href="./dist/images/favicon.png" type="image/x-icon">

    <link href="./dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./dist/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />

    <script src="./dist/js/jquery-1.11.1.min.js"></script>
    <script src="./dist/js/move-top.js"></script>
    <script src="./dist/js/easing.js"></script>
    <script>
        $(document).ready(function() {
            var navoffeset = $(".agileits_header").offset().top;

            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }

            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });

            $(window).scroll(function() {
                var scrollpos = $(window).scrollTop();
                if (scrollpos >= navoffeset) {
                    $(".agileits_header").addClass("fixed");
                } else {
                    $(".agileits_header").removeClass("fixed");
                }
            });
        });
    </script>
</head>

<body>
    <!-- Header -->
    <div class="agileits_header">
        <!-- Contact Us -->
        <div class="w3l_offers">
            <a href="contact_us">Contact Us</a>
        </div>
        <!-- Search -->
        <div class="w3l_search">
            <?php if ($this->session->userdata("id")) : ?>
                <form action="javascript:void(0)" method="post" id="search_form">
                    <input type="text" id="search_query" placeholder="Search a product..." required>
                    <input type="submit" value=" ">
                </form>
            <?php else : ?>
                <button class="btn_view_products">View Products</button>
            <?php endif ?>
        </div>
        <!-- Cart -->
        <div class="product_list_header">
            <div class="cart-button-wrapper">
                <input type="button" value="View your cart" class="button <?= $this->session->userdata("id") ? null : "login_or_register" ?>" id="<?= $this->session->userdata("id") && $this->session->userdata("user_type") == "customer" ? "view_cart" : null ?>" login_location="customer/my_orders" />
                <span class="badge-on-button hidden" id="cart_count">0</span>
            </div>
        </div>
        <!-- Login or Register -->
        <div class="w3l_header_right1">
            <?php if ($this->session->userdata("id")) : ?>
                <h2><a href="<?= $this->session->userdata("user_type") ?>/dashboard">Go to Dashboard</a></h2>
            <?php else : ?>
                <h2><a href="javascript:void(0)" class="login_or_register" login_location="customer/dashboard">Login or Register</a></h2>
            <?php endif ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Logo Products -->
    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left">
                <h1><a href="<?= base_url() ?>"><span>WEBJ Dream Corporation</span> <?= isMobileDevice() ? "Hello" : "Welcome" ?></a></h1>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="special_items">
                    <li>
                        <a href="<?= base_url() ?>"><span style="color: <?= $this->session->userdata("current_tab") == 'home' ? 'red' : 'default' ?> !important; font-size: larger;">Home</span></a><i>/</i>
                    </li>
                    <li>
                        <a href="about_us"><span style="color: <?= $this->session->userdata("current_tab") == 'about_us' ? 'red' : 'default' ?> !important; font-size: larger;">About Us</span></a><i>/</i>
                    </li>
                    <li>
                        <a href="products"><span style="color: <?= $this->session->userdata("current_tab") == 'products' ? 'red' : 'default' ?> !important; font-size: larger;">Products</span></a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <?php if ($this->session->userdata("current_tab") != "home") : ?>
        <div class="products-breadcrumb">
            <div class="container">
                <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?= base_url() ?>">Home</a><span>|</span></li>

                    <?php if ($this->input->get("category") || $this->input->get("item_id")) : ?>
                        <li><a href="<?= base_url() ?>products">All Products</a><span>|</span></li>
                        <?php if ($this->input->get("item_id")) : ?>
                            <li><a href="<?= base_url() ?>products?category=<?= $this->input->get("category") ?>"><?= $category_name ?></a><span>|</span></li>
                        <?php endif ?>
                    <?php endif ?>

                    <?php if ($this->session->userdata("search_query")) : ?>
                        <li><a href="<?= base_url() ?>products">All Products</a><span>|</span></li>
                    <?php endif ?>

                    <li><?= $this->session->userdata("current_page") ?></li>
                </ul>
            </div>
        </div>
    <?php endif ?>

    <!-- Banner -->
    <div class="banner">
        <!-- Side Navigation -->
        <?php if ($this->session->userdata("current_tab") != "contact_us" && $this->session->userdata("current_tab") != "register" && $this->session->userdata("current_tab") != "about_us" && $this->session->userdata("current_tab") != "product") : ?>
            <div class="w3l_banner_nav_left">
                <nav class="navbar nav_bottom">
                    <!-- Mobile Navigation -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Categories -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <?php $categories = $this->model->MOD_GET_PRODUCT_CATEGORIES() ?>
                            <?php $limit = 6; ?>
                            <?php if ($categories) : ?>
                                <?php $count = 0; ?>
                                <?php foreach ($categories as $category) : ?>
                                    <?php if ($count < $limit) : ?>
                                        <li style="background-color: <?= $this->input->get("category") && $this->input->get("category") == $category->id ? "#84C639" : "default" ?>;">
                                            <a href="products?category=<?= $category->id ?>" style="color: <?= $this->input->get("category") && $this->input->get("category") == $category->id ? "white" : "default" ?>;">
                                                <?= $category->name ?>
                                            </a>
                                        </li>
                                    <?php endif ?>
                                    <?php $count++; ?>
                                <?php endforeach ?>

                                <?php if (count($categories) > $limit) : ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($categories as $category) : ?>
                                                <li>
                                                    <a href="products?category=<?= $category->id ?>">
                                                        <?= $category->name ?>
                                                    </a>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </li>
                                <?php endif ?>
                            <?php endif ?>
                        </ul>
                    </div>
                </nav>
            </div>
        <?php endif ?>
        <?php if ($this->session->userdata("current_tab") == "home") : ?>
            <div class="w3l_banner_nav_right">
                <div class="w3l_banner_nav_right_banner3" style="background: url(./dist/images/banner-9.jpg);">
                    <h3>Best Deals For New Products<span class="blink_me"></span></h3>
                </div>
            </div>
        <?php elseif ($this->session->userdata("current_tab") == "product") : ?>
            <div class="w3l_banner_nav_right">
                <div class="agileinfo_single">
                    <h5><?= $product_name ?></h5>
                    <div class="col-md-4 agileinfo_single_left"><img src="./dist/images/uploads/<?= $product_image ?>" style="width: 320px; height: 320px" class="img-responsive" /></div>
                    <div class="col-md-8 agileinfo_single_right">
                        <div class="w3agile_description">
                            <h4>Description :</h4>
                            <p><?= $product_description ?></p>
                        </div>
                        <div class="snipcart-item block">
                            <div class="snipcart-thumb agileinfo_single_right_snipcart">
                                <strong>Price:</strong> <span>₱<?= $product_price ?></span>
                            </div>
                            <div class="snipcart-details agileinfo_single_right_details">
                                <input type="submit" value="Add to cart" class="button <?= $this->session->userdata("id") ? "add_to_cart" : "login_or_register" ?>" product_id="<?= $product_id ?>" product_name="<?= $product_name ?>" product_price="<?= $product_price ?>" product_image="<?= $product_image ?>" login_location="<?= $this->session->userdata("current_tab") ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        <?php elseif ($this->session->userdata("current_tab") == "faqs") : ?>
            <div class="w3l_banner_nav_right">
                <div class="faq">
                    <h3>FAQ's</h3>
                    <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>What products/services does your company offer?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body panel_text">
                                    We specialize in [describe products/services], catering to [specific customer needs].
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>How can I place an order?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body panel_text">
                                    Orders can be placed through our website, via phone, or by visiting our physical store locations.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>What are your accepted payment methods?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body panel_text">
                                    We accept various payment methods including credit/debit cards, cash, and electronic transfers.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>What is your return policy?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body panel_text">
                                    Our return policy allows for returns within [number of days] of purchase, provided the product is in its original condition. Please refer to our Return Policy page for detailed information.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>How can I track my order?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body panel_text">
                                    Once your order is processed, you will receive a tracking number via email or SMS. You can use this number to track your order on our website.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Do you offer international shipping?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body panel_text">
                                    At the moment, we only offer shipping within [specified region/country]. We are exploring options for international shipping in the near future.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Are your products eco-friendly/sustainably sourced?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body panel_text">
                                    We are committed to sustainability and strive to source our products ethically and responsibly. Our eco-friendly initiatives include [describe initiatives].
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Do you have a customer loyalty program?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body panel_text">
                                    Yes, we have a customer loyalty program where you can earn points on purchases and redeem them for discounts or exclusive offers.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>How can I contact your customer support?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body panel_text">
                                    You can reach our customer support team via phone, email, or through the contact form on our website. Our support hours are [specified hours].
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headinTen">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Are there bulk order discounts available?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                <div class="panel-body panel_text">
                                    Yes, we offer discounts on bulk orders. Please get in touch with our sales team to discuss specific bulk pricing options and arrangements.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($this->session->userdata("current_tab") == "privacy_policy") : ?>
            <div class="w3l_banner_nav_right">
                <div class="privacy">
                    <div class="privacy1">
                        <h3>Privacy Policy</h3>
                        <div class="banner-bottom-grid1 privacy1-grid">
                            <ul>
                                <li>Information Collection
                                    <span>We may collect personal identification information from users in various ways, including but not limited to when users visit our site, register on the site, place an order, subscribe to our newsletter, respond to a survey, fill out a form, or interact with our services. The information collected may include, but is not limited to, name, email address, mailing address, phone number, and payment details.</span>
                                </li>
                            </ul>
                            <ul>
                                <li>How We Use Collected Information
                                    <span>1. To personalize user experience: We may use information in the aggregate to understand how our users as a group use the services and resources provided on our site.</span>
                                    <span>2. To improve customer service: Information you provide helps us respond to your customer service requests and support needs more efficiently.</span>
                                    <span>3. To process transactions: We may use the information users provide about themselves when placing an order only to provide service to that order.</span>
                                    <span>4. To send periodic emails: We may use the email address to send information and updates pertaining to their order or other requests. It may also be used to respond to their inquiries, questions, and/or other requests.</span>
                                </li>
                            </ul>
                            <ul>
                                <li>Protection of Information
                                    <span>We adopt appropriate data collection, storage, and processing practices and security measures to protect against unauthorized access, alteration, disclosure, or destruction of your personal information, username, password, transaction information, and data stored on our site.</span>
                                </li>
                            </ul>
                            <ul>
                                <li>Sharing Personal Information
                                    <span>We do not sell, trade, or rent users' personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates, and advertisers for the purposes outlined above.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($this->session->userdata("current_tab") == "terms_of_use") : ?>
            <div class="w3l_banner_nav_right">
                <div class="privacy">
                    <div class="privacy1">
                        <h3>Terms of Use</h3>
                        <div class="banner-bottom-grid1 privacy2-grid">
                            <div class="privacy2-grid1">
                                <h4>What are these?</h4>
                                <p>These Terms of Use ("Terms") govern your use of WEBJ Dream Corporation's website webjdreamcorp.ssytem.online and any related services, features, content, or applications (collectively referred to as the "Service"). By accessing or using the Service, you agree to comply with these Terms. If you do not agree to these Terms, please refrain from using the Service.</p>
                                <div class="privacy2-grid1-sub">
                                    <h5>1. Use of the Service</h5>
                                    <p>A. You must be at least 18 years old or have reached the age of majority in your jurisdiction to use this Service.</p>
                                    <p>B. You agree to use the Service only for lawful purposes and in a manner consistent with all applicable local, national, and international laws and regulations.</p>
                                    <p>C You are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer or device.</p>
                                </div>
                                <div class="privacy2-grid1-sub">
                                    <h5>2.Intellectual Property Rights</h5>
                                    <p>A. All content, trademarks, logos, service marks, and other intellectual property displayed on the Service are the property of WEBJ Dream Corporation or their respective owners.</p>
                                    <p>B. You may not modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer, or sell any information, software, products, or services obtained from the Service without prior written permission.</p>
                                </div>
                                <div class="privacy2-grid1-sub">
                                    <h5>3. Disclaimer of Warranties</h5>
                                    <p>A. The Service is provided on an "as is" and "as available" basis without warranties of any kind, either express or implied.</p>
                                    <p>B. WEBJ Dream Corporation does not warrant that the Service will be uninterrupted, error-free, secure, or free of viruses or other harmful components.</p>
                                </div>
                                <div class="privacy2-grid1-sub">
                                    <h5>4. Limitation of Liability</h5>
                                    <p>WEBJ Dream Corporation shall not be liable for any direct, indirect, incidental, special, consequential, or punitive damages, including but not limited to damages for lost profits, goodwill, use, data, or other intangible losses resulting from the use or inability to use the Service.</p>
                                </div>
                                <div class="privacy2-grid1-sub">
                                    <h5>5. Governing Law</h5>
                                    <p>These Terms shall be governed by and construed in accordance with the laws of the Philippines, without regard to its conflict of law principles.</p>
                                </div>
                                <div class="privacy2-grid1-sub">
                                    <h5>6. Changes to Terms</h5>
                                    <p>WEBJ Dream Corporation reserves the right to update, modify, or replace these Terms at any time. Your continued use of the Service after any changes indicate your acceptance of the updated Terms.</p>
                                </div>
                                <div class="privacy2-grid1-sub">
                                    <h5>7. Contact Information</h5>
                                    <p>If you have any questions or concerns about these Terms, please contact us at webjdreamcorp@gmail.com.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <?php if ($this->session->userdata("current_tab") != "contact_us" && $this->session->userdata("current_tab") != "register" && $this->session->userdata("current_tab") != "about_us" && $this->session->userdata("current_tab") != "product") : ?>
                <div class="w3l_banner_nav_right">
                    <div class="w3l_banner_nav_right_banner3" style="background: url(./dist/images/banner-9.jpg)">
                        <h3>Best Deals For New Products<span class="blink_me"></span></h3>
                    </div>
                </div>
            <?php endif ?>
        <?php endif ?>
        <div class="clearfix"></div>
    </div>