<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pname = $_POST['pname'];
    $pdescription = $_POST['pdescription'];
    $pcategory = $_POST['pcategory'];
    $pprice = $_POST['pprice'];
    
    // Handling file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["pimage"]["name"]);
    if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file)) {
        $pimage = $target_file;
    } else {
        die("Sorry, there was an error uploading your file.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO campervan (pimage, pname, pdescription, pcategory, pprice) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $pimage, $pname, $pdescription, $pcategory, $pprice);

    if ($stmt->execute()) {
        echo "New product registered successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>