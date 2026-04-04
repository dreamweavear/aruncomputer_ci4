<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
    <h2 class="text-success mb-0"><i class="bi bi-whatsapp me-2"></i>Bulk WhatsApp Messaging</h2>
    <a href="<?= base_url('admin/message-logs') ?>" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-clock-history me-1"></i>Message Logs
    </a>
</div>

<!-- Result alert (shown after send) -->
<div id="resultAlert" class="alert d-none"></div>

<div class="row g-4">

    <!-- LEFT: Configuration Panel -->
    <div class="col-lg-7">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white fw-semibold">
                <i class="bi bi-gear me-2"></i>Message Configuration
            </div>
            <div class="card-body">

                <!-- Step 1: Source -->
                <div class="mb-4">
                    <h6 class="fw-bold text-muted text-uppercase small mb-2">Step 1 — Recipient Source</h6>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="source" id="srcStudents" value="students" checked>
                            <label class="form-check-label" for="srcStudents">
                                <i class="bi bi-people me-1 text-primary"></i>Current Students
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="source" id="srcAlumni" value="alumni">
                            <label class="form-check-label" for="srcAlumni">
                                <i class="bi bi-mortarboard me-1 text-warning"></i>Alumni
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="source" id="srcBoth" value="both">
                            <label class="form-check-label" for="srcBoth">
                                <i class="bi bi-people-fill me-1 text-success"></i>Both
                            </label>
                        </div>
                    </div>
                    <small id="feeReminderNote" class="text-danger d-none mt-1">
                        <i class="bi bi-info-circle me-1"></i>Fee Reminder is only available for Current Students.
                    </small>
                </div>

                <!-- Step 2: Course Filter -->
                <div class="mb-4">
                    <h6 class="fw-bold text-muted text-uppercase small mb-2">Step 2 — Course Filter (Optional)</h6>
                    <select id="courseFilter" class="form-select" style="max-width:300px;">
                        <option value="">All Courses</option>
                        <?php foreach ($courses as $c): ?>
                            <option value="<?= esc($c) ?>"><?= esc($c) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Step 3: Template -->
                <div class="mb-4">
                    <h6 class="fw-bold text-muted text-uppercase small mb-2">Step 3 — Select Template</h6>
                    <select id="templateSelect" class="form-select" style="max-width:350px;">
                        <option value="">-- Select Template --</option>
                        <?php foreach ($templates as $key => $tpl): ?>
                            <option value="<?= $key ?>"
                                    data-vars="<?= esc(json_encode($tpl['variables'])) ?>"
                                    data-source="<?= $tpl['source'] ?>">
                                <?= esc($tpl['label']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Step 4: Template Variables -->
                <div id="variablesSection" class="mb-4 d-none">
                    <h6 class="fw-bold text-muted text-uppercase small mb-2">Step 4 — Template Variables</h6>
                    <div id="variableFields"></div>
                    <small class="text-muted">
                        <i class="bi bi-info-circle me-1"></i>
                        <strong>name</strong> and <strong>course</strong> are filled automatically per recipient.
                        Fill in the remaining variables below.
                    </small>
                </div>

                <!-- Recipient Count -->
                <div class="mb-4 p-3 bg-light rounded border">
                    <div class="d-flex align-items-center gap-3">
                        <span class="fw-semibold">Recipients:</span>
                        <span id="recipientCount" class="badge bg-primary fs-6">0</span>
                        <button type="button" id="btnRefreshCount" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-arrow-clockwise me-1"></i>Refresh Count
                        </button>
                    </div>
                </div>

                <!-- Send Button -->
                <div>
                    <button type="button" id="btnSend" class="btn btn-success btn-lg" disabled>
                        <i class="bi bi-whatsapp me-2"></i>Send Bulk Messages
                    </button>
                    <span id="sendingSpinner" class="ms-3 d-none">
                        <span class="spinner-border spinner-border-sm text-success me-1"></span>
                        Sending... please wait
                    </span>
                </div>

            </div>
        </div>
    </div>

    <!-- RIGHT: Preview Panel -->
    <div class="col-lg-5">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-light fw-semibold">
                <i class="bi bi-eye me-2"></i>Template Preview
            </div>
            <div class="card-body">
                <div id="previewBox" class="text-muted text-center py-5">
                    <i class="bi bi-chat-dots fs-1 d-block mb-2"></i>
                    Select a template to see preview
                </div>
            </div>
        </div>

        <!-- Progress after send -->
        <div id="progressCard" class="card shadow-sm mt-3 d-none">
            <div class="card-header bg-info text-white fw-semibold">
                <i class="bi bi-bar-chart me-2"></i>Send Results
            </div>
            <div class="card-body" id="progressBody"></div>
        </div>
    </div>

</div>

<!-- Template preview data (JS-accessible) -->
<script>
const TEMPLATES = <?= json_encode($templates) ?>;
const CSRF_TOKEN_NAME = '<?= csrf_token() ?>';
const CSRF_TOKEN_HASH = '<?= csrf_hash() ?>';

const templatePreviews = {
    seasonal_greetings: 'Dear [name], Wishing you a very Happy [occasion]! — Arun Computer Institute',
    new_facility:       'Dear [name], We are pleased to announce: [facility_details]. — Arun Computer Institute',
    fee_reminder:       'Dear [name], Your fee for [course] course has a pending amount of ₹[pending_amount]. Please clear at the earliest. — Arun Computer Institute',
    birthday_wishes:    'Dear [name], Happy Birthday! Wishing you a wonderful year ahead. — Arun Computer Institute',
};

document.addEventListener('DOMContentLoaded', function () {

    const sourceRadios    = document.querySelectorAll('input[name="source"]');
    const courseFilter    = document.getElementById('courseFilter');
    const templateSelect  = document.getElementById('templateSelect');
    const variablesSection = document.getElementById('variablesSection');
    const variableFields  = document.getElementById('variableFields');
    const recipientCount  = document.getElementById('recipientCount');
    const btnRefreshCount = document.getElementById('btnRefreshCount');
    const btnSend         = document.getElementById('btnSend');
    const previewBox      = document.getElementById('previewBox');
    const sendingSpinner  = document.getElementById('sendingSpinner');
    const progressCard    = document.getElementById('progressCard');
    const progressBody    = document.getElementById('progressBody');
    const resultAlert     = document.getElementById('resultAlert');
    const feeNote         = document.getElementById('feeReminderNote');

    function getSource() {
        return document.querySelector('input[name="source"]:checked').value;
    }

    // Template change: render variable fields + preview
    templateSelect.addEventListener('change', function () {
        const key = this.value;
        variableFields.innerHTML = '';
        variablesSection.classList.add('d-none');

        if (!key) {
            previewBox.innerHTML = '<i class="bi bi-chat-dots fs-1 d-block mb-2 text-muted"></i><span class="text-muted">Select a template to see preview</span>';
            btnSend.disabled = true;
            feeNote.classList.add('d-none');
            return;
        }

        const tpl = TEMPLATES[key];

        // fee_reminder source lock
        if (key === 'fee_reminder') {
            document.getElementById('srcStudents').checked = true;
            feeNote.classList.remove('d-none');
        } else {
            feeNote.classList.add('d-none');
        }

        // Dynamic variable fields (skip name, course, pending_amount — auto-filled)
        const autoFilled = ['name', 'course', 'pending_amount'];
        const userVars   = tpl.variables.filter(v => !autoFilled.includes(v));

        if (userVars.length > 0) {
            variablesSection.classList.remove('d-none');
            userVars.forEach(function (varKey) {
                const label = varKey.replace(/_/g, ' ').replace(/\b\w/g, c => c.toUpperCase());
                variableFields.innerHTML += `
                    <div class="mb-2">
                        <label class="form-label small fw-semibold">${label}</label>
                        <input type="text" class="form-control form-control-sm tpl-var" data-key="${varKey}"
                               placeholder="Enter ${label}..." />
                    </div>`;
            });
        }

        // Update preview
        updatePreview(key);
        refreshCount();
        btnSend.disabled = false;
    });

    function updatePreview(key) {
        let text = templatePreviews[key] || 'No preview available.';

        // Replace user-input variables live
        document.querySelectorAll('.tpl-var').forEach(function (inp) {
            const val = inp.value || ('[' + inp.dataset.key + ']');
            text = text.replace('[' + inp.dataset.key + ']', val);
        });

        previewBox.innerHTML = `
            <div class="p-3 rounded" style="background:#dcf8c6; font-family:monospace; white-space:pre-wrap; font-size:14px;">
                ${text}
            </div>
            <p class="text-muted small mt-2 mb-0">
                <i class="bi bi-info-circle me-1"></i>
                [name], [course], [pending_amount] are replaced per-recipient automatically.
            </p>`;
    }

    // Live preview update on variable input
    document.addEventListener('input', function (e) {
        if (e.target.classList.contains('tpl-var')) {
            const key = templateSelect.value;
            if (key) updatePreview(key);
        }
    });

    // Refresh recipient count (AJAX)
    function refreshCount() {
        const template = templateSelect.value;
        if (!template) { recipientCount.textContent = '0'; return; }

        const fd = new FormData();
        fd.append(CSRF_TOKEN_NAME, CSRF_TOKEN_HASH);
        fd.append('source',   getSource());
        fd.append('course',   courseFilter.value);
        fd.append('template', template);

        fetch('<?= base_url('admin/bulk-message/recipient-count') ?>', { method: 'POST', body: fd })
            .then(r => r.json())
            .then(data => { recipientCount.textContent = data.count ?? 0; })
            .catch(() => { recipientCount.textContent = '?'; });
    }

    btnRefreshCount.addEventListener('click', refreshCount);
    sourceRadios.forEach(r => r.addEventListener('change', refreshCount));
    courseFilter.addEventListener('change', refreshCount);

    // SEND
    btnSend.addEventListener('click', function () {
        const template = templateSelect.value;
        if (!template) { alert('Please select a template.'); return; }
        if (parseInt(recipientCount.textContent) === 0) { alert('No recipients found.'); return; }

        if (!confirm('Send WhatsApp messages to ' + recipientCount.textContent + ' recipients?')) return;

        btnSend.disabled = true;
        sendingSpinner.classList.remove('d-none');
        resultAlert.classList.add('d-none');
        progressCard.classList.add('d-none');

        const fd = new FormData();
        fd.append(CSRF_TOKEN_NAME, CSRF_TOKEN_HASH);
        fd.append('source',   getSource());
        fd.append('course',   courseFilter.value);
        fd.append('template', template);

        document.querySelectorAll('.tpl-var').forEach(function (inp) {
            fd.append('variables[' + inp.dataset.key + ']', inp.value);
        });

        fetch('<?= base_url('admin/bulk-message/send') ?>', { method: 'POST', body: fd })
            .then(r => r.json())
            .then(function (data) {
                sendingSpinner.classList.add('d-none');
                btnSend.disabled = false;

                if (data.error) {
                    resultAlert.className = 'alert alert-danger';
                    resultAlert.textContent = data.error;
                    resultAlert.classList.remove('d-none');
                    return;
                }

                progressCard.classList.remove('d-none');
                progressBody.innerHTML = `
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="display-6 text-success fw-bold">${data.sent}</div>
                            <div class="small text-muted">Sent</div>
                        </div>
                        <div class="col-4">
                            <div class="display-6 text-danger fw-bold">${data.failed}</div>
                            <div class="small text-muted">Failed</div>
                        </div>
                        <div class="col-4">
                            <div class="display-6 text-primary fw-bold">${data.total}</div>
                            <div class="small text-muted">Total</div>
                        </div>
                    </div>
                    ${data.failed_list && data.failed_list.length
                        ? '<hr><p class="small text-danger mb-1"><strong>Failed:</strong></p><ul class="small text-danger mb-0">' +
                          data.failed_list.map(n => '<li>' + n + '</li>').join('') + '</ul>'
                        : ''}`;
            })
            .catch(function () {
                sendingSpinner.classList.add('d-none');
                btnSend.disabled = false;
                resultAlert.className = 'alert alert-danger';
                resultAlert.textContent = 'Network error. Please try again.';
                resultAlert.classList.remove('d-none');
            });
    });
});
</script>

<?= $this->endSection() ?>
