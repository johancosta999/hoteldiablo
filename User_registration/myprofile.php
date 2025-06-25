<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'user') {
    header("Location: index.php");
    exit();
}

// Assuming the session holds 'email'
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'No email provided';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="myprofile.css" rel="stylesheet">
</head>

<header class="header">
    <a href="#" class="logo">
        <img src="/html/images/logo-black.png" alt="logo">
    </a>

    <nav class="navbar">
        
        <a href="/hoteldiablo/webhome.php">Home</a>

        
        <li class="dropdown">
            <a href="#">Dining</a>
            <ul class="dropdown-menu">
                <li><a href="/hoteldiablo/resturant.php">Gourmet Restaurant</a></li>
                <li><a href="/hoteldiablo/royal-cafe.php">Royal Cafe</a></li>
            </ul>
        </li>

        
        <li class="dropdown">
            <a href="#">Event</a>
            <ul class="dropdown-menu">
                <li><a href="/hoteldiablo/Event_planning/booking.php">Event Booking</a></li>
            </ul>
        </li>

        
        <a href="/hoteldiablo/Hotel_Room_Booking/booking.php">Rooms & Suites</a>
        <a href="/hoteldiablo/offers.php">Offers</a>
        <a href="/hoteldiablo/hotel_management/feedback_form.php">FAQ</a>
    </nav>

    <div class="search-bar">
        <input type="text" placeholder="Search in our site...">
    </div>

    
</header>



<body>
   
        <nav>
            <div class="navbar">
                
                <div class="navbar-right">
                    <a class="btn btn-logout" href="logout.php">Logout</a>
                </div>
            </div>
        </nav>
   
    <section>
    <div class="container">
        <div class="profile-card">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
           
            <a href="logout.php" class="btn btn-logout">Logout</a>
            
        </div>
    </div>
</section>

</body>
</html>
