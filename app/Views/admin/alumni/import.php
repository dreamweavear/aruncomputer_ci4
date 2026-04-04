<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
    <h2 class="text-primary mb-0"><i class="bi bi-upload me-2"></i>Import Alumni from CSV</h2>
    <a href="<?= base_url('admin/alumni') ?>" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left me-1"></i>Back to List
    </a>
</div>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <?= esc(session()->getFlashdata('error')) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-7">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <i class="bi bi-file-earmark-csv me-2"></i>Upload CSV File
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('admin/alumni/import-process') ?>" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Select CSV File</label>
                        <input type="file" name="csv_file" class="form-control" accept=".csv" required>
                        <div class="form-text">Max file size: 2MB. Only .csv format accepted.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-upload me-1"></i>Import Now
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <i class="bi bi-info-circle me-2"></i>CSV Format Guide
            </div>
            <div class="card-body">
                <p class="fw-semibold mb-2">Required column order (with header row):</p>
                <table class="table table-bordered table-sm">
                    <thead class="table-light">
                        <tr>
                            <th>Column</th>
                            <th>Example</th>
                            <th>Required</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>name</td><td>Ramesh Kumar</td><td><span class="badge bg-danger">Yes</span></td></tr>
                        <tr><td>course</td><td>DCA</td><td><span class="badge bg-secondary">No</span></td></tr>
                        <tr><td>phone</td><td>9876543210</td><td><span class="badge bg-danger">Yes</span></td></tr>
                        <tr><td>admission_date</td><td>2022-06-15</td><td><span class="badge bg-secondary">No</span></td></tr>
                        <tr><td>date_of_birth</td><td>2000-03-20</td><td><span class="badge bg-secondary">No</span></td></tr>
                    </tbody>
                </table>
                <p class="small text-muted mt-2 mb-0">
                    First row must be the header row. Date format: YYYY-MM-DD.
                </p>
            </div>
        </div>

        <!-- Sample download -->
        <div class="card shadow-sm mt-3">
            <div class="card-body text-center">
                <p class="mb-2 small text-muted">Sample CSV file:</p>
                <pre class="text-start bg-light p-2 rounded small">name,course,phone,admission_date,date_of_birth
Ramesh Kumar,DCA,9876543210,2022-06-15,2000-03-20
Sita Devi,PGDCA,9812345678,2021-07-01,1999-11-05</pre>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
