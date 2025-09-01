
<!DOCTYPE html>
<html>
<head>
    <title>Product Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: inline-block;
            width: 120px;
            margin-bottom: 10px;
        }
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: auto;
            color: white;
            background-color: green;
            border-radius: 5px;
        }
    </style>
</head>
<body>
   
    <h4 style="margin-top: 50px; margin-left: 750px; font-size: 30px;">Add Driver</h4>
    <form action="adddrivercontroller.php" method="post" enctype="multipart/form-data">
        <label for="pimage">Driver Image:</label>
        <input type="file" id="pimage" name="pimage" required><br>
        
        <label for="pname">Driver Name:</label>
        <input type="text" id="pname" name="pname" required><br>
        
        <label for="pdescription">Age:</label>
        <textarea id="pdescription" name="age" required></textarea><br>
        
        <label for="pcategory">Phone No.:</label>
        <input type="text" id="pcategory" name="phoneno" ><br>
        
        <label for="pprice">Price per DAY:</label>
        <input type="number" id="pprice" name="pprice" step="0.01" required><br>
        
        <input type="submit" value="Register Product">
    </form>
</body>
</html>
