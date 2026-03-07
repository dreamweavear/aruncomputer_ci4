<?= $this->include('templates/headeradmin') ?>

<div class="container my-4">
    <h2>Manage Gallery</h2>
    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <a href="<?= site_url('admin/gallery/create') ?>" class="btn btn-primary mb-3">Add New Batch</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Year</th>
                <th>Batch Type</th>
                <th>Image</th>
                <th>Students</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $item): ?>
            <tr>
                <td><?= esc($item['id']) ?></td>
                <td><?= esc($item['year']) ?></td>
                <td><?= esc($item['batch_type']) ?></td>
                <td><img src="<?= base_url('writable/uploads/gallery/'.$item['image']) ?>" height="50"></td>
                <td><?= esc($item['students_count']) ?></td>
                <td>
                    <a href="<?= site_url('admin/gallery/edit/'.$item['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= site_url('admin/gallery/delete/'.$item['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('templates/footerdash') ?>
