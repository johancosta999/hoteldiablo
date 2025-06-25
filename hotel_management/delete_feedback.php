<?php
// Check if feedback ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_diablo1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to delete the feedback
    $sql = "DELETE FROM feedback WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback deleted successfully.";
    } else {
        echo "Error deleting feedback: " . $conn->error;
    }

    // Close the connection
    $conn->close();

    // Redirect back to the view_feedback.php page
    header("Location: view_feedback.php");
    exit();
} else {
    echo "No feedback ID provided.";
}
?>
