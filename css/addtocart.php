<?php
// Start session to store cart items
session_start();

// Check if form data is posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get item details from POST request
    $pimage = htmlspecialchars($_POST['pimage']);
    $pname = htmlspecialchars($_POST['pname']);
    $pdescription = htmlspecialchars($_POST['pdescription']);
    $pprice = htmlspecialchars($_POST['pprice']);
    
    // Create an associative array for the item
    $item = array(
        "pimage" => $pimage,
        "pname" => $pname,
        "pdescription" => $pdescription,
        "pprice" => $pprice
    );
    
    // Add the item to the cart session variable
    $_SESSION['cart'][] = $item;
    
    // Set a session variable for the alert message
    $_SESSION['alert'] = "Item added to cart successfully!";
    
    // Redirect to index page
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        .cart-item img {
            max-width: 100px;
            margin-right: 20px;
        }
        .cart-item-details {
            flex: 1;
        }
        .cart-item p {
            margin: 0;
        }
        .cart-item p.price {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Cart</h1>
        <?php
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<div class='cart-item'>";
                echo "<img src='" . htmlspecialchars($item["pimage"]) . "' alt='Product Image'>";
                echo "<div class='cart-item-details'>";
                echo "<h2>" . htmlspecialchars($item["pname"]) . "</h2>";
                echo "<p><strong>Description:</strong> " . htmlspecialchars($item["pdescription"]) . "</p>";
                echo "<p class='price'>Rs" . htmlspecialchars($item["pprice"]) . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>Your cart is empty.</p>";
        }
        ?>
    </div>
</body>
</html>
