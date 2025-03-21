<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us</title>

    <!-- Box icons link -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <!-- Remix icon link -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- Google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="aboutUs.css" />

    <style>
      @keyframes appear{
        from {
          opacity: 0;
          scale: 0.5;
        }
        to {
          opacity: 1;
          scale: 1;

        }
      }
      .block {
        animation: appear linear;
        animation-timeline: view();
        animation-range: entry 20%;


      }

    </style>

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
        <a href="loginUI.php" class="logout-icon"
          ><i class="ri-user-add-line"></i
        ></a>
      </p>
    </header>

        <section class="hero">
      <div class="hero-container"></div>
     
    </section>

    <section class="hero2">
      <div class="hero-section">
        <div class="content" id="About">
          <h3 style="color: #db8b0a ">
            Our Founding Story
          </h3>
          <div class="line"></div>

          <p>
          FitZone started as a vision to create a community where everyone could achieve their fitness goals. 
           It began with a small group of fitness enthusiasts who wanted to share their passion and knowledge with others.  The founder
            believed that fitness should be accessible and enjoyable for all, regardless of their current fitness level. With dedication and hard work,
             FitZone evolved into a leading fitness center, committed to providing top-notch facilities and expert guidance.
          </p>
          <div class="signature">
            <img src="img/FZ_logo01.png" alt="" />
          </div>
        </div>
      </div>
    </section>

 <section class="vision-mission-values">
    <div class="diagram-container">
        <div class="block mission">
            <div class="icon-container">
                <i class="ri-flag-line"></i>
            </div>
            <h3>Mission</h3>
            <p>Our mission is to empower individuals to achieve their fitness aspirations by offering unparalleled fitness facilities, diverse training programs, and expert support, nurturing a community-driven environment that fosters motivation and holistic well-being.</p>
        </div>
        <div class="block vision">
            <div class="icon-container">
                <i class="ri-eye-line"></i>
            </div>
            <h3>Vision</h3>
            <p>Our vision is to be a global beacon in the fitness industry, renowned for our unwavering dedication to transforming lives through fitness, creating a legacy of wellness and vitality, and inspiring a world where everyone embraces a healthy and active lifestyle.</p>
        </div>
   
    </div>
  </section>





  <section class="testimonials">
      <h1>What Our Members Say</h1>
      <div class="line"></div>
      <div class="testimonial-container">
        <div class="testimonial-slide">
          <div class="testimonial">
            <div class="testimonial-content">
              <p>
              "FitZone has completely transformed my life!  I've never felt so motivated and supported on my fitness journey.  The trainers are fantastic, and the community is amazing!"
              </p>
              <h3>Avinash Kr</h3>
            </div>
          </div>
          <div class="testimonial">
            <div class="testimonial-content">
              <p>
                "I was hesitant to join a gym, but FitZone made me feel so welcome.  The classes are fun and challenging, and I'm already seeing results!"
              </p>
              <h3>Bharat Kunal</h3>
            </div>
          </div>
          <div class="testimonial">
            <div class="testimonial-content">
              <p>
               "The personalized training plan I received at FitZone was a game-changer.  My trainer understood my goals and helped me achieve them in a safe and effective way."
              </p>
              <h3>Prabhakar D</h3>
            </div>
          </div>
        </div>
      </div>
  </section>


 <!-- Why Choose Us Section -->
  <section class="why-choose-us">
  <div class="why-container">
    <div class="why-text">
      <h2>WHY <span>FITZONE?</span></h2>
      <ul>
        <li>Certified and experienced trainers.</li>
        <li>State-of-the-art equipment and facilities.</li>
        <li>Wide variety of classes to suit all fitness levels.</li>
        <li>Personalized training programs tailored to your needs.</li>
        <li>Supportive and motivating community.</li>
      </ul>
    </div>
    <div class="why-image">
      <img src="img/1.png" alt="Why Choose Us">
    </div>
  </div>
  </section>


  <section class="technology-innovation">
        <div class="container">
            <h2 class="section-title">Cutting-Edge Fitness</h2>
            <div class="line"></div>

            <p class="section-subtitle">At FitZone, we leverage the latest technology to enhance your workout experience and help you reach your fitness goals.</p>
            <div class="tech-grid">
                <div class="tech-card">
                    <a href="eyeExams.php">
                    <img src="img/aboutus01.png" alt="OCT Device">
                    </a>
                    <h3>Smart Treadmills</h3>
                    <p>Track your pace, incline, and distance with precision and integrate with fitness apps for optimal performance analysis.</p>
                    
                </div>
                <div class="tech-card">
                    <img src="img/aboutus02.png" alt="Corneal Topography">
                    <h3>Advanced Resistance Machines</h3>
                    <p>Our machines provide consistent resistance throughout your workout and feature digital feedback to monitor muscle activation.</p>
                    
                </div>
                <div class="tech-card">
                    <img src="img/aboutus03.png" alt="Digital Eye Strain Solutions">
                    <h3>Wearable Integration</h3>
                    <p>Sync your fitness tracker and apps with our systems to track progress and stay connected throughout your fitness journey.</p>   
             
                  </div>  
     
        </div>
 </section>

  <!-- footer section -->
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
      


    <script src="testimonial.js"></script>
</body>
</html>