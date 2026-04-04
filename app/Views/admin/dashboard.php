<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
    <h1 class="h2">Admin Dashboard</h1>
</div>

<!-- ===== STATS CARDS ===== -->
<div class="row g-3 mb-4">

    <!-- Card 1: Total Students -->
    <div class="col-6 col-md-3">
        <div class="card text-white bg-primary shadow border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="fw-bold mb-0"><?= $total_students ?></h2>
                    <p class="mb-0 small">Total Students</p>
                </div>
                <i class="bi bi-people-fill" style="font-size:2.8rem;opacity:0.4"></i>
            </div>
            <div class="card-footer bg-transparent border-0 pt-0">
                <a href="<?= base_url('admin/admission') ?>" class="text-white small">View Details &rarr;</a>
            </div>
        </div>
    </div>

    <!-- Card 2: Pending Fees -->
    <div class="col-6 col-md-3">
        <div class="card text-white bg-danger shadow border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="fw-bold mb-0" style="font-size:1.4rem;">
                        ₹<?= number_format($pending_fees, 0) ?>
                    </h2>
                    <p class="mb-0 small">Pending Fees</p>
                </div>
                <i class="bi bi-cash-coin" style="font-size:2.8rem;opacity:0.4"></i>
            </div>
            <div class="card-footer bg-transparent border-0 pt-0">
                <a href="<?= base_url('admin/fees_total_report') ?>" class="text-white small">View Report &rarr;</a>
            </div>
        </div>
    </div>

    <!-- Card 3: Today's Birthdays -->
    <div class="col-6 col-md-3">
        <div class="card text-dark bg-warning shadow border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="fw-bold mb-0"><?= $todays_birthdays ?></h2>
                    <p class="mb-0 small">Today's Birthdays</p>
                </div>
                <i class="bi bi-cake2-fill" style="font-size:2.8rem;opacity:0.4"></i>
            </div>
            <div class="card-footer bg-transparent border-0 pt-0">
                <a href="<?= base_url('admin/birthday-reminder') ?>" class="text-dark small">View &rarr;</a>
            </div>
        </div>
    </div>

    <!-- Card 4: New Enquiries -->
    <div class="col-6 col-md-3">
        <div class="card text-white bg-success shadow border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="fw-bold mb-0"><?= $new_enquiries ?></h2>
                    <p class="mb-0 small">New Enquiries <span class="opacity-75">(7d)</span></p>
                </div>
                <i class="bi bi-envelope-fill" style="font-size:2.8rem;opacity:0.4"></i>
            </div>
            <div class="card-footer bg-transparent border-0 pt-0">
                <a href="<?= base_url('admin/enquiries') ?>" class="text-white small">View &rarr;</a>
            </div>
        </div>
    </div>

</div>

<!-- ===== QUICK ACCESS CARDS ===== -->

<!-- Group 1: Students -->
<h6 class="text-muted text-uppercase small fw-bold mb-2 mt-1">
    <i class="bi bi-people me-1"></i> Students
</h6>
<div class="row g-3 mb-4">

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/admission/create') ?>" class="text-decoration-none">
            <div class="card text-white bg-primary h-100 border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-pencil-square fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Admission Form</h6>
                    <p class="card-text small mb-0">Create New Admission</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/admission') ?>" class="text-decoration-none">
            <div class="card text-white bg-success h-100 border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-people fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Students List</h6>
                    <p class="card-text small mb-0">View All Students</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/enquiries') ?>" class="text-decoration-none">
            <div class="card text-white h-100 border-0" style="background-color:#6f42c1;">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-envelope-open fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Enquiries</h6>
                    <p class="card-text small mb-0">View Student Enquiries</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/alumni') ?>" class="text-decoration-none">
            <div class="card text-white h-100 border-0" style="background-color:#0d6efd;">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-mortarboard-fill fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Alumni</h6>
                    <p class="card-text small mb-0">Manage Alumni</p>
                </div>
            </div>
        </a>
    </div>

</div>

<!-- Group 2: Fees -->
<h6 class="text-muted text-uppercase small fw-bold mb-2">
    <i class="bi bi-cash-stack me-1"></i> Fees
</h6>
<div class="row g-3 mb-4">

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/fees/create') ?>" class="text-decoration-none">
            <div class="card text-white bg-danger h-100 border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-plus-circle fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Add Fees</h6>
                    <p class="card-text small mb-0">Record New Fee</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= site_url('admin/fees_total_report') ?>" class="text-decoration-none">
            <div class="card text-white bg-warning h-100 border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-bar-chart-line fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Fees Report</h6>
                    <p class="card-text small mb-0">Pending Fees</p>
                </div>
            </div>
        </a>
    </div>

</div>

<!-- Group 3: Communication -->
<h6 class="text-muted text-uppercase small fw-bold mb-2">
    <i class="bi bi-chat-dots me-1"></i> Communication
</h6>
<div class="row g-3 mb-4">

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/bulk-message') ?>" class="text-decoration-none">
            <div class="card text-white h-100 border-0" style="background-color:#25d366;">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-whatsapp fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Bulk WhatsApp</h6>
                    <p class="card-text small mb-0">Send Messages</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/birthday-reminder') ?>" class="text-decoration-none">
            <div class="card text-dark bg-warning h-100 border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-cake2 fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Birthday Reminder</h6>
                    <p class="card-text small mb-0">Today's Birthdays</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/message-logs') ?>" class="text-decoration-none">
            <div class="card text-white h-100 border-0" style="background-color:#495057;">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-clock-history fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Message Logs</h6>
                    <p class="card-text small mb-0">WhatsApp History</p>
                </div>
            </div>
        </a>
    </div>

</div>

<!-- Group 4: Content -->
<h6 class="text-muted text-uppercase small fw-bold mb-2">
    <i class="bi bi-folder2 me-1"></i> Content
</h6>
<div class="row g-3">

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/notice') ?>" class="text-decoration-none">
            <div class="card text-white bg-secondary h-100 border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-megaphone fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Notices</h6>
                    <p class="card-text small mb-0">Manage Notices</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
        <a href="<?= base_url('admin/gallery') ?>" class="text-decoration-none">
            <div class="card text-white bg-info h-100 border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height:130px;">
                    <i class="bi bi-images fs-1 mb-2"></i>
                    <h6 class="card-title mb-1">Gallery</h6>
                    <p class="card-text small mb-0">Manage Images</p>
                </div>
            </div>
        </a>
    </div>

</div>

<?= $this->endSection() ?>
