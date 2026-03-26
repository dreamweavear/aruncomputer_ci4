<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
    <h1 class="h2">Admin Dashboard</h1>
</div>

<!-- Dashboard Cards Grid - 6 Cards -->
<div class="row g-3">
    
    <!-- 1. Admission Form -->
    <div class="col-12 col-sm-6 col-md-4">
        <a href="<?= base_url('admin/admission/create') ?>" class="text-decoration-none">
            <div class="card text-white bg-primary h-100 hover-shadow border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height: 150px;">
                    <i class="bi bi-pencil-square fs-1 mb-2"></i>
                    <h5 class="card-title">Admission Form</h5>
                    <p class="card-text">Create New Admission</p>
                </div>
            </div>
        </a>
    </div>
    
    <!-- 2. Students List -->
    <div class="col-12 col-sm-6 col-md-4">
        <a href="<?= base_url('admin/admission') ?>" class="text-decoration-none">
            <div class="card text-white bg-success h-100 hover-shadow border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height: 150px;">
                    <i class="bi bi-people fs-1 mb-2"></i>
                    <h5 class="card-title">Students List</h5>
                    <p class="card-text">View All Students</p>
                </div>
            </div>
        </a>
    </div>
    
    <!-- 3. Gallery -->
    <div class="col-12 col-sm-6 col-md-4">
        <a href="<?= base_url('admin/gallery') ?>" class="text-decoration-none">
            <div class="card text-white bg-info h-100 hover-shadow border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height: 150px;">
                    <i class="bi bi-images fs-1 mb-2"></i>
                    <h5 class="card-title">Gallery</h5>
                    <p class="card-text">Manage Images</p>
                </div>
            </div>
        </a>
    </div>
    
    <!-- 4. Fees Pending Report -->
    <div class="col-12 col-sm-6 col-md-4">
        <a href="<?= site_url('admin/fees_total_report') ?>" class="text-decoration-none">
            <div class="card text-white bg-warning h-100 hover-shadow border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height: 150px;">
                    <i class="bi bi-bar-chart-line fs-1 mb-2"></i>
                    <h5 class="card-title">Fees Report</h5>
                    <p class="card-text">Pending Fees</p>
                </div>
            </div>
        </a>
    </div>
    
    <!-- 5. Add Fees -->
    <div class="col-12 col-sm-6 col-md-4">
        <a href="<?= base_url('admin/fees/create') ?>" class="text-decoration-none">
            <div class="card text-white bg-danger h-100 hover-shadow border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height: 150px;">
                    <i class="bi bi-plus-circle fs-1 mb-2"></i>
                    <h5 class="card-title">Add Fees</h5>
                    <p class="card-text">Record New Fee</p>
                </div>
            </div>
        </a>
    </div>
    
    <!-- 6. Notice -->
    <div class="col-12 col-sm-6 col-md-4">
        <a href="<?= base_url('admin/notice') ?>" class="text-decoration-none">
            <div class="card text-white bg-secondary h-100 hover-shadow border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height: 150px;">
                    <i class="bi bi-megaphone fs-1 mb-2"></i>
                    <h5 class="card-title">Notices</h5>
                    <p class="card-text">Manage Notices</p>
                </div>
            </div>
        </a>
    </div>

    <!-- 7. Enquiries -->
    <div class="col-12 col-sm-6 col-md-4">
        <a href="<?= base_url('admin/enquiries') ?>" class="text-decoration-none">
            <div class="card text-white h-100 hover-shadow border-0" style="background-color:#6f42c1;">
                <div class="card-body text-center d-flex flex-column justify-content-center" style="min-height: 150px;">
                    <i class="bi bi-envelope-open fs-1 mb-2"></i>
                    <h5 class="card-title">Enquiries</h5>
                    <p class="card-text">View Student Enquiries</p>
                </div>
            </div>
        </a>
    </div>

</div>

<?= $this->endSection() ?>