<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Papers</h2>
<a href="<?= site_url('admin/papers/create') ?>" class="btn btn-primary mb-3">Add New Paper</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>course</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($papers as $paper): ?>
        <tr>
            <td><?= $paper['id'] ?></td>
            <td><?= $paper['course_name'] ?></td>
            <td><?= $paper['name'] ?></td>
            <td><?= $paper['slug'] ?></td>
            <td>
                <a href="<?= site_url('admin/papers/edit/'.$paper['id']) ?>" class="btn btn-sm btn-warning">Edit</a>


            <form method="post"
              action="<?= site_url('admin/papers/delete/'.$paper['id']) ?>"
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
