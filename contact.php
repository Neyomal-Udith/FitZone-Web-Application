<?php
require 'connect.php';  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Message sent successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css" />

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
        <a href="loginUI.php" class="logout-icon"><i class="ri-user-add-line"></i></a>
      </p>
    </header>

    <section class="hero">
      <div class="hero-container"></div>
    </section>

    <div class="contact-form">
      <div class="contact-info">
        <h2>Get In Touch</h2>
        <p>Feel free to contact us for any questions and doubts.</p>
        <div class="info">
          <div class="info-item">
            <i class="ri-phone-fill"></i>
            <span>+94-763256609</span>
          </div>
          <div class="info-item">
            <i class="ri-mail-fill"></i>
            <span>contact@fitzone.com</span>
          </div>
          <div class="info-item">
            <i class="ri-map-pin-fill"></i>
            <span>03rd lane, Upper Street, Kurunegala, Sri Lanka</span>
          </div>
        </div>
        <div class="social-media">
          <a href="#"><i class="ri-facebook-box-fill"></i></a>
          <a href="#"><i class="ri-twitter-fill"></i></a>
          <a href="#"><i class="ri-instagram-fill"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="contact-form-inner">
        <form action="contact.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Email" required />
            <input type="text" name="subject" placeholder="Subject" required />
            <textarea name="message" placeholder="Say Something" required></textarea>
            
            <div class="form-buttons">
                <button type="submit">Send Message</button>
                
            </div>
        </form>
      </div>
    </div>



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


    <script src="contact.js"></script>
  </body>
</html>
