<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Navbar</title>
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
                
            </div>
        </div>
    </nav>



   <!--caritems starts-->
 <?php include('caritems.php'); ?>
        <!-- caritems ends-->

      <!--caritems starts-->
 <?php include('campervan.php'); ?>
        <!-- caritems ends-->  

        <!--driver starts-->
 <?php include('driver.php'); ?>
        <!-- driver ends--> 

</body>
</html>




