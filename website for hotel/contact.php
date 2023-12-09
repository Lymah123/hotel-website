<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Imperial Hotel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
         /* Global styling for the body */
         body {
            background-color: black;
            color: #000000;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

          /* Navigation Bar styling */
          .navbar {
            text-align: right;
            margin-top: 10px;
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .navbar ul li {
            margin-left: 20px;
        }
        
        .navbar ul li a {
            text-decoration: none;
            color: white;
        }
        
        /* Contact Page styling */
        body {
            background-color: black;
            color: #000000;
            font-family: Arial, sans-serif
        }
        /* Contact Form styling */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color : #000000;
        }

        textarea {
            height: 150px;
        }

        button {
            display: block;
            margin: 0 auto;
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #333;
        }

/*  Color for Contact heading and paragraph */
        h1 {
            color: #fff; 
        }

        p {
            color: whitesmoke; 
        }

 /* Style for the social media icons */
            .social-media {
                list-style: none;
                padding: 0;
                margin: 30;
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
            margin-right: 10px;
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
        .header-banner {
    background-color: #333; 
    text-align: center; 
    padding: 20px 0;
}

/* CSS for the footer */
footer {
    background-color: #333;
    color: white; /* Change text color to white */
    padding: 20px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

/* Style for contact info and company info */
.contact-info,
.company-info {
    width: 50%;
    text-align: right;
}
.header-banner img {
    max-width: 100%; /* Make sure the image fits within the container */
}
.contact-info {
    text-align: left;
}
/* company info */
.company-info h4 {
    font-size: 18px;
    margin-top: 0;
}
.company-info p {
    font-size: 14px;
    margin-top: 10px;
}
/* Style for the social media icons */
.social-media {
    list-style: none;
    padding: 0;
    margin: 0; /* Remove margin to center */
    text-align: center;
    display: flex;
    justify-content: right; /*Center horizontally */
    align-items: right; 
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
    <h1>Contact Us</h1>
    <p>If you have any questions or need further information, please don't hesitate to contact us. We are here to help you.</p>

    <div class="header-banner">
    <img src="images/pexels-photo-5661024.jpeg" alt="Banner Image">
</div>

    <!-- Contact Form -->
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required style="width: 100%;">
    
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required style="width: 100%;">
    
        <label for="message">Message:</label>
        <textarea id="message" name="message" required style="width: 100%;"></textarea>

        <button type="submit">Submit</button>
    </form>

 <!-- Footer Section (copied from Home page) -->
<footer>
    <ul class="social-media">
        <li><a href="https://www.facebook.com/your-facebook-profile"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/your-instagram-profile"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://twitter.com/your-twitter-profile"><i class="fab fa-twitter"></i></a></li>
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
</body>
</html>

