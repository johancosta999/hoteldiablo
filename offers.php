<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Diablo Offers</title>
    <link rel="stylesheet" href="offers.css">

    <script>
        function placeOrder(offerName) {
    alert("You have selected the " + offerName + ". Our team will contact you shortly!");
    // You can add more functionality here, such as sending data to the server or redirecting to a confirmation page.
}
    </script>

</head>
<body>
    <section>
    <!-- Header -->
    <header class="header">
        <a href="#" class="logo">
            <img src="/html/images/logo-black.png" alt="logo">
        </a>

        <nav class="navbar">
            <a href="#home">Home</a>

            <li class="dropdown">
                <a href="#">Dinning </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Cafe</a></li>
                    <li><a href="#">Bar & Lounge</a></li>
                    <li><a href="#">Dinning Overview</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Event </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Event Booking</a></li>
                    <li><a href="#">Event Reminder</a></li>
                </ul>
            </li>

            <a href="#Rooms">Rooms & Suites</a>
            <a href="#Offers">Offers</a>
            <a href="#FAQ">FAQ</a>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search in our site...">
        </div>
        <div class="icons">
            
           <a href="User_registration/myprofile.php"> <button class="icon" style="background-color: grey; border-radius: 3px">My Profile</button></a>
        </div>

    </header>
    </section>
    <!-- Offers Section -->
     <section>
    <div class="offers-section">
        <h2><b>Special Offers</b></h2>
        <p style="font-size: 1.5rem;">Plan your luxurious getaway in the heart of the city with a range of rewarding Colombo hotel offers exclusively available at Galadari Hotel. We want to ensure our guests make the most of their stay with easy access to a host of modern essentials and world-class facilties. An out-of-the-world experience awaits you!</p>
    </section>  
        <div class="offer-categories">
            <!-- Dine Section -->
            <div class="category">
               <h3>Dine</h3>
               <img src="dinner.jpg" alt="Dine Offers" >
               <h3 style="color: grey;"> Weekday Offer - Lunch Buffet & Dinner Buffet</h3>
               <p><b>15% discount</b> on Lunch Buffet and Dinner Buffet at Diablo hotel from Monday to Thursday, exclusively for Sampath Bank, Nations Trust Bank and Commercial Bank Card holders. Conditions Apply.
               <br><br>For Reservations-Call 077 228 9721 / 074 310 4270.
               <br>Valid from 1st of October 2024 to 30th October 2023.</p>

                 
                <button onclick="placeOrder('Weekday Offer')">Place Order</button>
            </div>

            <!-- Celebrations Section -->
            <div class="category">
                <h3>Rooms & Suites</h3>
                <img src="room.jpg" alt="Celebration Offers">
                <h3 style="color: grey;">Group Booking Packages</h3>
                <p> For instance, if a user books more than 10 rooms for an event, they might receive a complimentary room or additional services like catering discounts.
                <br><br>For Reservations-Call 077 228 9721 / 074 310 4270.
                <br>Valid from 1st of October 2024 to 30th October 2023.</p>
 
                <button onclick="placeOrder('Group Booking Package')">Place order</button>
            </div>
        </div>
    </div>

    
        <div class="offer-categories">
            <!-- Dine Section -->
            <div class="category">
                <h2>Dine</h2>
                <img src="Seafood.jpg" alt="Dine Offers">
                <h3 style="color: grey;">Seafood Buffet Dinner</h3>
                <p><b>20% discount</b> On Seafood Dinner Buffet at Diablo Hotel from Sunday, exclusively for Sampath Bank, Nations Trust Bank and Commercial Bank Card holders. Conditions Apply.
                <br><br>For Reservations-Call 077 228 9721 / 074 310 4270.
                <br>Valid from 1st of October 2023 to 30th October 2023.</p>
         
                <button onclick="placeOrder('Seafood Buffet Dinner')">Place Order</button>
            </div>

            <!-- Celebrations Section -->
            <div class="category">
                <h2>Items</h2>
                <img src="early bird.jpg" alt="Celebration Offers">
                <h3 style="color: grey;">Early Bird Discount</h3>
                <p>Offering a discount to users who book an event or reserve rooms for an event early, say a 15% discount for bookings made 30 days before the event date.</p>
                <button onclick="placeOrder('Early Bird Discount')">Place order</button>
            </div>

        </div><br>
    

    <div class="offer-categories">
        <!-- Dine Section -->
        <div class="category">
            <h2>Dine</h2>
            <img src="brunch.jpg" alt="Dine Offers">
            <h3 style="color: grey;">Weekend Offer - Sunday Jazz Brunch Buffet</h3>
            <p>20% discount on the Sunday Jazz Brunch at Diablo Hotel on every Sunday, exclusively for Commercial Bank Premium Credit Card holders. Conditions Apply.
                <br><br>For Reservations Call 077 228 9721 / 074 310 4270
                <br>Valid from 1st of October 2023 to 30th October 2023.</p>
            <button onclick="placeOrder('Weekend Offer')">Place Order</button>
        </div>

        <!-- Celebrations Section -->
        <div class="category">
            <h2>Celebrations</h2>
            <img src="cele 1.avif" alt="Celebration Offers">
            <p>Celebrate Birthdays, Anniversaries or any other memorable occasion:<br>
                @ Coffee Shop<br>
                Daily<br>
                7.00 pm to 11.00 pm.</p>
            <button onclick="placeOrder('Celebrations')">Place order</button>
        </div>
    </div>
</div>

    <!-- Footer Section -->
    <footer>
        <div class="row">
            <div class="col">
                <img src="logo.png" class="logo">
                <h1>Diablo Hotel<br><br> Colombo </h1>
            </div>
            <div class="col">
                <h3>Office</h3>
                <p>The Diablo Hotel,Colombo</p>
                <p>No.64,lotus Road,Colombo 01,</p>
                <p>Sri Lanka.</p><br><br>
                <p class="email-id">hoteldiablo@gmail.com</p>
                <h4>+91- 753585268</h4>
               

            </div>
            
            <div class="col">
            <h3>links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Dining</a></li>
                <li><a href="#">Rooms & Suits</a></li>
                <li><a href="#">Offers</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
           
        </div>
            <div class="col">
                 <p>Follow us on social media:</p><br>
                <img src="facebook.png" alt="Facebook" width="40px" height="40px">
                <img src="youtube.png" alt="YouTube" width="40px" height="40px">
                <img src="twitter.png" alt="Twitter" width="40px" height="40px">
                <img src="linkedin.png" alt="LinkedIn" width="40px" height="40px">
                <img src="web.png" alt="web" width="40px" height="40px">
               
            </div>
           
    
        </div>
    </footer>
   


            

</body>
</html>
