<?php include('adminindex.php');?> 
<?php
include('config.php');

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM registration WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        $_SESSION['message'] = "Booking deleted successfully.";
    } else {
        $_SESSION['message'] = "Error deleting booking: " . $stmt->error;
    }
    $stmt->close();
    header("Location: booked.php");
    exit();
}

// Handle booking confirmation
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];
    $stmt = $conn->prepare("SELECT * FROM registration WHERE id = ?");
    $stmt->bind_param("i", $book_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $_SESSION['booking_message'] = "Booking for " . $user['pname'] . " confirmed for user: " . $user['name'];
        header("Location: cart.php");
        exit();
    }
}

// Fetch all bookings
$result = $conn->query("SELECT * FROM registration");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Products</title>
    <style>
        table {
            width: 1550px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Booked List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Product</th>
                <th>Price</th>
                <th>Pick Location</th>
                <th>Drop Location</th>
                <th>Pickup Date</th>
                <th>Drop Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
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
                        <a href="booked.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                        <a href="booked.php?book_id=<?php echo $row['id']; ?>" onclick="return confirm('Confirm booking?');">Book</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
