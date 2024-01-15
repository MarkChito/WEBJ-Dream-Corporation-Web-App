<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Track My Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>customer/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Track My Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <form action="javascript:void(0)" id="track_order_form">
                        <div class="form-group">
                            <label for="track_order_tracking_id">Enter Tracking ID</label>
                            <input type="text" class="form-control" id="track_order_tracking_id" required>
                            <small class="text-danger d-none" id="error_track_order_tracking_id">Invalid Tracking ID</small>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" id="track_order_submit">Track my Order</button>
                    </form>
                </div>
            </div>
            <div class="tracking-results d-none">
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Tracking Results</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="timeline">
                                    <ul class="timeline-events list-unstyled tracking-details">
                                        <!-- Data from AJAX -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row loading d-none">
                <div class="col-12 d-flex align-items-center justify-content-center" style="height: 300px;">
                    <img src="<?= base_url() ?>dist/images/loading.gif" alt="">
                </div>
            </div>
            <div class="row no-data d-none">
                <div class="col-12 d-flex align-items-center justify-content-center" style="height: 300px;">
                    <h1 class="text-muted">No Data Available</h1>
                </div>
            </div>
        </div>
    </section>
</div>