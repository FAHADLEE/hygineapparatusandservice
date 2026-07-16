<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" href="../assets/IMG_3730,JPG-Picsart-BackgroundRemover.png" />
    <title>About Us - Hygiene Apparatus</title>
    
    <link rel="stylesheet" href="../../Styles.css">
    <link rel="stylesheet" href="../Contact/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    
    <style>
       

         body {
            overflow: visible !important;
            height: auto !important;
             scrollbar-width: none;

   
    -ms-overflow-style: none;
        }
               .about-page {
            padding-top: 100px;
            overflow: visible;
            min-height: 100vh;
            
        }


        .about-hero {
           
            margin: auto;
            padding: 40px 80px 60px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            position: relative;
        }

       

        .hero-content {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .hero-content h1 {
            font-size: 48px;
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -1.5px;
        }

        .hero-content p {
            color: var(--text-secondary);
            line-height: 1.8;
            font-size: 17px;
            max-width: 520px;
        }

        .hero-image {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image-wrapper {
            position: relative;
            width: 100%;
            max-width: 500px;
        }

        .hero-image-wrapper::before {
            content: '';
            position: absolute;
            inset: -20px;
            border-radius: 30px;
            background: var(--gradient);
            opacity: 0.05;
            z-index: -1;
            animation: floatGlow 6s ease-in-out infinite;
        }

        @keyframes floatGlow {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-10px) scale(1.02); }
        }

        .hero-image-wrapper img {
            width: 100%;
            border-radius: 30px;
            object-fit: cover;
            box-shadow: var(--shadow);
            transition: all 0.5s ease;
        }

        .hero-image-wrapper:hover img {
            transform: scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 20px;
        }

        .stat {
            background: var(--secondary);
            border: 1px solid var(--glass-border);
            padding: 20px;
            border-radius: 16px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            cursor: default;
        }

        .stat:hover {
            transform: translateY(-5px);
            border-color: rgba(0, 212, 255, 0.15);
            box-shadow: var(--shadow-hover);
        }

        .stat h2 {
            font-size: 32px;
            font-weight: 800;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.2;
        }

        .stat span {
            color: var(--text-secondary);
            font-size: 13px;
            font-weight: 500;
        }

        /* ===== ABOUT SECTION ===== */
        .about-section {
            max-width: 1400px;
            margin: 60px auto;
            padding: 0 80px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-image {
            position: relative;
            display: flex;
            justify-content: center;
        }

        .about-image-wrapper {
            position: relative;
            width: 100%;
            max-width: 500px;
        }

        .about-image-wrapper::before {
            content: '';
            position: absolute;
            inset: -15px;
            border-radius: 30px;
            background: var(--gradient);
            opacity: 0.05;
            z-index: -1;
            animation: floatGlow 6s ease-in-out infinite 1s;
        }

        .about-image-wrapper img {
            width: 100%;
            border-radius: 30px;
            object-fit: cover;
            box-shadow: var(--shadow);
            transition: all 0.5s ease;
        }

        .about-image-wrapper:hover img {
            transform: scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .about-image-badge {
            position: absolute;
            bottom: -15px;
            right: -15px;
            background: var(--primary);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: var(--shadow);
            animation: float 4s ease-in-out infinite 2s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }

        .about-image-badge i {
            font-size: 28px;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .about-image-badge div {
            display: flex;
            flex-direction: column;
        }

        .about-image-badge .badge-number {
            font-size: 20px;
            font-weight: 800;
            color: var(--text);
        }

        .about-image-badge .badge-label {
            font-size: 12px;
            color: var(--text-secondary);
            font-weight: 500;
        }

        .about-content {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .about-content h2 {
            font-size: 42px;
            font-weight: 700;
            line-height: 1.1;
        }

        .about-content p {
            color: var(--text-secondary);
            line-height: 1.8;
            font-size: 15px;
        }

        .about-content .about-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 8px;
        }

        .about-content .feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            background: var(--secondary);
            border-radius: 10px;
            border: 1px solid var(--glass-border);
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .about-content .feature-item:hover {
            border-color: rgba(0, 212, 255, 0.15);
            transform: translateX(4px);
        }

        .about-content .feature-item i {
            color: var(--accent);
            font-size: 18px;
        }

        /* ===== PRODUCTS SECTION ===== */
        .products-section {
            max-width: 1400px;
            margin: auto;
            padding: 40px 80px 80px;
            position: relative;
        }

        .products-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at 50% 30%, rgba(0, 212, 255, 0.03), transparent 60%);
            pointer-events: none;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header .section-tag {
            margin-bottom: 12px;
        }

        .section-title {
            font-size: 42px;
            font-weight: 700;
            line-height: 1.1;
        }

        .section-subtitle {
            color: var(--text-secondary);
            font-size: 16px;
            margin-top: 8px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .product-card {
            background: var(--primary);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 30px 20px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            text-decoration:none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        }

        .product-card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 20px;
            background: var(--gradient);
            opacity: 0;
            transition: opacity 0.4s ease;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
            padding: 2px;
        }

        .product-card:hover::before {
            opacity: 1;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: transparent;
        }

        .product-card .icon-wrapper {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            background: rgba(0, 212, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            transition: all 0.4s ease;
        }

        .product-card:hover .icon-wrapper {
            background: rgba(0, 212, 255, 0.1);
            transform: scale(1.05) rotate(-4deg);
        }

        .product-card i {
            font-size: 30px;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .product-card h3 {
            font-size: 15px;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 4px;
        }

        .product-card .product-count {
            font-size: 12px;
            color: var(--text-light);
            font-weight: 400;
        }

        .product-card .arrow-hint {
            display: inline-block;
            margin-top: 12px;
            font-size: 14px;
            color: var(--text-light);
            transition: all 0.3s ease;
        }

        .product-card:hover .arrow-hint {
            color: var(--accent);
            transform: translateX(4px);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .about-hero,
            .about-section {
                grid-template-columns: 1fr;
                padding: 40px 40px;
                gap: 40px;
            }
            .about-hero { padding-top: 20px; }
            .hero-content h1 { font-size: 40px; }
            .about-content h2, .section-title { font-size: 36px; }
            .product-grid { grid-template-columns: repeat(2, 1fr); }
            .hero-stats { grid-template-columns: repeat(3, 1fr); }
            .products-section { padding: 40px 40px 60px; }
        }

        @media (max-width: 768px) {
             .about-page{
        padding-top:70px;   /* Same as service page */
    }

    .about-hero{
        margin-top:0;
        padding:20px 24px 40px;
    }
            .hero-content h1 { font-size: 32px; }
            .hero-content p { font-size: 15px; }
            .hero-stats { grid-template-columns: 1fr 1fr 1fr; gap: 12px; }
            .stat { padding: 16px 12px; }
            .stat h2 { font-size: 24px; }
            .about-section { padding: 0 24px; gap: 30px; }
            .about-content h2 { font-size: 30px; }
            .about-content .about-features { grid-template-columns: 1fr; }
            .about-image-badge { bottom: -10px; right: -10px; padding: 12px 16px; }
            .about-image-badge i { font-size: 20px; }
            .about-image-badge .badge-number { font-size: 16px; }
            .products-section { padding: 20px 24px 40px; }
            .section-title { font-size: 30px; }
            .product-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
            .product-card { padding: 20px 14px; }
            .product-card .icon-wrapper { width: 50px; height: 50px; }
            .product-card i { font-size: 24px; }
            .product-card h3 { font-size: 13px; }
        }

        @media (max-width: 480px) {
             .about-page{
        padding-top: 70px;
        /* width: 90%; */
    }

    .about-hero{
        margin-top:0;
        padding:20px 24px 40px;
    }
            .hero-stats { grid-template-columns: 1fr; }
            .product-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
            .hero-content h1 { font-size: 28px; }
            .about-content h2, .section-title { font-size: 26px; }
            .product-card { padding: 16px 12px; }
        }

        @media (prefers-reduced-motion: reduce) {
            * { animation-duration: 0.01ms !important; }
            .hero-image-wrapper::before,
            .about-image-wrapper::before,
            .about-image-badge { animation: none; }
            .hero-image-wrapper:hover img,
            .about-image-wrapper:hover img { transform: none; }
        }

        ::selection {
            background: rgba(0, 212, 255, 0.2);
            color: var(--text);
        }

        ::-webkit-scrollbar {
            /* width: 8px; */
            display:none !important;
        }
        ::-webkit-scrollbar-track {
            background: var(--secondary);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--gradient);
            border-radius: 4px;
        }
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
      <a href="./aboutus.php" class="nav-link active" data-idx="1">About</a>
      <div class="nav-dropdown">
        <a href="javascript:void(0)" class="nav-link" data-idx="2">Products <i class="ti ti-chevron-down" style="font-size:12px; margin-left:4px;"></i></a>
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
      <a href="../Services/service.php" class="nav-link" data-idx="2">Service</a>
      <a href="../Contact/contact.php" class="nav-link" data-idx="3">Contact</a>
       <a href="#" class="nav-btn openBrochure" >Brochure</a>
    </div>
    <button class="menu-toggle" id="menuToggle">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>

<div class="mobile-menu" id="mobileMenu">

    <a href="../../index.php" class="mob-link" data-idx="0">Home</a>

    <a href="./aboutus.php" class="mob-link">About</a>

    <!-- Products -->
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

 <a href="../Services/service.php" class="mob-link">
        Service
    </a>

    <a href="../Contact/contact.php" class="mob-link">
        Contact
    </a>

     <a href="#" class="nav-btn openBrochure" >Brochure</a>

   

</div>

<div class="about-page">

 


    <section class="about-hero">
        <div class="hero-content">
            <span class="section-tag">About Us</span>
            <h1>
                Leading The Future Of
                <span class="gradient-text">Cleaning Technology</span>
            </h1>
            <p>
                Hygiene Apparatus and service is a leading supplier of professional,
                industrial and domestic cleaning solutions with 24×7 sales and
                service support across Tamil Nadu.
            </p>
            <div class="hero-stats">
                <div class="stat">
                    <h2>24/7</h2>
                    <span>Support</span>
                </div>
                <div class="stat">
                    <h2>100+</h2>
                    <span>Products</span>
                </div>
                <div class="stat">
                    <h2>10+</h2>
                    <span>Years Experience</span>
                </div>
            </div>
        </div>

        <div class="hero-image">
            <div class="hero-image-wrapper">
                <img src="../assets/IMG_3730,JPG-Picsart-BackgroundRemover.png" alt="Hygiene Apparatus Logo">
            </div>
        </div>
    </section>

    <!-- ===== COMPANY SECTION ===== -->
    <section class="about-section">
        <div class="about-image">
            <div class="about-image-wrapper">
                <img src="../assets/AboutUs/aboutus1.png" alt="About Us">
                <div class="about-image-badge">
                    <i class="ti ti-building"></i>
                    <div>
                        <span class="badge-number">2015</span>
                        <span class="badge-label">Established</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-content">
            <span class="section-tag">Who We Are</span>
            <h2>Redefining <span class="gradient-text">Clean</span></h2>
            <p>
                Hygiene Apparatus and Service is headquartered in Coimbatore,
                Tamil Nadu and specializes in advanced cleaning technology.
            </p>
            <p>
                We supply industrial cleaning machines, housekeeping tools,
                hygiene products and provide professional maintenance services.
            </p>
            <p>
                Our dedicated engineers serve clients across Coimbatore,
                Tirupur, Nilgiris, Erode, Karur and Salem.
            </p>
            <div class="about-features">
                <div class="feature-item">
                    <i class="ti ti-certificate"></i>
                    <span>ISO Certified</span>
                </div>
                <div class="feature-item">
                    <i class="ti ti-truck-delivery"></i>
                    <span>Pan India Supply</span>
                </div>
                <div class="feature-item">
                    <i class="ti ti-headset"></i>
                    <span>24/7 Support</span>
                </div>
                <div class="feature-item">
                    <i class="ti ti-shield-check"></i>
                    <span>Quality Assured</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PRODUCTS GRID ===== -->
    <section class="products-section">
        <div class="section-header">
            <span class="section-tag">Our Range</span>
            <h2 class="section-title">Product <span class="gradient-text">Categories</span></h2>
            <p class="section-subtitle">Comprehensive cleaning solutions for every need</p>
        </div>
<div class="product-grid">

    <a href="../Products/Vaccumecleaners.php" class="product-card">
        <div class="icon-wrapper">
            <i class="ti ti-wind"></i>
        </div>
        <h3>Vacuum Cleaners</h3>
        <span class="product-count">4 Products</span>
        <span class="arrow-hint">→</span>
    </a>

    <a href="../Products/scrubbermachine.php" class="product-card">
        <div class="icon-wrapper">
            <i class="ti ti-building-factory"></i>
        </div>
        <h3>Scrubber Machines</h3>
        <span class="product-count">5 Products</span>
        <span class="arrow-hint">→</span>
    </a>

    <a href="../Products/Scrubber.php" class="product-card">
        <div class="icon-wrapper">
            <i class="ti ti-settings"></i>
        </div>
        <h3>Scrubber</h3>
        <span class="product-count">3 Products</span>
        <span class="arrow-hint">→</span>
    </a>

    <a href="../Products/Highpressurewasher.php" class="product-card">
        <div class="icon-wrapper">
            <i class="ti ti-droplet"></i>
        </div>
        <h3>High Pressure Washers</h3>
        <span class="product-count">4 Products</span>
        <span class="arrow-hint">→</span>
    </a>

    <a href="../Products/sweepermachine.php" class="product-card">
        <div class="icon-wrapper">
            <i class="ti ti-truck"></i>
        </div>
        <h3>Sweeper Machines</h3>
        <span class="product-count">3 Products</span>
        <span class="arrow-hint">→</span>
    </a>

    <a href="../Products/MopsandBrushes.php" class="product-card">
        <div class="icon-wrapper">
            <i class="ti ti-brush"></i>
        </div>
        <h3>Mops & Brushes</h3>
        <span class="product-count">46 Products</span>
        <span class="arrow-hint">→</span>
    </a>

    <a href="../Products/hygieneproducts.php" class="product-card">
        <div class="icon-wrapper">
            <i class="ti ti-spray"></i>
        </div>
        <h3>Hygiene Products</h3>
        <span class="product-count">48 Products</span>
        <span class="arrow-hint">→</span>
    </a>

    <a href="../Products/Dustbin.php" class="product-card">
        <div class="icon-wrapper">
            <i class="ti ti-trash"></i>
        </div>
        <h3>Dustbins</h3>
        <span class="product-count">13 Products</span>
        <span class="arrow-hint">→</span>
    </a>

    <a href="../Products/spares.php" class="product-card">
        <div class="icon-wrapper">
            <i class="ti ti-settings"></i>
        </div>
        <h3>Machine Spares</h3>
        <span class="product-count">11 Products</span>
        <span class="arrow-hint">→</span>
    </a>

</div>
    </section>

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

</div>
<div id="snackbar"></div>


<script>
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