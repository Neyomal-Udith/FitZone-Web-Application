<?php
include 'connect.php';
session_start();

// Enable error handling
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    $customerEmail = $_POST['customerEmail'];
    $customerPass = $_POST['customerPass'];

    // Check if the login credentials are for the admin
    $adminSql = "SELECT * FROM admin WHERE AdminEmail = ?";
    $adminStmt = $conn->prepare($adminSql);
    $adminStmt->bind_param("s", $customerEmail);
    $adminStmt->execute();
    $adminResult = $adminStmt->get_result();

    if ($adminResult->num_rows > 0) {
        $row = $adminResult->fetch_assoc();
        if (password_verify($customerPass, $row['AdminPassword']) || $customerPass == $row['AdminPassword']) {
            // Verify either using hashed password or plain text
            $_SESSION['AdminEmail'] = $row['AdminEmail']; // Store admin email in session
            header("Location: Admin/adminHome.php"); 
            exit();
        }
    }

    

    // Check if the login credentials are for the customer
    $customerSql = "SELECT * FROM customer WHERE CustomerEmail = ?";
    $customerStmt = $conn->prepare($customerSql);
    $customerStmt->bind_param("s", $customerEmail);
    $customerStmt->execute();
    $customerResult = $customerStmt->get_result();

    if ($customerResult->num_rows > 0) {
        $row = $customerResult->fetch_assoc();
        // Check for hashed or plain password
        if (password_verify($customerPass, $row['CustomerPassword']) || $customerPass == $row['CustomerPassword']) {
            $_SESSION['CustomerEmail'] = $row['CustomerEmail']; // Store customer email in session
            header("Location: home.php"); // Redirect to customer home page
            exit();
        }
    }

    header("Location: loginUI.php?error=Incorrect Email or Password!");
    exit();
}
?>
