<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Diablo</title>
    <link rel="stylesheet" href="webhome.css">
</head>
<body>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Diablo</title>
    <link rel="stylesheet" href="webhome.css">
</head>
<body>

    <header class="header">
        <a href="#" class="logo">
            <img src="/html/images/logo-color.png" alt="logo">
        </a>

        <nav class="navbar">
            <a href="webhome.html">Home</a>

            <li class="dropdown">
                <a href="dinning_overview.php">Dinning</a>
                <ul class="dropdown-menu">
                    <li><a href="resturant.php">Gourmet Restaurant</a></li>
                    <li><a href="royal-cafe.php">Royal Cafe</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Event</a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? '../hoteldiablo/Event_planning/booking.php' : '../hoteldiablo/User_registration/login1.php'; ?>">Event Booking</a></li>
                    
                </ul>
            </li>

            <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? '../hoteldiablo/Hotel_Room_Booking/booking.php' : '../hoteldiablo/User_registration/login1.php'; ?>">Rooms & Suites</a>
            
            <a href="offers.php">Offers</a>
            <a href="../hoteldiablo/hotel_management/feedback_form.php">FAQ</a>
    </nav>


        
        <div class="search-bar">
            <input type="text" placeholder="Search in our site...">
        </div>
        
        <div class="icons">
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                echo '<a href="../hoteldiablo/User_registration/profile.php" class="auth-buttons">My Profile</a>';
            } else {
                echo '<a href="../hoteldiablo/User_registration/login1.php" class="auth-buttons">Log in</a>';
                echo '<a href="../hoteldiablo/User_registration/singin.php" class="auth-buttons">Sign up</a>';
            }
            ?>
        </div>
    </header>

    
</body>
</html>


    <section class="home" id="home">
    <div class="content">
        <br><br>
        <h3>Welcome To Hotel Diablo</h3>
        <p>Welcome to Hotel Diablo, your go-to platform for seamless hotel billing and event planning. Easily manage bookings, dining, and stay informed with automated reminders for upcoming events. Experience a streamlined, user-friendly interface designed to simplify your hotel experience.</p>
        
        
        <p id="moreContent" style="display: none;">Our hotel offers premium serv0ices, including luxurious rooms, gourmet dining options, and event planning support to make your stay memorable. Whether you're here for business or leisure, Hotel Diablo has you covered with top-notch facilities and 24/7 customer service.</p>
        
        
        <a href="javascript:void(0);" class="btn" id="toggleBtn" onclick="toggleContent()">View more</a>
    </div>
</section>

<section class="about" id="about">
    <h1 class="heading">About <span> Us </span></h1>
    <div class="card">
        <div class="image">
            <img src="images/cmb.jpg" alt="About Image">
        </div>
        <div class="content">
            <h3>What makes our hotel special?</h3>
            <p>Hotel Diablo offers a seamless platform for hotel guests and event planners to manage their bookings and schedules. The site features tools for online billing, event reminders, room reservations, and dining options.</p>

            
            <p id="moreAbout" style="display: none;"> With pages dedicated to dining, room searches, event planning, and special offers, it caters to the diverse needs of guests. The intuitive design and reminders ensure that users stay informed of important events and payments, making their experience smooth and stress-free. Hotel Diablo prioritizes user convenience through integrated notifications, billing overviews, and customer support options.</p>

            <a href="javascript:void(0);" class="btn" id="toggleAboutBtn" onclick="toggleAbout()">Learn more</a>
        </div>
    </div>
</section>


    <section class="products" id="products">
        <h1 class="heading">Our <span>Offers </span></h1>

        <div class="box-container">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <a href="offers.html"><img src="images/kiribath.jpg" alt=""></a>
            </div>
            <div class="content">
                <h3 style="padding-top: 35%;">Fresh Brewed Coffee</h3>
                <p style="color: #fff;">Aromatic and rich, our freshly brewed coffee is crafted from premium hand-picked beans to ensure a bold and smooth flavor with every sip.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99<span>$20.99</span></div>
            </div>
        </div>

            <div class="box-container">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <a href="offers.html"><img src="images/pasta1.jpg""></a>
                </div>
                <div class="content">
                    <h3 style="padding-top: 35%;">Espresso Delight</h3>
                    <p style="color: #fff;">A shot of pure energy, our espresso is dark, robust, and the perfect way to kick-start your day or enjoy a quick, flavorful pick-me-up.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$15.99<span>$20.99</span></div>
                </div>
            </div>

            <div class="box-container">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <a href="offers.html"><img src="images/food2.jpg" alt=""></aa>
                </div>
                <div class="content">
                    <h3 style="padding-top: 35%;">Vanilla Latte</h3>
                    <p style="color: #fff;">Indulge in the sweet and creamy blend of fresh vanilla with rich espresso, balanced with steamed milk and a perfect layer of froth.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$15.99<span>$20.99</span></div>
                </div>
            </div>
        </div>


    </section>

    <section class="contact" id="contact">
        <h1 class="heading">Get In <span>Touch</span></h1>
    
        <form action="#">
            <input type="text" placeholder="Name" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="text" placeholder="Feedback" class="box">
            <button type="submit" class="btn">Submit</button>
        </form>
    </section>
    
    
    <footer>
        <div class="row1">
            <div class="col1">
                <img src="images/logo-color.png" class="logo">
                <h1 style="color: black;">Hotel Diablo <br><br> Colombo </h1>
            </div>
            <div class="col1">
                <h3 style="color: black;">Office</h3>
                <p style="color: black;">The Hotel Diablo ,Colombo</p>
                <p style="color: black;">No.64,lotus Road,Colombo 01,</p>
                <p style="color: black;">Sri Lanka.</p><br><br>
                <p class="email-id" style="color: black;">hoteldiablo@gmail.com</p>
                <h4>+91- 753585268</h4>
               

            </div>
            
            <div class="col1">
            <h3 style="color: black; text-decoration: underline;">links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Dining</a></li>
                <li><a href="#">Rooms & Suits</a></li>
                <li><a href="#">Offers</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
           
        </div>
            <div class="social-icons">
                 <p>Follow us on social media:</p><br>
                <img src="images/facebook.png" alt="Facebook" style="width: 20px; height: 20px;">
                <img src="images/youtube.png" alt="YouTube" style="width: 20px; height: 20px;">
                <img src="images/twitter.png" alt="Twitter" style="width: 20px; height: 20px;">
                <img src="images/linkedin.png" alt="LinkedIn" style="width: 20px; height: 20px;">
                <img src="images/web.png" alt="web" style="width: 20px; height: 20px;">
               
            </div>
           
    
        </div>
    </footer>





    <script>
        function toggleContent() {
            var moreText = document.getElementById("moreContent");
            var btnText = document.getElementById("toggleBtn");
        
            
            if (moreText.style.display === "none") {
                moreText.style.display = "block";
                btnText.innerHTML = "View less";
            } else {
                moreText.style.display = "none";
                btnText.innerHTML = "View more";
            }
        }

            function toggleAbout() {
        var moreText = document.getElementById("moreAbout");
        var btnText = document.getElementById("toggleAboutBtn");

        
        if (moreText.style.display === "none") {
            moreText.style.display = "inline";
            btnText.innerHTML = "Learn less";
        } else {
            moreText.style.display = "none";
            btnText.innerHTML = "Learn more";
        }
    }

        </script>
        
            
</body>
</html>
