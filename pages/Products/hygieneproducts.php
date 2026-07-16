<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hygiene products - Hygiene Apparatus & Service</title>
    <link rel="stylesheet" href="../Products/products.css" />
     <link rel="stylesheet" href="../../Styles.css" />
     <link rel="stylesheet" href="../Contact/contact.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
   
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
        <a href="#products" class="nav-link active" data-idx="2">Products <i class="ti ti-chevron-down" style="font-size:12px; margin-left:4px;"></i></a>
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
      <a href="../../pages/Services/service.php" class="nav-link" data-idx="2">Service</a>
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

   <a href="#" class="nav-btn openBrochure">Brochure</a>

   

</div>
    <div class="product-page">

        <!-- Hero Section -->
        <section class="product-hero">
            <h1><span>Hygiene Products</span></h1>
            <p>Powerful, efficient, and reliable cleaning solutions for every space — from industrial to domestic.</p>
        </section>

        <!-- Product Grid -->
        <div class="product-grid-container">
            <div class="product-grid-title">
                <i class="ti ti-vacuum-cleaner" style="color: #00d4ff;"></i>
                Our products
            </div>

            <div class="product-grid" id="vacuumProductsGrid">
                <!-- Products will be rendered by JavaScript -->
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
    </div>

    <!-- Load Navbar.js -->
    <script src="../pages/Navbar/Navbar.js"></script>

    <script>
        // ===== VACUUM CLEANER PRODUCTS DATA =====
        const vacuumProducts = [
            { 
                name: "MINI Quadrate Dispenser H-205", 
                image: "../assets/hygiene products/H-205.jpg",
                
            },
            { 
                name: "MINI Quadrate Dispenser H-206", 
                image: "../assets/hygiene products/H-206.jpg",
                
            },
            { 
                name: "SS Circular Dispenser H-207", 
                image: "../assets/hygiene products/H-207.jpg",
               
            },
            { 
                name: "Circular Dispenser H-208", 
                image: "../assets/hygiene products/H-208.jpg",
                
            },
             { 
                name: "Circular Dispenser H-209", 
                image: "../assets/hygiene products/H-209.jpg",
                
            },
             { 
                name: "Mini Circular Dispenser H-210", 
                image: "../assets/hygiene products/H-210.jpg",
                
            },
             { 
                name: "Tissue Paper Holder (SS) H-211", 
                image: "../assets/hygiene products/H-211.jpg",
                
            },
             { 
                name: "HRT Autocut Dispencer H-212", 
                image: "../assets/hygiene products/H-212.jpg",
                
            },
             { 
                name: "Centre Pull Dispenser H-213", 
                image: "../assets/hygiene products/H-213.jpg",
                
            },
             { 
                name: "Cube Dispenser H-214", 
                image: "../assets/hygiene products/H-214.jpg",
                
            },
             { 
                name: "FLAT Dispenser (S) H-215", 
                image: "../assets/hygiene products/H-215.jpg",
                
            },
             { 
                name: "Flat Dispenser (M) H-216", 
                image: "../assets/hygiene products/H-216.jpg",
                
            },
             { 
                name: "Kitchen Roll Dispenser H-217", 
                image: "../assets/hygiene products/H-217.jpg",
                
            },
              { 
                name: "Pop Up Dispenser H-218", 
                image: "../assets/hygiene products/H-218.jpg",
                
            },
              { 
                name: "Soap Dispenser (600ML) H-321", 
                image: "../assets/hygiene products/H-321.jpg",
                
            },
              { 
                name: "Soap Dispenser (800ML) H-322", 
                image: "../assets/hygiene products/H-322.jpg",
                
            },
              { 
                name: "Soap Dispenser ABS (BLUE) H-323", 
                image: "../assets/hygiene products/H-323.jpg",
                
            },
              { 
                name: "Soap Dispenser (500ML) H-324", 
                image: "../assets/hygiene products/H-324.jpg",
                
            },
              { 
                name: "Soap Dispenser H-325", 
                image: "../assets/hygiene products/H-325.jpg",
                
            },
              { 
                name: "Soap Dispenser Automatic H-326", 
                image: "../assets/hygiene products/H-326.jpg",
                
            },
              { 
                name: "Soap Dispenser Automatic H-327", 
                image: "../assets/hygiene products/H-327.jpg",
                
            },
              { 
                name: "Wall Dispenser Soap Automatic H-328", 
                image: "../assets/hygiene products/H-328.jpg",
                
            },
              { 
                name: "Soap Dispenser H-329", 
                image: "../assets/hygiene products/H-329.jpg",
                
            },
              { 
                name: "Transparent Soap Dispenser H-330", 
                image: "../assets/hygiene products/H-330.jpg",
                
            },
            
              { 
                name: "Transparent Soap Dispenser H-331", 
                image: "../assets/hygiene products/H-331.jpg",
                
            },
              { 
                name: "Transparent Soap Dispenser (Blue) H-332", 
                image: "../assets/hygiene products/H-332.jpg",
                
            },
              { 
                name: "SS Soap Dispenser 500ML H-333", 
                image: "../assets/hygiene products/H-333.jpg",
                
            },
              { 
                name: "SS Soap Dispenser 800ML H-334", 
                image: "../assets/hygiene products/H-334.jpg",
                
            },
              { 
                name: "SS Soap Dispenser 1000ML H-335", 
                image: "../assets/hygiene products/H-335.jpg",
                
            },
              { 
                name: "SS Soap Dispenser 1000ML H-336", 
                image: "../assets/hygiene products/H-336.jpg",
                
            },
              { 
                name: "Soap Dispenser (1000ML) Automatic H-337", 
                image: "../assets/hygiene products/H-337.jpg",
                
            },
              { 
                name: "Twin Soap Dispenser H-338", 
                image: "../assets/hygiene products/H-338.jpg",
                
            },
              { 
                name: "Sanitiser (1000ML) H-339", 
                image: "../assets/hygiene products/H-339.jpg",
                
            },
              { 
                name: "Sanitiser (Wall Mounting) H-340", 
                image: "../assets/hygiene products/H-340.jpg",
                
            },
              { 
                name: "Automatic Room Freshener (LED) H-401", 
                image: "../assets/hygiene products/H-401.jpg",
                
            },
              { 
                name: "Automatic Room Freshener (LCD) H-402", 
                image: "../assets/hygiene products/H-402.jpg",
                
            },
              { 
                name: "Automatic Room Freshener (LED) Big H-403", 
                image: "../assets/hygiene products/H-403.jpg",
                
            },
              { 
                name: "Automatic Room Freshener (LCD) Big H-404", 
                image: "../assets/hygiene products/H-404.jpg",
                
            },
             { 
                name: "Air Revitalisor HYGIENE PRODUCTS Air Revitalisor (M) H-407", 
                image: "../assets/hygiene products/H-408.jpg",
                
            },
             { 
                name: "Automatic Room Freshener (LCD) Big H-404", 
                image: "../assets/hygiene products/h-407.jpg",
                
            },
             { 
                name: "Air Revitalisor (B) H-408", 
                image: "../assets/hygiene products/H-409.jpg",
                
            },
             { 
                name: "8″ Magnifiying Mirror H-409", 
                image: "../assets/hygiene products/H-501.jpg",
                
            },
             { 
                name: "Urinal Screen H-501", 
                image: "../assets/hygiene products/H-515.jpg",
                
            },
              { 
                name: "Automatic Room Freshener (LCD) Big H-404", 
                image: "../assets/hygiene products/h-519.jpg",
                
            },
             { 
                name: "V Screen H-515", 
                image: "../assets/hygiene products/H-523.jpg",
                
            },
             { 
                name: "Automatic Room Freshener (LCD) Big H-404", 
                image: "../assets/hygiene products/H-524.jpg",
                
            },
             { 
                name: "Automatic Room Freshener (LCD) Big H-404", 
                image: "../assets/hygiene products/H-526.jpg",
                
            },
             { 
                name: "Automatic Room Freshener (LCD) Big H-404", 
                image: "../assets/hygiene products/H-528.jpg",
                
            },
            
           
            
            
        ];

        // ===== RENDER PRODUCTS =====
        const grid = document.getElementById('vacuumProductsGrid');
        
        if (grid) {
            vacuumProducts.forEach(product => {
                const card = document.createElement('div');
                card.className = 'product-card';
                card.innerHTML = `
                    <img src="${product.image}" alt="${product.name}" class="product-card-image" />
                    <div class="product-card-info">
                        <h3>${product.name}</h3>
                        
                       
                    </div>
                `;
                grid.appendChild(card);
            });
        } else {
            console.error('Product grid element not found');
        }

      
    </script>

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