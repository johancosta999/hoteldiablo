<?php
session_start();

/*
if (!isset($_SESSION['userid'])) {
    header("Location: login.php"); 
    exit();
}
*/
include("config.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planning</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<header>
    <h2>Welcome to Event Planning, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <a href="logout.php">Logout</a>
</header>

<div class="content">
   
</div>

</body>
</html>
