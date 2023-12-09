<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
            * {
    box-sizing: border-box;
    }       
                body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center; 
        }
        .catchy-headline {
    text-align: center;
}

        .header-container {
            text-align: center; /* Center-align text within this container */
            max-width: 400px;
            margin: 20px auto;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .input {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .input {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .gender-container {
            display: flex;
            margin-bottom: 15px;
        }

        .gender-container label {
            margin-right: 10px;
        }

        .btn {
            text-align: center;
        }

        .button button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button button:hover {
            background-color: #45a049;
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
footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .contact-info, .company-info, .social-media {
            margin-bottom: 20px;
        }

        .contact-info i, .social-media i {
            margin-right: 5px;
        }

        .company-info h4 {
            font-size: 18px;
            margin-top: 0;
            color: #FFD700; /* Golden color for the heading */
        }

        .company-info p {
            font-size: 14px;
            margin-top: 10px;
        }

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

        .social-media i {
            transition: color 0.3s ease; /* Add a smooth color transition on hover */
        }

        .social-media a:hover i {
            color: #FFD700; /* Change color on hover */
        }
        footer {
    background-color: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
    margin-top: 20px; /* Add margin to separate it from the content */
}

.footer-section {
    margin-bottom: 20px;
}
.social-media i {
    transition: color 0.3s ease; /* Add a smooth color transition on hover */
}

.social-media a:hover i {
    color: #FFD700; /* Change color on hover */
}

    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="form.php">Form></a></li>
        </ul>
    </nav>
    <h1>SIGN UP</h1>
    <p class="catchy-headline">Join our newsletter for exclusive updates and offers!</p>
    <div class="container">
        <form action="connect.php" method="post">
            <div class="input">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" autocomplete="off">
            </div>
            <div class="input">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" autocomplete="off">
            </div>
            <div class="input gender-container">
    <label>Gender</label>
    <input class="gender1" type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input class="gender1" type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input class="gender1" type="radio" id="others" name="gender" value="others">
    <label for="others">Others</label>
</div>
    <div class="input">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number"  autocomplete="off">
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"  autocomplete="off">
            </div>
            <div class="btn">
                <div class="button">
                    <button type="submit">Submit data</button>
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
    </div>
    <ul class="social-media">
        <li><a href="https://www.facebook.com/your-facebook-profile"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/your-instagram-profile"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://twitter.com/your-twitter-profile"><i class="fab fa-twitter"></i></a></li>
    </ul>
</footer>
</body>
</html>
