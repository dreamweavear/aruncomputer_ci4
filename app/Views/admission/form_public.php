<?= $this->include('templates/headerdash1') ?>

<div class="container mt-4">
    <h2 class="text-center">Admission Enquiry Form</h2>

    <div class="card shadow-lg border-0 rounded-4 mb-3 bg-primary-subtle text-primary-emphasis w-100">
        <div class="card-body d-flex align-items-center justify-content-center gap-2 py-3 text-center">
            <i class="bi bi-mortarboard-fill fs-4 text-primary"></i>
            <p class="m-0">
                <strong>Dear Student,</strong>
                Please fill in the details below to start your admission process. We will contact you soon!
            </p>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show mx-3" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show mx-3" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    </div>

    <?php $errors = session()->getFlashdata('errors') ?? []; ?>
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach ($errors as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form id="enquiryForm" method="post" action="<?= base_url('admission/apply') ?>" novalidate>
        <?= csrf_field() ?>

        <div class="mb-3">
            <label class="form-label">Course <span class="text-danger">*</span></label>
            <select class="form-select <?= isset($errors['course']) ? 'is-invalid' : '' ?>"
                    name="course" required>
                <option value="">-- Select Course --</option>
                <?php foreach ($courses as $course): ?>
                    <option value="<?= esc($course['name']) ?>"
                        <?= old('course') === $course['name'] ? 'selected' : '' ?>>
                        <?= esc($course['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($errors['course'])): ?>
                <div class="invalid-feedback"><?= esc($errors['course']) ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Full Name <span class="text-danger">*</span></label>
            <input type="text"
                   class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>"
                   name="name" required maxlength="100"
                   pattern="[a-zA-Z\s]+"
                   title="Name should contain letters only"
                   placeholder="e.g. Ramesh Kumar"
                   value="<?= old('name') ?>">
            <?php if (isset($errors['name'])): ?>
                <div class="invalid-feedback"><?= esc($errors['name']) ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Father's Name <span class="text-danger">*</span></label>
            <input type="text"
                   class="form-control <?= isset($errors['father_name']) ? 'is-invalid' : '' ?>"
                   name="father_name" required maxlength="100"
                   pattern="[a-zA-Z\s]+"
                   title="Father's name should contain letters only"
                   placeholder="e.g. Suresh Kumar"
                   value="<?= old('father_name') ?>">
            <?php if (isset($errors['father_name'])): ?>
                <div class="invalid-feedback"><?= esc($errors['father_name']) ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
            <input type="date"
                   class="form-control <?= isset($errors['dob']) ? 'is-invalid' : '' ?>"
                   name="dob" required
                   max="<?= date('Y-m-d', strtotime('-5 years')) ?>"
                   value="<?= old('dob') ?>">
            <?php if (isset($errors['dob'])): ?>
                <div class="invalid-feedback"><?= esc($errors['dob']) ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone <span class="text-danger">*</span></label>
            <input type="tel"
                   class="form-control <?= isset($errors['phone']) ? 'is-invalid' : '' ?>"
                   name="phone" required
                   pattern="[6-9][0-9]{9}"
                   maxlength="10"
                   title="Enter valid 10-digit Indian mobile number"
                   placeholder="e.g. 9876543210"
                   value="<?= old('phone') ?>">
            <div class="form-text">10-digit mobile number starting with 6, 7, 8 or 9</div>
            <?php if (isset($errors['phone'])): ?>
                <div class="invalid-feedback"><?= esc($errors['phone']) ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email"
                   class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>"
                   name="email" maxlength="150"
                   placeholder="e.g. name@gmail.com"
                   value="<?= old('email') ?>">
            <?php if (isset($errors['email'])): ?>
                <div class="invalid-feedback"><?= esc($errors['email']) ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Message / Query</label>
            <textarea class="form-control" name="message" rows="3" maxlength="500"
                placeholder="Any specific query or message..."><?= old('message') ?></textarea>
            <div class="form-text">Max 500 characters</div>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit Enquiry</button>
        </div>
    </form>
</div>

<?= $this->include('templates/footerdash') ?>
