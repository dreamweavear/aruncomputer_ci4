    <!-- Main Content -->


    <main class="main-content p-4">
    <!-- <div class="main-content p-4"> -->

        <section class="py-5"> 


             <!--  back next button ka code 30-1-26 ko add kiya -->
            <!-- Back - Export - Next buttons -->
        <div class="d-flex justify-content-between align-items-center mt-4">

    <!-- Back -->
            <div>
                <?php if (!empty($previous)): ?>
                    <a href="<?= site_url('student-content/' . $previous['slug']) ?>" class="btn btn-primary">
                        ← Back
                    </a>
                <?php endif; ?>
            </div>

    <!-- Export PDF -->
            <div>
                <?php if (isset($chapter)): ?>
                    <a href="<?= site_url('student/chapter/exportPdf/' . $chapter['slug']) ?>" 
                       class="btn btn-secondary" target="_blank">
                        Export PDF
                    </a>
                <?php endif; ?>
            </div>

    <!-- Next -->
            <div>
                <?php if (!empty($next)): ?>
                    <a href="<?= site_url('student-content/' . $next['slug']) ?>" class="btn btn-primary">
                        Next →
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <!-- code ends here 30-1-26 -->


        <div class="container">

                  <?php if (isset($chapter)): ?>
                <h2 class="mb-3"><?= esc($chapter['name']) ?></h2>
                <div class="chapter-content"><?= $chapter['content'] ?></div>
            <?php else: ?>
                <h3>Select a chapter to read content</h3>
            <?php endif; ?>
        </div>


        <!-- back next button ka code 30-1-26 ko add kiya -->
            <div class="d-flex justify-content-between mt-4">

            <?php if (!empty($previous)): ?>
                <a href="<?= site_url('student-content/' . $previous['slug']) ?>" class="btn btn-primary">
                    ← Back
                </a>
            <?php else: ?>
                <span></span>
            <?php endif; ?>

            <?php if (!empty($next)): ?>
                <a href="<?= site_url('student-content/' . $next['slug']) ?>" class="btn btn-primary">
                    Next →
                </a>
            <?php endif; ?>

            </div>
        <!-- code ends here 30-1-26 -->


    </section>

</main>
</div>
</div>


