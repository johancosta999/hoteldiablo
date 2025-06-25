<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

include('db_connect.php');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    
    $deleteQuery = $conn->prepare("DELETE FROM users WHERE id = ?");
    $deleteQuery->bind_param("i", $userId);

    if ($deleteQuery->execute()) {
        $_SESSION['notify'] = "User deleted successfully!";
    } else {
        $_SESSION['notify'] = "Error: " . $deleteQuery->error;
    }

    header("Location: admin_dashboard.php");
    exit();
}
?>