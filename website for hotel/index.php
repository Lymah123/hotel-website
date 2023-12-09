<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" 
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" 
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <style>
            /* Style for the social media icons */
            .social-media {
                list-style: none;
                padding: 0;
                margin: 0;
                text-align: center; 
            }
        
            .social-media li {
                display: inline-block;
                margin: 0 10px; 
            }
        
            .social-media a {
                text-decoration: none;
                color: white; 
                font-size: 24px; 
            }

            .contact-info i {
            margin-right: 5px;
        }

       /* Style for the company info */
       .company-info {
            text-align: right;
            padding: 0 20px; 
            flex: 1; 
        }

        .company-info h4 {
            font-size: 18px;
            margin-top: 0; 
        }

        .company-info p {
            font-size: 14px;
            margin-top: 10px;
        }

        /* Style for the Rooms Section */
#rooms {
    background-color: #f0f0f0;
    padding: 40px;
    text-align: center;
}

#rooms h2 {
    font-size: 32px;
    margin-bottom: 10px;
}

#rooms p {
    font-size: 16px;
    margin-bottom: 20px;
}

/* Style for the room galleries */
.room-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.room {
    flex-basis: calc(33.33% - 20px); 
    margin-bottom: 20px;
}

.room img {
    width: 100%;
    height: auto;
    border: 1px solid #ddd; 
    border-radius: 5px; 
    transition: transform 0.2s; 
}
.room img:hover {
    transform: scale(1.1);
}


/* Custom style for the button */
.btn-custom {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
    color: orange;
    text-decoration: none;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    margin-top: 20px;
    cursor: pointer;
}

.btn-custom:hover {
    background-color: orange;
    color: black;
}
  </style>
    <title>Imperial Hotel</title>
  </head>
  <body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="form.php">Form></a></li>
        </ul>
    </nav>

    <!-- Header Section -->
    <header>
        <!-- Header content -->
    </header>

    <!-- Home Section -->
    <div class="hotel-header">
        <h1>Imperial Hotel</h1>
        <p>We help guests create lifetime memories they never forget.</p>
    </div>

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/pexels-photo-2869215.jpeg" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
          <img src="images/pexels-photo-2175211.jpeg" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
          <img src="images/pexels-photo-5661024.jpeg" class="d-block w-100" alt="Image 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Rooms Section -->
<section id="rooms">
    <h2>Our Rooms</h2>
    <p>Experience comfort and luxury in our beautifully designed rooms.</p>
    <!-- Standard Room Gallery -->
    <h3>Standard Room Gallery</h3>
    <div class="room-gallery">
        <div class="room">
            <img src="images/pexels-photo-2869215.jpeg" alt="Standard Room 1 - Photo 1">
            <!-- Standard Room 1 Description for Photo 1 -->
        </div>
        <div class ="room">
            <img src="images/pexels-photo-5661024.jpeg" alt="Standard Room 1 - Photo 2">
            <!-- Standard Room 1 Description for Photo 2 -->

            </div>
        <div class="room">
            <img src="images/pexels-photo-2175211.jpeg" alt="Standard Room 1 - Photo 2">
            <!-- Standard Room 1 Description for Photo 2 -->
        </div>

        <!-- more photos and descriptions for Standard Room 1 -->
    </div>

    <!-- Luxury Suite Gallery -->
    <h3>Luxury Suite Gallery</h3>
    <div class="room-gallery">
        <div class="room">
            <img src="images/pexels-photo-5661024.jpeg" alt="Luxury Suite 1 - Photo 1">
            <!-- Luxury Suite 1 Description for Photo 1 -->
        </div>
        <div class="room">
            <img src="images/pexels-photo-2869215.jpeg" alt="Luxury Suite 1 - Photo 2">
            <!-- Luxury Suite 1 Description for Photo 2 -->
        </div>
        <div class="room">
            <img src="images/pexels-photo-2175211.jpeg" alt="Luxury Suite 1 - Photo 3">
            <!-- Luxury Suite 1 Description for Photo 3 -->
        </div>

     <!-- Footer Section -->
     <footer>
        <ul class="social-media">
            <li><a href="https://www.facebook.com/your-facebook-profile"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/your-instagram-profile"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/your-twitter-profile"><i class="fab fa-twitter"></i></a></li> 
        </ul>        
    </ul>
    <div class="contact-info">
        <i class="fas fa-map-marker-alt"></i> 11 Revolution Street, Houston, Texas<br>
        <i class="fas fa-envelope"></i> imperial@gmail.com<br>
        <i class="fas fa-phone"></i> +4545 4544545
    </div>
<div class="company-info">
    <h4>About the Company</h4>
    <p>Imperial Hotel is a renowned luxury hospitality company, founded in 1990. Known for its opulent properties in prime locations worldwide, it combines history with modern luxury to provide an unforgettable guest experience.</p>
</div>
        
    </footer>

    <!-- Bootstrap JavaScript Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
  </body>
</html>
