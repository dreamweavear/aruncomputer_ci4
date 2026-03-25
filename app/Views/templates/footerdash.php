<!-- Bootstrap 5 JS Bundle with Popper -->







      <div class="row">

  <!-- Column 1 -->

  <div class="col-sm-4 bg-primary text-white py-4 px-5">

    <div class="d-flex align-items-start mb-2">

      <i class="bi bi-shop fs-5 me-2"></i>

      <div>Arun Computers</div>

    </div>

    <div class="d-flex align-items-start mb-2">

      <i class="bi bi-geo-alt fs-5 me-2"></i>

      <div>Allahabad Road, Urrhat, Rewa (M.P.)</div>

    </div>

    <div class="d-flex align-items-start">

      <i class="bi bi-pin-map fs-5 me-2"></i>

      <div>India Pin-486001</div>

    </div>

  </div>



  <!-- Column 2 -->

  <div class="col-sm-4 bg-primary text-white py-4 px-4">

    <div class="d-flex align-items-center gap-2 mb-2">

      <i class="bi bi-envelope-fill"></i>

      <a class="text-white text-decoration-none" href="mailto:aruncomputersrewa@gmail.com">aruncomputersrewa@gmail.com</a>

    </div>



    <ul class="list-unstyled mb-2">

      <li class="d-flex align-items-center gap-2 mb-2">

        <i class="bi bi-globe"></i>

        <a class="text-white text-decoration-none" href="http://www.aruncomputer.com" target="_blank">www.aruncomputer.com</a>

      </li>

      <li class="d-flex align-items-center gap-2">

        <i class="bi bi-globe"></i>

        <a class="text-white text-decoration-none" href="http://www.hamararewa.in" target="_blank">www.hamararewa.in</a>

      </li>

    </ul>

  </div>



  <!-- Column 3 -->

  <div class="col-sm-4 bg-primary text-white py-4 px-4">

    <div class="d-flex align-items-start mb-2">

      <i class="bi bi-telephone-fill fs-5 me-2"></i>

      <div>+91 9201488597, 9926542408</div>

    </div>



    <div class="d-flex align-items-center mt-3">

      <a href="https://www.facebook.com/aruncomputersrewa" class="text-white me-3 fs-5"><i class="bi bi-facebook"></i></a>

      <a href="#" class="text-white me-3 fs-5"><i class="bi bi-instagram"></i></a>

      <a href="https://wa.me/9201488597" class="text-white me-3 fs-5"><i class="bi bi-whatsapp"></i></a>

      <a href="mailto:aruncomputersrewa@gmail.com" class="text-white me-3 fs-5"><i class="bi bi-envelope-fill"></i></a>

    </div>

  </div>

</div>



<!-- Bottom Footer Row -->

<div class="row">

  <div class="col-12 bg-dark text-white text-center py-3">

    <div class="container">

      <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">

        <div class="d-flex align-items-center">

          <i class="bi bi-c-circle me-2"></i>

          <span>Copyright 1999–2025</span>

        </div>

        <div class="d-flex align-items-center">

          <i class="bi bi-lock-fill me-2"></i>

          <span>All Rights Reserved</span>

        </div>

        <div class="d-flex align-items-center">

          <i class="bi bi-code-square me-2"></i>

          <span>Designed By - O.P. Shrivastava @Arun Computer College, Rewa(M.P.) </span>

        </div>

        <div class="d-flex align-items-center">

          <a href="<?= base_url('privacy-policy') ?>" class="text-white text-decoration-none small">
            <i class="bi bi-shield-lock me-1"></i>Privacy Policy
          </a>

        </div>

      </div>

    </div>

  </div>

</div>





  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

   

            <script>

                // Toggle sidebar

                const sidebarToggleBtn = document.getElementById('sidebarToggle');

                if (sidebarToggleBtn) {

                    sidebarToggleBtn.addEventListener('click', function() {

                        const sidebarEl = document.getElementById('sidebar');

                        if (sidebarEl) sidebarEl.classList.toggle('collapsed');

                    });

                }

                // Activate sidebar links

                const sidebarLinks = document.querySelectorAll('.sidebar-link');

                sidebarLinks.forEach(link => {

                    link.addEventListener('click', function() {

                        sidebarLinks.forEach(l => l.classList.remove('active'));

                        this.classList.add('active');

                    });

                });

            </script>



                <!-- script for table responsive  -->



                <!-- templates/footerdash.php : Bootstrap bundle ke baad -->

<script>

(function () {

  function makeTablesResponsive(ctx) {

    const root = ctx || document;

    // Wrap all normal tables (skip DataTables etc.)

    root.querySelectorAll('table:not(.dataTable)').forEach(function (tbl) {

      if (tbl.closest('.table-responsive, .dataTables_wrapper')) return; // already wrapped

      // add nice bootstrap table classes if missing

      tbl.classList.add('table','table-striped','table-hover','align-middle');

      // wrap

      const wrap = document.createElement('div');

      // only scroll on small screens? use: 'table-responsive-md'

      wrap.className = 'table-responsive';

      tbl.parentNode.insertBefore(wrap, tbl);

      wrap.appendChild(tbl);

    });



    // keep last cell (actions) on one line

    root.querySelectorAll('table tbody tr').forEach(function (row) {

      const last = row.lastElementChild;

      if (last && last.querySelector('.btn')) last.classList.add('text-nowrap');

    });

  }



  // Run after DOM ready

  if (document.readyState === 'loading') {

    document.addEventListener('DOMContentLoaded', function () {

      makeTablesResponsive(document.querySelector('.main-content') || document);

    });

  } else {

    makeTablesResponsive(document.querySelector('.main-content') || document);

  }

})();

</script>









   </body>

</html>