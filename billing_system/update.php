<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $bill_id = $_GET['id'];
    
    $sql = "SELECT * FROM billing WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $bill_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $bill = $result->fetch_assoc();
} else {
    header("Location: display.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $amount_due = $_POST['amount_due'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];

    $sql = "UPDATE billing SET customer_name = ?, amount_due = ?, due_date = ?, status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdssi", $customer_name, $amount_due, $due_date, $status, $bill_id);

    if ($stmt->execute()) {
        echo "<script>alert('Bill updated successfully!'); window.location.href='display.php';</script>";
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Bill</title>
</head>
<body>

<header class="header">
    <a href="#" class="logo">
        <img src="logo-color.png" alt="logo">
    </a>
    <h1>HOTEL DIABLO | ADMIN DASHBOARD</h1>
</header>

<section style="padding-top: 120px;"> <!-- Adjust for fixed header -->
    <h2 style="text-decoration: underline">Update Bill</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $bill['id']; ?>">

        <label for="customer_name">Customer Name:</label>
        <input type="text" id="customer_name" name="customer_name" value="<?php echo $bill['customer_name']; ?>" required>

        <label for="amount_due">Amount Due:</label>
        <input type="number" step="0.01" id="amount_due" name="amount_due" value="<?php echo $bill['amount_due']; ?>" required>

        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date" value="<?php echo $bill['due_date']; ?>" required>

        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="<?php echo $bill['status']; ?>" required>

        <input type="submit" name="submit" value="Update Bill">
    </form>

    <a href="display.php" class="back-btn">Back to Billing List</a> <!-- Added class for consistency -->
</section>

</body>
</html>
