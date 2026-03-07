<?= $this->include('templates/headeradmin') ?>

<div class="container my-4">
    <?php $isEdit = isset($item); ?>
    <h2><?= $isEdit ? 'Edit' : 'Add' ?> Gallery Batch</h2>

    <?php if(session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach(session()->getFlashdata('errors') as $err): ?>
                    <li><?= esc($err) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data" action="<?= $isEdit ? site_url('admin/gallery/update/'.$item['id']) : site_url('admin/gallery/store') ?>">
        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="text" name="year" class="form-control" required value="<?= esc(old('year', $item['year'] ?? '')) ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Batch Type</label>
            <select name="batch_type" class="form-control" required>
                <?php
                $types = ['DCA I','DCA II','PGDCA I','PGDCA II'];
                foreach($types as $type): ?>
                    <option value="<?= $type ?>" <?= old('batch_type', $item['batch_type'] ?? '') === $type ? 'selected' : '' ?>><?= $type ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Students Count</label>
            <input type="text" name="students_count" class="form-control" value="<?= esc(old('students_count', $item['students_count'] ?? '')) ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Photos (<?= $isEdit ? 'leave blank to keep existing' : 'required' ?>) - Select one or multiple</label>
            <input type="file" name="images[]" class="form-control" <?= $isEdit ? '' : 'required' ?> multiple accept="image/*">
            <small class="text-muted d-block mt-2">✓ You can select 2-3 photos at once for the same batch</small>
        </div>
        <?php if($isEdit && ! empty($item['image'])): ?>
            <div class="mb-3">
                <img src="<?= base_url('writable/uploads/gallery/'.$item['image']) ?>" height="80">
            </div>
        <?php endif; ?>
        <button class="btn btn-primary"><?= $isEdit ? 'Update' : 'Save' ?></button>
        <a href="<?= site_url('admin/gallery') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?= $this->include('templates/footerdash') ?>
