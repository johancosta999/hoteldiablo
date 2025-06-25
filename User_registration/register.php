<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include('db_connect.php'); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT); // Hashing password
    $confirm_password = trim($_POST['confirm-password']); // Updated this line

    // Check if password and confirm password match
    if (!password_verify($confirm_password, $password)) { // Compare hashed password with confirmation
        echo "Passwords do not match!";
    } else {
        // Check if the user exists
        $checkQuery = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
        $checkQuery->bind_param("ss", $email, $username);
        $checkQuery->execute();
        $result = $checkQuery->get_result();

        if ($result->num_rows > 0) {
            echo "Username or Email already exists!";
        } else {
            // Insert the user into the database
            $insertQuery = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $insertQuery->bind_param("sss", $username, $email, $password);

            if ($insertQuery->execute()) {
                // Successful signup, redirect
                header("Location: login1.php");
                exit();
            } else {
                echo "Error: " . $insertQuery->error;
            }
        }
    }
}
?>
