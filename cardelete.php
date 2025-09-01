
<?php include('adminindex.php');?> <?php
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

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM cars WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        echo "Product deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Fetch all products
$result = $conn->query("SELECT * FROM cars");

$conn->close();
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
    <h2>Car List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Type</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td><img src='" . $row['pimage'] . "' alt='" . $row['pname'] . "' width='50' height='50'></td>";
                    echo "<td>" . $row['pname'] . "</td>";
                    echo "<td>" . $row['pdescription'] . "</td>";
                    echo "<td>" . $row['pcategory'] . "</td>";
                    echo "<td>" . $row['pprice'] . "</td>";
                    echo "<td><a href='cardelete.php?delete_id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this product?\");'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No products found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php include('campervandelete.php');?>
<?php include('driverdelete.php');?>