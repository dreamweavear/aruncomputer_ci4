<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>



<h2>Edit Fee</h2>



<?php if(session()->getFlashdata('success')): ?>

    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>

<?php endif; ?>



<?php if(session()->getFlashdata('error')): ?>

    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>

<?php endif; ?>



<form method="post" action="<?= site_url('admin/fees/update/'.$fee['id']) ?>">

    <?= csrf_field() ?>



    <div class="mb-3">

        <label>Student</label>

        <select name="student_id" class="form-control" required>

            <?php foreach ($students as $student): ?>

                <option value="<?= $student['id'] ?>" <?= $student['id'] == $fee['student_id'] ? 'selected' : '' ?>>

                    <?= esc($student['name']) ?> (<?= $student['id'] ?>)

                </option>

            <?php endforeach; ?>

        </select>

    </div>



    <div class="mb-3">

        <label>Installment Number</label>

        <input type="number" name="installment_number" class="form-control" value="<?= $fee['installment_number'] ?>" required>

    </div>



    <div class="mb-3">

        <label>Amount</label>

        <input type="text" name="amount" class="form-control" value="<?= $fee['amount'] ?>" required>

    </div>



    <div class="mb-3">

        <label>Payment Date</label>

        <input type="date" name="payment_date" class="form-control" value="<?= $fee['payment_date'] ?>" required>

    </div>



    <div class="mb-3">

        <label>Receipt Number</label>

        <input type="text" name="receipt_number" class="form-control" value="<?= $fee['receipt_number'] ?>">

    </div>



    <div class="mb-3">

        <label>Payment Mode</label>

        <select name="payment_mode" class="form-control" required>

            <option value="Cash" <?= isset($fee['payment_mode']) && $fee['payment_mode'] == 'Cash' ? 'selected' : '' ?>>Cash</option>

            <option value="Cheque" <?= isset($fee['payment_mode']) && $fee['payment_mode'] == 'Cheque' ? 'selected' : '' ?>>Cheque</option>

            <option value="Bank Transfer" <?= isset($fee['payment_mode']) && $fee['payment_mode'] == 'Bank Transfer' ? 'selected' : '' ?>>Bank Transfer</option>

            <option value="Online" <?= isset($fee['payment_mode']) && $fee['payment_mode'] == 'Online' ? 'selected' : '' ?>>Online</option>

            <option value="DD" <?= isset($fee['payment_mode']) && $fee['payment_mode'] == 'DD' ? 'selected' : '' ?>>DD (Demand Draft)</option>

        </select>

    </div>



    <div class="mb-3">

        <label>Payment Status</label>

        <select name="status" class="form-control" required>

            <option value="Paid" <?= isset($fee['status']) && $fee['status'] == 'Paid' ? 'selected' : '' ?>>Paid</option>

            <option value="Pending" <?= isset($fee['status']) && $fee['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>

            <option value="Overdue" <?= isset($fee['status']) && $fee['status'] == 'Overdue' ? 'selected' : '' ?>>Overdue</option>

            <option value="Partial" <?= isset($fee['status']) && $fee['status'] == 'Partial' ? 'selected' : '' ?>>Partial</option>

        </select>

    </div>



    <button type="submit" class="btn btn-primary">Update Fee</button>

    <a href="<?= site_url('admin/fees') ?>" class="btn btn-secondary">Cancel</a>

</form>



<?= $this->endSection() ?>

