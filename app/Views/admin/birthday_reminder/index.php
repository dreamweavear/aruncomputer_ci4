<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
    <h2 class="text-warning mb-0"><i class="bi bi-balloon-heart me-2"></i>Birthday Reminder</h2>
    <span class="badge bg-secondary fs-6"><i class="bi bi-calendar me-1"></i><?= esc($today) ?></span>
</div>

<!-- Result alert -->
<div id="resultAlert" class="alert d-none"></div>

<?php if (empty($birthdays)): ?>
    <div class="alert alert-info d-flex align-items-center gap-3">
        <i class="bi bi-emoji-smile fs-3"></i>
        <div>No birthdays today (<strong><?= esc($today) ?></strong>). Enjoy the quiet day!</div>
    </div>
<?php else: ?>

    <div class="d-flex align-items-center gap-3 mb-3">
        <span class="fs-5 fw-semibold">
            <i class="bi bi-cake2 me-1 text-warning"></i>
            <?= count($birthdays) ?> birthday(s) today!
        </span>
        <button type="button" id="btnSendAll" class="btn btn-warning">
            <i class="bi bi-whatsapp me-1"></i>Send Birthday Wishes to All
        </button>
        <span id="sendingSpinner" class="d-none">
            <span class="spinner-border spinner-border-sm text-warning me-1"></span>
            Sending...
        </span>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-warning">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Date of Birth</th>
                    <th>Source</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($birthdays as $i => $b): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><strong><?= esc($b['name']) ?></strong></td>
                    <td><?= esc($b['phone']) ?></td>
                    <td><?= esc($b['course'] ?? '-') ?></td>
                    <td><?= $b['date_of_birth'] ? date('d M Y', strtotime($b['date_of_birth'])) : '-' ?></td>
                    <td>
                        <?php if ($b['source'] === 'student'): ?>
                            <span class="badge bg-primary">Current Student</span>
                        <?php else: ?>
                            <span class="badge bg-warning text-dark">Alumni</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php endif; ?>

<!-- Result card (shown after send) -->
<div id="resultCard" class="card shadow-sm mt-3 d-none">
    <div class="card-header bg-success text-white fw-semibold">
        <i class="bi bi-check-circle me-2"></i>Send Results
    </div>
    <div class="card-body" id="resultBody"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const btnSendAll     = document.getElementById('btnSendAll');
    const sendingSpinner = document.getElementById('sendingSpinner');
    const resultCard     = document.getElementById('resultCard');
    const resultBody     = document.getElementById('resultBody');
    const resultAlert    = document.getElementById('resultAlert');

    if (!btnSendAll) return;

    btnSendAll.addEventListener('click', function () {
        const total = <?= count($birthdays) ?>;
        if (!confirm('Send birthday wishes to ' + total + ' person(s)?')) return;

        btnSendAll.disabled = true;
        sendingSpinner.classList.remove('d-none');
        resultAlert.classList.add('d-none');

        const fd = new FormData();
        fd.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');

        fetch('<?= base_url('admin/birthday-reminder/send') ?>', { method: 'POST', body: fd })
            .then(r => r.json())
            .then(function (data) {
                sendingSpinner.classList.add('d-none');
                btnSendAll.disabled = false;

                if (data.error) {
                    resultAlert.className = 'alert alert-danger';
                    resultAlert.textContent = data.error;
                    resultAlert.classList.remove('d-none');
                    return;
                }

                resultCard.classList.remove('d-none');
                resultBody.innerHTML = `
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="display-5 text-success fw-bold">${data.sent}</div>
                            <div class="small text-muted">Sent</div>
                        </div>
                        <div class="col-4">
                            <div class="display-5 text-danger fw-bold">${data.failed}</div>
                            <div class="small text-muted">Failed</div>
                        </div>
                        <div class="col-4">
                            <div class="display-5 text-primary fw-bold">${data.total}</div>
                            <div class="small text-muted">Total</div>
                        </div>
                    </div>`;
            })
            .catch(function () {
                sendingSpinner.classList.add('d-none');
                btnSendAll.disabled = false;
                resultAlert.className = 'alert alert-danger';
                resultAlert.textContent = 'Network error. Please try again.';
                resultAlert.classList.remove('d-none');
            });
    });
});
</script>

<?= $this->endSection() ?>
