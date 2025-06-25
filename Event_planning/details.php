<?php
session_start(); 
include("config.php");


if(!isset($_SESSION['userid'])){
header("Location: booking.php"); 
exit();
}


$userId = $_SESSION['userid'];
$query = "SELECT Name, Email, Phone_Number, Event_Type, Event_Date FROM booking WHERE User_Id='$userId'";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $bookingDetails = mysqli_fetch_assoc($result);
} else {
    echo "<p>No booking details found.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <title>Booking Details</title>
</head>
<body>
    <div class="container">
        <div class="box details-box">
            <header>Booking Details</header>
            <table class="details-table">
                <tr>
                    <th>Name</th>
                    <td><?php echo htmlspecialchars($bookingDetails['Name']); ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo htmlspecialchars($bookingDetails['Email']); ?></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><?php echo htmlspecialchars($bookingDetails['Phone_Number']); ?></td>
                </tr>
                <tr>
                    <th>Event Type</th>
                    <td><?php echo htmlspecialchars($bookingDetails['Event_Type']); ?></td>
                </tr>
                <tr>
                    <th>Event Date</th>
                    <td><?php echo htmlspecialchars($bookingDetails['Event_Date']); ?></td>
                </tr>
            </table>
            
        <div class="button-container">
            <a href="update.php"><button class="btn1">Edit Details</button></a>
            <a href="delete.php"><button class="btn1" style="background-color: #ff4d4d;">Delete Booking</button></a>
            <a href="../Event_Reminder/index.php"><button class="btn2">Set Reminder</button></a>
            <a href="/hoteldiablo/webhome.php"><button class="btn2" style="background-color: rgb(91, 233, 43)">Back to Home</button></a>
        </div>
        </div>
    </div>
</body>
</html>
