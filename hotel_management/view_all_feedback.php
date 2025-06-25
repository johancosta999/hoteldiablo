<?php
// Start session if needed (e.g., for a logged-in user system)
session_start();

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback</title>
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
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #fff;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
        p {
            text-align: center;
            color: #666;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>All Customer Feedback</h1>

    <!-- PHP to retrieve and display all feedback -->
    <?php
    // Retrieve all feedback from the database
    $sql = "SELECT * FROM feedback ORDER BY feedback_date DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Date</th>
                    <th>Comments</th>
                    <th>Rate</th>
                </tr>";
        // Output data for each feedback entry
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['feedback_date'] . "</td>
                    <td>" . $row['comments'] . "</td>
                    <td>" . $row['rate'] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No feedback available.</p>";
    }

    $conn->close();
    ?>
</div>

</body>
</html>
