<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
    <h2 class="text-primary mb-0"><i class="bi bi-mortarboard me-2"></i>Alumni List</h2>
    <div>
        <a href="<?= base_url('admin/alumni/import') ?>" class="btn btn-outline-secondary btn-sm me-2">
            <i class="bi bi-upload me-1"></i>Import CSV
        </a>
        <a href="<?= base_url('admin/alumni/create') ?>" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-circle me-1"></i>Add Alumni
        </a>
    </div>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?= esc(session()->getFlashdata('success')) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <?= esc(session()->getFlashdata('error')) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<!-- Filters -->
<form method="get" class="row g-2 mb-3">
    <div class="col-md-4">
        <input type="text" name="search" class="form-control" placeholder="Search name / phone / email..."
               value="<?= esc($search ?? '') ?>">
    </div>
    <div class="col-md-3">
        <select name="course" class="form-select">
            <option value="">All Courses</option>
            <?php foreach ($courses as $c): ?>
                <option value="<?= esc($c['course']) ?>" <?= ($course ?? '') === $c['course'] ? 'selected' : '' ?>>
                    <?= esc($c['course']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-outline-primary w-100">
            <i class="bi bi-search me-1"></i>Filter
        </button>
    </div>
    <div class="col-md-2">
        <a href="<?= base_url('admin/alumni') ?>" class="btn btn-outline-secondary w-100">Clear</a>
    </div>
</form>

<p class="text-muted small">Total: <strong><?= count($alumni) ?></strong> alumni found</p>

<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle" id="alumniTable">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Course</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Admission Date</th>
                <th>Date of Birth</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if (empty($alumni)): ?>
            <tr>
                <td colspan="10" class="text-center text-muted">No alumni found. <a href="<?= base_url('admin/alumni/create') ?>">Add one</a>.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($alumni as $i => $a): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><strong><?= esc($a['name']) ?></strong></td>
                <td><?= esc($a['father_name'] ?? '-') ?></td>
                <td><span class="badge bg-info text-dark"><?= esc($a['course'] ?? '-') ?></span></td>
                <td><?= esc($a['phone']) ?></td>
                <td><?= esc($a['email'] ?? '-') ?></td>
                <td><?= $a['admission_date'] ? date('d M Y', strtotime($a['admission_date'])) : '-' ?></td>
                <td><?= $a['date_of_birth'] ? date('d M Y', strtotime($a['date_of_birth'])) : '-' ?></td>
                <td>
                    <?php if ($a['is_active']): ?>
                        <span class="badge bg-success">Active</span>
                    <?php else: ?>
                        <span class="badge bg-secondary">Inactive</span>
                    <?php endif; ?>
                </td>
                <td class="text-nowrap">
                    <a href="<?= base_url('admin/alumni/edit/' . $a['id']) ?>" class="btn btn-sm btn-warning">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form method="post" action="<?= base_url('admin/alumni/delete/' . $a['id']) ?>"
                          class="d-inline" onsubmit="return confirm('Delete this alumni?')">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<script>
// Quick client-side search
document.addEventListener('DOMContentLoaded', function () {
    const input = document.querySelector('input[name="search"]');
    if (!input) return;
    // Search is server-side; client filter handled on the input keyup for immediate UX
    // (server handles actual filtering on form submit)
});
</script>

<?= $this->endSection() ?>
