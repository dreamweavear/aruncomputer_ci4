<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
    <h1 class="h2">Enquiry Details</h1>
    <a href="<?= base_url('admin/enquiries') ?>" class="btn btn-secondary btn-sm">← Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered">
            <tr><th style="width:200px">Name</th><td><?= esc($enquiry['name']) ?></td></tr>
            <tr><th>Father's Name</th><td><?= esc($enquiry['father_name'] ?: '—') ?></td></tr>
            <tr><th>Date of Birth</th><td><?= esc($enquiry['dob'] ?: '—') ?></td></tr>
            <tr><th>Course</th><td><?= esc($enquiry['course'] ?: '—') ?></td></tr>
            <tr><th>Phone</th><td><?= esc($enquiry['phone']) ?></td></tr>
            <tr><th>Email</th><td><?= esc($enquiry['email'] ?: '—') ?></td></tr>
            <tr><th>Message</th><td><?= nl2br(esc($enquiry['message'] ?: '—')) ?></td></tr>
            <tr><th>Submitted On</th><td><?= date('d M Y, h:i A', strtotime($enquiry['created_at'])) ?></td></tr>
        </table>

        <div class="mt-3 d-flex gap-2">
            <a href="<?= base_url('admin/admission/create') ?>?name=<?= urlencode($enquiry['name']) ?>&phone=<?= urlencode($enquiry['phone']) ?>&email=<?= urlencode($enquiry['email']) ?>&course=<?= urlencode($enquiry['course']) ?>"
               class="btn btn-success">
                Convert to Admission
            </a>
            <a href="<?= base_url('admin/enquiries/delete/' . $enquiry['id']) ?>"
               class="btn btn-danger"
               onclick="return confirm('Delete this enquiry?')">Delete</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
