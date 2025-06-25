<?php
// view_bookings.php

// Database connection
$host = 'localhost';
$db = 'hotel_diablo1';
$user = 'root'; // Default user for XAMPP is 'root'
$pass = '';     // No password by default for XAMPP

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch bookings from the database
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="form-title">My Bookings</h1>
        <table>
            <thead>
                <tr>
                    <th>Room Type</th>
                    <th>Max Head Count</th>
                    <th>Unit Price</th>
                    <th>Number of Rooms</th>
                    <th>Total Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['room_type']; ?></td>
                            <td><?php echo $row['max_head_count']; ?></td>
                            <td><?php echo $row['unit_price']; ?></td>
                            <td><?php echo $row['no_of_rooms']; ?></td>
                            <td><?php echo $row['total_price']; ?></td>
                            <td>
                                <div class="button-container">
                                    <button class="edit" onclick="window.location.href='edit_booking.php?id=<?php echo $row['id']; ?>'">Edit</button>
                                    <button class="delete" onclick="deleteBooking(<?php echo $row['id']; ?>)">Request a Cancel</button>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No bookings found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
        function deleteBooking(id) {
            if (confirm('The details will be forwarded to the admin section. Are you sure you want to cancel this booking?')) {
                window.location.href = 'delete_booking.php?id=' + id;
            }
        }
    </script>
</body>
</html>

<?php
$conn->close();
?>
