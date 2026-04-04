<?= $this->include('templates/headerdash1') ?>

<style>
  body { display: flex; flex-direction: column; min-height: 100vh; }
</style>

<main style="flex: 1;">
<div class="container mt-4 mb-5">
    <h2 class="text-center mb-1"><i class="bi bi-people-fill me-2 text-primary"></i>Our Alumni</h2>
    <p class="text-center text-muted mb-4">Proud graduates of Arun Computer Institute, Rewa</p>

    <?php if (empty($alumni)): ?>
        <div class="alert alert-info text-center">No alumni records found.</div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Admission Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alumni as $i => $a): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= esc($a['name']) ?></td>
                            <td><?= esc($a['course']) ?></td>
                            <td><?= esc($a['admission_date']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
</main>

<?= $this->include('templates/footerdash') ?>
