<!DOCTYPE html>

<html lang="hi">

<head>



      <meta charset="UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1">

  

  <title><?= isset($title) ? esc($title) : 'Arun Computer' ?></title>



    <!-- SEO -->

  <meta name="description" content="<?= isset($description) ? esc($description) : 'Arun Computer College in Rewa- offers Computer courses & web development in Rewa.' ?>">

  <meta name="robots" content="index, follow">

  



  <!-- open graph -->

  <meta property="og:title" content="<?= isset($title) ? esc($title) : 'Arun Computer' ?>">

  <meta property="og:description" content="<?= isset($description) ? esc($description) : 'Arun Computer College for practical computer courses like PGDCA, DCA  & web development in Rewa.' ?>">

  <meta property="og:type" content="website">

  <meta property="og:url" content="<?= current_url() ?>">

  <meta property="og:image" content="<?= base_url('assets/images/og-image.jpg') ?>">

  <!--  twitter account create karne ke baad ise  active karen -->

  <!--

  <meta name="twitter:card" content="summary_large_image">

  <meta name="twitter:title" content="Arun Computer College - Rewa">

  <meta name="twitter:description" content="Best PGDCA, DCA, and Web Design courses in Rewa.">

  <meta name="twitter:image" content="<?= base_url('assets/images/og-image.jpg') ?>">

  <meta name="twitter:site" content="@ArunComputerRewa">

  <meta name="twitter:creator" content="@ArunComputerRewa">

-->



  <!-- Icons -->

  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/apple-touch-icon.png') ?>">

  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon-32x32.png') ?>">

  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png') ?>">

  <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">



  <!-- CSS libs -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  

<!-- Font Optimization -->

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" as="style">

<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

  

<link rel="preload" as="image"

      href="<?= base_url('assets/images/hero_front_outside.webp') ?>"

      type="image/webp">



<link rel="canonical" href="<?= current_url() ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/header-common.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/utilities.css') ?>">

  

  <style>

    body, p, li { font-family: 'Noto Sans Devanagari','Roboto',sans-serif; line-height:1.6;font-size:24px; }

    h1,h2,h3 { font-family:'Poppins','Noto Sans Devanagari',sans-serif; font-weight:600; }



    html, body {

    font-size: 1.0rem; /* overall size thoda kam */

}



img, video {

    max-width: 100%;

    height: auto;

}





    /* ===== Compact Navbar ===== */

    .compact-nav { background: linear-gradient(90deg,#6cb4ee,#0078d4); }

    .compact-nav .navbar-brand { color:#fff; font-size:1rem; padding:.2rem 0; }

    .compact-nav .navbar-brand img { height:36px; } /* 50 → 36 */

    .compact-nav .nav-link { color:#fff; padding:.35rem .6rem; font-size:.95rem; border-radius:.5rem; }

    .compact-nav .nav-link:hover,

    .compact-nav .nav-link:focus { background:rgba(255,255,255,.15); color:#fff; }

    .compact-nav .dropdown-menu { border:0; border-radius:.6rem; box-shadow:0 10px 24px rgba(0,0,0,.12); padding:.35rem; }

    .compact-nav .dropdown-item { padding:.4rem .75rem; font-weight:500; }

    .compact-nav .navbar-toggler { padding:.25rem .5rem; border-color:rgba(255,255,255,.6); }

    .compact-nav .navbar-toggler:focus { box-shadow:none; }



    /* Earlier collapse: lg → md */

    @media (min-width:768px){ .compact-nav .nav-link{ padding:.4rem .7rem; } }

  </style>



  <!-- (Your existing other styles can remain here if needed) -->

  

    <!-- script for local college -- Local College के लिए JSON-LD डालना चाहिए। -->

  

<script type="application/ld+json">

{

  "@context": "https://schema.org",

  "@type": "CollegeOrUniversity",

  "name": "Arun Computer College",

  "url": "<?= base_url() ?>",

  "logo": "<?= base_url('assets/images/logo.webp') ?>",

  "telephone": "+91-9926542408",

  "address": {

    "@type": "PostalAddress",

    "streetAddress": "Allahabad Road Urrhat Near Shankar Nursing Home",

    "addressLocality": "Rewa",

    "addressRegion": "Madhya Pradesh",

    "postalCode": "486001",

    "addressCountry": "IN"

  }

}

</script>

  

</head>

<body>



<nav class="navbar navbar-expand-md navbar-dark sticky-top compact-nav">

  <div class="container-fluid">

    <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">

      <img src="<?= base_url('assets/images/logo.webp') ?>" alt="College Logo" class="me-2">

      <span>Arun Computer</span>

    </a>



    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"

            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"

            aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto">



        <li class="nav-item mx-1">

          <a class="nav-link d-flex align-items-center" href="<?= base_url('/') ?>">

            <i class="bi bi-house-door-fill me-2"></i><span>Home</span>

          </a>

        </li>



        <li class="nav-item mx-1">

          <a class="nav-link d-flex align-items-center" href="<?= base_url('about') ?>">

            <i class="bi bi-info-circle-fill me-2"></i><span>About</span>

          </a>

        </li>



        <li class="nav-item mx-1">

          <a class="nav-link d-flex align-items-center" href="<?= base_url('academics') ?>">

            <i class="bi bi-book-half me-2"></i><span>Academics</span>

          </a>

        </li>



        <li class="nav-item mx-1">

          <a class="nav-link d-flex align-items-center" href="<?= base_url('admission/apply') ?>">

            <i class="bi bi-pencil-square me-2"></i><span>Admission</span>

          </a>

        </li>



   



        <li class="nav-item mx-1">

          <a class="nav-link d-flex align-items-center" href="<?= base_url('webdev') ?>">

            <i class="bi bi-globe2 me-2"></i><span>Web Site Development</span>

          </a>

        </li>



      



        <!-- Student Portal Dropdown -->

        <li class="nav-item dropdown mx-1">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"

             data-bs-toggle="dropdown" aria-expanded="false">

            <i class="bi bi-person-video2 me-1"></i> Student Portal

          </a>

          <ul class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdown" style="min-width:250px;">

            <li class="dropdown-header bg-primary text-white py-2 px-3">

              <i class="bi bi-journal-bookmark me-2"></i> STUDENT RESOURCES

            </li>

             



             <li><a class="dropdown-item" href="<?= base_url('student/login') ?>"><i class="bi bi-people text-secondary me-2"></i>Student Login</a></li>

            <li><a class="dropdown-item" href="<?= base_url('student-content') ?>"><i class="bi bi-book text-primary me-2"></i>Study Material (LMS)</a></li>
            <li><a class="dropdown-item" href="<?= base_url('gallery') ?>"><i class="bi bi-images text-secondary me-2"></i>Gallery</a></li>

            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-week text-success me-2"></i>Syllabus & Time Table</a></li>

            <li><a class="dropdown-item" href="#"><i class="bi bi-download text-info me-2"></i>Downloads</a></li>

            <li><a class="dropdown-item" href="#"><i class="bi bi-briefcase text-warning me-2"></i>Placements</a></li>

            <li><hr class="dropdown-divider my-1"></li>

            <li><a class="dropdown-item" href="#"><i class="bi bi-people text-secondary me-2"></i>Alumni</a></li>

          </ul>

        </li>



        <li class="nav-item mx-1">

          <a class="nav-link d-flex align-items-center" href="<?= base_url('contact') ?>">

            <i class="bi bi-telephone-outbound-fill me-2"></i><span>Contact Us</span>

          </a>

        </li>

      </ul>



      <!-- Right side: Login/Logout -->



      <!--

      <div class="d-flex align-items-center ms-auto">

        <?php if (session()->get('isLoggedIn')): ?>

          <span class="navbar-text me-2 text-white">Welcome, <strong><?= session()->get('adminName') ?></strong></span>

          <a href="<?= base_url('/logout') ?>" class="btn btn-light btn-sm">Logout</a>

        <?php else: ?>

          <a href="<?= base_url('/login') ?>" class="btn btn-outline-light btn-sm">Login</a>

        <?php endif; ?>

      </div>

        -->



            <div class="d-flex align-items-center ms-auto">

  <?php if (session()->get('isLoggedIn')): ?>

    <a href="<?= site_url('admin/dashboard') ?>" class="btn btn-outline-light btn-sm me-2">

      Dashboard

    </a>

    <span class="navbar-text me-2 text-white">

      Welcome, <strong><?= esc(session('adminName')) ?></strong>

    </span>

    <a href="<?= site_url('/logout') ?>" class="btn btn-light btn-sm">Logout</a>

  <?php else: ?>

    <a href="<?= site_url('/login') ?>" class="btn btn-outline-light btn-sm">Login</a>

  <?php endif; ?>

</div>







<?php if (session('isStudentLoggedIn')): ?>

  <?php

    $photoUrl = session('studentPhotoUrl') ?: base_url('assets/images/avatar-student.png');

  ?>

  <div class="d-flex align-items-center justify-content-center text-white py-1" style="background-color:#0078d4;">

    <img src="<?= esc($photoUrl) ?>"

         alt="Student Photo"

         class="rounded-circle me-2"

         width="50" height="50"

         style="object-fit:cover;" loading="lazy">

    Welcome, <strong><?= esc(session('studentName')) ?></strong>

    <a href="<?= site_url('student/dashboard') ?>"

       class="ms-2" style="color:#ffd633;text-decoration:underline;font-weight:500;">

       Return to Dashboard

    </a>

  </div>

<?php endif; ?>



    </div>

  </div>



</nav>





 <!-- dashboard me admin ko vapas jane ka message -->

<?php if (session()->get('isAdminLoggedIn')): ?>

  <div class="position-fixed top-0 start-0 end-0 bg-dark text-white text-center py-1" style="z-index:1080;">

    You’re logged in as Admin.

    <a href="<?= site_url('admin/dashboard') ?>" class="text-warning text-decoration-underline">Return to Dashboard</a>

  </div>

  <style> body{ padding-top: 32px; } </style>

<?php endif; ?>

