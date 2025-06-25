<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add New Bill</title>
</head>


<body>

<header class="header">
    <a href="#" class="logo">
        <img src="logo-color.png" alt="logo">
    </a>

    <h1>HOTEL DIABLO | ADMIN DASHBOARD</h1>

</header>

<section>
<h2 style="text-decoration: underline">Add New Bill</h2>

<form action="create.php" method="POST">
    <label for="customer_name">Customer Name:</label>
    <input type="text" id="customer_name" name="customer_name" required>
    
    <label for="amount_due">Amount Due:</label>
    <input type="number" id="amount_due" name="amount_due" step="0.01" required>
    
    <label for="due_date">Due Date:</label>
    <input type="date" id="due_date" name="due_date" required>
    
    <label for="status">Status:</label>
    <select id="status" name="status" required></select>

    <br>

    <label for="description">Description (Optional):</label>
    <input type="text" id="description" name="description"> <!-- No required attribute -->

    <input type="submit" value="Add Bill">
</form>

<a href="display.php" class="back-btn" style="padding-right: 20px">Back to Billing List</a>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'hotel_diablo1');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO billing (description, customer_name, amount_due, due_date, status) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $description, $customer_name, $amount_due, $due_date, $status);

    // Set parameters and execute
    $description = $_POST['description'] ?? ''; // Use an empty string if not set
    $customer_name = $_POST['customer_name'];
    $amount_due = $_POST['amount_due'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];
    
    if ($stmt->execute()) {
        echo "New bill added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
</section>

<script src="create.js"></script>
</body>
</html>
