<?php
include('config.php');

// Handle remove request
if (isset($_GET['remove_id'])) {
    $remove_id = $_GET['remove_id'];
    unset($_SESSION['cart'][$remove_id]);
    $_SESSION['message'] = "Item removed from cart.";
    header("Location: cart.php");
    exit();
}

// Fetch the latest booking (most recent row)
$query = "SELECT * FROM registration ORDER BY id DESC LIMIT 1";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>
    <div class="cart-container">
        <h2>Your Cart</h2>
        <?php if (isset($_SESSION['message'])): ?>
            <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
        <?php endif; ?>
        <?php if ($row): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Car Name</th>
                        <th>Price</th>
                        <th>Pickup Location</th>
                        <th>Drop Location</th>
                        <th>Pickup Date</th>
                        <th>Drop Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['mobile']); ?></td>
                        <td><?php echo htmlspecialchars($row['pname']); ?></td>
                        <td><?php echo htmlspecialchars($row['pprice']); ?></td>
                        <td><?php echo htmlspecialchars($row['plocation']); ?></td>
                        <td><?php echo htmlspecialchars($row['dlocation']); ?></td>
                        <td><?php echo htmlspecialchars($row['pickup']); ?></td>
                        <td><?php echo htmlspecialchars($row['ddrop']); ?></td>
                        <td>
                            <a href="cart.php?remove_id=<?php echo $row['id']; ?>" class="remove-btn">Remove</a>
                            <a href="payment.php?item_id=<?php echo $row['id']; ?>" class="book-btn">Book</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p>No items found in your cart.</p>
        <?php endif; ?>
    </div>
</body>
</html>
