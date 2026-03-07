<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Add Fee for <?= esc($student['name']) ?></h2>

<form action="<?= site_url('admin/fees/store') ?>" method="post">
    <input type="hidden" name="student_id" value="<?= $student['id'] ?>">

    <div class="mb-3">
        <label>Installment Number</label>
        <input type="number" name="installment_number" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Amount</label>
        <input type="number" name="amount" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Payment Date</label>
        <input type="date" name="payment_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Receipt Number</label>
        <input type="text" name="receipt_number" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Save Fee</button>
</form>

<?= $this->endSection() ?>
