<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get feedback ID from URL
$feedback_id = $_GET['id'];

// Fetch the feedback to be edited
$sql = "SELECT * FROM feedback WHERE id = $feedback_id";
$result = $conn->query($sql);
$feedback = $result->fetch_assoc();

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback_date = $_POST['feedback_date'];
    $comments = $_POST['comments'];
    $rate = $_POST['rate'];

    // Update the feedback in the database
    $update_sql = "UPDATE feedback SET feedback_date = '$feedback_date', comments = '$comments', rate = $rate WHERE id = $feedback_id";

    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Feedback updated successfully!'); window.location.href='view_feedback.php';</script>";
    } else {
        echo "Error updating feedback: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<h1>Edit Feedback</h1>

<form method="POST" action="">
    <label for="feedback_date">Date:</label>
    <input type="date" id="feedback_date" name="feedback_date" value="<?php echo $feedback['feedback_date']; ?>" required>

    <label for="comments">Comments:</label>
    <textarea id="comments" name="comments" rows="4" required><?php echo $feedback['comments']; ?></textarea>

    <label for="rate">Rate (1 to 5):</label>
    <input type="number" id="rate" name="rate" min="1" max="5" value="<?php echo $feedback['rate']; ?>" required>

    <button type="submit">Update Feedback</button>
</form>

</body>
</html>
