 <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
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
    </style>
    <!-- marquee style -->
        <!--Marquee Styles -->
        <style>
                    .marquee-container {
                    width: 100%;
                    overflow: hidden;
                    background: #ffc107;";
                    padding: 10px;
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

            <main class="main-content p-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
                    <h3 class="h2">पढ़ेगा रीवा  बढ़ेगा रीवा! Since 2003 </h3>
                </div>

             
 <!-- notice section notice dynamic --> 
  
<!-- Marquee for Notices dynamic -->
        <?php
            use App\Models\Admin\NoticeModel;
            $model = new NoticeModel();
            $notices = $model->where('status', 'active')->orderBy('created_at', 'DESC')->findAll();
            ?>
        <?php if ($notices): ?>
        <div class="marquee-container" style=" padding: 15px; font-weight: bold;">
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


<section class="py-5">
    <div class="container">
        <div class="row">
            <h2 class="display-5 fw-bold mb-4">Arun Computers</h2>
                
                <p>अरुण कंप्यूटर एक प्रतिष्ठित कंप्यूटर शिक्षण संस्थान है। यह तकनीकी शिक्षा के क्षेत्र में अग्रणी भूमिका निभा रहा है। संस्था का उद्देश्य छात्रों को इंडस्ट्री-रेडी स्किल्स और नवीनतम टेक्नोलॉजी से परिचित कराना है।
                इस संस्थान की स्थापना सन् 2003 में हुई थी। यह संस्था सोसाइटी पंजीकरण अधिनियम, 1860 के अंतर्गत पंजीकृत है।  </p>
        </div>
        <div class="row">

            <div class="col-lg-6">             
                <h3 class="mt-5 mb-3" >Our Mission-</h3>
                <p>हमारा मिशन छोटे शहरों के युवाओं को किफायती, गुणवत्तापूर्ण और रोजगारोन्मुख कंप्यूटर शिक्षा प्रदान करके उन्हें तकनीकी और डिजिटल युग के लिए तैयार करना है।
                <h3 class="mt-5 mb-3">Our Vision-</h3>
                <p>'सीखो, बनो, आगे बढ़ो' के सिद्धांत पर चलते हुए छात्रों को केवल डिग्री नहीं, बल्कि जीवन बदलने वाले कौशल देना है।</p>

                <h3 class="mt-5 mb-3">Aim-</h3>
                <p>एक ऐसा शैक्षणिक केंद्र विकसित करना है जहाँ:- </p>
                  <p>
                  <ul>
                    <li class="fs-4"> सस्ती और गुणवत्तापूर्ण कंप्यूटर शिक्षा स्थानीय स्तर पर उपलब्ध हो।</li>
                    <li class="fs-4"> प्रैक्टिकल स्किल्स और इंडस्ट्री-रिलेवेंट ट्रेनिंग पर ध्यान केंद्रित किया जाए। </li>
                    <li class="fs-4">डिजिटल भारत के सपने को साकार करने के लिए छात्रों को AI, वेब डेवलपमेंट, साइबर सुरक्षा और सॉफ्टवेयर डिज़ाइन में निपुण बनाया जाए। </li>
                  </ul>
                </p>
            </div>


            <div class="col-lg-6 py-2">
                <img src="<?= base_url('assets/images/arun_computer.jpg') ?>" alt="College Campus" class="img-fluid rounded shadow py-5">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 py-2">
                <img src="<?= base_url('assets/images/student.jpg') ?>" alt="College Campus" class="img-fluid rounded shadow py-5">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Principal's Message</h2>

                <p> आप सभी का हमारे कंप्यूटर कॉलेज के डिजिटल परिवार में स्वागत है !
                <p>हमारा उद्देश्य छोटे शहर के युवाओं को गुणवत्तापूर्ण तकनीकी शिक्षा प्रदान करना है। जिससे वे राष्ट्रीय और वैश्विक स्तर पर प्रतिस्पर्धा कर सकें। 
                <p>आज का युग डिजिटल युग है। हमारा कॉलेज छात्रों को AI, प्रोग्रामिंग, वेब डिज़ाइन, साइबर सुरक्षा और अन्य उभरती टेक्नोलॉजीज़ उपयोग करने में विशेषज्ञ बनाने के लिए प्रतिबद्ध है।
                <p>हमारी अनुभवी फैकल्टी, आधुनिक लैब्स और उपयोग  पाठ्यक्रम यह सुनिश्चित करते हैं कि छात्रों को  रोजगारपरक कौशल मिले। हमारे छात्र आज मल्टीनेशनल कंपनियों, स्टार्ट-अप्स और सरकारी संगठनों में कार्य कर रहे हैं।
                <p>आइए, डिजिटल भारत के निर्माण में साथ मिलकर कदम बढ़ाएँ।
                <p>  "जय हिन्द, जय भारत!"
                </p>
            </div>
        </div>




       
<div class="row mt-5">
    <div class="col-12">
        <h3 class="mb-4 fw-bold text-center">Our Mentors</h3>
        <div class="row">

            
<!-- <div class="card h-100 shadow-lg rounded card-hover"> -->



        <div class="row mt-5">                    
            <div class="col-12 text-center">
                
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-lg rounded card-hover">
                             <img src="<?= base_url('assets/images/op1.png') ?>" class="card-imag-top" alt="Director" 300x300 > 
                            <!-- <img src="https://source.unsplash.com/random/300x300/?person" class="card-img-top" alt="Director"> -->
                            <div class="card-body">
                                <h5 class="card-title">Mr. O.P.Shrivstava</h5>
                                
                                <p class="card-text">B.E in Mechanical Engineering from Govt. Engg. College Jabalpur, 35+ years of academic and industrial experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-lg rounded card-hover">
                            <!-- <img src="https://source.unsplash.com/random/300x300/?woman" class="card-img-top" alt="Dean"> -->
                            <img src="<?= base_url('assets/images/srsoni.jpeg') ?>" class="card-imag-top" alt="Director" 300x300 > 
                            <div class="card-body">
                                <h5 class="card-title">Dr. S.R.Soni</h5>
                                <!-- <p class="card-subtitle mb-2 text-muted">Dean Academics</p> -->
                                <p class="card-text"> PhD in Mechanical Engineering, and is Alumni of IIT Bombay, IIT Delhi, IIIT and JEC Jabalpur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-lg rounded card-hover">
                            <!-- <img src="https://source.unsplash.com/random/300x300/?man" class="card-img-top" alt="HOD"> -->
                             <img src="<?= base_url('assets/images/sandeepsir.jpeg') ?>" class="card-imag-top" alt="Director" 300x300 > 
                            <div class="card-body">
                                <h5 class="card-title">Dr. Sandeep Pandey</h5>
                                <!-- <p class="card-subtitle mb-2 text-muted">HOD, Computer Science</p> -->
                                <p class="card-text">Dean Student Welfare, Govt. Rewa Engg. College Rewa. & HOD Physics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





<!-- sansadhan section  -->




                     <div class="row mt-5">
            <div class="col-12">


                        <!-- हेडिंग सेक्शन -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary mb-3">हमारी सुविधाएँ</h1>
        <p class="lead">अरुण कम्प्यूटर में उपलब्ध उत्कृष्ट सुविधाएँ</p>
        <div class="divider bg-primary mx-auto" style="width: 80px; height: 3px;"></div>
    </div>

            



                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-laptop-house fa-3x mb-3 text-primary"></i>
                                <h5>Advanced Computing Labs</h5>
                                <p>50 से अधिक उच्च कॉन्फ़िगरेशन के कम्प्यूटर से और विशेष सॉफ्टवेयर के साथ 2 सुसज्जित प्रयोगशालाएँ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-network-wired fa-3x mb-3 text-primary"></i>
                                <h5>High-Speed Network</h5>
                                <p>100mbps इंटरनेट की २ कनेक्टिविटी, पूरे परिसर में वाई-फ़ाई एक्सेस के साथ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-book fa-3x mb-3 text-primary"></i>
                                <h5>Digital Library</h5>
                                <p>लाइब्रेरी में 500 से अधिक पुस्तकों, पत्रिकाओं और ऑन  लाइन पाठ्य सामग्री उपलब्ध है। </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<style>
.card-img-top {
    height: 300px;
    object-fit: cover;
    width: 100%;
}
</style>







        
<!-- facilities section -->




                    <div class="row mb-4">
                   
                      

                       <!-- app/Views/facilities/index.php -->
<div class="container py-4">
    

    <!-- मुख्य सुविधाएँ -->
    <div class="row g-4 mb-5">
        <!-- सुविधा 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="icon-box bg-light-primary rounded-circle mx-auto mb-4">
                        <i class="fas fa-desktop fa-2x text-primary"></i>
                    </div>
                    <h3 class="h5">आधुनिक कंप्यूटर लैब</h3>
                    <p class="mb-0">i5/i7 प्रोसेसर वाले 30+ कंप्यूटर, LED प्रोजेक्टर और हाई-स्पीड इंटरनेट</p>
                </div>
            </div>
        </div>

        <!-- सुविधा 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="icon-box bg-light-primary rounded-circle mx-auto mb-4">
                        <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
                    </div>
                    <h3 class="h5">अनुभवी प्रशिक्षक</h3>
                    <p class="mb-0">10+ वर्षों के अनुभव वाले प्रशिक्षक, व्यक्तिगत मार्गदर्शन</p>
                </div>
            </div>
        </div>

        <!-- सुविधा 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="icon-box bg-light-primary rounded-circle mx-auto mb-4">
                        <i class="fas fa-book fa-2x text-primary"></i>
                    </div>
                    <h3 class="h5">समृद्ध पुस्तकालय</h3>
                    <p class="mb-0">500+ कंप्यूटर और IT से संबंधित पुस्तकों का संग्रह</p>
                </div>
            </div>
        </div>
    </div>

    <!-- अतिरिक्त सुविधाएँ -->
    <div class="bg-light p-4 rounded mb-5">
        <h2 class="h4 text-center mb-4">अन्य सुविधाएँ</h2>
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-wifi text-primary me-2"></i>
                    <span>हाई-स्पीड WiFi</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-snowflake text-primary me-2"></i>
                    <span>वातानुकूलित कक्ष</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-print text-primary me-2"></i>
                    <span>प्रिंटिंग सुविधा</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bus text-primary me-2"></i>
                    <span>आसान यातायात</span>
                </div>
            </div>
        </div>
    </div>

    <!-- गैलरी प्रिव्यू -->
    <div class="text-center">
        <h2 class="h4 mb-4">हमारी लैब की झलक</h2>
        <div class="row g-2">
            <div class="col-4">
                <img src="<?= base_url('assets/images/lab1.jpg') ?>" class="img-fluid rounded" alt="Lab 1">
            </div>
            <div class="col-4">
                <img src="<?= base_url('assets/images/lab2.jpg') ?>" class="img-fluid rounded" alt="Lab 2">
            </div>
            <div class="col-4">
                <img src="<?= base_url('assets/images/lab3.jpg') ?>" class="img-fluid rounded" alt="Lab 3">
            </div>
        </div>
        <a href="<?= site_url('gallery') ?>" class="btn btn-primary mt-3">और तस्वीरें देखें</a>
    </div>
</div>

<style>
.icon-box {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}
.card:hover .icon-box {
    background-color: #e3f2fd !important;
    transform: rotate(5deg) scale(1.1);
}
</style>








                </div>





        <div class="row mt-5">
            <div class="col-12">
                <div class="card bg-light border-0">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-4">Our Commitment to Excellence</h3>
                        <p class="lead">At Arun Computers, we believe in nurturing not just skilled professionals but well-rounded individuals who can lead the technological revolution with integrity and innovation. Our holistic approach combines rigorous academics, hands-on training, industry exposure, and value-based education to create the tech leaders of tomorrow.</p>
                        <a href="<?= base_url('academics') ?>" class="btn btn-primary btn-lg mt-3">Explore Our Programs</a>
                    </div>
                </div>
            </div>
        </div>

    </div>







</section>





               </main>
        </div>
    </div>