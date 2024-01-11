<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Profile</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>customer/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Login Information -->
                <div class="col-lg-4 col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="rounded-circle img-bordered-sm view_image" width="100" height="100" data-toggle="modal" data-target="#view_profile_picture" style="cursor: pointer;" src="<?= base_url() ?>dist/images/uploads/<?= $image ?>" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><?= $name ?></h3>
                            <p class="text-muted text-center"><?= ucfirst($user_type) ?></p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Customer ID</b> <span class="float-right"><?= str_pad($id, 5, '0', STR_PAD_LEFT); ?></span>
                                </li>
                                <li class="list-group-item">
                                    <b>Username</b> <span class="float-right"><?= $username ?></span>
                                </li>
                                <li class="list-group-item">
                                    <b>Password</b> <span class="float-right text-muted">**********</span>
                                </li>
                            </ul>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit_login_account" class="btn btn-primary btn-block btn_edit_login_account">
                                <b>Edit Login Account</b>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Student Information -->
                <div class="col-lg-8 col-12">
                    <!-- Personal Information -->
                    <div class="card">
                        <div class="card-header mt-2 mb-2">
                            <span class="card-title text-muted text-bold"><i class="fas fa-user-alt"></i>&nbsp; Personal Information</span>
                            <a class="view_customer" href="javascript:void(0)" is_update="true" useraccount_id="<?= $useraccount_id ?>"><i class="fas fa-pencil-alt float-right"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-5">
                                    <b>First Name</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $first_name ?></p>
                                </div>
                                <div class="col-md-3 col-5">
                                    <b class="text-truncate">Date Registered</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= date('F j, Y', strtotime($date_registered)) ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-5">
                                    <b>Middle Name</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $middle_name ?></p>
                                </div>
                                <div class="col-md-3 col-5">
                                    <b class="text-truncate">Mobile Number</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $mobile_number ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-5">
                                    <b>Last Name</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $last_name ?></p>
                                </div>
                                <div class="col-md-3 col-5">
                                    <b>Email Address</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $email ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-5">
                                    <b>House Number</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $house_number ?></p>
                                </div>
                                <div class="col-md-3 col-5">
                                    <b>Subdivision/Zone/Purok</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $subdivision_zone_purok ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-5">
                                    <b>City</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $city ?></p>
                                </div>
                                <div class="col-md-3 col-5">
                                    <b>Province</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $province ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-5">
                                    <b>Country</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $country ?></p>
                                </div>
                                <div class="col-md-3 col-5">
                                    <b>Zip Code</b>
                                </div>
                                <div class="col-md-3 col-7">
                                    <p><?= $zip_code ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>