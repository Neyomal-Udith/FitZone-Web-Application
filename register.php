<?php
include 'connect.php';
session_start();

if (isset($_POST['register'])) {
    $customerName = $_POST['customerName'];
    $customerEmail = $_POST['customerEmail'];
    $customerContact = $_POST['customerContact'];
    $customerPass = $_POST['customerPass'];
    // $customerPass = md5($customerPass);  // Hash the password

    //  if the email already exists 
    $checkEmail = "SELECT * FROM customer WHERE CustomerEmail = '$customerEmail'";
    $result = $conn->query($checkEmail);
    
    if ($result->num_rows > 0) {
        header("Location: registerUI.php?error=Email Address Already Exists!");
    } else {
        $sql = "INSERT INTO customer (CustomerName, CustomerEmail, CustomerContact, CustomerPassword) 
                VALUES ('$customerName', '$customerEmail', '$customerContact', '$customerPass')";

        if ($conn->query($sql) === TRUE) {
            header("Location: loginUI.php?success=Registration successful! Please log in.");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
