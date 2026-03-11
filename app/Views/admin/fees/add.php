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



    <div class="mb-3">

        <label>Payment Mode</label>

        <select name="payment_mode" class="form-control" required>

            <option value="Cash">Cash</option>

            <option value="Cheque">Cheque</option>

            <option value="Bank Transfer">Bank Transfer</option>

            <option value="Online">Online</option>

            <option value="DD">DD (Demand Draft)</option>

        </select>

    </div>



    <div class="mb-3">

        <label>Payment Status</label>

        <select name="status" class="form-control" required>

            <option value="Paid">Paid</option>

            <option value="Pending">Pending</option>

            <option value="Overdue">Overdue</option>

            <option value="Partial">Partial</option>

        </select>

    </div>



    <button type="submit" class="btn btn-success">Save Fee</button>

</form>



<?= $this->endSection() ?>

