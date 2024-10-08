<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Starter Page - TakeYourCare Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TakeYourCare
  * Template URL: https://bootstrapmade.com/TakeYourCare-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">TakeYourCare</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#departments">Departments</a></li>
            <li><a href="#doctors">Doctors</a></li>
            
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Starter Page</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    
    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

          
  

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr Rajesh Patil</h4>
                <span>Chief Medical Officer</span>
                <div class="det" >
                    <b>Qualification:</b>   MBBS,MBSC <br>
                    <b>Specification:</b>   asd asd asd
                </div>
                <div>
                  <button type="submit">Consulation Fees Rs 500</button>
                  <button type="submit">Choose another Doctor</button>
                 </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
                
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Doctors Section -->

     


               <!-- Starter Section Section -->
    <section id="doctors" class="doctors section">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
    
              <div class="member-info">
                <h4>November 04,2024</h4>
               <br>
             <h4>09:00 AM -01:00 PM</h4>

               <input class="styled" type="button" onclick="openModal()" value="09:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="09:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="09:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="10:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="10:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="10:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="11:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="11:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="11:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="12:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="12:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="12:40 AM"/>
              
              </div>
            </div>
          </div>
          <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h4>Confirmation ?</h4>
    <form id="form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email.." required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Your phone number.." required>

        <div class="modal-buttons">
            <button type="submit" class="ok-btn">OK</button>
            <button type="button" class="cancel-btn" onclick="closeModal()">Cancel</button>
        </div>
    </form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Function to open the modal
function openModal() {
  modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  closeModal();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    closeModal();
  }
}

// Handle form submission
document.getElementById("form").onsubmit = function(event) {
  event.preventDefault();
  alert("Form submitted!");
  closeModal();
}
</script>

          
          
          
          <!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="member-info">
                <h4>November 04,2024</h4>
               <br>
             <h4>09:00 AM -01:00 PM</h4>

               <input class="styled" type="button" onclick="openModal()" value="09:00 AM"/>
               <input class="styled" type="button" onclick="openModal()"  value="09:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="09:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="10:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="10:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="10:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="11:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="11:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="11:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="12:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="12:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="12:40 AM"/>
             
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="member-info">
                <h4>November 04,2024</h4>
               <br>
             <h4>09:00 AM -01:00 PM</h4>

               <input class="styled" type="button" onclick="openModal()" value="09:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="09:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="09:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="10:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="10:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="10:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="11:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="11:20 AM"/>
               <input class="styled" type="button" onclick="openModal()"  value="11:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="12:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="12:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="12:40 AM"/>
             
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="member-info">
                <h4>November 04,2024</h4>
               <br>
             <h4>09:00 AM -01:00 PM</h4>

               <input class="styled" type="button" onclick="openModal()" value="09:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="09:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="09:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="10:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="10:20 AM"/>
               <input class="styled" type="button" onclick="openModal()"  value="10:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="11:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="11:20 AM"/>
               <input class="styled" type="button" onclick="openModal()"  value="11:40 AM"/>
               <br><br>
               <input class="styled" type="button" onclick="openModal()" value="12:00 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="12:20 AM"/>
               <input class="styled" type="button" onclick="openModal()" value="12:40 AM"/>
             
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Doctors Section -->







































  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">TakeYourCare</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            
             
          </div>
       
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">TakeYourCare</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href=" ">SSBT's Students</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>