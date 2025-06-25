<?php
session_start();


if ($_SESSION['role'] !== 'admin') {
    header("Location:login1.php");
    exit();
}

include('db_connect.php');


$result = $conn->query("SELECT id, username, email, role FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="admin_dashboard.css">
     

   
</head>


<body>
    <header class="admin-header-bar">
        <a href="#" class="admin-logo">
            <img src="../images/logo-color.png" alt="logo">
        </a>

        <h1>HOTEL DIABLO | ADMIN DASHBOARD</h1>
    </header>

    

<section>
    <div class="container">
        <div class="header header-bar">
        
        <h2 style="text-decoration: underline">User Management</h2>
        
        <section id="2" style="padding-top= 1px;">
            <a href="../billing_system/display.php" class="btn billing-btn">Billing Details</a> 

            <!-- Logout Button -->
            <a href="logout.php" class="btn logout-btn">Logout <i class="fas fa-sign-out-alt"></i></a>

        </section>
    </div>

        

    <div class="table-container">
        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table table-hover table-bordered'>";
            echo "<thead>";
            echo "<tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                  </tr>";
            echo "</thead><tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['role']}</td>
                        <td class='action-btns'>
                            <a href='edit_user.php?id={$row['id']}' class='btn btn-sm btn-warning'><i class='fas fa-edit'></i> Edit</a>
                            <a href='delete_user.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure you want to delete this user?\")'><i class='fas fa-trash-alt'></i> Delete</a>
                        </td>
                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-info'>No users found!</div>";
        }
        ?>
    </div>
</div>
</section>


</body>
</html>
