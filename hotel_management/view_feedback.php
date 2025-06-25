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
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
        td a.delete, td a.edit {
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            background-color: #f2f2f2;
        }
        td a.delete {
            color: #dc3545;
        }
        td a.delete:hover {
            background-color: #f8d7da;
        }
        td a.edit {
            color: #007bff;
        }
        td a.edit:hover {
            background-color: #d1ecf1;
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
    <h1>Customer Feedback</h1>

    <!-- PHP to retrieve and display feedback -->
    <?php
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

    // Retrieve feedback
    $sql = "SELECT * FROM feedback ORDER BY feedback_date DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Date</th>
                    <th>Comments</th>
                    <th>Rate</th>
                    <th>Actions</th>
                </tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['feedback_date'] . "</td>
                    <td>" . $row['comments'] . "</td>
                    <td>" . $row['rate'] . "</td>
                    <td>
                        <a href='edit_feedback.php?id=" . $row['id'] . "' class='edit'>Edit</a> | 
                        <a href='delete_feedback.php?id=" . $row['id'] . "' class='delete' onclick='return confirm(\"Are you sure you want to delete this feedback?\");'>Delete</a>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No feedback available at the moment.</p>";
    }

    $conn->close();
    ?>
</div>

</body>
</html>
