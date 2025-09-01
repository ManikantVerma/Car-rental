<?php
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'carrent');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $conn->real_escape_string(trim($_POST['username']));
    $password = $conn->real_escape_string(trim($_POST['password']));

    // Prepare query
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    if (!$stmt) {
        die("Query preparation failed: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ss", $username, $password);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Successful login
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        echo "<script>
            alert('Login successful!');
            window.location.href = 'index.php'; // Redirect to the dashboard
        </script>";
    } else {
        // Invalid credentials
        echo "<script>
            alert('Invalid username or password. Please try again.');
            window.history.back(); // Redirect back to the form
        </script>";
    }

    $stmt->close();
}

$conn->close();
?>
