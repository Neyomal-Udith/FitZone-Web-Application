<?php
session_start();

// Check if the customer is logged in
if (isset($_SESSION['CustomerEmail'])) {
    $customerEmail = $_SESSION['CustomerEmail']; // Retrieve stored customer email
    // echo "Welcome, " . $customerEmail;
} else {
    // Redirect to login page if not logged in
    // header("Location: loginUI.php");
    // exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <!-- Box icons link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <!-- Remix icon link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="menuUI.css" />
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
        <a href="#"><i class="ri-shopping-cart-2-line SC logout-icon" id="cart-icon">
            <span class="cart-count">0</span></i>
        </a>
      </p>
      <!-- cart -->
      <div class="cart">
        <h2 class="cart-title">Your Cart</h2>
        <!-- cart content -->
        <div class="cart-content"></div>
        <!-- total -->
        <div class="total">
          <div class="total-title">Total</div>
          <div class="total-price">Rs0</div>
        </div>
        <!-- buy button -->
        <button type="button" class="btn-buy">Order Now</button>
        <!-- cart close -->
        <i class="ri-close-line" id="close-cart"></i>
      </div>
    </header>

    <section class="hero">
      <div class="hero-container"></div>
    
    </section>
    

    <section class="shop container">
      <div class="shop-content" id="menu-items">
        <?php
        include 'connect.php';

        // Fetch product data from the database
        $sql = "SELECT * FROM product";  // Assuming your table is named 'product'
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
               <div class="product-box" data-name="' . strtolower($row['ProductName']) . '">
                    <img src="Admin/uploads/' . $row['ProductImage'] . '" alt="' . $row['ProductName'] . '" class="product-img" />
                    <h2 class="product-title">' . $row['ProductName'] . '</h2>
                    <p class="product-description">' . $row['ProductDes'] . '</p>
                    <span class="price">Rs ' . $row['ProductPrice'] . '</span>
                    <i class="ri-shopping-cart-2-line add-cart"></i>
                </div>';
            }
        } else {
            echo '<p>No products available.</p>';
        }
        ?>
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


    <script src="menu.js"></script>
</body>
</html>