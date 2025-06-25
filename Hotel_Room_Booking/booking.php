<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <br></br>
        <!-- View My Bookings Button -->
        <button type="button" onclick="window.location.href='view_bookings.php';">View Current Bookings</button>
        <br></br>
        <form id="roomForm" action="create_booking.php" method="POST">
            <h1 class="form-title">Book A Room</h1>
            <label for="roomType">Room Type:</label>
            <select id="roomType" name="roomType" required>
                <option value="" disabled selected>Select Room Type</option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Superior">Superior</option>
            </select>
    
            <label for="maxHeadCount">Max Head Count:</label>
            <input type="number" id="maxHeadCount" name="maxHeadCount" readonly>
    
            <label for="unitPrice">Unit Price:</label>
            <input type="number" id="unitPrice" name="unitPrice" readonly>
    
            <label for="noOfRooms">Number of Rooms:</label>
            <input type="number" id="noOfRooms" name="noOfRooms" min="1" required>
    
            <label for="totalPrice">Total Price:</label>
            <input type="number" id="totalPrice" name="totalPrice" readonly>
    
            <button type="submit">Book Now</button>
        </form>
        <!-- Carousel or other content can stay here -->
        <div class="carousel-container">
            <button class="carousel-button left">← Previous</button>
            <div class="carousel">
                <img src="image/option1.jpg" alt="Room Image 1">
                <img src="image/option2.jpg" alt="Room Image 2">
                <img src="image/option3.jpg" alt="Room Image 3">
                <!-- Add more images as needed -->
            </div>
            <button class="carousel-button right">Next →</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
