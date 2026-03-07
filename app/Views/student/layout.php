



<?= $this->include('templates/headerdash1') ?>

<div class="container-fluid">
  <!-- Make sure this is a row in normal order -->
  <div class="content-wrapper d-flex flex-nowrap" style="flex-direction: row;">
    <!-- LEFT: sidebar -->
    <?= view('student/sidebar_content', get_defined_vars()) ?>

    <!-- RIGHT: main content -->
    <div class="main-content flex-grow-1 p-3">
      <?= $this->renderSection('content') ?>
    </div>
  </div>
</div>

<?= $this->include('templates/footerdash') ?>
