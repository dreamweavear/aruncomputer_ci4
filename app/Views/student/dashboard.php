
<?php // app/Views/student/dashboard.php ?>

<?= view('student/sidebar_content', get_defined_vars()) ?>

<main class="main-content flex-grow-1 p-3">

  <div class="mb-4 border-bottom">
    <h2 class="text-primary">
      <i class="bi bi-mortarboard-fill"></i> Student Dashboard
    </h2>
  </div>

  <!-- Row: Student info + photo/logout -->
  <div class="row g-4">
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <!-- Info -->
            <div class="col-md-8">
              <h4 class="card-title">Welcome, <strong><?= esc($student['name']) ?></strong></h4>
              <p class="mb-1"><strong>Email:</strong> <?= esc($student['email']) ?></p>
              <p class="mb-1"><strong>Phone:</strong> <?= esc($student['phone']) ?></p>
              <p class="mb-1"><strong>Course:</strong> <?= esc($student['course']) ?></p>
              <p class="mb-0"><strong>Admission Date:</strong> <?= esc($student['admission_date']) ?></p>
            </div>
            <!-- Photo + Logout -->
            <div class="col-md-4 text-md-end text-center">
              <img src="<?= base_url('uploads/' . $student['photo']) ?>"
                   class="img-thumbnail rounded-circle mb-2" width="120" alt="Student Photo">
              <div>
                <a href="<?= site_url('student/logout') ?>"
                   class="btn btn-outline-danger btn-sm mt-2"
                   onclick="return confirm('Are you sure you want to logout?');">
                  <i class="bi bi-box-arrow-right me-1"></i> Logout
                </a>
              </div>
            </div>
          </div><!-- /row -->
        </div>
      </div>
    </div>
  </div>

  <!-- Fees notice + progress -->
  <div class="row g-4 mt-1">
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-body">
          Please deposit your fees on time to avoid any inconvenience.
          <?php
            $net = max(1, (float)$student['course_fee'] - (float)$student['discount']); // avoid /0
            $paidPercent = (int) round(min(100, max(0, ($total_paid / $net) * 100)));
          ?>
          <div class="progress mt-2">
            <div class="progress-bar bg-success"
                 role="progressbar"
                 style="width: <?= $paidPercent ?>%;"
                 aria-valuenow="<?= $paidPercent ?>" aria-valuemin="0" aria-valuemax="100">
              <?= $paidPercent ?>%
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Fees details (left) + summary (right) -->
  <div class="row g-4 mt-1">
    <div class="col-lg-8">
      <div class="card shadow-sm">
        <div class="card-header bg-warning fw-bold">
          <i class="bi bi-cash-coin"></i> Fees Installment Details
        </div>
        <div class="card-body p-0">
          <?php if (!empty($fees) && is_array($fees)) : ?>
            <div class="table-responsive">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th>Installment</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Receipt No</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($fees as $row) : ?>
                    <tr>
                      <td><?= esc($row['installment_number']) ?></td>
                      <td>₹<?= number_format((float)$row['amount']) ?></td>
                      <td><?= esc($row['payment_date']) ?></td>
                      <td><?= esc($row['receipt_number']) ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php else: ?>
            <div class="p-3">No fee record found.</div>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card shadow-sm">
        <div class="card-header bg-info text-white fw-bold">
          <i class="bi bi-calculator"></i> Fees Summary
        </div>
        <div class="card-body">
          <table class="table table-bordered mb-0">
            <tr><th>Total Course Fee</th><td>₹<?= number_format((float)$student['course_fee']) ?></td></tr>
            <tr><th>Discount</th><td>₹<?= number_format((float)$student['discount']) ?></td></tr>
            <tr><th>Total Paid</th><td>₹<?= number_format((float)$total_paid) ?></td></tr>
            <tr><th>Pending Fees</th><td><strong>₹<?= number_format((float)$pending_fees) ?></strong></td></tr>
          </table>
        </div>
      </div>
    </div>
  </div>


  <!-- EXAM RESULT & CERTIFICATE SECTION -->
  <div class="row g-4 mt-1">
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white fw-bold">
          <i class="bi bi-clipboard2-check me-2"></i>Exam Result &amp; Certificate
        </div>
        <div class="card-body">
          <?php if (!empty($exam_result)): ?>
            <?php
              $_grade = $exam_result['grade'];
              $_passed = ($_grade !== 'F');
              $_gb = match(true) {
                  $_grade === 'A+' => 'success', $_grade === 'A' => 'primary',
                  $_grade === 'B' => 'info', $_grade === 'C' => 'warning',
                  $_grade === 'D' => 'secondary', default => 'danger',
              };
              $_gl = ['A+'=>'Excellent','A'=>'Very Good','B'=>'Good','C'=>'Fair','D'=>'Satisfactory','F'=>'Fail'][$_grade] ?? '';
            ?>
            <div class="row align-items-center g-3">
              <div class="col-md-8">
                <table class="table table-bordered mb-0">
                  <tr><th width="160">Theory Marks</th><td><?= esc($exam_result['theory_marks']) ?>/50</td></tr>
                  <tr><th>Practical Marks</th><td><?= esc($exam_result['practical_marks']) ?>/50</td></tr>
                  <tr><th>Total Marks</th><td><?= esc($exam_result['total_marks']) ?>/100</td></tr>
                  <tr><th>Percentage</th><td><?= esc($exam_result['percentage']) ?>%</td></tr>
                  <tr><th>Grade</th><td><span class="badge bg-<?= $_gb ?> fs-6"><?= esc($_grade) ?> — <?= $_gl ?></span></td></tr>
                  <tr><th>Exam Date</th><td><?= $exam_result['exam_date'] ? date('d M Y', strtotime($exam_result['exam_date'])) : '—' ?></td></tr>
                  <tr><th>Attempt</th><td><?= esc($exam_result['attempt']) ?> of 2</td></tr>
                </table>
              </div>
              <div class="col-md-4 text-center">
                <?php if ($_passed): ?>
                  <div class="display-6 text-success mb-2"><i class="bi bi-patch-check-fill"></i></div>
                  <div class="fw-bold text-success fs-5 mb-2">Passed!</div>
                  <?php if (!empty($certificate)): ?>
                    <div class="alert alert-success py-2 px-3 mb-2"><i class="bi bi-award me-1"></i>Certificate Issued<br><small><?= esc($certificate['certificate_no']) ?></small></div>
                    <a href="<?= site_url('student/certificate/' . $certificate['id']) ?>" class="btn btn-success btn-sm w-100" target="_blank"><i class="bi bi-download me-1"></i>Download Certificate</a>
                  <?php else: ?>
                    <div class="alert alert-info py-2 px-3"><i class="bi bi-info-circle me-1"></i>Certificate not yet issued. Contact the institute.</div>
                  <?php endif; ?>
                <?php else: ?>
                  <div class="display-6 text-danger mb-2"><i class="bi bi-x-circle-fill"></i></div>
                  <div class="fw-bold text-danger fs-5 mb-2">Failed</div>
                  <?php if ((int)$exam_result['attempt'] < 2): ?>
                    <div class="alert alert-warning py-2 px-3"><i class="bi bi-arrow-repeat me-1"></i>You can attempt again. Contact the institute.</div>
                  <?php else: ?>
                    <div class="alert alert-danger py-2 px-3"><i class="bi bi-slash-circle me-1"></i>Maximum attempts reached.</div>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php else: ?>
            <div class="text-center py-4 text-muted">
              <i class="bi bi-hourglass-split fs-2 mb-2 d-block"></i>
              <p>Exam result not yet available. Your result will appear here after the examination.</p>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>

</div> <!-- /.content-wrapper (opened in sidebar_content) -->
</div> <!-- /.container-fluid (opened in sidebar_content) -->

<?= view('templates/footerdash.php') ?>
