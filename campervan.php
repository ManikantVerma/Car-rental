<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items for Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .item {
            width: calc(33.33% - 20px);
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .item img {
            width: auto; /* Adjust width proportionally */
            max-width: 80%; /* Limit the width to 80% of the container */
            max-height: 200px; /* Ensure the height is limited */
            object-fit: cover; /* Maintain the aspect ratio */
            margin: 0 auto; /* Center the image horizontally */
            display: block; /* Ensure alignment */
            border-bottom: 1px solid #ddd; /* Optional: Add a visual separator */
        }
        .item-content {
            padding: 20px;
            text-align: center;
        }
        .item h2 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 24px;
        }
        .item p {
            margin: 0;
            margin-bottom: 10px;
            color: #555;
        }
        .item p.price {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .add-to-cart-btn {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .add-to-cart-btn:hover {
            background-color: #218838;
        }
        .alert {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        /* Responsive styles */
        @media (max-width: 1200px) {
            .item {
                width: calc(50% - 20px);
            }
        }
        @media (max-width: 768px) {
            .item {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Campervan for Booking</h1>
    <div class="container">
        <?php
        // Database configuration
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

        // SQL query to fetch items added by admin
        $sql = "SELECT id, pimage, pname, pdescription, pcategory, pprice FROM campervan";
        $result = $conn->query($sql);

        // Check if query execution was successful
        if ($result === false) {
            echo "<p>Error executing query: " . $conn->error . "</p>";
        } else {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='item'>";
                    echo "<img src='" . htmlspecialchars($row["pimage"]) . "' alt='Product Image'>";
                    echo "<div class='item-content'>";
                    echo "<h2>" . htmlspecialchars($row["pname"]) . "</h2>";
                    echo "<p><strong>Description:</strong> " . htmlspecialchars($row["pdescription"]) . "</p>";
                    echo "<p><strong>Type:</strong> " . htmlspecialchars($row["pcategory"]) . "</p>";
                    echo "<p class='price'><strong>Price per Day:</strong> Rs" . htmlspecialchars($row["pprice"]) . "</p>";
                    echo "<form method='get' action='index.php'>"; // Replace 'form_page.php' with the form's page name
                    echo "<input type='hidden' name='pname' value='" . htmlspecialchars($row["pname"]) . "'>";
                    echo "<input type='hidden' name='pprice' value='" . htmlspecialchars($row["pprice"]) . "'>";
                    echo "<button type='submit' class='add-to-cart-btn'>Book</button>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No results found.</p>";
            }
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
