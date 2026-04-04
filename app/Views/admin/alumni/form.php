<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
    <h2 class="text-primary mb-0">
        <i class="bi bi-person-plus me-2"></i>
        <?= $isEdit ? 'Edit Alumni' : 'Add Alumni' ?>
    </h2>
    <a href="<?= base_url('admin/alumni') ?>" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left me-1"></i>Back to List
    </a>
</div>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
        <ul class="mb-0">
            <?php foreach (session()->getFlashdata('errors') as $err): ?>
                <li><?= esc($err) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="post" action="<?= $isEdit
            ? base_url('admin/alumni/update/' . $alumni['id'])
            : base_url('admin/alumni/store') ?>">
            <?= csrf_field() ?>

            <div class="row g-3">
                <!-- Name -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control"
                           value="<?= esc(old('name', $alumni['name'] ?? '')) ?>" required>
                </div>

                <!-- Father's Name -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Father's Name</label>
                    <input type="text" name="father_name" class="form-control"
                           value="<?= esc(old('father_name', $alumni['father_name'] ?? '')) ?>">
                </div>

                <!-- Course -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Course</label>
                    <select name="course" class="form-select">
                        <option value="">-- Select Course --</option>
                        <?php foreach ($courses as $c): ?>
                            <option value="<?= esc($c['name']) ?>"
                                <?= (old('course', $alumni['course'] ?? '') === $c['name']) ? 'selected' : '' ?>>
                                <?= esc($c['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Phone <span class="text-danger">*</span></label>
                    <input type="text" name="phone" class="form-control" maxlength="15"
                           value="<?= esc(old('phone', $alumni['phone'] ?? '')) ?>" required>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="<?= esc(old('email', $alumni['email'] ?? '')) ?>">
                </div>

                <!-- Admission Date -->
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Admission Date</label>
                    <input type="date" name="admission_date" class="form-control"
                           value="<?= esc(old('admission_date', $alumni['admission_date'] ?? '')) ?>">
                </div>

                <!-- Date of Birth -->
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Date of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control"
                           value="<?= esc(old('date_of_birth', $alumni['date_of_birth'] ?? '')) ?>">
                </div>

                <!-- Address -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Address</label>
                    <textarea name="address" class="form-control" rows="3"
                    ><?= esc(old('address', $alumni['address'] ?? '')) ?></textarea>
                </div>

                <!-- Status (edit only) -->
                <?php if ($isEdit): ?>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Status</label>
                    <select name="is_active" class="form-select">
                        <option value="1" <?= ($alumni['is_active'] ?? 1) == 1 ? 'selected' : '' ?>>Active</option>
                        <option value="0" <?= ($alumni['is_active'] ?? 1) == 0 ? 'selected' : '' ?>>Inactive</option>
                    </select>
                </div>
                <?php endif; ?>
            </div>

            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-circle me-1"></i><?= $isEdit ? 'Update' : 'Save' ?> Alumni
                </button>
                <a href="<?= base_url('admin/alumni') ?>" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
