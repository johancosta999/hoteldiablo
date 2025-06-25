<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Diablo - Dining Overview</title>
    <link rel="stylesheet" href="dinningview.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-content">
            <img src="images/logo-white.png" alt="Hotel Diablo" class="logo">
            <h1>HOTEL DIABLO</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li class="dropdown">
                        <a href="#">Dining</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Restaurant</a></li>
                            <li><a href="#">Cafe</a></li>
                            <li><a href="#">Bar & Lounge</a></li>
                            <li><a href="#">Private Dining</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Offers</a></li>
                    <li><a href="#">Rooms & Suites</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </div>
        </div>
    </header>

    <!-- Carousel -->
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/dining-area1.jpg" alt="Dining Area 1">
            </div>
            <div class="carousel-item">
                <img src="images/dining-area2.JPG" alt="Dining Area 2">
            </div>
            <div class="carousel-item">
                <img src="images/dining-area3.jpg" alt="Dining Area 3">
            </div>
        </div>
        <button class="carousel-prev">‹</button>
        <button class="carousel-next">›</button>
    </div>

    <!-- Dining Cards -->
    <section class="dining-cards">
        <div class="card">
            <h3>Royal Cafe</h3>
            <img src="images/royal_cafe.jpg" alt="Royal Cafe">
            <button class="see-more">See More</button>
            <div class="rating">★★★★☆</div>
        </div>
        <div class="card">
            <h3>Gourmet Restaurant</h3>
            <img src="images/gourmet_restaurant.jpg" alt="Gourmet Restaurant">
            <button class="see-more">See More</button>
            <div class="rating">★★★★☆</div>
        </div>
       
        <div class="card">
            <h3>Bar & Lounge</h3>
            <img src="images/bar-lounge.jpg" alt="Bar & Lounge">
            <button class="see-more">See More</button>
            <div class="rating">★★★★★</div>
        </div>
    </section>

    <footer>
       
        <!-- Footer -->
  
      <div class="row1">
          <div class="col1">
              <img src="images/logo-white.png" class="logo">
              <h1>Diablo Hotel<br><br> Colombo </h1>
          </div>
          <div class="col1">
              <h3>Office</h3>
              <p>The Diablo Hotel, Colombo</p>
              <p>No.64, Lotus Road, Colombo 01,</p>
              <p>Sri Lanka.</p><br><br>
              <p class="email-id">hoteldiablo@gmail.com</p>
              <h4>+91-753585268</h4>
          </div>
          <div class="col1">
              <h3>Links</h3>
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Dining</a></li>
                  <li><a href="#">Rooms & Suites</a></li>
                  <li><a href="#">Offers</a></li>
                  <li><a href="#">Contact Us</a></li>
              </ul>
          </div>
          <div class="col1">
              <p>Follow us on social media:</p><br>
              <img src="images/facebook.png" alt="Facebook" width="40px" height="40px">
              <img src="images/youtube.png" alt="YouTube" width="40px" height="40px">
              <img src="images/twitter.png" alt="Twitter" width="40px" height="40px">
              <img src="images/linkedin.png" alt="LinkedIn" width="40px" height="40px">
              <img src="images/web.png" alt="web" width="40px" height="40px">
          </div>
      </div>



  </footer>

</body>
</html>
