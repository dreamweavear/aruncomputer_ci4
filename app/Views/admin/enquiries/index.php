<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
    <h1 class="h2">Enquiries</h1>
    <span class="badge bg-secondary fs-6"><?= count($enquiries) ?> total</span>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if (empty($enquiries)): ?>
    <div class="alert alert-info">No enquiries found.</div>
<?php else: ?>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enquiries as $i => $enq): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= esc($enq['name']) ?></td>
                        <td><?= esc($enq['course']) ?></td>
                        <td><?= esc($enq['phone']) ?></td>
                        <td><?= esc($enq['email'] ?: '—') ?></td>
                        <td><?= date('d M Y', strtotime($enq['created_at'])) ?></td>
                        <td>
                            <a href="<?= base_url('admin/enquiries/view/' . $enq['id']) ?>"
                               class="btn btn-sm btn-info text-white">View</a>
                            <form method="post" action="<?= base_url('admin/enquiries/delete/' . $enq['id']) ?>" style="display:inline" onsubmit="return confirm('Delete this enquiry?')">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
