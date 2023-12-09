<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - Imperial Hotel</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* CSS styles for the gallery  */
        .room-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 1fr);
            grid-gap: 1px; 
        }
        
        .room-image img {
            max-width: 100%;
            height: auto;
            border: 10px solid #ccc;
        }

        .learn-more-button {
            text-align: right;
            margin-top: 20px;
        }

        .learn-more-button-container {
            text-align: center;
            margin-top: 20px;
        }
        .learn-more-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF; 
            color: white; 
            text-decoration: none;
            border-radius: 5px;
        }

            /* CSS styles for the footer */
     footer {
            background-color:white;
            color: black;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap; /* Allow items to wrap on smaller screen */
        }


/* Style for the social media icons */
        .social-media {
            list-style: none;
            padding: 0;
            margin: 10;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center; 
            
        }

        .social-media li {
            display: inline-block;
            margin: 0 10px; 
        }

        .social-media a {
            text-decoration: none;
            color: black; 
            font-size: 24px;
        }

        .company-info {
          color: black;
        }

/* Style for contact info and company info */
        .contact-info,
        .company-info {
        width: 50%; 
        }

/*  contact info */
        .contact-info {
        text-align: left;
        }

/* company info */
        .company-info {
        text-align: right;
        }
        
        .header-banner {
    background-color: #333; 
    text-align: center; 
    padding: 20px 0;
}

.header-banner img {
    max-width: 100%; /* image inside container */
}

.book-button {
    background-color: #007BFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    padding: 10px 20px;
}

.book-button:hover {
    background-color: #0056b3;
}

.button-container {
    text-align: left;
    margin-top: 20px;
}

/* CSS styles for the Check-In Form Section */
.check-in-section {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    color: #000;
}

.check-in-section h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

.check-in-section p {
    font-size: 16px;
    margin-bottom: 20px;
}

.check-in-section form {
    text-align: left;
}

.check-in-section label {
    font-weight: bold;
    font-size: 18px;
}

.check-in-section input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    margin-top: 10;
    margin-bottom: 10;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    position: left;
}

.check-in-section input[type="submit"] {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
}

.check-in-section input[type="submit"]:hover {
    background-color: #0056b3;
}

        </style>
</head>
<body>
     <!-- Navigation Bar -->
     <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="form.php">Form></a></li>
        </ul>
    </nav>
    <h1>A Glimpse of Our Rooms</h1>
    <p>Discover our elegant and comfortable rooms that will make your stay truly memorable.</p>

    <!-- Gallery Section -->
    <div class="room-gallery">
        <div class="room-image">
            <img src="images/free-photo-of-bed-in-cozy-bedroom.jpeg" alt="Room 1">
        </div>
        <div class="room-image">
            <img src="images/pexels-photo-1743231.jpeg" alt="Room 2">
        </div>
        <div class="room-image">
            <img src="images/pexels-photo-164595.jpeg" alt="Room 3">
        </div>    
        <div class="room-image">
            <img src="images/pexels-photo-2747901.jpeg" alt="Room 4">
        </div>
        <div class="room-image">
            <img src="images/pexels-photo-7168109.jpeg" alt="Room 5">
        </div>
        <div class="room-image">
            <img src="images/pexels-photo-4992454.jpeg" alt="Room 6">
        </div>
        <div class="room-image">
            <img src="images/pexels-photo-5998049.jpeg" alt="Room 7">
        </div>
        <div class="room-image">
            <img src="images/pexels-photo-7545786.jpeg" alt="Room 8">
        </div>
        <div class="room-image">
            <img src="images/pexels-photo-6782473.jpeg" alt="Room 9">
        </div>

        <div class="learn-more-button">
            <a href="contact.php">Learn more!</a>
        </div>

        <!-- Check-In Form Section -->
    <div class="check-in-section">
        <h2>Welcome to Imperial Hotel!</h2>
        <p>Please fill in the below information.</p>

        <form action="checkin.php" method="POST">
            <!-- Form fields -->
            <form action="checkin.php" method="POST">
        <label for="name">FirstName:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="name">LastName:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone number:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="check-in-date">Check In Date:</label>
        <input type="date" id="check-in-date" name="check-in-date" required><br><br>

        <label for="check-in-time">Check In & Check Out Time: (HH:MM & HH:MM)</label>
        <input type="text" id="check-in-time" name="check-in-time" required><br><br>

        <input type="submit" value="Submit">
    </form>
</div>

    <!-- Footer Section -->
    <footer>
        <div class="contact-info">
            <i class="fas fa-map-marker-alt"></i> 11 Revolution Street, Houston, Texas<br>
            <i class="fas fa-envelope"></i> imperial@gmail.com<br>
            <i class="fas fa-phone"></i> +4545 4544545
        </div>
        <div class="company-info">
            <h4>About the Company</h4>
            <p>Imperial Hotel is a renowned luxury hospitality company, founded in 1990. Known for its opulent properties in prime locations worldwide, it combines history with modern luxury to provide an unforgettable guest experience.</p>
            <p style="text-align: right;">Right</p>
        </div>
        <ul class="social-media">
            <li><a href="https://www.facebook.com/your-facebook-profile"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/your-instagram-profile"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/your-twitter-profile"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </footer>
</body>
</html>



