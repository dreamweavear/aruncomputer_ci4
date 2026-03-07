<?= $this->include('templates/headeradmin') ?>
<div class="container mt-4">
    <h2>Manage Notices</h2>
    <a href="<?= site_url('admin/notice/create') ?>" class="btn btn-primary mb-2">Add New Notice</a>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>#</th><th>Message</th><th>Link</th><th>Status</th><th>Action</th>
        </tr>
        <?php foreach($notices as $n): ?>
        <tr>
            <td><?= $n['id'] ?></td>
            <td><?= esc($n['message']) ?></td>
            <td><?= esc($n['url']) ?></td>
            <td><?= esc($n['status']) ?></td>
            <td>
            <td>
                <form method="post"
                      action="<?= site_url('admin/notice/delete/' . $n['id']) ?>"
                      style="display:inline;"
                      onsubmit="return confirm('Is notice ko delete karna hai?');">

                    <?= csrf_field() ?>

                    <button type="submit" class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>
            </td>

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
