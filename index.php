<?php
// Define connection parameters
$servername = 'localhost';  // Database server, use 127.0.0.1 if localhost doesn't work
$username = 'root';         // MySQL username
$password = '';             // MySQL password (empty for root in default setups)
$dbname = 'carrent';    // Database name

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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>rentox</title>
    <link rel="icon" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/pace.js"></script>
    <link rel="stylesheet" href="css/contentstyle.css">
    
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    /* Reset margin and padding */
   
  </style>
</head>
<body>
    
<div class="container-fluid">

 <!--header starts-->
 <?php include('header.php'); ?>
        <!-- header ends-->

        <!--content starts-->
 <?php include('content.php'); ?>
        <!-- content ends-->

     <!--footer starts-->
<?php include('washpack.php'); ?>
        <!-- footer ends-->   

<!--footer starts-->
<?php include('footer.php'); ?>
        <!-- footer ends-->

</div>
</body>
</html>