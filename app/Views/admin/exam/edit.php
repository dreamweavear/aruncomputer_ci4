<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
    <h2 class="text-primary mb-0">
        <i class="bi bi-pencil me-2"></i>Edit Exam Marks
        <small class="fs-6 text-muted ms-2">Attempt #<?= esc($result['attempt']) ?></small>
    </h2>
    <a href="<?= site_url('admin/exam') ?>" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left me-1"></i>Back to List
    </a>
</div>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
<?php endif; ?>

<!-- Student info card -->
<div class="card mb-4 border-primary">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-person-circle me-2"></i>Student Details
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="<?= base_url('uploads/' . esc($student['photo'])) ?>"
                     alt="Photo" class="img-thumbnail" style="height:100px;width:100px;object-fit:cover;">
            </div>
            <div class="col-md-9">
                <table class="table table-sm table-borderless mb-0">
                    <tr><th width="160">Name</th><td><?= esc($student['name']) ?></td></tr>
                    <tr><th>Father's Name</th><td><?= esc($student['father_name']) ?></td></tr>
                    <tr><th>Course</th><td><?= esc($student['course']) ?></td></tr>
                    <tr><th>Admission Date</th><td><?= date('d M Y', strtotime($student['admission_date'])) ?></td></tr>
                    <tr><th>Phone</th><td><?= esc($student['phone']) ?></td></tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-light fw-bold">
        <i class="bi bi-clipboard-data me-2"></i>Edit Marks (Each paper out of 50)
    </div>
    <div class="card-body">
        <form action="<?= site_url('admin/exam/update/' . $result['id']) ?>" method="post" id="marksForm">
            <?= csrf_field() ?>

            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Theory Marks <span class="text-muted fw-normal">(out of 50)</span></label>
                    <input type="number" name="theory_marks" id="theory" class="form-control form-control-lg"
                           min="0" max="50" required value="<?= esc($result['theory_marks']) ?>">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Practical Marks <span class="text-muted fw-normal">(out of 50)</span></label>
                    <input type="number" name="practical_marks" id="practical" class="form-control form-control-lg"
                           min="0" max="50" required value="<?= esc($result['practical_marks']) ?>">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Exam Date</label>
                    <input type="date" name="exam_date" class="form-control form-control-lg"
                           value="<?= esc($result['exam_date']) ?>" required>
                </div>
            </div>

            <!-- Live calculation -->
            <div class="card mt-4 bg-light border-0">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-3">
                            <div class="fs-4 fw-bold text-primary" id="totalDisplay"><?= $result['total_marks'] ?></div>
                            <div class="small text-muted">Total / 100</div>
                        </div>
                        <div class="col-3">
                            <div class="fs-4 fw-bold text-info" id="pctDisplay"><?= $result['percentage'] ?>%</div>
                            <div class="small text-muted">Percentage</div>
                        </div>
                        <div class="col-3">
                            <div class="fs-4 fw-bold" id="gradeDisplay"><?= esc($result['grade']) ?></div>
                            <div class="small text-muted">Grade</div>
                        </div>
                        <div class="col-3">
                            <div class="fs-5 fw-bold" id="labelDisplay">—</div>
                            <div class="small text-muted">Remark</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <small class="text-muted">
                    <strong>Grading Scale:</strong>
                    A+ ≥75% (Excellent) &nbsp;|&nbsp;
                    A 65–74% (Very Good) &nbsp;|&nbsp;
                    B 55–64% (Good) &nbsp;|&nbsp;
                    C 45–54% (Fair) &nbsp;|&nbsp;
                    D 35–44% (Satisfactory) &nbsp;|&nbsp;
                    F &lt;35% (Fail)
                </small>
            </div>

            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-warning px-4">
                    <i class="bi bi-save me-1"></i>Update Marks
                </button>
                <a href="<?= site_url('admin/exam') ?>" class="btn btn-secondary px-4">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script>
(function () {
    const gradeData = [
        { min: 75, grade: 'A+', label: 'Excellent',     color: '#198754' },
        { min: 65, grade: 'A',  label: 'Very Good',     color: '#0d6efd' },
        { min: 55, grade: 'B',  label: 'Good',          color: '#0dcaf0' },
        { min: 45, grade: 'C',  label: 'Fair',          color: '#ffc107' },
        { min: 35, grade: 'D',  label: 'Satisfactory',  color: '#fd7e14' },
        { min:  0, grade: 'F',  label: 'Fail',          color: '#dc3545' },
    ];

    function calcGrade(pct) {
        for (const g of gradeData) {
            if (pct >= g.min) return g;
        }
        return gradeData[gradeData.length - 1];
    }

    function recalc() {
        const th  = parseFloat(document.getElementById('theory').value)   || 0;
        const pr  = parseFloat(document.getElementById('practical').value) || 0;
        const tot = th + pr;
        const pct = (tot / 100) * 100;
        const g   = calcGrade(pct);

        document.getElementById('totalDisplay').textContent = tot;
        document.getElementById('pctDisplay').textContent   = pct.toFixed(2) + '%';
        document.getElementById('gradeDisplay').textContent = g.grade;
        document.getElementById('labelDisplay').textContent = g.label;
        document.getElementById('gradeDisplay').style.color = g.color;
        document.getElementById('labelDisplay').style.color = g.color;
    }

    document.getElementById('theory').addEventListener('input', recalc);
    document.getElementById('practical').addEventListener('input', recalc);
    recalc(); // init on load
})();
</script>

<?= $this->endSection() ?>
