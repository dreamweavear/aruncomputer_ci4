<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
    <h2 class="text-primary mb-0"><i class="bi bi-clipboard2-check me-2"></i>Exam Results</h2>
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

<!-- Filter row -->
<div class="mb-3">
    <input type="text" id="searchInput" class="form-control" placeholder="Search student name, course..." style="max-width:350px;">
</div>

<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle" id="examTable">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Student</th>
                <th>Course</th>
                <th>Exam Date</th>
                <th>Theory</th>
                <th>Practical</th>
                <th>Total</th>
                <th>%</th>
                <th>Grade</th>
                <th>Attempt</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $i => $s): ?>
            <?php
                $status = 'Pending';
                $badge  = 'secondary';
                if (!empty($s['result_id'])) {
                    if (!empty($s['cert_id'])) {
                        $status = 'Certificate Issued';
                        $badge  = 'success';
                    } elseif ($s['grade'] === 'F') {
                        $status = 'Fail';
                        $badge  = 'danger';
                    } else {
                        $status = 'Pass';
                        $badge  = 'primary';
                    }
                }
            ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td>
                    <strong><?= esc($s['name']) ?></strong><br>
                    <small class="text-muted"><?= esc($s['phone']) ?></small>
                </td>
                <td><?= esc($s['course']) ?></td>
                <td><?= $s['exam_date'] ? date('d M Y', strtotime($s['exam_date'])) : '—' ?></td>
                <td><?= $s['result_id'] ? esc($s['theory_marks']) . '/50' : '—' ?></td>
                <td><?= $s['result_id'] ? esc($s['practical_marks']) . '/50' : '—' ?></td>
                <td><?= $s['result_id'] ? esc($s['total_marks']) . '/100' : '—' ?></td>
                <td><?= $s['result_id'] ? esc($s['percentage']) . '%' : '—' ?></td>
                <td>
                    <?php if ($s['result_id']): ?>
                        <span class="badge bg-<?= $s['grade'] === 'F' ? 'danger' : ($s['grade'] === 'A+' ? 'success' : 'info') ?>">
                            <?= esc($s['grade']) ?>
                        </span>
                    <?php else: ?>—<?php endif; ?>
                </td>
                <td><?= $s['result_id'] ? esc($s['attempt']) : '—' ?></td>
                <td><span class="badge bg-<?= $badge ?>"><?= $status ?></span></td>
                <td>
                    <div class="d-flex flex-wrap gap-1">
                        <?php if (empty($s['result_id'])): ?>
                            <a href="<?= site_url('admin/exam/create/' . $s['id']) ?>" class="btn btn-sm btn-primary">
                                <i class="bi bi-plus-circle me-1"></i>Enter Marks
                            </a>
                        <?php else: ?>
                            <a href="<?= site_url('admin/exam/edit/' . $s['result_id']) ?>" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil me-1"></i>Edit
                            </a>
                            <?php if ($s['grade'] !== 'F' && (int)$s['attempt'] < 2): ?>
                                <a href="<?= site_url('admin/exam/create/' . $s['id']) ?>" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-arrow-repeat me-1"></i>2nd Attempt
                                </a>
                            <?php endif; ?>
                            <?php
                            // Show Generate Certificate only for eligible courses and passed students
                            $eligibleCourses = ['BASIC', 'TALLY', 'CPCT'];
                            $courseUpper = strtoupper($s['course']);
                            $isEligible = false;
                            foreach ($eligibleCourses as $ec) {
                                if (str_contains($courseUpper, $ec)) { $isEligible = true; break; }
                            }
                            ?>
                            <?php if ($isEligible && $s['grade'] !== 'F'): ?>
                                <?php if (empty($s['cert_id'])): ?>
                                    <a href="<?= site_url('admin/exam/certificate/' . $s['id']) ?>"
                                       class="btn btn-sm btn-success"
                                       onclick="return confirm('Generate certificate for <?= esc($s['name']) ?>?')">
                                        <i class="bi bi-award me-1"></i>Generate Cert
                                    </a>
                                <?php else: ?>
                                    <a href="<?= site_url('admin/certificate/print/' . $s['cert_id']) ?>" class="btn btn-sm btn-info" target="_blank">
                                        <i class="bi bi-printer me-1"></i>Print Cert
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
document.getElementById('searchInput').addEventListener('keyup', function () {
    const val = this.value.toLowerCase();
    document.querySelectorAll('#examTable tbody tr').forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(val) ? '' : 'none';
    });
});
</script>

<?= $this->endSection() ?>
