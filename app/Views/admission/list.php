<?= $this->include('templates/headeradmin') ?>

<div class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">

    <!-- Main Content Area -->
    <main class="flex-fill p-4">
      <div class="container-fluid pb-5">

        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success text-center col-md-8 mx-auto">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger text-center col-md-8 mx-auto">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <h2 class="text-center">Admitted Student List</h2>

        <!-- Action buttons -->
        <div class="d-flex flex-wrap gap-2 mb-3">
            <a href="<?= base_url('admin/admission/create') ?>" class="btn btn-primary">Add New</a>
            <button type="submit" form="bulkPrintForm" class="btn btn-success">
                &#128438; Print Selected IDs
            </button>
            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="toggleAll(this)">
                Select All
            </button>
        </div>

        <!-- Filter form -->
        <form method="get" class="row g-2 mb-3">
          <div class="col-md-4">
            <label>Course</label>
            <select name="course" class="form-control">
                <option value="">-- All Courses --</option>
                <?php foreach ($courses as $c): ?>
                    <option value="<?= $c['name'] ?>" <?= ($selectedCourse == $c['name']) ? 'selected' : '' ?>>
                        <?= esc($c['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
          </div>

          <div class="col-md-4">
            <label>Admission Year</label>
            <select name="year" class="form-control">
                <option value="">-- All Years --</option>
                <?php foreach ($years as $y): ?>
                    <option value="<?= $y['year'] ?>" <?= ($selectedYear == $y['year']) ? 'selected' : '' ?>>
                        <?= esc($y['year']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
          </div>

          <div class="col-md-2 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Apply Filter</button>
          </div>
        </form>

        <!-- Bulk print form (wraps the table checkboxes) -->
        <form id="bulkPrintForm"
              method="post"
              action="<?= base_url('admin/idcard/bulk') ?>"
              target="_blank"
              onsubmit="return validateBulkPrint();">
            <?= csrf_field() ?>

            <table class="table table-bordered table-striped table-hover">
              <thead class="table-light">
                <tr>
                  <th style="width:36px;">
                      <input type="checkbox" id="checkAll" title="Select all" onchange="toggleCheckboxes(this)">
                  </th>
                  <th>ID</th><th>Name</th><th>Father</th><th>Course</th><th>DOB</th>
                  <th>Phone</th><th>Email</th><th>Photo</th><th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($students as $s): ?>
                <tr>
                  <td>
                      <input type="checkbox" name="ids[]" value="<?= $s['id'] ?>" class="row-check">
                  </td>
                  <td><?= esc($s['id']) ?></td>
                  <td><?= esc($s['name']) ?></td>
                  <td><?= esc($s['father_name']) ?></td>
                  <td><?= esc($s['course']) ?></td>
                  <td><?= esc($s['dob']) ?></td>
                  <td><?= esc($s['phone']) ?></td>
                  <td><?= esc($s['email']) ?></td>
                  <td>
                    <img src="<?= base_url('uploads/' . $s['photo']) ?>" width="50" alt="photo" class="img-thumbnail">
                  </td>
                  <td>
                    <a href="<?= base_url('admin/admission/edit/' . $s['id']) ?>"
                       class="btn btn-sm btn-warning mb-1">Edit</a>

                    <a href="<?= base_url('admin/idcard/print/' . $s['id']) ?>"
                       target="_blank"
                       class="btn btn-sm btn-info mb-1"
                       title="Print 10 copies of this student's ID card">&#128438; Print ID</a>

                    <form method="post"
                          action="<?= base_url('admin/admission/delete/' . $s['id']) ?>"
                          style="display:inline;"
                          onsubmit="return confirm('Delete karna hai?');">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

        </form><!-- #bulkPrintForm -->

      </div>
    </main>
  </div>

  <!-- Footer -->
  <?= $this->include('templates/footerdash') ?>
</div>

<script>
function toggleCheckboxes(master) {
    document.querySelectorAll('.row-check').forEach(cb => cb.checked = master.checked);
}

function toggleAll(btn) {
    var checked = document.querySelectorAll('.row-check:checked').length;
    var all     = document.querySelectorAll('.row-check').length;
    var newState = (checked < all);
    document.querySelectorAll('.row-check').forEach(cb => cb.checked = newState);
    document.getElementById('checkAll').checked = newState;
    btn.textContent = newState ? 'Deselect All' : 'Select All';
}

function validateBulkPrint() {
    var checked = document.querySelectorAll('.row-check:checked').length;
    if (checked === 0) {
        alert('Please select at least one student to print ID cards.');
        return false;
    }
    return true;
}
</script>
