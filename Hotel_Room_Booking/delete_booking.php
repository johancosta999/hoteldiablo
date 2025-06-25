<?php
// delete_booking.php

// Database connection
$host = 'localhost';
$db = 'hotel_diablo1';
$user = 'root'; // Default user for XAMPP is 'root'
$pass = '';     // No password by default for XAMPP

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the booking ID from the URL
$id = $_GET['id'];

// Delete the booking from the database
$sql = "DELETE FROM bookings WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Booking deleted successfully!";
    header('Location: view_bookings.php');
    exit;
} else {
    echo "Error deleting booking: " . $conn->error;
}

$conn->close();
?>
