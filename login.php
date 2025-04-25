<?php
include 'connect.php';
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    $customerEmail = $_POST['customerEmail'];
    $customerPass = $_POST['customerPass'];

    // Check admin login
    $adminSql = "SELECT * FROM admin WHERE AdminEmail = ?";
    $adminStmt = $conn->prepare($adminSql);
    $adminStmt->bind_param("s", $customerEmail);
    $adminStmt->execute();
    $adminResult = $adminStmt->get_result();

    if ($adminResult->num_rows > 0) {
        $row = $adminResult->fetch_assoc();
        if (password_verify($customerPass, $row['AdminPassword']) || $customerPass == $row['AdminPassword']) {
            $_SESSION['AdminEmail'] = $row['AdminEmail'];
            header("Location: Admin/adminHome.php?success=Login successful");
            exit();
        }
    }

    // Check customer login
    $customerSql = "SELECT * FROM customer WHERE CustomerEmail = ?";
    $customerStmt = $conn->prepare($customerSql);
    $customerStmt->bind_param("s", $customerEmail);
    $customerStmt->execute();
    $customerResult = $customerStmt->get_result();

    if ($customerResult->num_rows > 0) {
        $row = $customerResult->fetch_assoc();
        if (password_verify($customerPass, $row['CustomerPassword']) || $customerPass == $row['CustomerPassword']) {
            $_SESSION['CustomerEmail'] = $row['CustomerEmail'];
            header("Location: home.php?success=Login successful");
            exit();
        }
    }

    header("Location: loginUI.php?error=Login unsuccessful - please try again!");
    exit();
}
?>
