<!-- app/Views/admin/cache_status.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Cache Status - Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .cache-hit { color: #28a745; }
        .cache-miss { color: #dc3545; }
        .stat-card { border-radius: 10px; padding: 20px; margin-bottom: 20px; }
        .bg-cache { background-color: #e8f4fd; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Include your admin sidebar here -->
            <?= view('admin/layout/sidebar') ?>
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">
                        <i class="fas fa-database"></i> PDF Cache Status
                    </h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="<?= site_url('admin/clear-cache') ?>" 
                           class="btn btn-danger btn-sm" 
                           onclick="return confirm('Are you sure you want to clear all cached PDFs?')">
                            <i class="fas fa-trash-alt"></i> Clear Cache
                        </a>
                    </div>
                </div>

                <!-- Success/Error Messages -->
                <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>

                <!-- Cache Statistics -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card stat-card bg-cache">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted">Total Cached Files</h6>
                                        <h3 class="mb-0"><?= $totalFiles ?></h3>
                                    </div>
                                    <div class="icon-circle">
                                        <i class="fas fa-file-pdf fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card stat-card bg-cache">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted">Total Cache Size</h6>
                                        <h3 class="mb-0"><?= $totalSize ?> MB</h3>
                                    </div>
                                    <div class="icon-circle">
                                        <i class="fas fa-hdd fa-2x text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card stat-card bg-cache">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted">Cache Directory</h6>
                                        <h6 class="mb-0 text-truncate" title="<?= WRITEPATH . 'pdf_cache/' ?>">
                                            /writable/pdf_cache/
                                        </h6>
                                    </div>
                                    <div class="icon-circle">
                                        <i class="fas fa-folder fa-2x text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cache Files Table -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-list"></i> Cached PDF Files
                            <span class="badge bg-primary rounded-pill"><?= $totalFiles ?></span>
                        </h5>
                    </div>
                    <div class="card-body">
                        <?php if (empty($files)): ?>
                            <div class="text-center py-5">
                                <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                <h5 class="text-muted">No cached PDF files found</h5>
                                <p class="text-muted">PDFs will be cached automatically when students download them</p>
                            </div>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>File Name</th>
                                            <th>Chapter Slug</th>
                                            <th>Size</th>
                                            <th>Created</th>
                                            <th>Age</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($files as $index => $file): ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td>
                                                <i class="fas fa-file-pdf text-danger me-2"></i>
                                                <?= $file['name'] ?>
                                            </td>
                                            <td>
                                                <code><?= $file['slug'] ?></code>
                                            </td>
                                            <td><?= $file['size'] ?> KB</td>
                                            <td><?= $file['created'] ?></td>
                                            <td>
                                                <span class="badge <?= strpos($file['age'], 'seconds') !== false ? 'bg-success' : 'bg-info' ?>">
                                                    <?= $file['age'] ?>
                                                </span>
                                            </td>
                                            <td>
                                                <a href="<?= site_url('admin/delete-cache-file/' . $file['name']) ?>" 
                                                   class="btn btn-sm btn-outline-danger"
                                                   onclick="return confirm('Delete this cached file?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <a href="<?= site_url('chapter/pdf/' . $file['slug']) ?>" 
                                                   class="btn btn-sm btn-outline-primary" target="_blank">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Cache Info -->
                            <div class="alert alert-info mt-3">
                                <h6><i class="fas fa-info-circle"></i> Cache Information</h6>
                                <ul class="mb-0">
                                    <li>PDFs are cached for <strong>24 hours</strong></li>
                                    <li>First request generates and caches the PDF</li>
                                    <li>Subsequent requests are served from cache</li>
                                    <li>Cache automatically expires after 24 hours</li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto refresh every 30 seconds
        setTimeout(function() {
            window.location.reload();
        }, 30000);
    </script>
</body>
</html>