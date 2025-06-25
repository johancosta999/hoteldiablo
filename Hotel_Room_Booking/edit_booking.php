<?php
// edit_booking.php

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

// Fetch the booking data
$sql = "SELECT * FROM bookings WHERE id='$id'";
$result = $conn->query($sql);
$booking = $result->fetch_assoc();

if (!$booking) {
    die("Booking not found.");
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function updateRoomDetails() {
            const roomType = document.getElementById('roomType').value;
            let maxHeadCount = 0;
            let unitPrice = 0;

            // Setting maxHeadCount and unitPrice based on room type
            switch (roomType) {
                case 'Single':
                    maxHeadCount = 1;
                    unitPrice = 100;  // Unit price for Single
                    break;
                case 'Double':
                    maxHeadCount = 2;
                    unitPrice = 150;  // Unit price for Double
                    break;
                case 'Superior':
                    maxHeadCount = 4;
                    unitPrice = 200;  // Unit price for Superior
                    break;
            }

            // Update fields
            document.getElementById('maxHeadCount').value = maxHeadCount;
            document.getElementById('unitPrice').value = unitPrice;
            calculateTotalPrice();
        }

        function calculateTotalPrice() {
            const unitPrice = document.getElementById('unitPrice').value;
            const noOfRooms = document.getElementById('noOfRooms').value;
            const totalPrice = unitPrice * noOfRooms;
            document.getElementById('totalPrice').value = totalPrice;
        }
    </script>
</head>
<body>
    <div class="container">
        <form action="update_booking.php" method="POST">
            <h1 class="form-title">Edit Booking</h1>
            <input type="hidden" name="id" value="<?php echo $booking['id']; ?>">
            
            <label for="roomType">Room Type:</label>
            <select id="roomType" name="roomType" required onchange="updateRoomDetails()">
                <option value="Single" <?php echo $booking['room_type'] === 'Single' ? 'selected' : ''; ?>>Single</option>
                <option value="Double" <?php echo $booking['room_type'] === 'Double' ? 'selected' : ''; ?>>Double</option>
                <option value="Superior" <?php echo $booking['room_type'] === 'Superior' ? 'selected' : ''; ?>>Superior</option>
            </select>

            <label for="maxHeadCount">Max Head Count:</label>
            <input type="number" id="maxHeadCount" name="maxHeadCount" value="<?php echo $booking['max_head_count']; ?>" readonly>

            <label for="unitPrice">Unit Price:</label>
            <input type="number" id="unitPrice" name="unitPrice" value="<?php echo $booking['unit_price']; ?>" readonly>

            <label for="noOfRooms">Number of Rooms:</label>
            <input type="number" id="noOfRooms" name="noOfRooms" value="<?php echo $booking['no_of_rooms']; ?>" min="1" required oninput="calculateTotalPrice()">

            <label for="totalPrice">Total Price:</label>
            <input type="number" id="totalPrice" name="totalPrice" value="<?php echo $booking['total_price']; ?>" readonly>

            <button type="submit">Update Booking</button>
        </form>
    </div>

    <script>
        // Initialize the values based on the current booking data
        document.addEventListener('DOMContentLoaded', function() {
            updateRoomDetails(); // Set the initial room details based on selected room type
        });
    </script>
</body>
</html>
