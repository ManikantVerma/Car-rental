<?php
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$plocation = $_POST['plocation'];
$dlocation = $_POST['dlocation'];
$pickup = $_POST['pickup'];
$ddrop = $_POST['ddrop'];
$vehicle = $_POST['vehicle'];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'carrent');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Updated query to match the number of parameters
    $sql = $conn->prepare("INSERT INTO registration (name, mobile, pname, pprice, plocation, dlocation, pickup, ddrop, vehicle) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters
    $sql->bind_param("sssssssss", $name, $mobile, $pname, $pprice, $plocation, $dlocation, $pickup, $ddrop, $vehicle);
    
    // Execute the query
    if ($sql->execute()) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql->error;
    }
    
    // Close the statement and connection
    $sql->close();
    $conn->close();
    
    // Redirect to index page after successful registration
    header("Location: index.php");
    die();
}
?>
