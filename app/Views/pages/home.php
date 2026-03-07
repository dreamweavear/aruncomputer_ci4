            



    <meta charset="UTF-8">



   

    <style>

    .hero-section {

        position: relative;

    }

    

    .carousel-slide {

        height: 70vh; /* Adjust height as needed */

        min-height: 500px;

        background-size: cover;

        background-position: center;

        display: flex;

        align-items: center;

        position: relative;

    }

    

    /* Add a dark overlay for better text visibility */

    .carousel-slide::before {

        content: '';

        position: absolute;

        top: 0;

        left: 0;

        right: 0;

        bottom: 0;

        background: rgba(0, 0, 0, 0.5);

    }

    

    .overlay-content {

        position: relative;

        z-index: 2;

        color: white;

    }

    

    /* Background images for each slide */

    /* .bg-1 { */

        /* background-image: url('<?= base_url('assets/images/hero_front_outside.jpg') ?>'); */

    /* } */



    .bg-1 {

    background-image:

        image-set(

            url('<?= base_url('assets/images/hero_front_outside.webp') ?>') type('image/webp'),

            url('<?= base_url('assets/images/hero_front_outside.jpg') ?>') type('image/jpeg')

        );

    background-size: cover;

    background-position: center;

}



   

    /* .bg-2 { */

        /* background-image: url('<?= base_url('assets/images/hero_inside_lab.jpg') ?>'); */

    /* } */

    

    

   .bg-2 {

    background-image:

        image-set(

            url('<?= base_url('assets/images/hero_lab_old.webp') ?>') type('image/webp'),

            url('<?= base_url('assets/images/hero_inside_lab.jpg') ?>') type('image/jpeg')

        );

    background-size: cover;

    background-position: center;

}







    /* .bg-3 { */

        /* background-image: url('<?= base_url('assets/images/library_1.jpg') ?>'); */

    /* } */



  .bg-3 {

    background-image:

        image-set(

            url('<?= base_url('assets/images/hero_lab_new.webp') ?>') type('image/webp'),

            url('<?= base_url('assets/images/library_1.jpg') ?>') type('image/jpeg')

        );

    background-size: cover;

    background-position: center;

}







    

    /* Custom button styles for light backgrounds */
    .btn-outline-light {
        border-color: white;
        color: white;
    }
    
    .btn-outline-light:hover {
        background-color: rgba(255, 255, 255, 0.1);

    }

</style>





    <style>

        :root {

            --primary-color: #2c3e50;

            --secondary-color: #3498db;

            --accent-color: #e74c3c;

        }

        

        body {

            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        

            .uniform-image {

            width: 410px;  /* फिक्स्ड चौड़ाई */

            height: 315px; /* फिक्स्ड ऊंचाई */

            object-fit: cover; /* इमेज को दिए गए आकार में फिट करेगा */

            border-radius: 8px; /* वैकल्पिक: कोनों को गोल करने के लिए */

                        }        



        .card-hover:hover {

            transform: translateY(-5px);

            transition: all 0.3s ease;

            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);

        }

        

        .bg-primary-custom {

            background-color: var(--primary-color);

        }

        

        .btn-primary-custom {

            background-color: var(--secondary-color);

            border-color: var(--secondary-color);

        }

        

        .btn-primary-custom:hover {

            background-color: #2980b9;

            border-color: #2980b9;

        }

        

        .feature-icon {

            font-size: 2.5rem;

            color: var(--secondary-color);

            margin-bottom: 1rem;

        }

        

         /* NETWORK SITES */

        .network-sec{padding:3.5rem 0;background:#f1f5f9;border-top:1px solid #e2e8f0;}

        .net-label{font-size:.72rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#94a3b8;margin-bottom:1.75rem;display:block;}

        .net-card{background:#fff;border-radius:14px;border:1px solid #e2e8f0;padding:1.25rem 1.35rem;display:flex;align-items:flex-start;gap:.9rem;transition:.2s;text-decoration:none;color:inherit;height:100%;}

        .net-card:hover{border-color:#93c5fd;box-shadow:0 6px 20px rgba(37,99,235,.09);transform:translateY(-2px);color:inherit;}

        .net-icon{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;}

        .net-body h6{font-size:.875rem;font-weight:700;color:#1e293b;margin:0 0 .2rem;}

        .net-body p{font-size:.775rem;color:#64748b;margin:0;line-height:1.5;}

        .net-domain{font-size:.7rem;color:#94a3b8;margin-top:.35rem;font-weight:600;}

        

    </style>





<!--Marquee Styles -->

        <style>

                    .marquee-container {

                    width: 100%;

                    overflow: hidden;

                    background: #ffc107;";

                    padding: 20px;

                    font-weight: bold;

                    position: relative;

                    }



                .marquee-container:hover .marquee-text {

                animation-play-state: paused;

                }



                .marquee-text {

                display: inline-block;

                white-space: nowrap;

                animation: scroll-left 15s linear infinite;

                }



                @keyframes scroll-left {

                0% {

                    transform: translateX(100%);

                }

                100% {

                    transform: translateX(-100%);

                }

                }

        </style>





    <main class="container-fluid p-0">

        <div class="row">

            <div class="col-12">

                <h1 class="visually-hidden">Arun Computer & IT</h1>

            </div>

        </div>



        <!-- Hero Section with Carousel -->     





    <section class="hero-section">

    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" >

        <div class="carousel-inner">   

            <!-- Slide 1 -->

            <div class="carousel-item active">

                <div class="carousel-slide bg-1"> <!-- You can use either background-image or img tag -->

                    <div class="container text-center overlay-content">

                        <h1 class="display-3 fw-bold mb-4">Arun Computer & IT</h1>

                        <h4 class="display-6 fw-bold mb-4">पढ़ेगा रीवा ! बढ़ेगा रीवा !</h4>

                        

                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

                            <a href="<?= base_url('about') ?>" class="btn btn-primary-custom btn-lg px-4 gap-3">About Us</a>

                            <a href="<?= base_url('contact') ?>" class="btn btn-outline-light btn-lg px-4">Contact Us</a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Slide 2 -->

            <div class="carousel-item">

                <div class="carousel-slide bg-2">

                    <div class="container text-center overlay-content">

                        <h1 class="display-3 fw-bold mb-4">Cutting-Edge IT Training</h1>

                <h3 class="display-6 fw-bold mb-4">रोजगारोन्मुखी कम्प्यूटर प्रशिक्षण </h3>

                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

                        <a href="<?= base_url('academics') ?>" class="btn btn-primary-custom btn-lg px-4 gap-3">Our Courses</a>

                        <a href="<?= base_url('admissionpage') ?>" class="btn btn-outline-light btn-lg px-4">Get Admission</a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Slide 3 -->

            <div class="carousel-item">

                <div class="carousel-slide bg-3">

                    <div class="container text-center overlay-content">

                        <h1 class="display-3 fw-bold mb-4">Technology Solutions</h1>

                        <h3 class="display-6 fw-bold mb-4">आकर्षक वेबसाइट डिजाइनिंग एवं स्कूल मनेजमेंट ऍप्लिकेशन्स 

                        </h3>

                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

                            <a href="<?= base_url('facilities') ?>" class="btn btn-primary-custom btn-lg px-4 gap-3">Our Facilities</a>

                            <a href="<?= base_url('contact') ?>" class="btn btn-outline-light btn-lg px-4">Free Consultation</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <!-- Carousel controls -->

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="visually-hidden">Previous</span>

        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="visually-hidden">Next</span>

        </button>

    </div>

</section>



<!-- Marquee for Notices static   -->

<div class="marquee-container py-3">

  <div class="marquee-text">

    🎓 PGDCA Admission Open | 📢 New Batch from 5th August | 💻 Learn Web Design with Live Projects

  </div>

</div>





<!-- Marquee for Notices dynamic -->

        <?php

            use App\Models\Admin\NoticeModel;

            $model = new NoticeModel();

            $notices = $model->where('status', 'active')->orderBy('created_at', 'DESC')->findAll();

            ?>

        <?php if ($notices): ?>

        <div class="marquee-container" style="background-color:#ffeb99; padding: 5px; font-weight: bold;">

        <div class="marquee-text">

            <?php foreach ($notices as $n): ?>

                <?php if (!empty($n['url'])): ?>

                    <a href="<?= esc($n['url']) ?>" target="_blank" class="text-dark text-decoration-underline"><?= esc($n['message']) ?></a>

                <?php else: ?>

                    <?= esc($n['message']) ?>

                <?php endif; ?>

                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;

            <?php endforeach; ?>

        </div>

        </div>

        <?php endif; ?>



    <!-- Features Section -->

        <section class="py-2">

            <div class="container px-4 py-1">

                <h2 class="text-center mb-5">हमारा कालेज क्यों चुनें ?</h2>

                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

                    <div class="col d-flex align-items-start">

                        <div class="text-center w-100">

                            <i class="fas fa-laptop-code feature-icon"></i>

                            <h3>रोजगारोन्मुखी  पाठ्यक्रम एवं प्रशिक्षण </h3>

                            <p>शा. विश्वविद्यालय से मान्यताप्राप्त पाठ्यक्रम एवं गहन प्रायोगिक प्रशिक्षण जिससे आप शासकीय एवं गैर शासकीय पदों के लिए सर्वोत्तम प्रत्याशी बन जाते है। </p>

                        </div>

                    </div>

                    <div class="col d-flex align-items-start">

                        <div class="text-center w-100">

                            <i class="fas fa-chalkboard-teacher feature-icon"></i>

                            <h3>सर्वोत्तम फैकेल्टी एवं योग्य प्रशिक्षक </h3>

                            <p>वेब डिज़ाइन, सॉफ्टवेयर डेवलपमेन्ट से लेकट टैली, जॉबवर्क, डीटीपी तक के लिए अनुभवी प्रशिक्षको से प्रशिक्षण  .</p>

                        </div>

                    </div>

                    <div class="col d-flex align-items-start">

                        <div class="text-center w-100">

                            <i class="fas fa-briefcase feature-icon"></i>

                            <h3>कैरियर  मार्गदर्शन</h3>

                            <p> हमारे 90% प्रशिक्षित छात्रों को  प्रशिक्षण अवधि में ही स्थानीय संस्थानों में नौकरी मिल जाती है। इसका श्रेय हमारे गहन प्रैक्टिकल ट्रेनिंग को जाता है।</p>

                        </div>

                    </div>

                </div>

            </div>

        </section>



   <!-- Programs Section -->

<section id="programs" class="py-3 bg-light">

    <div class="container">

        <h2 class="text-center mb-5">Our Programs</h2>



        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">



            <!-- Program Card 1 -->

            <div class="col">

                <div class="card h-100 card-hover">



                    <picture>

                        <source srcset="<?= base_url('assets/images/lab2.webp') ?>" type="image/webp">

                        <img src="<?= base_url('assets/images/lab2.jpg') ?>"

                             class="card-img-top w-100 object-fit-cover"

                             style="height: 200px;"

                             loading="lazy"

                             alt="MCU Course">

                    </picture>



                    <div class="card-body">

                        <h5 class="card-title">PGDCA / DCA</h5>

                        <p class="card-text">

                            यह पाठ्यक्रम "माखनलाल विश्वविद्यालय", भोपाल से सम्बद्ध एवं मान्यता प्राप्त है।

                        </p>

                    </div>



                    <div class="card-footer bg-white border-0">

                        <a href="#" class="btn btn-primary-custom">Learn More</a>

                    </div>

                </div>

            </div>



            <!-- Program Card 2 -->

            <div class="col">

                <div class="card h-100 card-hover">



                    <picture>

                        <source srcset="<?= base_url('assets/images/student1.webp') ?>" type="image/webp">

                        <img src="<?= base_url('assets/images/student1.jpeg') ?>"

                             class="card-img-top w-100 object-fit-cover"

                             style="height: 200px;"

                             loading="lazy"

                             alt="Web Designing Course">

                    </picture>



                    <div class="card-body">

                        <h5 class="card-title">Web Designing</h5>

                        <p class="card-text">

                            इस पाठ्यक्रम में HTML, CSS, जावास्क्रिप्ट, वर्डप्रेस, वेब होस्टिंग सम्मिलित है।

                            यह आपको एक पूर्ण वेबसाइट बनाने में सक्षम बनाता है।

                        </p>

                    </div>



                    <div class="card-footer bg-white border-0">

                        <a href="#" class="btn btn-primary-custom">Learn More</a>

                    </div>

                </div>

            </div>



            <!-- Program Card 3 -->

            <div class="col">

                <div class="card h-100 card-hover">



                    <picture>

                        <source srcset="<?= base_url('assets/images/library2.webp') ?>" type="image/webp">

                        <img src="<?= base_url('assets/images/library2.jpeg') ?>"

                             class="card-img-top w-100 object-fit-cover"

                             style="height: 200px;"

                             loading="lazy"

                             alt="Short Term Programming Courses">

                    </picture>



                    <div class="card-body">

                        <h5 class="card-title">Short Term</h5>

                        <p class="card-text">

                            अल्पावधि पाठ्यक्रम: बेसिक, सीपीसीटी, टैली,

                            प्रोग्रामिंग – C, C++, Python, SQL, PHP।

                            ये आपको थोड़े समय में रोजगार योग्य बनाते हैं।

                        </p>

                    </div>



                    <div class="card-footer bg-white border-0">

                        <a href="#" class="btn btn-primary-custom">Learn More</a>

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>







<!-- News Section -->

<section class="py-5">

  <div class="container">

    <h2 class="text-center mb-5 fw-bold">Latest News & Events</h2>



    <div class="row">



      <!-- News Card 1 -->

      <div class="col-lg-6 mb-4">

        <div class="card card-hover shadow-sm h-100">

          <div class="row g-0">



            <div class="col-md-4">

              <picture>

                <source srcset="<?= base_url('assets/images/lab_1.webp') ?>" type="image/webp">

                <img src="<?= base_url('assets/images/lab_1.jpg') ?>"

                     class="img-fluid rounded-start w-100 object-fit-cover"

                     style="height: 150px;"

                     loading="lazy"

                     alt="Computer Lab">

              </picture>

            </div>



            <div class="col-md-8">

              <div class="card-body">

                <h5 class="card-title fw-bold">Admission Open for July 2025 Batch</h5>

                <p class="card-text mb-2">Flat 25% discount in fees for this session</p>

                <small class="text-muted">July 2025</small>

              </div>

            </div>



          </div>

        </div>

      </div>



      <!-- News Card 2 -->

      <div class="col-lg-6 mb-4">

        <div class="card card-hover shadow-sm h-100">

          <div class="row g-0">



            <div class="col-md-4">

              <picture>

                <source srcset="<?= base_url('assets/images/library_1.webp') ?>" type="image/webp">

                <img src="<?= base_url('assets/images/library_1.jpg') ?>"

                     class="img-fluid rounded-start w-100 object-fit-cover"

                     style="height: 150px;"

                     loading="lazy"

                     alt="Library Facility">

              </picture>

            </div>



            <div class="col-md-8">

              <div class="card-body">

                <h5 class="card-title fw-bold">New Batch for Short Term Courses</h5>

                <p class="card-text mb-2">

                  Admission starts for July batch for Tally, Basic and Programming courses

                </p>

                <small class="text-muted">July 2025</small>

              </div>

            </div>



          </div>

        </div>

      </div>



    </div>



    <div class="text-center mt-3">

      <a href="<?= site_url('news') ?>" class="btn btn-outline-primary">View All News</a>

    </div>



  </div>

</section>



   <!-- Contact CTA -->

        <section id="contact" class="py-5">

            <div class="container text-center py-5">

                <h2 class="mb-4">क्या आप कम्प्यूटर जगत में अपनी एक उज्जवल यात्रा शुरू करने के लिए तैयार हैं?</h2>

                <p class="lead mb-5">हमारे पाठ्यक्रमों और प्रवेश प्रक्रिया के बारे में अधिक जानकारी के लिए हमसे संपर्क करें।</p>

                <a href="#" class="btn btn-primary-custom btn-lg px-4 me-2"><i class="fas fa-phone-alt me-2"></i>Call Us</a>

                <a href="#" class="btn btn-outline-secondary btn-lg px-4"><i class="fas fa-envelope me-2"></i>Email Us</a>

            </div>

        </section>



<!-- NETWORK SITES -->

<section class="network-sec">

  <div class="container">

    <p class="net-label text-center"><i class="fas fa-globe me-1"></i> Our Digital Network</p>

    <div class="row g-3">

      <div class="col-sm-6 col-lg-3">

        <a href="https://www.aruncomputer.com" target="_blank" rel="noopener" class="net-card">

          <div class="net-icon" style="background:#eff6ff;"><i class="fas fa-laptop-code" style="color:#2563eb;"></i></div>

          <div class="net-body">

            <h6>Arun Computer</h6>

            <p>Computer education, courses &amp; digital services.</p>

            <div class="net-domain"><i class="fas fa-link me-1"></i>aruncomputer.com</div>

          </div>

        </a>

      </div>

      <div class="col-sm-6 col-lg-3">

        <a href="https://www.hamararewa.in" target="_blank" rel="noopener" class="net-card">

          <div class="net-icon" style="background:#f0fdf4;"><i class="fas fa-city" style="color:#16a34a;"></i></div>

          <div class="net-body">

            <h6>Hamara Rewa</h6>

            <p>News, info &amp; community portal for Rewa city.</p>

            <div class="net-domain"><i class="fas fa-link me-1"></i>hamararewa.in</div>

          </div>

        </a>

      </div>

      <div class="col-sm-6 col-lg-3">

        <a href="https://www.vindhy.com" target="_blank" rel="noopener" class="net-card">

          <div class="net-icon" style="background:#fdf4ff;"><i class="fas fa-mountain-sun" style="color:#9333ea;"></i></div>

          <div class="net-body">

            <h6>Vindhy.com</h6>

            <p>Regional platform for Vindhya &mdash; services &amp; resources.</p>

            <div class="net-domain"><i class="fas fa-link me-1"></i>vindhy.com</div>

          </div>

        </a>

      </div>

      <div class="col-sm-6 col-lg-3">

        <a href="https://shankarnursinghome.vindhy.com" target="_blank" rel="noopener" class="net-card">

          <div class="net-icon" style="background:#fff7ed;"><i class="fas fa-hospital-user" style="color:#ea580c;"></i></div>

          <div class="net-body">

            <h6>Shankar Nursing Home</h6>

            <p>Healthcare &amp; nursing services &mdash; patient care.</p>

            <div class="net-domain"><i class="fas fa-link me-1"></i>shankarnursinghome.vindhy.com</div>

          </div>

        </a>

      </div>

    </div>

  </div>

</section>





        

    <!-- Stats Section -->

        <section class="py-5 bg-primary-custom text-white">

            <div class="container">

                <div class="row text-center">

                    <div class="col-md-3 col-6 mb-4">

                        <h3 class="display-4 fw-bold">20+</h3>

                        <p class="mb-0">Years of Excellence</p>

                    </div>

                    <div class="col-md-3 col-6 mb-4">

                        <h3 class="display-4 fw-bold">1000+</h3>

                        <p class="mb-0">Alumni Network</p>

                    </div>

                    <div class="col-md-3 col-6 mb-4">

                        <h3 class="display-4 fw-bold">90%</h3>

                        <p class="mb-0">Placement Rate</p>

                    </div>

                    <div class="col-md-3 col-6 mb-4">

                        <h3 class="display-4 fw-bold">20+</h3>

                        <p class="mb-0">Industry Partners</p>

                    </div>

                </div>

            </div>

        </section>



 





<!--   code  for pop up alart box  -->

   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content animate__animated animate__bounceIn">

            <div class="modal-header bg-primary text-white">







                <h5 class="modal-title" id="exampleModalLabel">अरुण कम्प्यूटर आपका स्वागत करता है !</h5>





                     <!-- Text ko link banaya -->

    



                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body text-center py-4">

                <i class="fas fa-laptop-code fa-4x text-primary mb-3"></i>

                    <p class="lead">

                        <a href="<?= base_url('webdev') ?>" class="text-decoration-none text-dark">

                            इस तरह की वेबसाइट बनवाने के लिए हमसे संपर्क करें!

                         </a>

                    </p>



            </div>

            <div class="modal-footer justify-content-center">

                <button type="button" class="btn btn-primary btn-lg px-4" data-bs-dismiss="modal">

                    <i class="fas fa-sign-in-alt me-2"></i>प्रवेश करें!

                </button>

                

            </div>

        </div>

    </div>

</div>





<script>

document.addEventListener('DOMContentLoaded', function() {

    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));

    myModal.show();

});

</script>





       </main>

    </div>

  </div>