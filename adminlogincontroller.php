<?php
$email = $_POST['email'];
$password = $_POST['password'];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'carrent');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sqllogin = $conn->prepare("insert into adminlogin(email,password) values(?,?) ");
    $sqllogin->bind_param("ss", $email, $password);
    $sqllogin->execute();
    $sql = $conn->prepare("select * from adminsignup where email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $sql_result = $sql->get_result();
    if ($sql_result->num_rows > 0) {
        $row = $sql_result->fetch_assoc();
         if ($row["password"] == $password) {
               echo "<h2>Login Successfully</h2>";
            header("Location:adminindex.php");
        } 
        else {
            header('Location:adminlogin.php');
        }
    }
}
?>