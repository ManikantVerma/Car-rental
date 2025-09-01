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
    $age = $_POST['age'];
    $phoneno = $_POST['phoneno'];
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
    $stmt = $conn->prepare("INSERT INTO driver (pimage, pname, age, phoneno, pprice) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $pimage, $pname, $age, $phoneno, $pprice);

    if ($stmt->execute()) {
        echo "New product registered successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>