<?= $this->include('templates/headeradmin') ?>
<div class="container mt-4">
    <h2>Add New Notice</h2>

    <form method="post" action="<?= site_url('admin/notice/store') ?>">
        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Link (Optional)</label>
            <input type="text" name="url" class="form-control">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
