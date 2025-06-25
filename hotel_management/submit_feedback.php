<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <script src="script.js"></script>
    <title>Feedback Submission</title>
</head>



<body>
    <div class="container">
        <?php
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hotel_diablo1";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $feedback_date = $_POST['feedback_date'];
        $comments = $_POST['comments'];
        $rate = $_POST['rate'];

        // Insert into database
        $sql = "INSERT INTO feedback (feedback_date, comments, rate) VALUES ('$feedback_date', '$comments', $rate)";

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Feedback submitted successfully!</h1>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        $conn->close();
        ?>

        <br><br>
        <div class="button-container">
            <a href="feedback_form.php" class="btn">Go back to form</a>
            <a href="view_feedback.php" class="btn">View Feedback</a>
        </div>
    </div>
</body>
</html>
