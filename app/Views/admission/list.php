<?= $this->include('templates/headeradmin') ?>

<div class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">

    <!-- 🧠 Main Content Area -->
    <main class="flex-fill p-4">
      <div class="container-fluid pb-5">

        <!-- ✅ Flash Messages -->
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
        <a href="<?= base_url('admin/admission/create') ?>" class="btn btn-primary mb-3">Add New</a>



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






        <table class="table table-bordered table-striped table-hover">
          <thead class="table-light">
            <tr>
              <th>ID</th><th>Name</th><th>Father</th><th>Course</th><th>DOB</th>
              <th>Phone</th><th>Email</th><th>Photo</th><th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($students as $s): ?>
            <tr>
              <td><?= esc($s['id']) ?></td>
              <td><?= esc($s['name']) ?></td>
              <td><?= esc($s['father_name']) ?></td>
              <td><?= esc($s['course']) ?></td>
              <td><?= esc($s['dob']) ?></td>
              <td><?= esc($s['phone']) ?></td>
              <td><?= esc($s['email']) ?></td>
              <td>
                <img src="<?= base_url('uploads/' . $s['photo']) ?>" width="100" alt="photo" class="img-thumbnail">
              </td>

              <td>
                <a href="<?= base_url('admin/admission/edit/' . $s['id']) ?>" 
                class="btn btn-sm btn-warning mb-1">Edit</a>

                <form method="post"
                      action="<?= base_url('admin/admission/delete/' . $s['id']) ?>"
                      style="display:inline;"
                      onsubmit="return confirm('Delete karna hai?');">

                    <?= csrf_field() ?>

                    <button type="submit" class="btn btn-sm btn-danger">
                        Delete
                    </button>
                </form>
               </td>

            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

      </div>
    </main>
            </div>
            </div>

  </div> <!-- end d-flex (content + sidebar) -->

  <!-- ✅ Footer -->
  <?= $this->include('templates/footerdash') ?>
</div>
