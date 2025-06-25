<?php
// create_booking.php

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
$roomType = $_POST['roomType'];
$maxHeadCount = $_POST['maxHeadCount'];
$unitPrice = $_POST['unitPrice'];
$noOfRooms = $_POST['noOfRooms'];
$totalPrice = $_POST['totalPrice'];

// Insert data into the database
$sql = "INSERT INTO bookings (room_type, max_head_count, unit_price, no_of_rooms, total_price)
        VALUES ('$roomType', '$maxHeadCount', '$unitPrice', '$noOfRooms', '$totalPrice')";

if ($conn->query($sql) === TRUE) {
    // JavaScript alert for successful booking
    echo "<script>
            alert('Booking successful!');
            window.location.href = 'booking.php'; // Redirect to booking page or any other page
          </script>";
} else {
    // JavaScript alert for error in booking
    echo "<script>
            alert('Error: " . $conn->error . "');
            window.history.back(); // Go back to the form page
          </script>";
}

$conn->close();
