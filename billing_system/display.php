<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display.css">
    <title>Billing CRUD</title>
</head>

<header class="header">
    <a href="#" class="logo">
        <img src="logo-color.png" alt="logo">
    </a>

    <h1>HOTEL DIABLO | ADMIN DASHBOARD</h1>

</header>


<body>
    <section>
    <h2 style="text-decoration: underline; padding-bottom: 40px;">Billing Records</h2>
    
    <a href="create.php" class="add-btn">Add New</a>

    <table>
        <thead>
            <tr>
                <th>Bill ID</th>
                <th>Description</th>
                <th>Customer</th>
                <th>Created Date & Time</th>
                <th>Updated Date & Time</th>
                <th>Status</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            
            $conn = new mysqli('localhost', 'root', '', 'hotel_diablo1');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query to select all billing records
            $sql = "SELECT * FROM billing";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["description"] . "</td>
                        <td>" . $row["customer_name"] . "</td>
                        <td>" . $row["created_date"] . "</td>
                        <td>" . $row["updated_date"] . "</td>
                        <td>" . $row["status"] . "</td>
                        <td>
                            <a href='view.php?id=" . $row["id"] . "' class='btn view-btn'>View</a>
                            <a href='update.php?id=" . $row["id"] . "' class='btn update-btn'>Update</a>
                            <a href='delete.php?id=" . $row["id"] . "' onclick='return confirmDelete();' class='btn delete-btn'>Delete</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

            <a href="../User_registration/admin_dashboard.php"><button class="btn btn-back">Back</buttons>

        </section>
    <script src="display.js"></script>
</body>
</html>
