<!DOCTYPE html>

<html lang="hi">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Arun Computer College - PGDCA, DCA, Tally & Programming Courses</title>

  <meta name="description" content="Arun Computer College in Rewa offers PGDCA, DCA, Tally, and Web Development courses with practical learning. Join now for quality education.">

  <meta name="keywords" content="Arun Computer, PGDCA Rewa, DCA, Computer College, Tally, Web Design, Programming, Computer Classes in Rewa">

  <meta name="author" content="Arun Computer College, Rewa">

  <meta name="robots" content="index, follow">



  <!-- Open Graph for Social -->

  <meta property="og:title" content="Arun Computer College - Rewa">

  <meta property="og:description" content="Join Arun Computer College for practical computer courses like PGDCA, DCA, Web Design and more.">

  <meta property="og:image" content="<?= base_url('assets/images/og-image.jpg') ?>">

  <meta property="og:url" content="https://www.aruncomputer.com">

  <meta property="og:type" content="website">



  <!-- Twitter Card -->

  <meta name="twitter:card" content="summary_large_image">

  <meta name="twitter:title" content="Arun Computer College - Rewa">

  <meta name="twitter:description" content="Best PGDCA, DCA, and Web Design courses in Rewa.">

  <meta name="twitter:image" content="<?= base_url('assets/images/og-image.jpg') ?>">

  <meta name="twitter:site" content="@ArunComputerRewa">

  <meta name="twitter:creator" content="@ArunComputerRewa">



  <!-- Favicons -->

  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/apple-touch-icon.png') ?>">

  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon-32x32.png') ?>">

  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png') ?>">

  <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">



  <!-- CSS Dependencies -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">



<!-- Font Optimization -->

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/css/header-common.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/utilities.css') ?>">



<!-- script for sidebar collapsible and auto-highlight -->

      <script>

document.addEventListener('DOMContentLoaded', function () {

  const sidebarEl = document.getElementById('adminSidebarMenu');

  if (!sidebarEl) return;



  // 1) Mobile: link click par sidebar auto-close (navigation ko block NA kare)

  sidebarEl.querySelectorAll('a.admin-close').forEach(function (a) {

    a.addEventListener('click', function () {

      if (window.innerWidth < 992) {

        const inst = bootstrap.Collapse.getOrCreateInstance(sidebarEl, { toggle: false });

        inst.hide();

      }

    });

  });



  // 2) Current page ko auto-highlight + (agar koi inner accordion ho) to auto-open

  const links = sidebarEl.querySelectorAll('a.nav-link, a.list-group-item');

  const here  = new URL(window.location.href).pathname.replace(/\/+$/, '');

  let active = null;



  links.forEach(function (a) {

    const href = a.getAttribute('href');

    if (!href || href === '#') return;

    const path = new URL(href, window.location.origin).pathname.replace(/\/+$/, '');

    if (path === here) active = a;

  });



  if (active) {

    active.classList.add('active');

    const collapse = active.closest('.collapse');

    if (collapse && collapse.id !== 'adminSidebarMenu') {

      const inst = bootstrap.Collapse.getOrCreateInstance(collapse, { toggle: false });

      inst.show();

      const btn = document.querySelector('[data-bs-target="#' + collapse.id + '"].accordion-button');

      if (btn) btn.classList.remove('collapsed');

    }

  }

});

</script>



  <style>

    body {

      margin: 0;

      padding: 0;

      overflow-x: hidden;

    }



    .content-wrapper {

      display: flex;

      flex-wrap: nowrap;

    }



    /* Navbar links hover and active style */



    /* Dropdown menu styling */
    .dropdown-menu {

      border-radius: 8px;

      background-color: #f8f9fa;

    }



    .dropdown-header {

      font-size: 0.75rem;

      letter-spacing: 1px;

    }



    /* Mobile adjustments */

    @media (max-width: 768px) {

      .content-wrapper {

        flex-direction: column;

      }



      .sidebar {

        width: 100%;

        position: relative;

        margin-left: 0 !important;

      }



      .sidebar.collapsed {

        display: none;

      }



      .main-content {

        width: 100%;

        padding: 10px;

      }



      body, p, li, .nav-link, .sidebar-link, .dropdown-item,

      h1, h2, h3, h4, h5, h6 {

        font-size: 18px !important;

      }



      .sidebar, .navbar-nav .nav-link, .dropdown-item {

        font-size: 17px !important;

      }

    }

  </style>

</head>





<body>

    <!-- First navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: linear-gradient(135deg, #0078D7 0%, #00B4FF 100%); box-shadow: 0 2px 10px rgba(0, 120, 215, 0.4);">



        <div class="container-fluid">

             <a class="navbar-brand d-flex align-items-center h-100" href="#">

            <img src="<?= base_url('assets/images/logo.wepb') ?>" alt="College Logo" height="50">

            </a>  



      <!-- sidebar toggle button -->

            

         

      <!-- Navbar left: mobile-only sidebar toggle -->

                <button class="btn btn-sm d-lg-none me-2"

                        type="button"

                        data-bs-toggle="collapse"

                        data-bs-target="#adminSidebarMenu"

                        aria-controls="adminSidebarMenu"

                        aria-expanded="false"

                        aria-label="Toggle sidebar">

                  <i class="bi bi-list"></i>

                </button>



           <a class="navbar-brand" href="<?= base_url('/') ?>">Arun Computer</a>





            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"

                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"

                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto">



        <!-- होम -->

              <li class="nav-item mx-1">

                <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('/') ?>">

                  <i class="bi bi-house-door-fill me-2"></i>

                  <span>Home</span>

                </a>

              </li>

  <!-- एकेडेमिक्स -->

              <li class="nav-item mx-1">

                <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('academics') ?>">

                  <i class="bi bi-book-half me-2"></i>

                  <span>Academics</span>

                </a>

              </li>

  <!-- एडमिशन -->

              <li class="nav-item mx-1">

                <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('admin/admission/create') ?>">

                  <i class="bi bi-pencil-square me-2"></i>

                  <span>Admission</span>

                </a>

              </li>  

    <!--  student portal dropdown  -->

  <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"

            data-bs-toggle="dropdown" aria-expanded="false">

            <i class="bi bi-person-video2 me-1"></i> Student Portal

          </a>

  

            <ul class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdown" style="border: none; min-width: 250px;">

      <!-- ड्रॉपडाउन हेडर -->

              <li class="dropdown-header bg-primary text-white py-2 px-3">

                <i class="bi bi-journal-bookmark me-2"></i> STUDENT RESOURCES

              </li>

    <!-- मेनू आइटम्स -->

   

              <li><a class="dropdown-item py-2" href="<?= base_url('student-content') ?>">

              <i class="bi bi-book text-primary me-2"></i> Study Material (LMS)

                 </a></li>

   

              <li><a class="dropdown-item py-2" href="#">

                <i class="bi bi-calendar-week text-success me-2"></i> Syllabus & Time Table

              </a></li>

    

              <li><a class="dropdown-item py-2" href="#">

                <i class="bi bi-download text-info me-2"></i> Downloads

              </a></li>

              

              <li><a class="dropdown-item py-2" href="#">

                <i class="bi bi-briefcase text-warning me-2"></i> Placements

              </a></li>

    

    <!-- डिवाइडर -->

              <li><hr class="dropdown-divider my-1"></li>

    

              <li><a class="dropdown-item py-2" href="#">

                <i class="bi bi-people text-secondary me-2"></i> Alumni

              </a></li>

        </ul>

      </li>                     

                

<!-- contact us  -->

            <li class="nav-item mx-1">

                <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('contact') ?>">

                <i class="bi bi-telephone-outbound-fill me-2"></i>

                <span>Contact Us</span>   </a>

            </li>

            <li class="nav-item mx-1">

                <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('admin/dashboard') ?>">

                <i class="bi bi-speedometer2 me-2"></i>

                <span>Dashboard</span>   </a>

            </li>

                </ul>

         <!-- Login / Logout - Always Right -->

            <div class="order-lg-2 ms-auto d-flex align-items-center">

              <ul class="navbar-nav ms-auto">

                    <li class="nav-item">

                        <?php if (session()->get('isLoggedIn')): ?>

                            <span class="navbar-text me-2">Welcome, <strong><?= session()->get('adminName') ?></strong></span>

                            <a href="<?= base_url('/logout') ?>" class="btn btn-danger my-2 my-sm-0">Logout</a>

                        <?php else: ?>

                            <a href="<?= base_url('/register') ?>" class="btn btn-success my-2 my-sm-0 mx-2">Register</a>

                            <a href="<?= base_url('/login') ?>" class="btn btn-primary my-2 my-sm-0">Login</a>

                        <?php endif; ?>

                    </li>

              </ul>

            </div>

            </div>

        </div>

    </nav>



    <!-- Main side bar content with collapsible sidebar -->

    

   

    <!-- START: Admin two-column layout -->

<div class="container-fluid">

  <div class="content-wrapper"><!-- your CSS makes this flex -->



    <!-- Sidebar: mobile = collapsible, desktop = always visible -->

    <nav id="adminSidebarMenu" class="collapse d-lg-block" style="min-width:280px;">

      <div class="sidebar bg-light p-3" id="sidebar">

        <div class="position-sticky">

          <ul class="nav flex-column">



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/dashboard') ?>">

                <i class="bi bi-house-door me-2"></i> Dashboard

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= site_url('admin/notice') ?>">

                <i class="nav-icon fas fa-bullhorn me-2"></i> Notice

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= site_url('admin/auth/change-password') ?>">

                <i class="bi bi-key me-2"></i> Change Password

              </a>

            </li>

            

                            <!-- Admission Section -->

                    <li class="nav-item mt-3">

                     <span class="nav-link text-uppercase small fw-bold text-muted">

                     <i class="bi bi-journal-text me-2"></i> Admission Management

                 </span>

                </li>

            

                        <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/admission/create') ?>">

                <i class="bi bi-people me-2"></i> Admission Form

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/admission') ?>">

                <i class="bi bi-file-earmark-text me-2"></i> Student List

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/fees') ?>">

                <i class="bi bi-cash-stack me-2"></i> Fees Record

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/fees/create') ?>">

                <i class="bi bi-plus-circle me-2"></i> Add Fees

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link p-2 admin-close" href="<?= site_url('admin/fees_total_report') ?>">

                <i class="fas fa-file-invoice-dollar me-2"></i> Fees Pending Report

              </a>

            </li>







            <li class="nav-item">

              <a class="nav-link d-flex align-items-center gap-2 py-2 px-3 rounded bg-gradient text-white fw-semibold shadow-sm admin-close"

                 href="<?= site_url('admin/fees_total_report') ?>" style="background-color:#0078d4;">

                <i class="bi bi-bar-chart-line"></i> Total Fees Report

              </a>

            </li>



                

                <!-- Gallery Section -->

                    <li class="nav-item mt-3">

                     <span class="nav-link text-uppercase small fw-bold text-muted">

                     <i class="bi bi-images me-2"></i> Gallery Management

                 </span>

                </li>



                        <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/gallery') ?>">

                <i class="bi bi-images me-2"></i> View Gallery

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/gallery/create') ?>">

                <i class="bi bi-plus-circle me-2"></i> Add Image

              </a>

            </li>

                

                <!-- Chapters Section -->
                    <li class="nav-item mt-3">

                     <span class="nav-link text-uppercase small fw-bold text-muted">

                     <i class="bi bi-journal-text me-2"></i> Chapters Management

                 </span>

                </li>

                

              <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/chapters') ?>">

                <i class="bi bi-journals me-2"></i> Content Admin Page

              </a>

            </li>

                



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/courses/create') ?>">

                <i class="bi bi-speedometer2 me-2"></i> Add New Course

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/courses/') ?>">

                <i class="bi bi-pencil-square me-2"></i> Edit Course

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/papers/create') ?>">

                <i class="bi bi-journal-plus me-2"></i> Add New Paper

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/papers/') ?>">

                <i class="bi bi-journal-text me-2"></i> Edit Paper

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/units/create') ?>">

                <i class="bi bi-collection me-2"></i> Add New Unit

              </a>

            </li>



    







<li class="nav-item">

    <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/units/') ?>">

        <i class="bi bi-collection-play me-2"></i> Edit Unit

    </a>

</li>



<li class="nav-item">

    <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/chapters/create') ?>">

        <i class="bi bi-node-plus me-2"></i> Add New Chapter

    </a>

</li>



<li class="nav-item">

    <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/chapters/') ?>">

        <i class="bi bi-diagram-3 me-2"></i> Edit Chapter

    </a>

</li>



<!-- ✅ PDF Cache Status (Chapters से related होने के कारण यहाँ perfect fit है) -->

<li class="nav-item">

    <a class="nav-link sidebar-link p-2 admin-close" href="<?= base_url('admin/cache-status') ?>">

        <i class="bi bi-database me-2"></i> PDF Cache Status

        <?php

        $cacheDir = WRITEPATH . 'pdf_cache/';

        $fileCount = is_dir($cacheDir) ? count(glob($cacheDir . '*.pdf')) : 0;

        if ($fileCount > 0): ?>

        <span class="badge bg-info float-end"><?= $fileCount ?></span>

        <?php endif; ?>

    </a>

</li>













            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="#">

                <i class="bi bi-gear me-2"></i> Settings

              </a>

            </li>



            <li class="nav-item">

              <a class="nav-link sidebar-link p-2 admin-close" href="#">

                <i class="bi bi-question-circle me-2"></i> Help

              </a>

            </li>



          </ul>



          <hr>



          <div class="p-2">

            <h6 class="text-muted">Recent Activity</h6>

            <div class="small text-muted">

              <div class="mb-2">User login - 2 mins ago</div>

              <div class="mb-2">New report generated</div>

              <div>System updated</div>

            </div>

          </div>



        </div>

      </div>

    </nav>



    <!-- MAIN starts here (DON'T CLOSE HERE) -->

    <main class="main-content flex-grow-1 p-3">

