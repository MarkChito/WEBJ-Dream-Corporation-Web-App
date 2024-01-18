<div class="content-wrapper">
    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Messages</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Messages</li>
                    </ol>
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
                                        <th class="d-none">Date</th>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th class="d-none">Message</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $messages = $this->model->MOD_GET_MESSAGES() ?>

                                    <?php if ($messages) : ?>
                                        <?php foreach ($messages as $message) : ?>
                                            <tr class="<?= $message->status == "unread" ? "font-weight-bold" : null ?> single-message">
                                                <td class="d-none id"><?= $message->id ?></td>
                                                <td class="d-none message_date"><?= $message->message_date ?></td>
                                                <td class="name"><?= $message->name ?></td>
                                                <td class="mobile_number"><?= $message->mobile_number ?></td>
                                                <td class="email"><?= $message->email ?></td>
                                                <td class="subject"><?= $message->subject ?></td>
                                                <td class="d-none message"><?= $message->message ?></td>
                                                <td class="text-center text-truncate actn-btns">
                                                    <div class="action-buttons">
                                                        <a title="View Message" href="javascript:void(0)" class="view_message"><i class="fas fa-eye text-primary mr-1"></i></a>
                                                        <a title="Reply with Email" href="javascript:void(0)" class="reply_message"><i class="fas fa-reply text-success mr-1"></i></a>
                                                        <a title="Delete Message" href="javascript:void(0)" class="reply_message"><i class="fas fa-trash-alt text-danger"></i></a>
                                                    </div>
                                                    <div class="spinner-border spinner-border-sm text-primary table-spinner d-none" role="status"></div>
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