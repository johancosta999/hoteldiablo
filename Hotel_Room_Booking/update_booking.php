<?php
// update_booking.php

// Database connection
$host = 'localhost';
$db = 'hotel_diablo1';
$user = 'root'; // Default user for XAMPP is 'root'
$pass = '';     // No password by default for XAMPP

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$id = $_POST['id'];
$roomType = $_POST['roomType'];
$maxHeadCount = $_POST['maxHeadCount'];
$unitPrice = $_POST['unitPrice'];
$noOfRooms = $_POST['noOfRooms'];
$totalPrice = $_POST['totalPrice'];

// Update the booking in the database
$sql = "UPDATE bookings SET room_type='$roomType', max_head_count='$maxHeadCount', unit_price='$unitPrice', no_of_rooms='$noOfRooms', total_price='$totalPrice' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Booking updated successfully!";
    header('Location: view_bookings.php');
    exit;
} else {
    echo "Error updating booking: " . $conn->error;
}

$conn->close();
?>
