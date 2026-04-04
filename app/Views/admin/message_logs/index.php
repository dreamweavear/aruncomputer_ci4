<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
    <h2 class="text-primary mb-0"><i class="bi bi-clock-history me-2"></i>WhatsApp Message Logs</h2>
    <div class="d-flex gap-2">
        <span class="badge bg-success fs-6">Sent: <?= $countSent ?></span>
        <span class="badge bg-danger fs-6">Failed: <?= $countFailed ?></span>
        <span class="badge bg-secondary fs-6">Total: <?= $total ?></span>
    </div>
</div>

<!-- Filters -->
<form method="get" class="row g-2 mb-3">
    <div class="col-md-3">
        <input type="text" name="search" class="form-control" placeholder="Search name / phone..."
               value="<?= esc($search ?? '') ?>">
    </div>
    <div class="col-md-2">
        <select name="status" class="form-select">
            <option value="">All Status</option>
            <option value="sent"   <?= ($filterStatus ?? '') === 'sent'   ? 'selected' : '' ?>>Sent</option>
            <option value="failed" <?= ($filterStatus ?? '') === 'failed' ? 'selected' : '' ?>>Failed</option>
        </select>
    </div>
    <div class="col-md-3">
        <select name="template" class="form-select">
            <option value="">All Templates</option>
            <?php foreach ($templateNames as $t): ?>
                <option value="<?= esc($t) ?>" <?= ($filterTemplate ?? '') === $t ? 'selected' : '' ?>>
                    <?= esc($t) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-2">
        <input type="date" name="date" class="form-control" value="<?= esc($filterDate ?? '') ?>">
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-outline-primary w-100"><i class="bi bi-search"></i></button>
    </div>
    <div class="col-md-1">
        <a href="<?= base_url('admin/message-logs') ?>" class="btn btn-outline-secondary w-100">Clear</a>
    </div>
</form>

<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle table-sm">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Recipient</th>
                <th>Phone</th>
                <th>Template</th>
                <th>Variables Sent</th>
                <th>Status</th>
                <th>Error</th>
                <th>Sent At</th>
            </tr>
        </thead>
        <tbody>
        <?php if (empty($logs)): ?>
            <tr>
                <td colspan="8" class="text-center text-muted">No logs found.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($logs as $i => $log): ?>
            <tr>
                <td><?= $offset + $i + 1 ?></td>
                <td><?= esc($log['recipient_name'] ?? '-') ?></td>
                <td><?= esc($log['phone']) ?></td>
                <td><span class="badge bg-info text-dark"><?= esc($log['template_name']) ?></span></td>
                <td class="small">
                    <?php
                        $vars = json_decode($log['variables_sent'] ?? '[]', true);
                        if (!empty($vars)) {
                            echo esc(implode(', ', array_map(fn($v) => '"' . $v . '"', $vars)));
                        } else {
                            echo '-';
                        }
                    ?>
                </td>
                <td>
                    <?php if ($log['status'] === 'sent'): ?>
                        <span class="badge bg-success">Sent</span>
                    <?php else: ?>
                        <span class="badge bg-danger">Failed</span>
                    <?php endif; ?>
                </td>
                <td class="small text-danger"><?= esc($log['error_message'] ?? '') ?></td>
                <td class="small text-nowrap">
                    <?= $log['sent_at'] ? date('d M Y H:i', strtotime($log['sent_at'])) : '-' ?>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Pagination -->
<?php if ($totalPages > 1): ?>
<nav>
    <ul class="pagination pagination-sm">
        <?php for ($p = 1; $p <= $totalPages; $p++): ?>
            <li class="page-item <?= $p === $currentPage ? 'active' : '' ?>">
                <a class="page-link" href="?<?= http_build_query(array_merge($_GET ?? [], ['page' => $p])) ?>">
                    <?= $p ?>
                </a>
            </li>
        <?php endfor; ?>
    </ul>
</nav>
<?php endif; ?>

<?= $this->endSection() ?>
