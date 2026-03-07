
<?= $this->include('templates/headerdash1') ?>

<div class="container mt-4">
    <h2 class="text-center">Admission Form</h2>
    

    <!-- Info banner for students  -->
    <div class="card shadow-lg border-0 rounded-4 mb-3 bg-primary-subtle text-primary-emphasis w-100">
        <div class="card-body d-flex align-items-center justify-content-center gap-2 py-3 text-center">
            <i class="bi bi-mortarboard-fill fs-4 text-primary"></i>
            <p class="m-0">
                <strong>Dear Student,</strong>
                Please fill in the details below to start your admission process. We will contact you soon!
            </p>
        </div>





         <?php if (session()->getFlashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('validation')): ?>
      <div class="alert alert-danger">
        <?= session()->getFlashdata('validation')->listErrors() ?>
      </div>
    <?php endif; ?>











    <form id="admissionForm" method="post"
        action="<?= isset($student) ? base_url('admin/admission/update/' . $student['id']) : base_url('admissionpage/store') ?>"
        enctype="multipart/form-data">

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

<!--
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
            -->
        <div class="mb-3">
            <label>Admission Date</label>
            <input type="date" name="admission_date" class="form-control" required
                value="<?= old('admission_date', $student['admission_date'] ?? '') ?>">
        </div>
<!--
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
            -->
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


<!-- 
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
            -->

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
function byId(id){ return document.getElementById(id); }
function valById(id){ const el = byId(id); return el ? el.value : ''; }
function valByName(name){ const el = document.querySelector(`[name="${name}"]`); return el ? el.value : ''; }
function setText(id, val){
  const cell = byId(id);
  if (!cell) return;
  cell.textContent = val || '';
  const row = cell.closest('tr');
  if (row) row.style.display = val ? '' : 'none';
}

function showPreview() {
  try {
    setText('p_name', valById('name'));
    setText('p_father', valById('father_name'));
    setText('p_dob', valById('dob'));
    setText('p_course', valById('course'));
    setText('p_phone', valById('phone'));
    setText('p_email', valById('email'));
    setText('p_admission_date', valByName('admission_date'));

    // optional fields (commented in form) — rows auto-hide if empty/missing
    setText('p_course_fee', valByName('course_fee'));
    setText('p_discount', valByName('discount'));
    setText('p_admission_fee', valByName('admission_fee'));
    setText('p_receipt_number', valByName('receipt_number'));

    const photoInput = byId('photo');
    const previewImg = byId('p_photo');
    if (photoInput && photoInput.files && photoInput.files[0]) {
      const reader = new FileReader();
      reader.onload = e => { previewImg.src = e.target.result; };
      reader.readAsDataURL(photoInput.files[0]);
    } else {
      previewImg.src = '';
    }

    const previewModal = new bootstrap.Modal(byId('previewModal'));
    previewModal.show();
  } catch(e){
    console.error(e);
    alert('Preview error: ' + e.message);
  }
}

function submitFinal(){ byId('admissionForm').submit(); }
</script>



<?= $this->include('templates/footerdash') ?>
