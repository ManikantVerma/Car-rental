<!--linking db-->

<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'carrent');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!--linking db complete-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>rentox</title>
    <link rel="icon" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/pace.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <style>
        .sidebar{
    width: 18%;
    min-height: 100vh;
    border: 1.5px solid #a9a9a9;
    border-top: 0;
    font-size: max(1vw,10px);
    float: left;
    
}
.sidebar-options{
    padding-top: 50px;
    padding-left: 20%;
    display: flex;
    flex-direction: column;
    gap: 20px;
    
}
.sidebar-option{
    display: flex;
    align-items: center;
    gap: 12px;
    border: 1px solid #a9a9a9;
    border-right: 0;
    padding: 8px 10px;
    border-radius: 3px 0px 0px 3px;
    cursor: pointer;
    
}
.sidebar-option .active{
    border: #fff0ed;
    border-color: tomato;
}
@media (max-width:900px){
    .sidebar-option p{
        display: none;
    }
}
.navbar{
    display:flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 4%;
    width:100%;
    height:100px;
    border:1px solid black; 
}
 .logo{
    width: 20px;
}

.navbar .profile{
    width: 40px;
}
    </style>
</head>
<body>
<?php include('adminheader.php');?>
<div>
     
    </div>
<div class="sidebar">
        <div class="sidebar-options">
            <a href="additems.php" class="sidebar-option">
                <img src="images/add_icon.png" alt="" />
                
                <p >Add items</p>
</a>
            
            <a href='cardelete.php' class="sidebar-option">
                <img src="images/order_icon.png" alt="" />
                <p>List Items</p>
</a>
           
            <a href='bsignup.php' class="sidebar-option">
                <img src="images/order_icon.png" alt="" />
                <p>Signin</p>
</a>
<a href='booked.php' class="sidebar-option">
                <img src="images/order_icon.png" alt="" />
                <p>Booked</p>
</a>
        </div>
      </div>
</body>
</html>