<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../assets/IMG_3730,JPG-Picsart-BackgroundRemover.png" />
  <title>Our Services - Hygiene Apparatus</title>
  <link rel="stylesheet" href="../../Styles.css" />
  <link rel="stylesheet" href="../Contact/contact.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  
  <style>
     body {
            overflow: visible !important;
            height: auto !important;
        }
    .service-page {
      padding-top: 70px;
      min-height: 100vh;
      background: #f8f9fa;
    }

    /* Hero Section */
    .service-hero {
      background: linear-gradient(135deg, #0a1628 0%, #1a2a4a 50%, #0a1628 100%);
      padding: 80px 40px 60px;
      text-align: center;
      position: relative;
      overflow: hidden;
       scrollbar-width: none;

   
    -ms-overflow-style: none;
    }

    .service-hero::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(0, 212, 255, 0.08), transparent 70%);
      border-radius: 50%;
    }

    .service-hero::after {
      content: '';
      position: absolute;
      bottom: -30%;
      left: -10%;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(123, 47, 252, 0.06), transparent 70%);
      border-radius: 50%;
    }

    .service-hero-content {
      position: relative;
      z-index: 1;
      max-width: 800px;
      margin: 0 auto;
    }

    .service-hero .badge {
      display: inline-block;
      background: rgba(0, 212, 255, 0.15);
      color: #00d4ff;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 8px 20px;
      border-radius: 20px;
      border: 1px solid rgba(0, 212, 255, 0.15);
      margin-bottom: 20px;
    }

    .service-hero h1 {
      font-size: clamp(36px, 5vw, 56px);
      font-weight: 800;
      color: white;
      margin-bottom: 16px;
      line-height: 1.1;
    }

    .service-hero h1 span {
      background: linear-gradient(135deg, #00d4ff, #7b2ffc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .service-hero p {
      color: rgba(255, 255, 255, 0.7);
      font-size: 18px;
      line-height: 1.8;
      max-width: 600px;
      margin: 0 auto;
    }

    /* Container */
    .container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 60px 40px;
    }

    /* Section Header */
    .section-header {
      text-align: center;
      margin-bottom: 50px;
    }

.section-tag {
      display: inline-block;
      width: fit-content;
      font-size: 32px;
      font-weight: 900;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: #86898e;
      position: relative;
      padding-bottom: 12px;
    }

    .section-tag::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, #80848c, var(--accent));
      border-radius: 10px;
    }

    .section-header h2 {
      font-size: clamp(28px, 3.5vw, 40px);
      font-weight: 700;
      color: #0a1628;
    }

    .section-header h2 span {
      background: linear-gradient(135deg, #00d4ff, #7b2ffc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .section-header p {
      color: rgba(0, 0, 0, 0.6);
      font-size: 16px;
      max-width: 600px;
      margin: 12px auto 0;
    }

    /* Service Grid */
    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
      gap: 30px;
    }

    /* Service Card */
    .service-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      border: 1px solid rgba(0, 0, 0, 0.04);
      position: relative;
      cursor: pointer;
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #00d4ff, #7b2ffc);
      transform: scaleX(0);
      transition: transform 0.4s ease;
      transform-origin: left;
    }

    .service-card:hover::before {
      transform: scaleX(1);
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
      border-color: rgba(0, 212, 255, 0.1);
    }

    .service-card-image {
      position: relative;
      overflow: hidden;
      height: 220px;
      background: #f0f4f8;
    }

    .service-card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .service-card:hover .service-card-image img {
      transform: scale(1.08);
    }

    .overlay-icon {
      position: absolute;
      /* bottom: -20px; */
      top:205px;
      right: 20px;
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #00d4ff, #7b2ffc);
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 8px 24px rgba(0, 212, 255, 0.3);
      transition: all 0.3s ease;
    }

     .overlay-icon {
      transform: rotate(10deg) scale(1.1);
    }

    .overlay-icon i {
      font-size: 28px;
      color: white;
    }

    .service-card-content {
      padding: 28px 30px 30px;
    }

    .service-card-content .service-number {
      font-size: 12px;
      font-weight: 700;
      color: rgba(0, 212, 255, 0.3);
      letter-spacing: 2px;
      margin-bottom: 8px;
      display: block;
    }

    .service-card-content h3 {
      font-size: 20px;
      font-weight: 700;
      color: #0a1628;
      margin-bottom: 12px;
      transition: color 0.3s ease;
    }

    .service-card:hover .service-card-content h3 {
      color: #00d4ff;
    }

    .service-card-content p {
      color: rgba(0, 0, 0, 0.6);
      font-size: 15px;
      line-height: 1.8;
      margin-bottom: 20px;
    }

    .service-card-content .service-features {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 20px;
    }

    .service-card-content .service-features span {
      background: rgba(0, 212, 255, 0.06);
      color: #0a1628;
      font-size: 12px;
      font-weight: 500;
      padding: 4px 14px;
      border-radius: 20px;
      border: 1px solid rgba(0, 212, 255, 0.08);
    }

    .service-card-content .btn-learn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: #0a1628;
      font-weight: 600;
      font-size: 14px;
      text-decoration: none;
      transition: all 0.3s ease;
      padding: 8px 0;
      border-bottom: 2px solid transparent;
    }

    .service-card-content .btn-learn i {
      transition: transform 0.3s ease;
    }

    .service-card-content .btn-learn:hover {
      color: #00d4ff;
      border-bottom-color: #00d4ff;
    }

    .service-card-content .btn-learn:hover i {
      transform: translateX(6px);
    }

    /* CTA Section */
    .service-cta {
      background: linear-gradient(135deg, #0a1628, #1a2a4a);
      border-radius: 24px;
      padding: 60px 50px;
      margin-top: 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
      position: relative;
      overflow: hidden;
    }

    .service-cta::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -10%;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(0, 212, 255, 0.05), transparent 70%);
      border-radius: 50%;
    }

    .service-cta-content {
      position: relative;
      z-index: 1;
    }

    .service-cta-content h3 {
      color: white;
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .service-cta-content p {
      color: rgba(255, 255, 255, 0.7);
      font-size: 16px;
    }

    .service-cta .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: linear-gradient(135deg, #00d4ff, #7b2ffc);
      color: white;
      text-decoration: none;
      font-weight: 600;
      font-size: 16px;
      padding: 16px 36px;
      border-radius: 12px;
      transition: all 0.3s ease;
      position: relative;
      z-index: 1;
      white-space: nowrap;
    }

    .service-cta .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 40px rgba(0, 212, 255, 0.3);
    }

    /* Responsive */
    @media (max-width: 992px) {
      .service-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      }
    }

    @media (max-width: 768px) {
      .service-hero {
        padding: 60px 20px 40px;
      }
      .service-hero h1 {
        font-size: 28px;
      }
      .service-hero p {
        font-size: 16px;
      }
      .container {
        padding: 40px 20px;
      }
      .service-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }
      .service-card-image {
        height: 180px;
      }
      .service-card-content {
        padding: 20px;
      }
      .service-card-content h3 {
        font-size: 18px;
      }
      .service-cta {
        padding: 40px 24px;
        flex-direction: column;
        text-align: center;
      }
      .service-cta-content h3 {
        font-size: 22px;
      }
    }

    @media (max-width: 480px) {
      .service-hero h1 {
        font-size: 24px;
      }
      .service-card-image {
        height: 160px;
      }
      .service-card-content .service-features span {
        font-size: 11px;
        padding: 3px 10px;
      }
    }

    /* Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .service-card {
      animation: fadeInUp 0.6s ease forwards;
      opacity: 0;
    }

    .service-card:nth-child(1) { animation-delay: 0.1s; }
    .service-card:nth-child(2) { animation-delay: 0.2s; }
    .service-card:nth-child(3) { animation-delay: 0.3s; }
    .service-card:nth-child(4) { animation-delay: 0.4s; }
    .service-card:nth-child(5) { animation-delay: 0.5s; }
    .service-card:nth-child(6) { animation-delay: 0.6s; }
  </style>
</head>
<body>
          <div id="pageLoader">
    <div class="loader">
        <div class="loader-circle"></div>
        <div class="loader-icon">
            <i class="ti ti-sparkles"></i>
        </div>
    </div>
</div>
           <nav class="navbar" id="navbar">
    <div class="logo-container">
      <img src="../assets/IMG_3730,JPG-Picsart-BackgroundRemover.png" alt="Logo" class="logo" />
    </div>
    <div class="nav-menu" id="navMenu">
      <a href="../../index.php" class="nav-link " data-idx="0">Home</a>
      <a href="../Aboutus/aboutus.php" class="nav-link " data-idx="1">About</a>
      <div class="nav-dropdown">
        <a href="#products" class="nav-link " data-idx="2">Products <i class="ti ti-chevron-down" style="font-size:12px; margin-left:4px;"></i></a>
        <div class="dropdown-content">
          <a href="../../pages/Products/Vaccumecleaners.php">Vacuum Cleaners</a>
          <a href="../../pages/Products/scrubbermachine.php">Scrubber Machine</a>
          <a href="../../pages/Products/Highpressurewasher.php">High Pressure Washer</a>
          <a href="../../pages/Products/sweepermachine.php">Sweeper Machine</a>
          <a href="../../pages/Products/Scrubber.php">Scrubber</a>
          <a href="../../pages/Products/spares.php">Spares</a>
          <a href="../../pages/Products/Dustbin.php">Dustbin</a>
          <a href="../../pages/Products/hygieneproducts.php">Hygiene Products</a>
          <a href="../../pages/Products/MopsandBrushes.php">Mops & Brushes</a>
        </div>
      </div>
      <a href="./service.php" class="nav-link active" data-idx="2">Service</a>
      <a href="../../pages/Contact/contact.php" class="nav-link" data-idx="3">Contact</a>
     <a href="#" class="nav-btn openBrochure">Brochure</a>
    </div>
    <button class="menu-toggle" id="menuToggle">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>

    <div class="mobile-menu" id="mobileMenu">
        <a href="../../index.php" class="mob-link" data-idx="0">Home</a>
        <a href="../Aboutus/aboutus.php" class="mob-link">About</a>

        <!-- Products Dropdown -->
        <div class="mobile-dropdown">
            <div class="mob-link" id="mobileProductsBtn">
                <span>Products</span>
                <i class="ti ti-chevron-down"></i>
            </div>
            <div class="mobile-dropdown-content" id="mobileProductsMenu">
                <a href="../Products/Vaccumecleaners.php">Vacuum Cleaners</a>
                <a href="../Products/scrubbermachine.php">Scrubber Machine</a>
                <a href="../Products/Highpressurewasher.php">High Pressure Washer</a>
                <a href="../Products/sweepermachine.php">Sweeper Machine</a>
                <a href="../Products/Scrubber.php">Scrubber</a>
                <a href="../Products/spares.php">Spares</a>
                <a href="../Products/Dustbin.php">Dustbin</a>
                <a href="../Products/hygieneproducts.php">Hygiene Products</a>
                <a href="../Products/MopsandBrushes.php">Mops & Brushes</a>
            </div>
        </div>

        <a href="../Services/service.php" class="mob-link">Service</a>
        <a href="../Contact/contact.php" class="mob-link">Contact</a>
      <a href="#" class="nav-btn openBrochure">Brochure</a>
    </div>


  <div class="service-page">

    <!-- Hero Section -->
    <section class="service-hero">
      <div class="service-hero-content">
        <span class="badge">
          <i class="ti ti-star" style="font-size:14px;"></i> Premium Services
        </span>
        <h1>Our <span>Services</span></h1>
        <p>Comprehensive cleaning solutions tailored to your needs — from machine rentals to professional cleaning and maintenance services.</p>
      </div>
    </section>

    <!-- Services Grid -->
    <div class="container">
      <div class="section-header">
        <span class="section-tag">What We Offer</span>
        <h2>Explore Our <span>Services</span></h2>
        <p>Delivering excellence through quality, reliability, and innovation in every service we provide.</p>
      </div>

      <div class="service-grid">
        <!-- Service 1: Machine Rental -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="../assets/Background/Background2.jpg" alt="Machine Rental Services" />
            <!-- <div class="overlay-icon">
              <i class="ti ti-tools"></i>
            </div> -->
          </div>
          <div class="service-card-content">
            <span class="service-number">01</span>
            <h3>Machine Rental Services</h3>
            <p>High-performance machines available for rent at affordable prices. Well-maintained equipment with flexible rental plans for construction, industrial, and cleaning needs.</p>
            <div class="service-features">
              <span>Flexible Plans</span>
              <span>Well-Maintained</span>
              <span>Affordable</span>
            </div>
            <a href="#" class="btn-learn">
              Learn More <i class="ti ti-arrow-right"></i>
            </a>
             <div class="overlay-icon">
              <i class="ti ti-tools"></i>
            </div>
          </div>
        </div>

        <!-- Service 2: Cleaning Services -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="../assets/service/service1.jpg" alt="Cleaning Services" />
            <!-- <div class="overlay-icon">
              <i class="ti ti-sparkles"></i>
            </div> -->
          </div>
          <div class="service-card-content">
            <span class="service-number">02</span>
            <h3>Cleaning Services</h3>
            <p>Professional cleaning solutions for offices, industrial spaces and hospitals. We ensure deep cleaning, hygiene, and a spotless environment using modern equipment.</p>
            <div class="service-features">
              <span>Deep Cleaning</span>
              <span>Hygiene Focus</span>
              <span>Modern Equipment</span>
            </div>
            <a href="#" class="btn-learn">
              Learn More <i class="ti ti-arrow-right"></i>
            </a>
              <div class="overlay-icon">
              <i class="ti ti-sparkles"></i>
            </div>
          </div>
        </div>

        <!-- Service 3: Spares & Services -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="../assets/Background/Background3.jpg" alt="Spares & Services" />
            <!-- <div class="overlay-icon">
              <i class="ti ti-repair"></i>
            </div> -->
          </div>
          <div class="service-card-content">
            <span class="service-number">03</span>
            <h3>Spares & Services</h3>
            <p>Genuine spare parts and reliable maintenance services for all types of machines. Our expert technicians ensure smooth performance and longer equipment life.</p>
            <div class="service-features">
              <span>Genuine Parts</span>
              <span>Expert Technicians</span>
              <span>Reliable Service</span>
            </div>
            <a href="#" class="btn-learn">
              Learn More <i class="ti ti-arrow-right"></i>
            </a>
             <div class="overlay-icon">
              <!-- <i class="ti ti-repair"></i> -->
               <i class="ti ti-spray"></i>         <!-- Cleaning/Sanitizing -->
            </div>
          </div>
        </div>

      

       

        
      </div>

      <!-- CTA Section -->
      <div class="service-cta">
        <div class="service-cta-content">
          <h3>Need a Custom Solution?</h3>
          <p>Contact us for personalized service packages tailored to your specific requirements.</p>
        </div>
        <a href="../Contact/contact.php" class="btn-primary">
          <!-- <i class="ti ti-phone"></i> -->
          Contact Us Now
        </a>
      </div>

        
    </div>
  </div>
     <section class="section" id="contact">
     <div class="contact-page">
    <div class="container">
      
      <!-- Header -->
      <div class="contact-header">
        <span class="badge">Get in Touch</span>
        <h1>Let's <span class="gradient-text">Connect</span></h1>
   
      </div>

      <!-- Contact Grid -->
      <div class="contact-grid">
        
        <!-- Left: Info Cards -->
        <div class="contact-info-side">
          
          <div class="info-card">
            <div class="icon-wrapper">
              <i class="ti ti-mail"></i>
            </div>
            <div class="content">
              <h4>Email</h4>
              <p>hygineapparatus@gmail.com</p>

            </div>
          </div>

          <div class="info-card">
            <div class="icon-wrapper">
              <i class="ti ti-phone"></i>
            </div>
            <div class="content">
              <h4>Phone</h4>
              <p>+91 86677 95012</p>

            </div>
          </div>

          <div class="info-card">
            <div class="icon-wrapper">
              <i class="ti ti-map-pin"></i>
            </div>
            <div class="content">
              <h4>Location</h4>
              <p>No 15/69 Union Street,Thelliyar Agaram, Porur, Chennai - 600116</p>
         
            </div>
          </div>

        
        </div>

        <!-- Right: Form -->
        <div class="form-wrapper">
          <h3 class="form-title">Send us a <span class="gradient-text">Message</span></h3>
          

    
            <form id="contactForm" action="../Contact/send_mail.php" method="POST">
              <div class="seperation">
               <input
        type="text"
        name="name"
        placeholder="Your Name"
        required
        style="width:100%; padding:14px 18px; border-radius:10px; border:1px solid var(--glass-border); background:var(--primary); margin-bottom:12px;"
    />

    <input
        type="email"
        name="email"
        placeholder="Your Email"
        required
        style="width:100%; padding:14px 18px; border-radius:10px; border:1px solid var(--glass-border); background:var(--primary); margin-bottom:12px;"
    />
              </div>

   

    <div class="form-group">
    <label for="product">Product</label>
    <select name="product" id="product" required>
        <option value="">-- Select Product --</option>
        <option value="Vacuum Cleaners">Vacuum Cleaners</option>
        <option value="Scrubber Machine">Scrubber Machine</option>
        <option value="High Pressure Washer">High Pressure Washer</option>
        <option value="Sweeper Machine">Sweeper Machine</option>
        <option value="Scrubber">Scrubber</option>
        <option value="Spares">Spares</option>
        <option value="Dustbin">Dustbin</option>
        <option value="Hygiene Products">Hygiene Products</option>
        <option value="Mops & Brushes">Mops & Brushes</option>
    </select>
</div>

    <textarea
        name="message"
        placeholder="Your Message"
        rows="3"
        required
        style="width:100%; padding:14px 18px; border-radius:10px; border:1px solid var(--glass-border); background:var(--primary); margin-bottom:12px; resize:vertical;"
    ></textarea>

    <button type="submit" class="btn-primary" style="width:100%;">
        Send Message
    </button>

</form>
        </div>
      </div>

  

    </div>
    </section>
    <div id="brochureModal" class="brochure-modal">
    <div class="brochure-content">

        <div class="brochure-header">
            <h3>
                <i class="ti ti-file-pdf"></i>
                Company Brochure
            </h3>

            <div>
                <a
                    href="../assets/Brochure/Hygiene-Apparatus-Brochure.pdf"
                    download
                    class="download-btn">
                    Download
                </a>

                <span class="close-btn">&times;</span>
            </div>
        </div>

        <div class="pdf-wrapper">
            <div id="pdfViewer"></div>
        </div>

    </div>
</div>
 <div id="snackbar"></div>

  <script>
        // ===== TABS SCRIPT =====
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tabs-nav button');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active'));
                    contents.forEach(c => c.classList.remove('active'));

                    // Add active class to clicked tab
                    this.classList.add('active');

                    // Show corresponding content
                    const target = this.dataset.tab;
                    document.getElementById(target).classList.add('active');
                });
            });
        });

        // ===== MOBILE MENU =====
        const toggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        toggle.addEventListener('click', () => {
            toggle.classList.toggle('active');
            mobileMenu.classList.toggle('open');
        });

        function closeMobile() {
            toggle.classList.remove('active');
            mobileMenu.classList.remove('open');
        }

        // ===== NAVBAR SCROLL =====
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 100);
        });

        // ===== DROPDOWN TOGGLE =====
        // const dropdown = document.querySelector('.nav-dropdown');
        // if (dropdown) {
        //     dropdown.addEventListener('click', function(e) {
        //         const link = this.querySelector('.nav-link');
        //         if (link && e.target.closest('.nav-link')) {
        //             this.classList.toggle('open');
        //             e.preventDefault();
        //         }
        //     });
        //     document.addEventListener('click', function(e) {
        //         if (!dropdown.contains(e.target)) {
        //             dropdown.classList.remove('open');
        //         }
        //     });
        // }

        const dropdown = document.querySelector('.nav-dropdown');

if (dropdown) {

    dropdown.addEventListener("mouseenter", function () {
        this.classList.add("open");
    });

    dropdown.addEventListener("mouseleave", function () {
        this.classList.remove("open");
    });

    const link = dropdown.querySelector(".nav-link");

    link.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent navigation when clicking "Products"
    });

}

        // ===== MOBILE PRODUCTS DROPDOWN TOGGLE =====
        const mobileProductsBtn = document.getElementById("mobileProductsBtn");

        if (mobileProductsBtn) {
            mobileProductsBtn.addEventListener("click", function(e) {
                e.stopPropagation();
                this.parentElement.classList.toggle("active");
            });
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            const mobileDropdown = document.querySelector('.mobile-dropdown');
            if (mobileDropdown && !mobileDropdown.contains(e.target)) {
                mobileDropdown.classList.remove('active');
            }
        });

        // Prevent dropdown content clicks from closing the parent
        const mobileDropdownContent = document.querySelector('.mobile-dropdown-content');
        if (mobileDropdownContent) {
            mobileDropdownContent.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }

        // ===== CLOSE MOBILE MENU ON LINK CLICK =====
        const mobLinks = document.querySelectorAll('.mob-link:not(#mobileProductsBtn)');
        mobLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                if (!this.closest('.mobile-dropdown')) {
                    closeMobile();
                }
            });
        });

        // Also close when clicking dropdown items
        const dropdownItems = document.querySelectorAll('.mobile-dropdown-content a');
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                closeMobile();
            });
        });

const brochureModal = document.getElementById("brochureModal");
const closeBtn = document.querySelector(".close-btn");
const pdfViewer = document.getElementById("pdfViewer");

const pdfUrl =
"../assets/Brochure/Hygiene-Apparatus-Brochure.pdf";

let pdfLoaded = false;

document.querySelectorAll(".openBrochure").forEach(btn => {

    btn.addEventListener("click", async function(e){

        e.preventDefault();

        brochureModal.style.display="block";

        if(!pdfLoaded){

            pdfLoaded=true;

            loadPDF();
        }

    });

});

closeBtn.onclick=()=>{

    brochureModal.style.display="none";

}

window.onclick=(e)=>{

    if(e.target===brochureModal){

        brochureModal.style.display="none";

    }

}

async function loadPDF(){

    pdfViewer.innerHTML="";

    const loadingTask=pdfjsLib.getDocument(pdfUrl);

    const pdf=await loadingTask.promise;

    for(let pageNum=1;pageNum<=pdf.numPages;pageNum++){

        const page=await pdf.getPage(pageNum);

        const viewport=page.getViewport({scale:1.5});

        const canvas=document.createElement("canvas");

        const context=canvas.getContext("2d");

        canvas.width=viewport.width;

        canvas.height=viewport.height;

        await page.render({

            canvasContext:context,

            viewport:viewport

        }).promise;

        pdfViewer.appendChild(canvas);

    }

}
    </script>
     <script>

function showSnackbar(message, type){

    const snackbar = document.getElementById("snackbar");

    snackbar.innerHTML = message;
    snackbar.className = "show " + type;

    setTimeout(()=>{
        snackbar.className = snackbar.className.replace("show","");
    },3000);
}

<?php if(isset($_GET['status']) && $_GET['status']=="success"){ ?>

showSnackbar("✅ Message sent successfully.","success");

<?php } ?>

<?php if(isset($_GET['status']) && $_GET['status']=="error"){ ?>

showSnackbar("❌ Failed to send message.","error");

<?php } ?>

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

<script>
pdfjsLib.GlobalWorkerOptions.workerSrc =
'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const loader = document.getElementById("pageLoader");

    document.querySelectorAll("a[href]").forEach(link => {

        link.addEventListener("click", function(e){

            const href = this.getAttribute("href");

            // Ignore anchors, javascript links and new tabs
            if(
                href.startsWith("#") ||
                href.startsWith("javascript:") ||
                this.target === "_blank"
            ){
                return;
            }

            e.preventDefault();

            loader.classList.add("show");

            setTimeout(() => {
                window.location.href = href;
            }, 500);

        });

    });

});

window.addEventListener("pageshow", function (event) {

    const loader = document.getElementById("pageLoader");

    loader.classList.remove("show");

    if (event.persisted) {
        loader.classList.remove("show");
    }

     setTimeout(() => {
                window.location.href = href;
            }, 500);

});
</script>

</body>
</html>