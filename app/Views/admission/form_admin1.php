<?= $this->include('templates/headeradmin') ?>

<div class="container mt-4">
    <h2 class="text-center">Admission Form</h2>
    <h4> views>admission>form_admin.php</h4>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?> 

<?php if (isset($validation)): ?>
    <div class="alert alert-danger">
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<form id="admissionForm" method="post" action="<?= base_url('admin/admission/store') ?>" enctype="multipart/form-data">

    <?php
    function fieldError($validation, $field) {
        return isset($validation) && $validation->hasError($field) ? '<div class="text-danger small">'.$validation->getError($field).'</div>' : '';
    }
    ?>

    <div class="mb-3">
        <label>Course Fee</label>
        <input type="number" id="course_fee" name="course_fee" class="form-control" value="<?= old('course_fee', $student['course_fee'] ?? '') ?>">
        <?= fieldError($validation, 'course_fee') ?>
    </div>

    <div class="mb-3">
        <label>Discount</label>
        <input type="number" id="discount" name="discount" class="form-control" value="<?= old('discount', $student['discount'] ?? 0) ?>">
        <?= fieldError($validation, 'discount') ?>
    </div>

    <div class="mb-3">
        <label>Admission Date</label>
        <input type="date" id="admission_date" name="admission_date" class="form-control" value="<?= old('admission_date', $student['admission_date'] ?? '') ?>">
        <?= fieldError($validation, 'admission_date') ?>
    </div>

    <div class="mb-3">
        <label>Admission Fees Paid</label>
        <input type="number" id="admission_fee" name="admission_fee" class="form-control" value="<?= old('admission_fee', $student['admission_fee'] ?? '') ?>">
        <?= fieldError($validation, 'admission_fee') ?>
    </div>

    <div class="mb-3">
        <label>Receipt Number</label>
        <input type="number" id="receipt_number" name="receipt_number" class="form-control" value="<?= old('receipt_number', $student['receipt_number'] ?? '') ?>">
        <?= fieldError($validation, 'receipt_number') ?>
    </div>

    <div class="mb-3">
        <label>Name:</label>
        <input type="text" id="name" class="form-control" name="name" value="<?= old('name', $student['name'] ?? '') ?>">
        <?= fieldError($validation, 'name') ?>
    </div>

    <div class="mb-3">
        <label>Father's Name:</label>
        <input type="text" id="father_name" class="form-control" name="father_name" value="<?= old('father_name', $student['father_name'] ?? '') ?>">
        <?= fieldError($validation, 'father_name') ?>
    </div>

    <div class="mb-3">
        <label>Date of Birth</label>
        <input type="date" id="dob" class="form-control" name="dob" value="<?= old('dob', $student['dob'] ?? '') ?>">
        <?= fieldError($validation, 'dob') ?>
    </div>

    <div class="mb-3">
        <label>Course</label>
        <select class="form-select" id="course" name="course">
            <option value="">-- Select Course --</option>
            <?php foreach ($courses as $course): ?>
                <option value="<?= esc($course['name']) ?>" <?= old('course', $student['course'] ?? '') == $course['name'] ? 'selected' : '' ?>>
                    <?= esc($course['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?= fieldError($validation, 'course') ?>
    </div>

    <div class="mb-3">
        <label>Phone:</label>
        <input type="text" id="phone" class="form-control" name="phone" value="<?= old('phone', $student['phone'] ?? '') ?>">
        <?= fieldError($validation, 'phone') ?>
    </div>

    <div class="mb-3">
        <label>Email:</label>
        <input type="email" id="email" class="form-control" name="email" value="<?= old('email', $student['email'] ?? '') ?>">
        <?= fieldError($validation, 'email') ?>
    </div>

    <div class="mb-3">
        <label>Photo:</label>
        <input type="file" id="photo" class="form-control" name="photo" accept="image/*" <?= isset($student) ? '' : 'required' ?>>
        <?= fieldError($validation, 'photo') ?>
    </div>

    <div class="mt-3">
        <button type="button" class="btn btn-primary" onclick="showPreview()">Preview</button>
        <a href="<?= site_url('admin/admission') ?>" class="btn btn-secondary">Cancel</a>
    </div>

    <!-- Preview Modal -->
    <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Admission Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr><th>Name</th><td id="p_name"></td></tr>
                        <tr><th>Father's Name</th><td id="p_father"></td></tr>
                        <tr><th>Date of Birth</th><td id="p_dob"></td></tr>
                        <tr><th>Course</th><td id="p_course"></td></tr>
                        <tr><th>Phone</th><td id="p_phone"></td></tr>
                        <tr><th>Email</th><td id="p_email"></td></tr>
                        <tr><th>Course Fee</th><td id="p_course_fee"></td></tr>
                        <tr><th>Discount</th><td id="p_discount"></td></tr>
                        <tr><th>Admission Date</th><td id="p_admission_date"></td></tr>
                        <tr><th>Admission Fee Paid</th><td id="p_admission_fee"></td></tr>
                        <tr><th>Receipt Number</th><td id="p_receipt_number"></td></tr>
                        <tr><th>Photo</th><td><img id="p_photo" src="" alt="Preview" width="120" height="140" style="border:1px solid #ccc;"></td></tr>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" onclick="submitFinal()">Final Submit</button>
                </div>

            </div>
        </div>
    </div>
</form>

<script>
function showPreview() {
    document.getElementById('p_name').textContent = document.getElementById('name').value;
    document.getElementById('p_father').textContent = document.getElementById('father_name').value;
    document.getElementById('p_dob').textContent = document.getElementById('dob').value;
    document.getElementById('p_course').textContent = document.getElementById('course').value;
    document.getElementById('p_phone').textContent = document.getElementById('phone').value;
    document.getElementById('p_email').textContent = document.getElementById('email').value;
    document.getElementById('p_course_fee').textContent = document.getElementById('course_fee').value;
    document.getElementById('p_discount').textContent = document.getElementById('discount').value;
    document.getElementById('p_admission_date').textContent = document.getElementById('admission_date').value;
    document.getElementById('p_admission_fee').textContent = document.getElementById('admission_fee').value;
    document.getElementById('p_receipt_number').textContent = document.getElementById('receipt_number').value;

    const photoInput = document.getElementById('photo');
    const previewImg = document.getElementById('p_photo');
    if (photoInput.files && photoInput.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
        };
        reader.readAsDataURL(photoInput.files[0]);
    } else {
        previewImg.src = '';
    }

    const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
    previewModal.show();
}

function submitFinal() {
    document.getElementById('admissionForm').submit();
}
</script>

<?= $this->include('templates/footerdash') ?>
