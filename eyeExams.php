<?php
// Start a session
session_start();

// Include the database connection file
include("connect.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $town = $_POST['town'];
    $contact = $_POST['contact'];
    $date = $_POST['appointment-date'];
    $time = $_POST['appointment-time'];

    // Prepare an SQL query to check if the same date and time exist in the "Appointment" table
    $check_sql = "SELECT * FROM Appointment WHERE Date = ? AND Time = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("ss", $date, $time);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the result has any rows (i.e., appointment already exists for this date and time)
    if ($result->num_rows > 0) {
        // Show an error message if appointment already exists
        echo "<script>alert('The selected date and time is already booked. Please try another date and time.');</script>";
    } else {
        // If no conflict, insert the new appointment into the database
        $sql = "INSERT INTO Appointment (Name, Email, NearTown, Contact, Date, Time, Status) 
                VALUES (?, ?, ?, ?, ?, ?, 'Pending..')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $email, $town, $contact, $date, $time);

        // Execute the query
        if ($stmt->execute()) {
            // Success message and redirection
            echo "<script>alert('Appointment booked successfully! We will be in touch.');</script>";
            echo "<script>window.location.href = 'eyeExams.php';</script>";
        } else {
            // Display an error message if the query fails
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eye Exams</title>
    <!-- Custom CSS link -->
    <link rel="stylesheet" href="eyeExams.css" />

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

    <script src="https://unpkg.com/scrollreveal"></script>
  </head>
  <body>
  <script>
        window.addEventListener("scroll", function() {              
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})
    </script>
    <!-- Header section -->
    <header id="top">
    <a href="home.php"><img src="img/FZ_logo01.png" alt="" class="logo" /></a>
      <nav>
      <ul class="nav_links">
          <li><a href="home.php">Home</a></li>
          <li><a href="aboutUs.php">About Us</a></li>
          <li><a href="eyeExams.php">Our Blog</a></li>
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

    <!-- Hero section with title -->
    <section class="hero">
      <div class="hero-container"></div>
    </section>

    <!-- Reveal Elements on scroll -->
    <section class="sec1">
    <div class="container">
        <h1 class="main-title">Whats new ?</h1>
        <div class="line"></div>

        <div class="content">
            <div class="image">
                <img src="img/blog01.png" alt="">
            </div>
            <div class="text-box">
                <h3>Cardio Power: Unleash Your Endurance</h3>
                <p>Boost your cardiovascular health and endurance through intense cardio sessions! Our state-of-the-art treadmills and elliptical machines help you burn calories, strengthen your heart, and improve overall fitness. Let's get your heart pumping and energy soaring.</p>
            </div>
        </div>

        <div class="content reverse">
            <div class="text-box">
                <h3>High Intensity Interval Training (HIIT): Ignite Your Metabolism</h3>
                <p>Transform your body with our HIIT programs that combine intense bursts of activity with short recovery periods. Burn maximum calories, build lean muscle, and boost your metabolism in minimal time. Get ready to sweat, challenge yourself, and achieve incredible results with HIIT!</p>
            </div>
            <div class="image">
                <img src="img/blog02.png" alt="">
            </div>
        </div>

 

        <div class="content">
            <div class="image">
                <img src="img/blog03.png" alt="">
            </div>
            <div class="text-box">
                <h3>Yoga & Flexibility: Find Your Inner Peace</h3>
                <p>Improve your flexibility, balance, and mental well-being with our rejuvenating yoga classes. Our certified instructors will lead you through mindful movements, helping you reduce stress, enhance mobility, and achieve a harmonious mind-body connection. Breathe in, breathe out, and find your inner zen.</p>
            </div>
        </div>

        <div class="content reverse">
        <div class="text-box">
            <h3>How Many Reps Should You Do?</h3>
            <p>Confused about reps and sets?  Discover the ideal rep ranges for strength, muscle growth, and endurance!  This post breaks down the science behind different rep ranges and provides actionable advice for optimizing your workouts.  Click here to read more and unlock your full potential!</p>
            
        </div>
        <div class="image">
            <img src="img/blog04.png" alt="Blog Post Image">
        </div>
    </div>

        <div class="content">
            <div class="image">
                <img src="img/blog05.png" alt="">
            </div>
            <div class="text-box">
                <h3>Nutrition & Diet: Fuel Your Performance</h3>
                <p>Optimize your fitness journey with personalized nutrition guidance. Our expert nutritionists will create a tailored diet plan to fuel your workouts, support muscle growth, and achieve your weight loss goals. Learn how to eat smarter, make healthy choices, and nourish your body for peak performance. </p>
            </div>
        </div>


    </div>
</section>

<!-- Appointment Form Section -->
<section class="appoint-form">
<div class="contact-container">
    <h2>Schedule a Consultation</h2>
    <form action="" method="post">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="town">Nearest Town</label>
        <input type="text" id="town" name="town" required>

        <label for="contact">Contact Number</label>
        <input type="tel" id="contact" name="contact" required>

        <label for="appointment-date">Consultation Date</label>
        <input type="date" id="appointment-date" name="appointment-date" required>

        <label for="appointment-time">Consultation Time</label>
        <select id="appointment-time" name="appointment-time" required>
            <option value="" disabled selected>Select Time</option>
            <option value="9:00am-11:00am">9:00 AM - 11:00 AM</option>
            <option value="4:00pm-6:00pm">4:00 PM - 6:00 PM</option>
        </select>

        <button type="submit">Book</button>
    </form>
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

<script src="eyeExams.js"></script>

<script>
    ScrollReveal({ 
        reset: true,
        distance:'60px',
        duration:2500,
        delay: 400
    });
    ScrollReveal().reveal('.sec1 .image', { delay: 300, origin:'bottom' });
    ScrollReveal().reveal('.text-box', { delay: 400, origin:'right' });
</script>

</body>
</html>