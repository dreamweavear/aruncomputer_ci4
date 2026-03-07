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
      


                  <!-- Marquee for Notices static   -->




<!-- Marquee for Notices static   -->
<div class="marquee-container py-3">
  <div class="marquee-text">
    🎓 बहुत कम कीमत पर अपनी  वेबसाइट बना कर इंटरनेट में अपनी पहचान सुरक्षित करें  | 📢 और आभासी दुनिया  में  उपस्थिति सुनिश्चित करें |                                  
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







<section class="py-5">
    <div class="container">




<section id="wd-wrap" class="container py-4">

  <style>
  :root{ --ac-primary:#0078d4; --ac-accent:#6cb4ee; }
  .btn-ac{background:var(--ac-primary); color:#fff; border:none}
  .btn-ac:hover,.btn-ac:focus-visible{background:#025ea6; color:#fff}

  .price-card{transition:transform .18s ease, box-shadow .18s ease}
  .price-card:hover{transform:translateY(-4px); box-shadow:0 1rem 2rem rgba(0,0,0,.12)}
  .price-card .card-header{padding-top:1.1rem; padding-bottom:.4rem}
  .badge-ac{display:inline-block;font-size:.75rem;padding:.3rem .6rem;background:var(--ac-accent);
    color:#063b63;border-radius:999px}

  /* CSS-only toggle: by default static visible */
  #wd-wrap .pricing .show-dynamic{display:none!important}
  #wd-wrap #modeDynamic:checked ~ .pricing .show-static{display:none!important}
  #wd-wrap #modeDynamic:checked ~ .pricing .show-dynamic{display:inline!important}
  #wd-wrap #modeDynamic:checked ~ .pricing .feature-dyn{display:list-item!important}
  </style>

  <header class="text-center mb-4">
    <h1 class="fw-bolder mb-2">Website Development Packages</h1>
    <p class="text-muted mb-0">Local business के लिए तेज़, सुरक्षित और mobile-friendly websites</p>
  </header>

  <!-- ✅ radios must be BEFORE .pricing and inside same #wd-wrap -->
  <input class="btn-check" type="radio" name="mode" id="modeStatic" checked>
  <input class="btn-check" type="radio" name="mode" id="modeDynamic">

  <div class="text-center mb-3">
    <label class="btn btn-outline-primary me-2" for="modeStatic">Static</label>
    <label class="btn btn-outline-primary" for="modeDynamic">Dynamic (Admin Panel)</label>
    <div class="small text-muted mt-2">Dynamic plan में admin panel से content/images खुद update कर सकते हैं.</div>
  </div>

  <!-- ✅ .pricing is sibling of radios (same parent: #wd-wrap) -->
  <div class="pricing">

    <div class="row row-cols-1 row-cols-md-2 g-4">

      <!-- Single Page -->
      <div class="col">
        <div class="card price-card h-100 border-0 shadow-sm rounded-4">
          <div class="card-header bg-white border-0">
            <span class="badge-ac me-2">Popular</span>
            <strong>Single Page Website</strong>
          </div>
          <div class="card-body d-flex flex-column">
            <h2 class="display-6 mb-3">
              <span class="show-static">₹1,999</span>
              <span class="show-dynamic">₹3,999</span>
              <small class="text-muted fs-6">+ GST</small>
            </h2>
            <ul class="list-unstyled small lh-lg mb-4">
              <li>✓ Mobile Responsive</li>
              <li>✓ Modern Layout + Banner</li>
              <li>✓ Contact Form / WhatsApp</li>
              <li>✓ Basic On-Page SEO</li>
              <li class="feature-dyn" style="display:none">✓ Simple Admin Panel (single-page sections)</li>
            </ul>
            <a class="btn btn-ac mt-auto w-100" href="tel:+919926542408">Call Now</a>
          </div>
          <div class="card-footer bg-white border-0 small text-muted">Domain/Hosting अलग — add-ons नीचे</div>
        </div>
      </div>

      <!-- 5 Page -->
      <div class="col">
        <div class="card price-card h-100 border-0 shadow-sm rounded-4">
          <div class="card-header bg-white border-0"><strong>5 Page Website</strong></div>
          <div class="card-body d-flex flex-column">
            <h2 class="display-6 mb-3">
              <span class="show-static">₹3,999</span>
              <span class="show-dynamic">₹7,499</span>
              <small class="text-muted fs-6">+ GST</small>
            </h2>
            <ul class="list-unstyled small lh-lg mb-4">
              <li>✓ Pages: Home, About, Services, Gallery, Contact</li>
              <li>✓ Responsive + Fast Loading</li>
              <li>✓ Basic SEO + Google Map</li>
              <li>✓ Contact Form with Email</li>
              <li class="feature-dyn" style="display:none">✓ Admin Panel: Pages & Gallery manage</li>
            </ul>
            <a class="btn btn-ac mt-auto w-100"
               href="https://wa.me/919926542408?text=Hi%20I%20want%20a%20website%20quote">WhatsApp Quote</a>
          </div>
          <div class="card-footer bg-white border-0 small text-muted">Training (30 min) dynamic plan में शामिल</div>
        </div>
      </div>

    </div>

    <!-- Add-ons -->
    <h3 class="mt-5 mb-3">Add-ons</h3>
    <div class="row row-cols-1 row-cols-md-3 g-3">
      <div class="col"><div class="p-3 border rounded-3 h-100"><strong>Domain (.com)</strong><br><span class="text-muted">₹899/year</span></div></div>
      <div class="col"><div class="p-3 border rounded-3 h-100"><strong>Hosting (Shared)</strong><br><span class="text-muted">₹1,499/year से</span></div></div>
      <div class="col"><div class="p-3 border rounded-3 h-100"><strong>SSL (HTTPS)</strong><br><span class="text-muted">Free/Included</span></div></div>
      <div class="col"><div class="p-3 border rounded-3 h-100"><strong>Logo & Banner</strong><br><span class="text-muted">₹799</span></div></div>
      <div class="col"><div class="p-3 border rounded-3 h-100"><strong>Maintenance</strong><br><span class="text-muted">₹299/month</span></div></div>
      <div class="col"><div class="p-3 border rounded-3 h-100"><strong>Extra Page</strong><br><span class="text-muted">₹499 (static) / ₹899 (dynamic)</span></div></div>
    </div>



    <!-- Total Cost Example -->
<!-- Total Cost Examples -->
<div class="mt-5 p-4 border rounded-4 bg-light shadow-sm">
  <h4 class="mb-3">💡 Examples: Website with Domain & Hosting</h4>

  <!-- Single Page Example -->
  <div class="mb-4">
    <h5 class="fw-bold text-primary">Single Page Website (Static)</h5>
    <div class="table-responsive">
      <table class="table table-sm table-borderless mb-0">
        <tbody>
          <tr>
            <td>Single Page Website</td>
            <td class="text-end">₹1,999</td>
          </tr>
          <tr>
            <td>Domain (.com, 1 year)</td>
            <td class="text-end">₹899</td>
          </tr>
          <tr>
            <td>Hosting (Shared, 1 year)</td>
            <td class="text-end">₹1,499</td>
          </tr>
          <tr class="fw-bold border-top">
            <td>Total</td>
            <td class="text-end">₹4,397 <small class="text-muted">(GST extra)</small></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- 5 Page Example -->
  <div>
    <h5 class="fw-bold text-success">5 Page Website (Static)</h5>
    <div class="table-responsive">
      <table class="table table-sm table-borderless mb-0">
        <tbody>
          <tr>
            <td>5 Page Website</td>
            <td class="text-end">₹3,999</td>
          </tr>
          <tr>
            <td>Domain (.com, 1 year)</td>
            <td class="text-end">₹899</td>
          </tr>
          <tr>
            <td>Hosting (Shared, 1 year)</td>
            <td class="text-end">₹1,499</td>
          </tr>
          <tr class="fw-bold border-top">
            <td>Total</td>
            <td class="text-end">₹6,397 <small class="text-muted">(GST extra)</small></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <p class="text-muted small mb-0 mt-3">
    *ये examples केवल अनुमान के लिए हैं — final कीमतें आपकी requirement और चुने गए features के अनुसार बदल सकती हैं।
  </p>
</div>


    <!-- Dynamic Website Cost Examples -->
<div class="mt-4 p-4 border rounded-4 bg-light shadow-sm">
  <h4 class="mb-3">💡 Examples: Dynamic Website (with Admin Panel) + Domain & Hosting</h4>

  <!-- Single Page Dynamic -->
  <div class="mb-4">
    <h5 class="fw-bold text-primary">Single Page (Dynamic)</h5>
    <div class="table-responsive">
      <table class="table table-sm table-borderless mb-0">
        <tbody>
          <tr>
            <td>Single Page Website (Dynamic)</td>
            <td class="text-end">₹3,999</td>
          </tr>
          <tr>
            <td>Domain (.com, 1 year)</td>
            <td class="text-end">₹899</td>
          </tr>
          <tr>
            <td>Hosting (Shared, 1 year)</td>
            <td class="text-end">₹1,499</td>
          </tr>
          <tr class="fw-bold border-top">
            <td>Total</td>
            <td class="text-end">₹6,397 <small class="text-muted">(GST extra)</small></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="small text-muted mt-2 mb-0">
      Includes basic Admin Panel to update sections (text/images).
    </p>
  </div>

  <!-- 5 Page Dynamic -->
  <div>
    <h5 class="fw-bold text-success">5 Page Website (Dynamic)</h5>
    <div class="table-responsive">
      <table class="table table-sm table-borderless mb-0">
        <tbody>
          <tr>
            <td>5 Page Website (Dynamic)</td>
            <td class="text-end">₹7,499</td>
          </tr>
          <tr>
            <td>Domain (.com, 1 year)</td>
            <td class="text-end">₹899</td>
          </tr>
          <tr>
            <td>Hosting (Shared, 1 year)</td>
            <td class="text-end">₹1,499</td>
          </tr>
          <tr class="fw-bold border-top">
            <td>Total</td>
            <td class="text-end">₹9,897 <small class="text-muted">(GST extra)</small></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="small text-muted mt-2 mb-0">
      Includes Admin Panel to manage pages & gallery, and a short training session.
    </p>
  </div>

  <p class="text-muted small mb-0 mt-3">
    *Dynamic plans में Admin Panel शामिल है; exact scope/features के अनुसार final quote बदल सकता है.
  </p>
</div>





    <!-- CTA -->
    <div class="text-center mt-4">
      <a href="tel:+919926542408" class="btn btn-lg btn-ac me-2">📞 Call</a>
      <a href="<?= site_url('contact') ?>" class="btn btn-lg btn-outline-primary">Get Custom Quote</a>
      <p class="text-muted mt-3 small mb-0">*Prices indicative — final quote requirement पर depend करेगा.</p>
    </div>

  </div><!-- /.pricing -->
</section>








    </div>
     



</section>



               </main>
        </div>
    </div>