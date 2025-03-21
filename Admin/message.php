<?php
// Include the database connection file
require 'connect.php';

// Fetch the messages from the database
$query = "SELECT * FROM messages";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="message.css">

    <!-- Box icons link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <!-- Remix icon link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet" />
</head>
<body>
<header id="top">
<img src="../img/FZ_logo01.png" alt="" class="logo" />
<nav>
    <ul class="nav_links">
        <li><a href="adminHome.php">Home</a></li>
          <li><a href="uploadProduct.php">Memberships</a></li>
          <li><a href="orders.php">Pending Memberships</a></li>
          <li><a href="message.php">Messages</a></li>
          <li><a href="appointmentManage.php">Appointment</a></li>
          
          <li><a href="customers.php">Customers</a></li>
          <li><a href="admin.php">Admin</a></li>
        </ul>
    </nav>
    <p>
        <a href="../loginUI.php" class="logout-icon"><i class="bx bxs-user-minus"></i></a>
    </p>
</header>

<table>
    <thead>
        <tr>
            <th>Message ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Check if there are messages to display
        if ($result->num_rows > 0) {
            // Fetch each message as an associative array
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No messages found</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>