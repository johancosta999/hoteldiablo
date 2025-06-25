<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
include('db_connect.php'); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['login'])) { // Ensure this matches the button name
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
    
    if ($query === false) {
        die("Prepare failed: " . $conn->error);
    }

    $query->bind_param("s", $username);
    $query->execute();
    $result = $query->get_result();

    if ($result === false) {
        die("Execute failed: " . $query->error);
    }

    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        
        // Redirect based on user role
        if ($user['role'] === 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: myprofile.php"); // Redirect for regular users
        }

        exit(); 
    } else {
        // Invalid credentials
        echo "Invalid username or password!";
    }
}
?>
