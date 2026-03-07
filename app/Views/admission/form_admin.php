
<?= $this->include('templates/headeradmin') ?>

<div class="container mt-4">
    <h2 class="text-center">Admission Form</h2>

    <!-- Info banner for students  -->
<div class="card shadow border-0 rounded-4 mb-3 bg-primary-subtle text-primary-emphasis w-100">
  <div class="card-body d-flex align-items-center justify-content-center gap-2 py-3 text-center">
    <i class="bi bi-mortarboard-fill fs-4 text-primary"></i>
    <p class="m-0">
      <strong>Dear Admin,</strong>
      Please fill in the details below to start admission process. We will contact you soon!
    </p>
  </div>
</div>

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



 <form id="admissionForm" method="post"
    action="<?= base_url('admin/admission/store') ?>"
    enctype="multipart/form-data">
     
        <input type="hidden" name="password" value="student123"> 

        <div class="mb-3">
            <label>Course Fee</label>
            <input type="number" name="course_fee" class="form-control" required
                value="<?= old('course_fee', $student['course_fee'] ?? '') ?>">
        </div>

        <div class="mb-3">
            <label>Discount</label>
            <input type="number" name="discount" class="form-control" required
                value="<?= old('discount', $student['discount'] ?? 0) ?>">
        </div>

        <div class="mb-3">
            <label>Admission Date</label>
            <input type="date" name="admission_date" class="form-control" required
                value="<?= old('admission_date', $student['admission_date'] ?? '') ?>">
        </div>

        <div class="mb-3">
            <label>Admission Fees Paid</label>
            <input type="number" name="admission_fee" class="form-control" required
                value="<?= old('admission_fee', $student['admission_fee'] ?? '') ?>">
        </div>

        <div class="mb-3">
            <label>Receipt Number</label>
            <input type="number" name="receipt_number" class="form-control" required
                value="<?= old('receipt_number', $student['receipt_number'] ?? '') ?>">
        </div>

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" class="form-control" id="name" name="name" required
                value="<?= old('name', $student['name'] ?? '') ?>">
        </div>

        <div class="mb-3">
            <label>Father's Name:</label>
            <input type="text" class="form-control" id="father_name" name="father_name" required
                value="<?= old('father_name', $student['father_name'] ?? '') ?>">
        </div>


        <div class="mb-3">
    <label>Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob" required
        value="<?= old('dob', $student['dob'] ?? '') ?>">
    </div>



        <div class="mb-3">
        
           <select class="form-select" id="course" name="course" required>
                <option value="">-- Select Course --</option>
            <?php foreach ($courses as $course): ?>
        <option value="<?= esc($course['name']) ?>"
            <?= old('course', $student['course'] ?? '') == $course['name'] ? 'selected' : '' ?>>
            <?= esc($course['name']) ?>
                </option>
                <?php endforeach; ?>
            </select>

        </div>

 
        
        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" required
                value="<?= old('phone', $student['phone'] ?? '') ?>">
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" class="form-control" id="email" name="email" required
                value="<?= old('email', $student['email'] ?? '') ?>">
        </div>

        <div class="mb-3">
            <label>Photo:</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*"
                <?= isset($student) ? '' : 'required' ?>>
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
</div>

<script>
function showPreview() {
    const photoInput = document.getElementById('photo');
    const previewImg = document.getElementById('p_photo');

    if (!photoInput.files.length) {
        alert("Please select a photo again.");
        return;
    }

    document.getElementById('p_name').textContent = document.getElementById('name').value;
    document.getElementById('p_father').textContent = document.getElementById('father_name').value;
    document.getElementById('p_dob').textContent = document.getElementById('dob').value;
    document.getElementById('p_course').textContent = document.getElementById('course').value;
    document.getElementById('p_phone').textContent = document.getElementById('phone').value;
    document.getElementById('p_email').textContent = document.getElementById('email').value;
    document.getElementById('p_course_fee').textContent = document.querySelector('[name="course_fee"]').value;
    document.getElementById('p_discount').textContent = document.querySelector('[name="discount"]').value;
    document.getElementById('p_admission_date').textContent = document.querySelector('[name="admission_date"]').value;
    document.getElementById('p_admission_fee').textContent = document.querySelector('[name="admission_fee"]').value;
    document.getElementById('p_receipt_number').textContent = document.querySelector('[name="receipt_number"]').value;

    const reader = new FileReader();
    reader.onload = function (e) {
        previewImg.src = e.target.result;
    };
    reader.readAsDataURL(photoInput.files[0]);

    const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
    previewModal.show();
}

function submitFinal() {
    const form = document.getElementById('admissionForm');

    // Force HTML5 validation to run before submission
    if (!form.checkValidity()) {
        form.reportValidity();  // Show validation messages
        return;
    }

    // ✅ Delay to ensure modal closes cleanly before submit
    setTimeout(() => {
        form.submit(); // Now submit will definitely work
    }, 100);
}




// function submitFinal() {
    // document.getElementById('admissionForm').submit();
// }


</script>

</main>
</div>
</div>

<?= $this->include('templates/footerdash') ?>
