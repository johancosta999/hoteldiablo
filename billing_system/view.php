<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .bill-container {
            background: rgb(236, 223, 238);
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .bill-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .bill-header div {
            text-align: left;
        }

        .bill-details {
            margin-top: 20px;
        }

        .bill-details p {
            line-height: 1.6;
            color: #555;
        }

        .bill-footer {
            text-align: right;
            margin-top: 30px;
        }

        .total {
            font-weight: bold;
            font-size: 1.2em;
            color: #333;
        }

        .status {
            font-weight: bold;
            color: #ff0000;
        }

        .paid {
            color: #28a745;
        }

        .back-btn {
            text-align: center;
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: purple;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-btn:hover {
            background-color: #333;
        }
    </style>
</head>
<body>

<div class="bill-container">
    <?php
    
    $conn = new mysqli('localhost', 'root', '', 'hotel_diablo1');

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        
        $sql = "SELECT * FROM billing WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>

            <h2 style="text-decoration: underline">Bill Details</h2>

            <div class="bill-header">
                <div>
                    <p><strong>Bill ID:</strong> <?php echo $row["id"]; ?></p>
                    <p><strong>Customer Name:</strong> <?php echo $row["customer_name"]; ?></p>
                </div>
                <div>
                    <p><strong>Date Issued:</strong> <?php echo $row["created_date"]; ?></p>
                    <p><strong>Due Date:</strong> <?php echo $row["due_date"]; ?></p>
                </div>
            </div>

            <div class="bill-details">
                <p><strong>Description:</strong> <?php echo $row["description"] ? $row["description"] : 'N/A'; ?></p>
                <p><strong>Amount Due:</strong> $<?php echo number_format($row["amount_due"], 2); ?></p>
                <p><strong>Status:</strong> 
                    <span class="<?php echo ($row['status'] == 'Paid') ? 'status paid' : 'status'; ?>">
                        <?php echo $row["status"]; ?>
                    </span>
                </p>
            </div>

            <div class="bill-footer">
                <p class="total">Total Due: $<?php echo number_format($row["amount_due"], 2); ?></p>
            </div>

            <?php
        } else {
            echo "<p>No bill found with this ID.</p>";
        }

        
        $stmt->close();
    } else {
        echo "<p>Invalid bill ID.</p>";
    }

    $conn->close();
    ?>
    
    <a href="display.php" class="back-btn">Back to Billing List</a>
</div>

</body>
</html>
