<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];



// Create connection
$conn = new mysqli('localhost', 'root', '', 'carrent');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql=$conn->prepare("insert into adminsignup (name,email,password) values(?,?,?)");
    $sql->bind_param("sss",$name,$email,$password);
    $sql->execute();
    echo "SignUp Successful";
    
    $sql->close();
    $conn->close();
    header("Location:index.php ");
     die();
}
?>