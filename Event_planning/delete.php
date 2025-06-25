<?php
session_start(); 
include("config.php");
if(!isset($_SESSION['userid'])){
header("Location: booking.php"); 
exit();
}


$userId = $_SESSION['userid'];


$query = "DELETE FROM booking WHERE User_Id = '$userId'";


if (mysqli_query($con, $query)) {
    unset($_SESSION['userid']);
    echo "<script>
            alert('Booking has been successfully deleted.');
            window.location.href='Booking.php'; // Redirect to booking page after deletion
          </script>";
} else {
    echo "<p>Error deleting record: " . mysqli_error($con) . "</p>";
}


mysqli_close($con);
?>
