<?= $this->include('templates/headeradmin') ?>

<style>
@media print {
    .no-print { display: none !important; }
    .course-section { page-break-inside: avoid; }
    .card { border: 1px solid #333 !important; }
}
.pending-badge { font-size: 0.85rem; }
.course-card-header { cursor: pointer; }
</style>

<div class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <main class="flex-fill p-4">
      <div class="container-fluid pb-5">

        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4 no-print">
          <h2 class="mb-0">&#128203; Fee Pending Report — Course Wise</h2>
          <div class="d-flex gap-2">
            <a href="<?= base_url('admin/admission') ?>" class="btn btn-outline-secondary btn-sm">
              &#8592; Back to Admissions
            </a>
            <button onclick="window.print()" class="btn btn-primary btn-sm">
              &#128438; Print Full Report
            </button>
          </div>
        </div>

        <!-- Grand Summary Cards -->
        <div class="row g-3 mb-4 no-print">
          <div class="col-md-3">
            <div class="card text-white bg-primary shadow-sm">
              <div class="card-body text-center py-3">
                <div class="fs-4 fw-bold"><?= $grandTotal['student_count'] ?></div>
                <div class="small">Total Students</div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-info shadow-sm">
              <div class="card-body text-center py-3">
                <div class="fs-4 fw-bold">&#8377;<?= number_format($grandTotal['total_fee'], 0) ?></div>
                <div class="small">Total Fee</div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-success shadow-sm">
              <div class="card-body text-center py-3">
                <div class="fs-4 fw-bold">&#8377;<?= number_format($grandTotal['paid_amount'], 0) ?></div>
                <div class="small">Total Collected</div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-danger shadow-sm">
              <div class="card-body text-center py-3">
                <div class="fs-4 fw-bold">&#8377;<?= number_format($grandTotal['pending_amount'], 0) ?></div>
                <div class="small">Total Pending</div>
              </div>
            </div>
          </div>
        </div>

        <?php if (empty($courseWise)): ?>
          <div class="alert alert-info">No student data found.</div>
        <?php else: ?>

          <?php foreach ($courseWise as $courseName => $students): ?>
          <?php $totals = $courseTotals[$courseName]; ?>

          <div class="course-section mb-5">

            <!-- Course Header Card -->
            <div class="card shadow-sm border-0 mb-0">
              <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-2">
                <div>
                  <span class="fw-bold fs-5">&#127979; <?= esc($courseName) ?></span>
                  <span class="badge bg-secondary ms-2"><?= $totals['student_count'] ?> students</span>
                </div>
                <div class="d-flex gap-3 align-items-center">
                  <span class="badge bg-info pending-badge">Fee: &#8377;<?= number_format($totals['total_fee'], 0) ?></span>
                  <span class="badge bg-success pending-badge">Paid: &#8377;<?= number_format($totals['paid_amount'], 0) ?></span>
                  <span class="badge bg-danger pending-badge">Pending: &#8377;<?= number_format($totals['pending_amount'], 0) ?></span>
                  <button class="btn btn-sm btn-outline-light no-print"
                          onclick="printSection('course-<?= md5($courseName) ?>')">
                    &#128438; Print
                  </button>
                </div>
              </div>

              <!-- Student Table for this course -->
              <div id="course-<?= md5($courseName) ?>">
                <table class="table table-bordered table-hover mb-0 table-sm">
                  <thead class="table-light">
                    <tr>
                      <th>#</th>
                      <th>Student Name</th>
                      <th>Phone</th>
                      <th>Adm. Date</th>
                      <th class="text-end">Course Fee</th>
                      <th class="text-end">Discount</th>
                      <th class="text-end">Net Fee</th>
                      <th class="text-end">Paid</th>
                      <th class="text-end">Pending</th>
                      <th class="no-print text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sno = 1; foreach ($students as $s): ?>
                    <?php $pending = max(0, $s['pending_amount']); ?>
                    <tr class="<?= ($pending > 0) ? 'table-warning' : '' ?>">
                      <td><?= $sno++ ?></td>
                      <td><?= esc($s['name']) ?></td>
                      <td><?= esc($s['phone']) ?></td>
                      <td><?= esc($s['admission_date'] ?? '-') ?></td>
                      <td class="text-end">&#8377;<?= number_format($s['course_fee'] ?? 0, 0) ?></td>
                      <td class="text-end text-muted">&#8377;<?= number_format($s['discount'] ?? 0, 0) ?></td>
                      <td class="text-end fw-bold">&#8377;<?= number_format($s['total_fee'] ?? 0, 0) ?></td>
                      <td class="text-end text-success fw-bold">&#8377;<?= number_format($s['paid_amount'] ?? 0, 0) ?></td>
                      <td class="text-end <?= ($pending > 0) ? 'text-danger fw-bold' : 'text-success' ?>">
                        &#8377;<?= number_format($pending, 0) ?>
                      </td>
                      <td class="no-print text-center">
                        <a href="<?= base_url('admin/fees/view/' . $s['id']) ?>"
                           class="btn btn-xs btn-outline-primary" style="font-size:0.75rem; padding:2px 6px;">
                          View Fees
                        </a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot class="table-secondary fw-bold">
                    <tr>
                      <td colspan="6" class="text-end">Course Total:</td>
                      <td class="text-end">&#8377;<?= number_format($totals['total_fee'], 0) ?></td>
                      <td class="text-end text-success">&#8377;<?= number_format($totals['paid_amount'], 0) ?></td>
                      <td class="text-end text-danger">&#8377;<?= number_format($totals['pending_amount'], 0) ?></td>
                      <td class="no-print"></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

          </div><!-- .course-section -->
          <?php endforeach; ?>

          <!-- Grand Total Footer -->
          <div class="card bg-dark text-white shadow mt-2">
            <div class="card-body py-2">
              <div class="row text-center">
                <div class="col">
                  <div class="small">Students</div>
                  <div class="fw-bold"><?= $grandTotal['student_count'] ?></div>
                </div>
                <div class="col">
                  <div class="small">Total Fee</div>
                  <div class="fw-bold">&#8377;<?= number_format($grandTotal['total_fee'], 0) ?></div>
                </div>
                <div class="col">
                  <div class="small">Collected</div>
                  <div class="fw-bold text-success">&#8377;<?= number_format($grandTotal['paid_amount'], 0) ?></div>
                </div>
                <div class="col">
                  <div class="small">Pending</div>
                  <div class="fw-bold text-warning">&#8377;<?= number_format($grandTotal['pending_amount'], 0) ?></div>
                </div>
              </div>
            </div>
          </div>

        <?php endif; ?>

      </div>
    </main>
  </div>

  <?= $this->include('templates/footerdash') ?>
</div>

<script>
function printSection(sectionId) {
    var content = document.getElementById(sectionId).innerHTML;
    var header  = document.querySelector('.card-header[onclick*="' + sectionId + '"]')
                  || document.querySelector('.card-header');

    var win = window.open('', '_blank', 'width=900,height=600');
    win.document.write(`
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Fee Pending Report - <?= esc('Arun Computer Institute') ?></title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
            <style>
                body { font-family: Arial, sans-serif; font-size: 13px; padding: 20px; }
                .print-header { text-align: center; margin-bottom: 15px; border-bottom: 2px solid #333; padding-bottom: 10px; }
                table { width: 100%; border-collapse: collapse; }
                th, td { border: 1px solid #ccc; padding: 5px 8px; }
                th { background: #f0f0f0; font-weight: bold; }
                .text-end { text-align: right; }
                .text-danger { color: #dc3545; }
                .text-success { color: #198754; }
                .fw-bold { font-weight: bold; }
                tfoot tr { background: #e9ecef; font-weight: bold; }
            </style>
        </head>
        <body>
            <div class="print-header">
                <h3>Arun Computer Institute, Rewa</h3>
                <p>Fee Pending Report &mdash; Printed on: ` + new Date().toLocaleDateString('en-IN') + `</p>
            </div>
            ` + content + `
        </body>
        </html>
    `);
    win.document.close();
    win.focus();
    setTimeout(function() { win.print(); }, 500);
}
</script>
