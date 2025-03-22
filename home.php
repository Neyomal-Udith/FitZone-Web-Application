<?php
session_start();
include("connect.php");

// Check if the customer is logged in
$loggedIn = false; 
if (isset($_SESSION['CustomerEmail'])) {
    $loggedIn = true; // If session exists, user is logged in
    $customerEmail = $_SESSION['CustomerEmail']; 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitZone</title>

   
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

   
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style1.css" />

  </head>
  <body>
  <script>
        window.addEventListener("scroll", function() {              
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})
    </script>
    <header id="top">
      <a href="home.php"><img src="img/FZ_logo01.png" alt="" class="logo" /></a>
      <nav>
      <ul class="nav_links">
          <li><a href="home.php">Home</a></li>
          <li><a href="aboutUs.php">About Us</a></li>
          <li><a href="eyeExams.php">Blog</a></li>
          <li>
            <a href="menuUI.php">Membership</a>
          </li>
          <li><a href="services.php">Services</a></li>
        </ul>
      </nav>
      <p>
        <a href="contact.php" class="cta"><button>Contact</button></a>

        <?php if ($loggedIn): ?>
            
            <a href="profile.php" class="logout-icon"><i class='bx bx-user'></i></a>
           
            <a href="logout.php" class="logout-icon"><i class="bx bx-user-minus"></i></a>
        <?php else: ?>
           
            <a href="loginUI.php" class="logout-icon"><i class="ri-user-add-line"></i></a>
        <?php endif; ?>

      </p>
    </header>

    
    <section class="hero">
      <div class="slideshow-container">
      
        <div class="mySlides fade">
          <img src="img/banner01.png" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <img src="img/banner02.png" style="width:100%">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </section>

    </section>
    
    <section class="hero2">
      <div class="hero-section">
        <div class="content" id="About">
          
          <p>
          We are celebrating our Grand Opening
                  </p>
          <p style="font-size: 1rem; color:white;">
          We are proud to announce the grand opening of FitZone, your ultimate destination for fitness and wellness. With state-of-the-art equipment, certified trainers, and a vibrant workout community, we’re here to help you crush your goals and elevate your lifestyle.
Join us in this exciting new journey and stay tuned for exclusive launch offers, events, and membership benefits designed to keep you motivated and inspired!
          </p>
          <div class="signature">
            <img src="img/FZ_logo01.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="services">
  <h2>OUR SERVICES</h2>
  <div class="line"></div>

  <div class="services-container">
    <div class="service">
      <img src="img/ser01.png" alt="Eye Exam">
      <h3>Appoinment Booking</h3>
      <p>Book your one-on-one sessions with our certified personal trainers or wellness experts at your convenience.</p>
      <a href="eyeExams.php">Learn More</a>
    </div>
    <div class="service">
      <img src="img/ser02.png" alt="Eye Exam">
      <h3>Membership Registration</h3>
      <p>Start your fitness journey by signing up for a customized membership plan that suits your lifestyle and goals. </p>
      <a href="menuUI.php">Learn More</a>
    </div>
    <div class="service">
      <img src="img/ser03.png" alt="Contact Lenses">
      <h3>Explore our programmes</h3>
      <p>Discover a variety of training options including strength training, cardio, HIIT, yoga, and personal coaching</p>
      <a href="services.php">Learn More</a>
    </div>
    <div class="service">
      <img src="img/ser04.png" alt="Glasses">
      <h3>Explore our coaches</h3>
      <p>Train with certified professionals who are passionate about helping you succeed. Our expert coaches will guide you</p>
      <a href="services.php">Learn More</a>
    </div>
  </div>
</section>
 
<section class="intro block">
  <div class="container">
    <div class="intro-content">
      <div class="intro-left">
        <h1>We Enhance And Protect Your <span>Health.</span></h1>
        <p>
        You are nothing without your health. Let FitZone help you care for your body.
          
        </p>
        <button>Discover More!</button>
      </div>
      <div class="intro-right">
        <h2>Top 5 Reasons to Choose FitZone</h2>
        <h3>Pre-Plan Fitness!</h3>
        <ul>
          <li><i class="ri-shield-check-line"></i>You’re in some of the best hands in the world.</li>
          <li><i class="ri-star-line"></i>Strive to improve our techniques and knowledge.</li>
          <li><i class="ri-hospital-line"></i>Each treatment is available under the one roof.</li>
          <li><i class="ri-heart-line"></i>We take extra time to really listen, explain & care.</li>
          <li><i class="ri-eye-line"></i>Love helping to improve the way you see the world.</li>
        </ul>
      </div>
    </div>
    <div class="stats">
      <div>
        <i class="ri-file-list-3-line"></i>
        <h3>150+</h3>
        <p>Members joined </p>
      </div>
      <div>
        <i class="ri-user-line"></i>
        <h3>20+</h3>
        <p>Coaches Employed</p>
      </div>
      <div>
        <i class="ri-calendar-line"></i>
        <h3>5+</h3>
        <p>Years Experience</p>
      </div>
    </div>
  </div>
</section>

 
    <section class="testimonials block">
      <h1>WHAT OUR CUSTOMERS SAYS</h1>
      <div class="line"></div>
      <div class="testimonial-container">
      <div class="testimonial-slide">
          <div class="testimonial">
            <div class="testimonial-content">

              <p>
                FitZone has completely transformed my fitness journey!  The trainers are so supportive and knowledgeable. I've lost weight, gained strength, and feel amazing.  Definitely the best gym in Colombo!
              </p>
              <h3>Dhanush Silva</h3>
            </div>
          </div>
          <div class="testimonial">
            <div class="testimonial-content">

              <p>
                I was hesitant to join a gym at first, but FitZone made me feel right at home.  The atmosphere is friendly and encouraging, and the classes are fantastic.  Highly recommend it to anyone in Kandy looking to get in shape!
              </p>
              <h3>Sithara Perera</h3>
            </div>
          </div>
          <div class="testimonial">
            <div class="testimonial-content">

              <p>
                After years of struggling with my weight, I finally found a program that works at FitZone. The personalized training and nutritional guidance have made all the difference. Feeling healthier and more confident than ever!
              </p>
              <h3>Rajeev Kumar</h3>
            </div>
          </div>
        </div>
      </div>
    </section>



    <footer class="footer-distributed">
      <div class="footer-left">
         <h2>FitZone</h2>
         

        <p class="footer-links">
          <a href="home.php">Home</a> |
          <a href="menuUI.php">Classes / Plans</a> |
          <a href="services.php">Our Blog</a> |
          <a href="contact.php">Contact</a>
        </p>

        <p class="footer-company-name">
          Copyright © 2024 <strong>FitZone</strong> All rights reserved
        </p>
      </div>

      <div class="footer-center">
        <div>
          <i class="ri-map-pin-line"></i>
          <p>03rd lane, Upper Street, Kurunegala, Sri Lanka</p>
        </div>
        <div>
          <i class="ri-phone-line"></i>
          <p>+94-763256609</p>
        </div>
        <div>
          <i class="ri-mail-open-line"></i>
          <p>contact@fitzone.com</p>
        </div>
      </div>

      <div class="footer-right">
        <p class="footer-company-about">
          <span>Get in the Zone, Your Daily Dose of Beast Mode</span>
          <strong>FitZone </strong>: Delivering expert fitness solutions with a wide range of personalized training, wellness programs, and modern facilities to elevate your health, strength, and lifestyle..
        </p>
        <div class="footer-icons">
          <a href="https://web.facebook.com/"><i class="ri-facebook-box-fill"></i></a>
          <a href="https://www.instagram.com/"><i class="ri-instagram-fill"></i></a>
          <a href="https://lk.linkedin.com/"><i class="ri-linkedin-box-fill"></i></a>
          <a href="https://x.com/?lang=en"><i class="ri-twitter-x-line"></i></a>
          <a href="https://www.youtube.com/"><i class="ri-youtube-line"></i></a>
        </div>
      </div>
    </footer>

    <script src="home.js"></script>
    
  </body>
</html>
