<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <!-- Custom CSS link -->
    <link rel="stylesheet" href="services.css" />

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

      /* Styles for the search filter */
      #search-filter {
        margin: 20px auto;
        text-align: center;
      }

      #search-dropdown {
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 300px;
        max-width: 100%;
      }

    </style>
  </head>
  <body>
  <script>
        window.addEventListener("scroll", function() {              
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

    // JavaScript code for search filter
    document.addEventListener('DOMContentLoaded', function() {
        const searchDropdown = document.getElementById('search-dropdown');
        const serviceCards = document.querySelectorAll('.service-card');

        searchDropdown.addEventListener('change', function() {
            const searchTerm = searchDropdown.value.trim().toLowerCase();

            serviceCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();

                if (searchTerm === "" || title.includes(searchTerm)) { // Show all if no selection
                    card.style.display = 'block'; // or 'grid' / 'flex' based on your layout
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    </script>
    <!-- Header section -->
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

    <!-- Hero section with title -->
    <section class="hero">
      <div class="hero-container"></div>
      <!-- <div class="title"><h1>Contact Us</h1></div> -->
    </section>

    <!-- ADD THE SEARCH DROPDOWN HERE -->

    <div id="search-filter">
      <h4 class="seach-head">Search Your Class / Trainer type here</h4>
        <select id="search-dropdown" class="search-filterdrop">
            <option value="">All Services</option>
            <option value="yoga classes">Yoga Classes</option>
            <option value="zumba">Zumba</option>
            <option value="hiit training">HIIT Training</option>
            <option value="strength training">Strength Training</option>
            <option value="crossfit">CrossFit</option>
            <option value="pilates">Pilates</option>
            <option value="cardio trainer">Cardio Trainer</option>
            <option value="strength trainer">Strength Trainer</option>
            <option value="yoga instructor">Yoga Instructor</option>
            <option value="nutrition coach">Nutrition Coach</option>
            <option value="bring your own personal trainer">Bring your own personal trainer</option>
        </select>
    </div>

    <section class="services-section">
    <div class="container">
        <h2 class="section-title">Elevate Your Fitness Journey with Diverse Workouts</h2>
        <div class="line"></div>

        <p class="section-subtitle">Explore a variety of workout and training classes designed to challenge you and help you achieve your fitness aspirations.</p>
        <div class="services-grid">
            <div class="service-card">
                
                <img src="img/class01.png" alt="Yoga Classes">
                </a>
                <h3>Yoga Classes</h3>
                <p>Find your inner peace and build flexibility with our yoga sessions.  From beginner to advanced, improve balance and mindfulness.</p>
                <a href="yoga.php" class="read-more">Read More</a>
            </div>
            <div class="service-card">
                
                <img src="img/class02.png" alt="Zumba">
                </a>
                <h3>Zumba</h3>
                <p>Dance your way to fitness!  Zumba combines Latin rhythms and easy-to-follow moves for a fun and effective cardio workout.</p>
                <a href="zumba.php" class="read-more">Read More</a>
            </div>
            <div class="service-card">
                
                <img src="img/class03.png" alt="HIIT Training">
                </a>
                <h3>HIIT Training</h3>
                <p>Maximize calorie burn with High-Intensity Interval Training (HIIT). Short bursts of intense exercise followed by brief recovery periods.</p>
                <a href="hiit.php" class="read-more">Read More</a>
            </div>
            <div class="service-card">
                
                <img src="img/class04.png" alt="Strength Training">
                <h3>Strength Training</h3>
                <p>Build muscle and increase strength with our guided strength training sessions. Focus on proper form and progressive overload.</p>
                <a href="strength_training.php" class="read-more">Read More</a>
            </div>
            <div class="service-card">
                
                <img src="img/class05.png" alt="CrossFit">
                </a>
                <h3>CrossFit</h3>
                <p>Test your limits with our CrossFit program. This workout combines elements of weightlifting, gymnastics, and high-intensity cardio.</p>
                <a href="crossfit.php" class="read-more">Read More</a>
            </div>
            <div class="service-card">
                
                <img src="img/class06.png" alt="Pilates">
                </a>
                <h3>Pilates</h3>
                <p>Strengthen your core and improve posture with Pilates. A low-impact workout that focuses on precision and control.</p>
                <a href="pilates.php" class="read-more">Read More</a>
            </div>
        </div>
    </div>
</section>


<section class="services-section">
    <div class="container">
        <h2 class="section-title">Meet Our Expert Trainers</h2>
        <div class="line"></div>

        <p class="section-subtitle">Discover the diverse expertise of our certified trainers, dedicated to helping you achieve your fitness goals.</p>
        <div class="services-grid">
            <div class="service-card">
                <img src="img/Trainer01.png" alt="Cardio Trainer">
                </a>
                <h3>Cardio Trainer</h3>
                <p>Boost your cardiovascular health and endurance. Our cardio trainers will design personalized workout plans to improve your fitness.</p>
                <a href="trainer_cardio.php" class="read-more">Read More</a>
            </div>
            <div class="service-card">
                <img src="img/Trainer04.png" alt="Strength Trainer">
                </a>
                <h3>Strength Trainer</h3>
                <p>Build muscle and transform your physique. Our strength trainers will guide you with safe and effective weightlifting techniques.</p>
                <a href="trainer_strength.php" class="read-more">Read More</a>
            </div>
            <div class="service-card">
                <img src="img/Trainer03.png" alt="Yoga Instructor">
                </a>
                <h3>Yoga Instructor</h3>
                <p>Enhance flexibility, balance, and mental well-being. Our certified yoga instructors offer classes for all levels, from beginner to advanced.</p>
                <a href="trainer_yoga.php" class="read-more">Read More</a>
            </div>
      
            <div class="service-card">
                <img src="img/Trainer02.png" alt="Nutrition Coach">
                </a>
                <h3>Nutrition Coach</h3>
                <p>Fuel your body for optimal performance. Our nutrition coaches provide personalized meal plans and expert guidance to support your fitness goals.</p>
                <a href="trainer_nutrition.php" class="read-more">Read More</a>
            </div>

            <div class="service-card">
                <img src="img/Trainer05.png" alt="HIIT Specialist">
                </a>
                <h3>Bring your own personal trainer</h3>
                <p></p>
                <a href="trainer_hiit.php" class="read-more">Read More</a>
            </div>
         
        </div>
    </div>
</section>

    <section class="equipment-section block">
    <div class="container">
        <div class="equipment-content">
            <div class="equipment-text">
                <h3>Train Like a Pro</h3>
                <h2>High-Quality Equipment</h2>
                <p>At FitZone, we provide access to the latest and greatest fitness equipment to help you reach your goals. From cardio machines to free weights, our facilities are designed to support your workout needs.  We invest in quality equipment that lasts.</p>

                <div class="progress-bars">
                    <div class="progress-bar">
                        <span>Cardio Machines</span>
                        <div class="progress">
                            <div class="progress-value" style="width: 92%;"></div>
                        </div>
                        <span class="percentage">92%</span>
                    </div>
                    <div class="progress-bar">
                        <span>Free Weights</span>
                        <div class="progress">
                            <div class="progress-value" style="width: 88%;"></div>
                        </div>
                        <span class="percentage">88%</span>
                    </div>
                    <div class="progress-bar">
                        <span>Strength Training Equipment</span>
                        <div class="progress">
                            <div class="progress-value" style="width: 90%;"></div>
                        </div>
                        <span class="percentage">90%</span>
                    </div>
                    <div class="progress-bar">
                        <span>Functional Training Zone</span>
                        <div class="progress">
                            <div class="progress-value" style="width: 85%;"></div>
                        </div>
                        <span class="percentage">85%</span>
                    </div>
                </div>

                <!-- <a href="#" class="learn-more-btn">Learn More</a> -->
            </div>
            <div class="equipment-image">
                <img src="img/gymequipments.png" alt="Gym Equipment">
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
          <a href="eyeExams.php">Blog</a> |
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

    <script src="services.js"></script>

  </body>
</html>