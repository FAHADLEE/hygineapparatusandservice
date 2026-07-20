<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="icon" type="image/png" href="./pages/assets/IMG_3730,JPG-Picsart-BackgroundRemover.png" />
  <title>Hygiene Apparatus & Service</title>
  <link rel="stylesheet" href="Styles.css" />
  <link rel="stylesheet" href="./pages/Contact/contact.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.4.168/pdf.min.js"></script>
</head>
<body>

  <!-- ===== NAVBAR ===== -->

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
      <img src="./pages/assets/IMG_3730,JPG-Picsart-BackgroundRemover.png" alt="Logo" class="logo" />
    </div>
    <div class="nav-menu" id="navMenu">
      <a href="#home" class="nav-link active" data-idx="0">Home</a>
      <a href="./pages/Aboutus/aboutus.php" class="nav-link" data-idx="1"> About</a>
      <div class="nav-dropdown">
        <a href="#products" class="nav-link" data-idx="2">Products <i class="ti ti-chevron-down" style="font-size:12px; margin-left:4px;"></i></a>
        <div class="dropdown-content">
          <a href="./pages/Products/Vaccumecleaners.php">Vacuum Cleaners</a>
          <a href="./pages/Products/scrubbermachine.php">Scrubber Machine</a>
          <a href="./pages/Products/Highpressurewasher.php">High Pressure Washer</a>
          <a href="./pages/Products/sweepermachine.php">Sweeper Machine</a>
          <a href="./pages/Products/Scrubber.php">Scrubber</a>
          <a href="./pages/Products/spares.php">Spares</a>
          <a href="./pages/Products/Dustbin.php">Dustbin</a>
          <a href="./pages/Products/hygieneproducts.php">Hygiene Products</a>
          <a href="./pages/Products/MopsandBrushes.php">Mops & Brushes</a>
        </div>
      </div>
      <a href="./pages/Services/service.php" class="nav-link" data-idx="2">Service</a>
      <a href="./pages/Contact/contact.php" class="nav-link" data-idx="3">Contact</a>
       <a href="#" class="nav-btn openBrochure">Brochure</a>
    </div>
    <button class="menu-toggle" id="menuToggle">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>

  <div class="mobile-menu" id="mobileMenu">
    <a href="#home" class="mob-link" data-idx="0">Home</a>
    <a href="./pages/Aboutus/aboutus.php" class="mob-link">About</a>
    <div class="mobile-dropdown" id="mobileProductsDropdown">
      <div class="mob-link" id="mobileProductsBtn">
        <span>Products</span>
        <i class="ti ti-chevron-down"></i>
      </div>
      <div class="mobile-dropdown-content" id="mobileProductsMenu">
        <a href="./pages/Products/Vaccumecleaners.php">Vacuum Cleaners</a>
        <a href="./pages/Products/scrubbermachine.php">Scrubber Machine</a>
        <a href="./pages/Products/Highpressurewasher.php">High Pressure Washer</a>
        <a href="./pages/Products/sweepermachine.php">Sweeper Machine</a>
        <a href="./pages/Products/Scrubber.php">Scrubber</a>
        <a href="./pages/Products/spares.php">Spares</a>
        <a href="./pages/Products/Dustbin.php">Dustbin</a>
        <a href="./pages/Products/hygieneproducts.php">Hygiene Products</a>
        <a href="./pages/Products/MopsandBrushes.php">Mops & Brushes</a>
      </div>
    </div>
    <a href="./pages/Services/service.php" class="mob-link">Service</a>
    <a href="./pages/Contact/contact.php" class="mob-link">Contact</a>
 <a href="#" class="nav-btn openBrochure">Brochure</a>
  </div>

  <!-- ===== NAV DOTS ===== -->
  <div class="nav-dots" id="navDots">
    <div class="dot active" data-idx="0"></div>
    <div class="dot" data-idx="1"></div>
    <div class="dot" data-idx="2"></div>
    <div class="dot" data-idx="3"></div>
  </div>

  <!-- ===== SCROLL CONTAINER ===== -->
  <div class="scroll-container" id="scrollContainer">

    <!-- ===== HOME SECTION ===== -->
    <section class="section" id="home">
      <div class="home-bg"></div>
      <div class="home-content">
        <div class="home-visual">
          <!-- Floating Particles -->
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>

          <!-- Automation Hub -->
          <div class="automation-hub">
            <!-- Glowing Rings -->
            <div class="glow-ring"></div>
            <div class="glow-ring"></div>
            <div class="glow-ring"></div>

            <!-- Center Icon -->
            <div class="center-icon">
              <i class="ti ti-robot"></i>
            </div>

            <!-- Orbiting Elements -->
            <div class="orbit-element orbit-element-1">
             
              <span>Smart cleaning</span>
            </div>
           
            <div class="orbit-element orbit-element-3">
             
              <span>ecofriendly</span>
            </div>
            <div class="orbit-element orbit-element-4">
             
              <span>Automated</span>
            </div>
          </div>

        
        </div>
        <div class="home-text">
          <div class="hero-badge">
            <span class="badge-dot"></span>
            <span>Next-Gen Cleaning Solutions</span>
          </div>
          <h1 class="hero-title">
            <span class="highlight">Where Hygiene</span>
            <span>Meets Innovation</span>
          </h1>
          <p class="hero-desc">Advanced cleaning technology for modern spaces — from industrial to domestic, we deliver excellence.</p>
          <div class="hero-buttons">
            <a href="#products" class="btn-primary">
              Explore Products
              <i class="ti ti-arrow-right"></i>
            </a>
            <a href="#about" class="btn-secondary">
              <i class="ti ti-info-circle"></i>
              Learn More
            </a>
          </div>
        </div>
       
      </div>
    </section>

    <!-- ===== ABOUT SECTION ===== -->
    <section class="section" id="about">
      <div class="section-wrapper">
        <div class="about-grid">
          <div class="about-image">
            <div class="about-image-wrapper">
              <img src="./pages/assets/IMG_3730,JPG-Picsart-BackgroundRemover.png" alt="About" />
            </div>
          </div>
          <div class="about-text">
            <span class="section-tag">About Us</span>
            <h2>Redefining <span class="gradient-text">Clean</span></h2>
            <p>Hygiene Apparatus & Service is a premier Indian firm headquartered in Coimbatore, Tamil Nadu, revolutionizing the cleaning technology industry.</p>
            <p>We provide professional, industrial, and domestic cleaning machines, chemicals, tools, and trolleys with 24/7 sales and service support. Our reputation is built on superior quality and unwavering commitment.</p>
            <div class="about-stats">
              <div class="stat-item">
                <div class="number">10+</div>
                <div class="label">Years Experience</div>
              </div>
              <div class="stat-item">
                <div class="number">500+</div>
                <div class="label">Happy Clients</div>
              </div>
              <div class="stat-item">
                <div class="number">24/7</div>
                <div class="label">Support</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== PRODUCTS SECTION ===== -->
    <section class="section" id="products">
      <div class="section-wrapper">
        <div class="products-header">
          <span class="section-tag">Our Products</span>
          <h2>Premium <span class="gradient-text">Cleaning Range</span></h2>
        </div>
        <div class="products-grid" id="productsGrid">
          <!-- Rendered by JavaScript -->
        </div>
      </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
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
          

            <form id="contactForm" action="./pages/Contact/send_mail.php" method="POST">
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

      <!-- Map Section -->
      <div class="map-section">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.234567890123!2d80.12345678901234!3d13.012345678901234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDAwJzQ0LjQiTiA4MMKwMDcnMjYuNSJF!5e0!3m2!1sen!2sin!4v1234567890123" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

    </div>
    </section>
  <!-- <div id="brochureModal" class="brochure-modal">
    <div class="brochure-content">
        <div class="brochure-header">
            <h3>
                <i class="ti ti-file-pdf"></i> Company Brochure
            </h3>
            <div>
                <a href="./pages/assets/Brochure/Hygiene-Apparatus-Brochure.pdf"
                   download
                   class="download-btn">
                    <i class="ti ti-download"></i> Download
                </a>
                <span class="close-btn">&times;</span>
            </div>
        </div>
        <div class="pdf-wrapper">
            <iframe 
                src="./pages/assets/Brochure/Hygiene-Apparatus-Brochure.pdf#toolbar=0&navpanes=0&scrollbar=0"
                class="pdf-iframe"
                frameborder="0">
            </iframe>
        </div>
    </div>
</div> -->

<div id="brochureModal" class="brochure-modal">
    <div class="brochure-content">

        <div class="brochure-header">
            <h3>
                <i class="ti ti-file-pdf"></i>
                Company Brochure
            </h3>

            <div>
                <a
                    href="./pages/assets/Brochure/Hygiene-Apparatus-Brochure.pdf"
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

 

  </div>

  <script>
    // ===== PRODUCTS DATA =====
  const products = [
  {
    name: "VACUUM CLEANERS",
    image: "./pages/assets/Products/Vacuum Cleaners.png",
    link: "./pages/Products/Vaccumecleaners.php"
  },
  {
    name: "SCRUBBER MACHINE",
    image: "./pages/assets/Products/Scrubber Machine.png",
    link: "./pages/Products/scrubbermachine.php"
  },
  {
    name: "HIGH PRESSURE WASHER",
    image: "./pages/assets/Products/High Pressure Washer.png",
    link: "./pages/Products/Highpressurewasher.php"
  },
  {
    name: "SWEEPER MACHINE",
    image: "./pages/assets/Products/Sweeper Machine.png",
    link: "./pages/Products/sweepermachine.php"
  },
  {
    name: "SCRUBBER",
    image: "./pages/assets/Products/scrubber.png",
    link: "./pages/Products/Scrubber.php"
  },
  {
    name: "SPARES",
    image: "./pages/assets/Products/Spares.png",
    link: "./pages/Products/spares.php"
  },
  {
    name: "DUST BIN",
    image: "./pages/assets/Products/Dustbin.png",
    link: "./pages/Products/Dustbin.php"
  },
  {
    name: "HYGIENE PRODUCTS",
    image: "./pages/assets/Products/Hygiene Products.png",
    link: "./pages/Products/hygieneproducts.php"
  },
  {
    name: "MOPS AND BRUSHES",
    image: "./pages/assets/Products/Mops and Brushes.png",
    link: "./pages/Products/MopsandBrushes.php"
  }
];

const grid = document.getElementById('productsGrid');

products.forEach(p => {

    const card = document.createElement('div');
    card.className = 'product-item';

    card.innerHTML = `
        <div class="icon-circle">
            <img src="${p.image}" alt="${p.name}">
        </div>
        <h3>${p.name}</h3>
    `;

    card.style.cursor = "pointer";

    card.addEventListener("click", function () {

        document.getElementById("pageLoader").classList.add("show");

        setTimeout(() => {
            window.location.href = p.link;
        }, 500);

    });

    grid.appendChild(card);

});

    // ===== SCROLL ENGINE =====
    const container = document.getElementById('scrollContainer');
    const sections = container.querySelectorAll('.section');
    const dots = document.querySelectorAll('.dot');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobLinks = document.querySelectorAll('.mob-link');
    let currentIdx = 0;
    let autoTimer = null;
    let isPaused = false;

    function goTo(idx) {
      if (idx < 0 || idx >= sections.length) return;
      currentIdx = idx;
      container.scrollTo({ top: idx * window.innerHeight, behavior: 'smooth' });
      updateActive(idx);
    }

    function updateActive(idx) {
      dots.forEach((d, i) => d.classList.toggle('active', i === idx));
      navLinks.forEach((l, i) => {
        if (i < 4) {
          l.classList.toggle('active', i === idx);
        }
      });
    }

    function startAuto() {
      clearInterval(autoTimer);
      autoTimer = setInterval(() => {
        if (!isPaused) {
          goTo((currentIdx + 1) % sections.length);
        }
      }, 4000);
    }

    // Dot clicks
    dots.forEach(d => {
      d.addEventListener('click', () => {
        clearInterval(autoTimer);
        goTo(+d.dataset.idx);
        startAuto();
      });
    });

    // Nav links
    document.querySelectorAll('.nav-link[href^="#"]').forEach(l => {
      l.addEventListener('click', (e) => {
        e.preventDefault();
        clearInterval(autoTimer);
        const idx = +l.dataset.idx;
        if (!isNaN(idx)) {
          goTo(idx);
          startAuto();
        }
        closeMobile();
      });
    });

    // Mobile links
    mobLinks.forEach(l => {
      l.addEventListener('click', (e) => {
        const href = l.getAttribute('href');
        if (href && href.startsWith('#')) {
          e.preventDefault();
          clearInterval(autoTimer);
          const idx = +l.dataset.idx;
          if (!isNaN(idx)) {
            goTo(idx);
            startAuto();
          }
          closeMobile();
        }
      });
    });

    // Sync on scroll
    container.addEventListener('scroll', () => {
      const idx = Math.round(container.scrollTop / window.innerHeight);
      if (idx !== currentIdx) {
        currentIdx = idx;
        updateActive(idx);
      }
    });

    // Pause on interaction
    document.addEventListener('mouseenter', () => { isPaused = true; });
    document.addEventListener('mouseleave', () => { isPaused = false; });
    ['wheel', 'touchstart'].forEach(ev => {
      window.addEventListener(ev, () => {
        clearInterval(autoTimer);
        isPaused = false;
      }, { passive: true });
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

    // ===== START =====
    goTo(0);
    startAuto();

    // ===== DROPDOWN TOGGLE =====
    const dropdown = document.querySelector('.nav-dropdown');
    if (dropdown) {
      dropdown.addEventListener('click', function(e) {
        const link = this.querySelector('.nav-link');
        if (link && e.target.closest('.nav-link')) {
          this.classList.toggle('open');
          e.preventDefault();
        }
      });
      document.addEventListener('click', function(e) {
        if (!dropdown.contains(e.target)) {
          dropdown.classList.remove('open');
        }
      });
    }

    // Mobile products dropdown toggle
    const mobileProductsBtn = document.getElementById("mobileProductsBtn");
    const mobileProductsDropdown = document.getElementById("mobileProductsDropdown");

    mobileProductsBtn.addEventListener("click", function(e) {
      e.stopPropagation();
      mobileProductsDropdown.classList.toggle("active");
    });

    document.addEventListener('click', function(e) {
      if (!mobileProductsDropdown.contains(e.target)) {
        mobileProductsDropdown.classList.remove('active');
      }
    });


//         const brochureModal = document.getElementById("brochureModal");
// const closeBtn = document.querySelector(".close-btn");

// document.querySelectorAll(".openBrochure").forEach(btn => {
//     btn.addEventListener("click", function (e) {
//         e.preventDefault();
//         brochureModal.style.display = "block";
//     });
// });

// closeBtn.addEventListener("click", function () {
//     brochureModal.style.display = "none";
// });

// window.addEventListener("click", function (e) {
//     if (e.target === brochureModal) {
//         brochureModal.style.display = "none";
//     }
// });

const brochureModal = document.getElementById("brochureModal");
const closeBtn = document.querySelector(".close-btn");
const pdfViewer = document.getElementById("pdfViewer");

const pdfUrl =
"./pages/assets/Brochure/Hygiene-Apparatus-Brochure.pdf";

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

});
</script>

</body>
</html>