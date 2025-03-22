<?php
session_start();
include 'connect.php'; 

if (isset($_SESSION['CustomerEmail'])) {
    $customerEmail = $_SESSION['CustomerEmail']; 

    $newName = $_POST['name'];
    $newContact = $_POST['contact'];
    $newPassword = $_POST['password'];
    $newAddress = $_POST['address'];

    if (!empty($newPassword)) {
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
    } else {
        $hashedPassword = null;
    }

    if ($hashedPassword) {
        $sql = "UPDATE customer 
                SET CustomerName = ?, CustomerContact = ?, CustomerPassword = ?, Address = ?
                WHERE CustomerEmail = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $newName, $newContact, $hashedPassword, $newAddress, $customerEmail);
    } else {
        $sql = "UPDATE customer 
                SET CustomerName = ?, CustomerContact = ?, Address = ?
                WHERE CustomerEmail = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $newName, $newContact, $newAddress, $customerEmail);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Profile updated successfully!'); window.location.href='profile.php';</script>";
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    $stmt->close();
} else {
    header("Location: loginUI.php");
    exit();
}

$conn->close();
?>
