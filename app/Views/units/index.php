<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Units</h2>
<a href="<?= site_url('admin/units/create') ?>" class="btn btn-primary mb-3">Add New Unit</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Paper</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($units as $unit): ?>
        <tr>
            <td><?= $unit['id'] ?></td>
            <td><?= $unit['paper_name'] ?></td>
            <td><?= $unit['name'] ?></td>
            <td>
                <a href="<?= site_url('admin/units/edit/'.$unit['id']) ?>" class="btn btn-sm btn-warning">Edit</a>

            <form method="post"
                  action="<?= site_url('admin/units/delete/'.$unit['id']) ?>"
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

<?= $this->endSection() ?>
