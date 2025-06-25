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


if(isset($_POST['update'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone_Number = $_POST['Phone_Number'];
    $Event_Type = $_POST['Event_Type'];
    $Event_Date = $_POST['Event_Date'];

 
    $updateQuery = "UPDATE booking SET Name='$Name', Email='$Email', Phone_Number='$Phone_Number', Event_Type='$Event_Type', Event_Date='$Event_Date' WHERE User_Id='$userId'";
    
    if(mysqli_query($con, $updateQuery)){
        echo "<div class='message'>
                <p>Booking Details Updated Successfully!</p>
              </div><br>";
    } else {
        echo "<p>Error Occurred: " . mysqli_error($con) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <title>Update Booking Details</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Update Booking Details</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" id="Name" value="<?php echo htmlspecialchars($bookingDetails['Name']); ?>" required>
                </div>
                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email" value="<?php echo htmlspecialchars($bookingDetails['Email']); ?>" required>
                </div>
                <div class="field input">
                    <label for="Phone_Number">Phone Number</label>
                    <input type="text" name="Phone_Number" id="Phone_Number" value="<?php echo htmlspecialchars($bookingDetails['Phone_Number']); ?>" required>
                </div>
                <div class="field input">
                    <label for="Event_Type">Event Type</label>
                    <input type="text" name="Event_Type" id="Event_Type" value="<?php echo htmlspecialchars($bookingDetails['Event_Type']); ?>" required>
                </div>
                <div class="field input">
                    <label for="Event_Date">Event Date</label>
                    <input type="date" name="Event_Date" id="Event_Date" value="<?php echo htmlspecialchars($bookingDetails['Event_Date']); ?>" required>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="update" value="Update Details">
                   
                   <br><a href="details.php">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
