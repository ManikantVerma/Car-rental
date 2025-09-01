<?php
// Define connection parameters
$servername = 'localhost';  // Database server, use 127.0.0.1 if localhost doesn't work
$username = 'root';         // MySQL username
$password = '';             // MySQL password (empty for root in default setups)
$dbname = 'carrent';        // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // Detailed error message
}

echo "";  // You can comment this once you confirm connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Service</title>
  <link rel="stylesheet" href="css/headerstyle.css">
</head>
<body id="backgroundContent">

<header class="header">
  <!-- Image Slider -->
  <div class="slider" id="slider">
    <img src="images/11.jpeg" alt="Slider Image 1" style="display: block;">
    <img src="images/12.jpeg" alt="Slider Image 2" style="display: none;">
    <img src="images/13.jpeg" alt="Slider Image 3" style="display: none;">
    <img src="images/15.jpeg" alt="Slider Image 4" style="display: none;">
  </div>

  <!-- Navigation Links -->
  <nav class="nav">
    <img src="images/logo.png" style="height: 50px;">
    <a href="index.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="services.php">Services</a>
    <a href="cart.php">Cart</a>
    <a href="#" id="loginLink">Login</a>
    <a href="signup.php">Signup</a>
  </nav>

  <!-- Header Content -->
  <div class="header-content" style="margin-top: 1px;">
    <div class="header-content-left">
      <h1>Need to Rent Something?</h1>
    </div>

    <!-- Form Fields -->
    <form id="form" action="rentcontroller.php" method="post">
      <!-- Name Field -->
      <div class="header-content-left">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
      </div>

      <!-- Mobile Field -->
      <div class="header-content-left">
        <label for="mobile">Mobile No.</label>
        <input type="number" id="mobile" name="mobile" placeholder="Enter your mobile number">
      </div>

      <!-- Car Name and Price Fields -->
      <div class="header-content-left">
        <label for="pname">Car Name/Driver Name</label>
        <input type="text" id="pname" name="pname" readonly placeholder="Car Name"
               value="<?php echo isset($_GET['pname']) ? htmlspecialchars($_GET['pname']) : ''; ?>">
      </div>

      <div class="header-content-left">
        <label for="pprice">Price per Day</label>
        <input type="text" id="pprice" name="pprice" readonly placeholder="Price per Day"
               value="<?php echo isset($_GET['pprice']) ? htmlspecialchars($_GET['pprice']) : ''; ?>">
      </div>

      <!-- Pickup and Drop Location Fields -->
      <div class="header-content-left">
        <label for="plocation">Pickup Location</label>
        <select id="plocation" name="plocation">
          <option value="">Select Pickup Location</option>
          <option value="delhi">Delhi</option>
          <option value="mumbai">Mumbai</option>
          <option value="kolkata">Kolkata</option>
          <option value="chennai">Chennai</option>
          <option value="bangalore">Bangalore</option>
          <option value="hyderabad">Hyderabad</option>
          <option value="ahmedabad">Ahmedabad</option>
          <option value="pune">Pune</option>
        </select>

        <label for="dlocation">Drop Location</label>
        <select id="dlocation" name="dlocation">
          <option value="">Select Drop Location</option>
          <option value="delhi">Delhi</option>
          <option value="mumbai">Mumbai</option>
          <option value="kolkata">Kolkata</option>
          <option value="chennai">Chennai</option>
          <option value="bangalore">Bangalore</option>
          <option value="hyderabad">Hyderabad</option>
          <option value="ahmedabad">Ahmedabad</option>
          <option value="pune">Pune</option>
        </select>
      </div>

      <!-- Pickup and Drop Date Fields -->
      <div class="header-content-left">
        <label for="pickup">Pickup Date</label>
        <input type="date" id="pickup" name="pickup">
        <label for="drop">Drop Date</label>
        <input type="date" id="drop" name="ddrop">
      </div>

      <!-- Vehicle Selection -->
      <div class="header-content-left">
        <label for="vehicle">Select Vehicle Type</label>
        <select id="vehicle" name="vehicle">
          <option value="">Select Vehicle</option>
          <option value="car">Car</option>
          
          <option value="driver">Driver</option>
          <option value="campervan">Campervan</option>
        </select>
      </div>

      <!-- Submit Button -->
      <div class="header-content-submit">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</header>

<br>
<br>

<!-- Include Login Modal -->
<?php include('login.php'); ?>

<script>
  // Slider Functionality
  document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll("#slider img");
    let currentIndex = 0;

    function showNextImage() {
      // Hide the current image
      images[currentIndex].style.display = "none";

      // Move to the next image, or loop back to the first
      currentIndex = (currentIndex + 1) % images.length;

      // Show the next image
      images[currentIndex].style.display = "block";
    }

    // Change the image every 3 seconds
    setInterval(showNextImage, 3000);
  });

  // Modal Functionality
  var modal = document.getElementById("loginModal");
  var loginLink = document.getElementById("loginLink");
  var closeButton = document.getElementsByClassName("close")[0];

  loginLink.onclick = function(event) {
    event.preventDefault();
    modal.style.display = "block";
  };

  closeButton.onclick = function() {
    modal.style.display = "none";
  };

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
</script>
</body>
</html>
