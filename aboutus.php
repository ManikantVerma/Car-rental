<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>rentox</title>
    <link rel="icon" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/pace.js"></script>
    <link rel="stylesheet" href="css/contentstyle.css">
    <link rel="stylesheet" href="css/headerstyle.css">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navbar Styles */
        nav {
            display: flex;
            align-items: center; /* Vertically centers items */
            justify-content: space-between; /* Adds space between logo and links */
            background: linear-gradient(to right, #333, #555); /* Gradient background */
            padding: 20px 20px; /* Increased padding for taller navbar */
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Center the entire content */
        .navbar-container {
            display: flex;
            align-items: center; /* Vertically center content */
            justify-content: center; /* Horizontally center content */
            width: 100%;
            height: 38px; /* Increased height for the navbar */
        }

        

        /* Logo */
        .logo {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .logo img {
            height: 50px; /* Adjust logo size if needed */
            margin-right: 10px;
        }

        /* Navbar Links */
        .nav-links {
            display: flex;
            gap: 30px; /* Space between links */
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 10px 20px; /* Increased padding for larger buttons */
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Highlight Active Link */
        .nav-links a.active {
            background-color: #f04c23; /* Red background */
            color: white; /* White text */
            pointer-events: none; /* Disable hover effects for the active link */
        }

        /* Hover Effects */
        .nav-links a:hover {
            background-color: #e70c0c; /* Red background on hover */
            color: white;
        }

        /*  about us content */

        /* General Styles */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #fff;
    background-color: #000;
}

/* About Banner Styles */
.about-banner {
    position: relative;
    background: url('images/1.jpeg') no-repeat center center/cover;
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}

.about-banner .overlay {
    text-align: center;
    background: rgba(0, 0, 0, 0.5);
    padding: 2rem;
    border-radius: 8px;
}

.about-banner h1 {
    font-size: 3rem;
    margin: 0;
}

.about-banner p {
    margin-top: 0.5rem;
    font-size: 1.2rem;
    color: #ff5722;
}

/* About Content Styles */
.about-content {
    padding: 2rem;
    text-align: center;
}

.about-content h2 {
    font-size: 2rem;
    color: #ff5722;
    margin-bottom: 1rem;
}

.about-content p {
    max-width: 600px;
    margin: 0 auto 2rem auto;
    color: white;
}

.about-content .image-container {
    margin-top: 1rem;
}

.about-content .about-img {
    max-width: 100%;
    border-radius: 10px;
}

/* end of about */


/* General Styles */


/* Hero Section */
.hero {
    position: relative;
    background: url('images/13.jpeg') no-repeat center center/cover;
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
}

.hero-overlay {
    background: rgba(0, 0, 0, 0.6);
    padding: 2rem;
    border-radius: 10px;
}

.hero h1 {
    font-size: 3rem;
    margin: 0;
}

.hero p {
    font-size: 1.2rem;
    margin-top: 1rem;
    color: #fff;
}

/* Services Section */
.services {
    padding: 2rem;
}

.container {
    max-width: 1200px;
    margin: auto;
}

.service {
    display: flex;
    align-items: center;
    margin-bottom: 3rem;
    gap: 2rem;
    flex-wrap: wrap;
}

.service-text {
    flex: 1;
    max-width: 500px;
}

.service-text h2 {
    font-size: 2rem;
    color: #ff5722;
    margin-bottom: 1rem;
}

.service-text p {
    font-size: 1rem;
    line-height: 1.6;
    color: white;
}

.service-image {
    flex: 1;
    text-align: center;
}

.service-image img {
    max-width: 100%;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
}

/* Responsive Styles */
@media (max-width: 768px) {
    .service {
        flex-direction: column;
        text-align: center;
    }

    .service-text {
        max-width: none;
    }
}








    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <!-- Navbar Container -->
        <div class="navbar-container">
            <!-- Logo Section -->
            <div class="logo">
                <img src="images/logo.png" alt="Logo"> <!-- Replace with your logo -->
            </div>

            <!-- Links Section -->
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="aboutus.php">About Us</a>
                <a href="services.php">Services</a>
                <a href="cart.php">Cart</a>
                <a href="login.php">Login</a>
            </div>
        </div>
    </nav>


<!--  about us content -->

<section class="about-banner">
        <div class="overlay">
            <h1>About Us</h1>
            <p>Home / About Us</p>
        </div>
    </section>

    <!-- About Us Content -->
    <section class="about-content">
        <div class="container">
            <h2>Your trusted partner in reliable car rental</h2>
            <p>
                Agestic Optio Amet A Ququam Saepe Aliquid Volutate Dicta Fugiat Dolor Saerror Sed.
                We pride ourselves on providing reliable car rental services to make your journeys safe and memorable.
            </p>
            <div class="image-container">
                <img src="person-driving.jpg" alt="Woman driving" class="about-img">
            </div>
        </div>
    </section>

<!-- end about us content -->


<!-- Hero Section -->


    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <!-- Car Renting Section -->
            <div class="service">
                <div class="service-text">
                    <h2>Car Renting</h2>
                    <p>
                        Enjoy a hassle-free car renting experience. Choose from a wide range of vehicles 
                        tailored to suit your needs. Whether it’s a family trip, a business journey, or 
                        just a quick ride, we have you covered.
                    </p>
                </div>
                <div class="service-image">
                    <img src="images/pexels-malcolmhill-11734225.jpg" alt="Car Renting">
                </div>
            </div>

            <!-- Campervan Renting Section -->
            <div class="service">

            <div class="service-image">
                    <img src="images/c.jpg" alt="Campervan Renting">
                </div>
                <div class="service-text">
                    <h2>Campervan Renting</h2>
                    <p>
                        Experience the freedom of the open road with our fully equipped campervans. 
                        Perfect for adventures and road trips, our campervans provide comfort and convenience.
                    </p>
                </div>
               
            </div>

            <!-- Driver Renting Section -->
            <div class="service">
                <div class="service-text">
                    <h2>Driver Renting</h2>
                    <p>
                        Need a professional and reliable driver? Our driver rental service ensures you travel 
                        safely and stress-free. Let our experts handle the road while you relax.
                    </p>
                </div>
                <div class="service-image">
                    <img src="images/driver.webp" alt="Driver Renting">
                </div>
            </div>

            <!-- Additional Section -->
            <div class="service">
            <div class="service-image">
                    <img src="images/111.webp" alt="Other Services">
                </div>
                <div class="service-text">
                    <h2>Other Services</h2>
                    <p>
                        We offer additional services such as vehicle customization, roadside assistance, 
                        and travel packages to enhance your experience.
                    </p>
                </div>
               
            </div>
        </div>
    </section>



<!--footer starts-->
<?php include('footer.php'); ?>
        <!-- footer ends-->

</body>
</html>
