<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'carrent');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $conn->real_escape_string($_POST['name']);
$password = $conn->real_escape_string($_POST['password']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$sex = $conn->real_escape_string($_POST['sex']);
$dob_day = $conn->real_escape_string($_POST['day']);
$dob_month = $conn->real_escape_string($_POST['month']);
$dob_year = $conn->real_escape_string($_POST['year']);
$dob = $dob_year . '-' . $dob_month . '-' . $dob_day; // Format DOB as YYYY-MM-DD
$aadhaar = $conn->real_escape_string($_POST['aadhaar']);
$address = $conn->real_escape_string($_POST['address']);

// Check if email already exists
$check_email_query = "SELECT * FROM users WHERE email='$email'";
$email_result = $conn->query($check_email_query);

if ($email_result->num_rows > 0) {
    echo "Email is already registered. Please use a different email.";
    exit();
}

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the database
$sql = "INSERT INTO users (name, password, email, phone, sex, dob, aadhaar, address)
        VALUES ('$name', '$hashed_password', '$email', '$phone', '$sex', '$dob', '$aadhaar', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful! You can now log in.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
