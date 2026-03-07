<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8"><!-- Title and Description (Very Important for SEO) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    
<title>Arun Computer College - PGDCA, DCA, Tally & Programming Courses</title>
<meta name="description" content="Arun Computer College in Rewa offers PGDCA, DCA, Tally, and Web Development courses with practical learning. Join now for quality education.">
-->

<title><?= isset($meta_title) ? esc($meta_title) : 'Arun Computer College' ?></title>



<meta name="description" content="<?= isset($meta_description) && $meta_description != '' 
    ? esc($meta_description) 
    : 'Arun Computer College Rewa provides PGDCA, DCA, Tally and Programming courses with practical learning.' ?>">

<link rel="canonical" href="<?= isset($meta_url) ? $meta_url : base_url() ?>">

<meta name="robots" content="index, follow">



<!-- Keywords (Less used now but still useful) -->
<meta name="keywords" content="Arun Computer, PGDCA Rewa, DCA, Computer College, Tally, Web Design, Programming, Computer Classes in Rewa">

<!-- Author -->
<meta name="author" content="Arun Computer College, Rewa">

<!-- Open Graph for Facebook/WhatsApp -->


<meta property="og:title" content="<?= isset($meta_title) ? esc($meta_title) : 'Arun Computer College' ?>">
<meta property="og:description" content="<?= isset($meta_description) ? esc($meta_description) : '' ?>">
<meta property="og:url" content="<?= isset($meta_url) ? $meta_url : base_url() ?>">
<meta property="og:type" content="article">



<meta property="og:image" content="<?= base_url('assets/images/og-image.jpg') ?>">



<!-- Twitter Card  un comment when twitter account is open-->
<!--
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Arun Computer College - Rewa">
<meta name="twitter:description" content="Best PGDCA, DCA, and Web Design courses in Rewa.">
<meta name="twitter:image" content="<?= base_url('assets/images/og-image.jpg') ?>">
<meta name="twitter:site" content="@ArunComputerRewa">
<meta name="twitter:creator" content="@ArunComputerRewa"> 
-->





      <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/apple-touch-icon.png') ?>">
      
      <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon-32x32.png') ?>">
      
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png') ?>">
    
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">

      
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
 
<!-- Font Optimization -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" as="style">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
        
        

  <script>
document.addEventListener('DOMContentLoaded', function () {
  const sidebarEl = document.getElementById('sidebarMenu');
  if (!sidebarEl) return;

  // 1) Mobile par link click hote hi sidebar auto-close (navigation block nahi hota)
  sidebarEl.querySelectorAll('a.sidebar-close').forEach(function(a){
    a.addEventListener('click', function(){
      if (window.innerWidth < 992) {
        const inst = bootstrap.Collapse.getOrCreateInstance(sidebarEl, { toggle: false });
        inst.hide();
      }
      // Navigation continues normally
    });
  });

  // 2) Current page ko auto-highlight + uska paper/unit auto-open
  const links = sidebarEl.querySelectorAll('a.nav-link');
  const here  = window.location.pathname.replace(/\/+$/, ''); // trim trailing /
  let active = null;

  links.forEach(function(a){
    const href = a.getAttribute('href');
    if (!href) return;
    const path = new URL(href, window.location.origin).pathname.replace(/\/+$/, '');
    if (path === here) active = a;
  });

  if (active) {
    active.classList.add('active');

    // Open parent accordion if present
    const collapse = active.closest('.accordion-collapse');
    if (collapse) {
      const inst = bootstrap.Collapse.getOrCreateInstance(collapse, { toggle: false });
      inst.show();

      const btn = collapse.previousElementSibling?.querySelector('.accordion-button');
      if (btn) btn.classList.remove('collapsed');
    }
  }
});
</script>



    <style>

          body {
          margin: 0;
          padding: 0;
          overflow-x: hidden; /* Prevent horizontal scroll */
          }

          .container-fluid, .main-content, .content-wrapper {
              padding-right: 10px;
              padding-left: 10px;
              margin: 0 auto;
              max-width: 100%;
              box-sizing: border-box;
          }       

          .sidebar {
            width: 280px;
            transition: all 0.3s ease-in-out;
            min-height: 100vh;
            background-color: #f8f9fa;
            z-index: 1000;
        }

        .sidebar.collapsed {
            margin-left: -280px;
        }

        .main-content {
            transition: all 0.3s ease-in-out;
            flex: 1;
            padding: 10px 10px 10px 20px; /* top, right, bottom, left */
            
        }

          /* Accordion style */
          .accordion-button {
              background-color: #eaf4fb;
              color: #0078d4;
              font-weight: 500;
          }

          .accordion-button:not(.collapsed) {
              background: linear-gradient(90deg, #0078D7 0%, #00B4FF 100%);
              color: white;
          }

          .accordion-body ul li a {
              font-size: 14px;
              color: #212529;
              text-decoration: none;
              padding: 4px 8px;
              display: block;
              border-radius: 4px;
          }

          .accordion-body ul li a:hover {
              background-color: rgba(0, 120, 215, 0.1);
              color: #0078d4;
}

            /* Flex wrapper */
            .content-wrapper {
                display: flex;
                flex-wrap: nowrap;
            }
   @media only screen and (max-device-width: 480px) {
  body {
    font-size: 18px;
  }

  @media (max-width: 600px) {
    body, p, li, .nav-link, .sidebar-link, .dropdown-item, h1, h2, h3, h4, h5, h6 {
      font-size: 20px !important;
    }

/* Responsive changes */
@media (max-width: 768px) {
    .content-wrapper {
        flex-direction: column;
    }

    .sidebar {
        position: relative;
        width: 100%;
        margin-left: 0 !important;
    }

    .sidebar.collapsed {
        display: none;
    }

    .main-content {
        width: 100%;
    }

         
 .chapter-content img,
.chapter-content .wp-block-image img,
.chapter-content .wp-image {
    max-width: 100% !important;
    height: auto !important;
    display: block;
    margin: 10px auto;
}

}
    </style>


<style>
  /* ड्रॉपडाउन मेनू स्टाइल */
  .dropdown-menu {
    border-radius: 8px;
    overflow: hidden;
    background-color: #f8f9fa;
  }
  
  /* ड्रॉपडाउन आइटम्स */
  .dropdown-item {
    transition: all 0.2s;
    font-weight: 500;
  }
  
  .dropdown-item:hover {
    background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
    color: #0078D7 !important;
    padding-left: 20px !important;
  }
  
  /* एक्टिव आइटम */
  .dropdown-item:active {
    background-color: #0078D7 !important;
    color: white !important;
  }
  
  /* हेडर स्टाइल */
  .dropdown-header {
    font-size: 0.75rem;
    letter-spacing: 1px;
  }
</style>

<!-- कस्टम स्टाइल -->
<style>
  /* नेव लिंक्स स्टाइल */
  .navbar-nav .nav-link {
    transition: all 0.3s ease;
    font-weight: 500;
    position: relative;
  }
  
  /* होवर इफेक्ट */
  .navbar-nav .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
  }
  
  /* एक्टिव लिंक */
  .navbar-nav .nav-link.active {
    background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
    border-bottom: 2px solid white;
  }
  
  /* आइकन्स का साइज */
  .navbar-nav .bi {
    font-size: 1.1rem;
  }
</style>




<!-- WordPress contents styling  -->
<style>
.chapter-content {
    /* font-family: 'Noto Sans Devanagari', sans-serif !important; */
     font-family: 'NotoSansDevanagari', sans-serif !important;
      /*   src: url('<?= base_url('fonts/NotoSansDevanagari-Regular.ttf') ?>'); */
    line-height: 1.6;
    color: #333;
    max-width: 1050px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* Blue heading styles */
.chapter-content h1, 
.chapter-content h2, 
.chapter-content h3, 
.chapter-content h4 {
    color: #007bff; /* Bright blue color */
    margin-top: 1.8rem;
    margin-bottom: 1.2rem;
    /* font-family: 'Noto Sans Devanagari', sans-serif !important; */
     font-family: 'NotoSansDevanagari', sans-serif !important;
    font-weight: 700;
    border-bottom: 1px solid #e0e7ff;
    padding-bottom: 0.5rem;
}

/* Individual heading sizes */
.chapter-content h1 { 
    font-size: 2.2rem; 
    color: #0056b3; /* Slightly darker blue for h1 */
}
.chapter-content h2 { 
    font-size: 1.9rem; 
    border-bottom-width: 2px;
}
.chapter-content h3 { 
    font-size: 1.6rem; 
    border-bottom: 1px dashed #e0e7ff;
}
.chapter-content h4 { 
    font-size: 1.4rem; 
    font-weight: 500;
}

.chapter-content p {
    margin-bottom: 1.2rem;
    text-align: justify;
    line-height: 1.7;
    font-size: 1.35rem;
}

.chapter-content img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 1.5rem auto;
    border-radius: 6px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border: 1px solid #dee2e6;
}

.chapter-content ul.custom-list {
    list-style-type: disc;
    padding-left: 2.2rem;
    margin-bottom: 1.5rem;
    background-color: #f1f6ff;
    padding: 20px 30px;
    border-radius: 8px;
    border-left: 4px solid #007bff;
}

.chapter-content ul.custom-list li {
    margin-bottom: 0.7rem;
    padding-left: 0.5rem;
    font-size: 1.1rem;
}

/* Add some spacing between sections */
.chapter-content > * {
    margin-bottom: 1.5rem;
}
/* Desktop: offcanvas ko static sidebar jaisa width de */
@media (min-width: 992px){
  #sidebarNav.offcanvas-lg{
    position: static;
    transform: none;
    visibility: visible !important;
    background: transparent;
    border: 0;
    width: 280px;           /* matches your .sidebar width */
  }
}

/* Mobile: offcanvas ke andar sticky ko normal rakho (blank-first-open bug fix) */
@media (max-width: 991.98px){
  #sidebarNav .position-sticky{ position: static !important; }
}

</style>

</head>

<body>
    <!-- First navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: linear-gradient(135deg, #0078D7 0%, #00B4FF 100%); box-shadow: 0 2px 10px rgba(0, 120, 215, 0.4);">

     <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center h-100" href="#">
       <img src="<?= base_url('assets/images/logo.jpg') ?>" alt="College Logo" height="50">
      </a>  


  
    
<!-- sidebar toggler new button  -->


<!-- Mobile-only sidebar toggle -->



<button class="btn me-2 d-lg-none"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle sidebar"
        style="background-color: rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);">
  <i class="bi bi-list text-white"></i>
</button>










            <a class="navbar-brand" href="<?= base_url('/') ?>">Arun Computer</a>
<!--navbar toggler button -->
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
        <!-- अबाउट -->
  <li class="nav-item mx-1">
    <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('about') ?>">
      <i class="bi bi-info-circle-fill me-2"></i>
      <span>About</span>
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
    <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('admissionpage') ?>">
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
  <!--
    <li><a class="dropdown-item py-2" href="<?= base_url('studymaterials') ?>">
      <i class="bi bi-book text-primary me-2"></i> Study Material (LMS)
    </a></li>
    -->
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


            <li>
          
                            <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= site_url('student/logout') ?>" 
                               class="btn btn-outline-danger btn-sm mt-2"
                               onclick="return confirm('Are you sure you want to logout?');">
                                <i class="bi bi-box-arrow-right me-1"></i> Logout
                            </a>
            </li>

          </ul>
   
            
            </div>
        </div>
        
    </nav>

    <!-- Second navbar deleted  -->


     <!-- sidebar  for student educational material links added  -->

 <div class="container-fluid">
       <div class="content-wrapper"> 

<!-- Sidebar (responsive: offcanvas on mobile, static on ≥lg) -->



<!-- Sidebar (responsive: Offcanvas on < lg, static on ≥ lg) -->

<!-- Collapsible Sidebar: mobile = collapsible, desktop (≥lg) = always visible -->


<!-- Wrapper the same -->
<nav class="collapse d-lg-block" id="sidebarMenu" style="min-width:280px;">
  <div class="sidebar bg-light p-3" id="sidebar">
    <div class="position-sticky">

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link sidebar-link active p-2 sidebar-close"
             href="<?= site_url('student/dashboard') ?>">
            <i class="bi bi-house-door me-2"></i> Student Dashboard
          </a>
        </li>
      </ul>

      <hr>

      <div class="accordion" id="courseAccordion">
        <?php foreach ($courses as $course): ?>
          <h5 class="mt-3 text-primary"><?= esc($course['name']) ?></h5>

          <?php foreach ($papers as $paper): ?>
            <?php if ($paper['course_id'] == $course['id']): ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?= $paper['id'] ?>">
                  <button class="accordion-button collapsed" type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapse<?= $paper['id'] ?>"
                          aria-expanded="false"
                          aria-controls="collapse<?= $paper['id'] ?>">
                    <?= esc($paper['name']) ?>
                  </button>
                </h2>

                <div id="collapse<?= $paper['id'] ?>" class="accordion-collapse collapse"
                     aria-labelledby="heading<?= $paper['id'] ?>" data-bs-parent="#courseAccordion">
                  <div class="accordion-body">
                    <?php foreach ($units as $unit): ?>
                      <?php if ($unit['paper_id'] == $paper['id']): ?>
                        <div class="ms-3">
                          <strong><?= esc($unit['name']) ?></strong>
                          <ul class="nav flex-column ms-3">
                            <?php foreach ($chapters as $chapter): ?>
                              <?php if ($chapter['unit_id'] == $unit['id']): ?>
                                <li>
                                  <a href="<?= site_url('student-content/'.$chapter['slug']) ?>"
                                     class="nav-link sidebar-close">
                                    <?= esc($chapter['name']) ?>
                                  </a>
                                </li>
                              <?php endif; ?>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>

        <?php endforeach; ?>
      </div>

    </div>
  </div>
</nav>





