<!--linking db-->

<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'carrent');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // Detailed error message
}

echo "connect";  // You can comment this once you confirm connection
?>
<!--linking db complete-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm() {
   const name = document.getElementById("name").value.trim();
   const password = document.getElementById("password").value.trim();
   const email = document.getElementById("email").value.trim();
   const phone = document.getElementById("phone").value.trim();
   const aadhaar = document.getElementById("aadhaar").value.trim();
   const address = document.getElementById("address").value.trim();
   const sex = document.querySelector("input[name='sex']:checked");
   const day = document.querySelector("select[name='day']").value;
   const month = document.querySelector("select[name='month']").value;
   const year = document.querySelector("select[name='year']").value;

   if (name === "" || /\d/.test(name)) {
       alert("Please enter a valid name without numbers.");
       document.getElementById("name").focus();
       return false;
   }

   if (password.length < 6) {
       alert("Password must be at least 6 characters long.");
       document.getElementById("password").focus();
       return false;
   }

   if (!email.includes("@") || email === "") {
       alert("Please enter a valid email address.");
       document.getElementById("email").focus();
       return false;
   }

   if (phone === "" || isNaN(phone) || phone.length !== 10) {
       alert("Please enter a valid 10-digit phone number.");
       document.getElementById("phone").focus();
       return false;
   }

   if (!aadhaar.match(/^\d{12}$/)) {
       alert("Please enter a valid 12-digit Aadhaar number.");
       document.getElementById("aadhaar").focus();
       return false;
   }

   if (!sex) {
       alert("Please select your gender.");
       return false;
   }

   if (day === "" || month === "" || year === "") {
       alert("Please select a valid date of birth.");
       return false;
   }

   if (address === "") {
       alert("Please enter your address.");
       document.getElementById("address").focus();
       return false;
   }

   alert("Form submitted successfully!");
   return true;
}
    </script>
    <style>
        body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
   background: url('images/pic2.jpg') no-repeat center center fixed;
   background-size: cover;
}

.container {
   background: rgba(255, 255, 255, 0.9); /* Less transparent white background */
   padding: 25px;
   border-radius: 10px;
   box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
   width: 550px;
   max-height: 95%;
   overflow-y: auto;
}

h2 {
   text-align: center;
   color: #0c0c0c;
   font-size: 1.8em;
   margin-bottom: 20px;
}

form {
   display: flex;
   flex-direction: column;
}

label {
   margin-bottom: 6px;
   font-weight: bold;
   color: #000000;
}

input, select, textarea {
   padding: 12px;
   margin-bottom: 20px;
   border: 1px solid #cccccc8a;
   border-radius: 6px;
   width: 100%;
   box-sizing: border-box;
   font-size: 1em;
   background-color: #37373700;
}

input:focus, select:focus, textarea:focus {
   border-color: #ff0000;
   outline: none;
   background-color: #ffffff38;
}
.radio-group {
   display: flex;
   gap: 10px;
   margin-bottom: 20px;
}

textarea {
   resize: none;
}

button {
   padding: 12px;
   background-color: #ff0000;
   color: #ffffff;
   border: none;
   border-radius: 6px;
   font-size: 1em;
   cursor: pointer;
   transition: background-color 0.3s ease;
}

button:hover {
   background-color: #b30000;
}

.dob select {
   width: calc(33.33% - 8px);
   margin-right: 6px;
}

.dob select:last-child {
   margin-right: 0;
}
    </style>
</head>
<body>
    <div class="container">
        <h2>Signup Form</h2>
        <form id="registrationForm" action="signupcontroller.php" method="POST" onsubmit="return validateForm()">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label>Sex:</label>
            <div class="radio-group">
                <label><input type="radio" name="sex" value="Male" required> Male</label>
                <label><input type="radio" name="sex" value="Female"> Female</label>
                <label><input type="radio" name="sex" value="Other"> Other</label>
            </div>

            <label>Date of Birth:</label>
            <div class="dob">
                <select name="day" required>
                    <option value="">Day</option>
                    <script>
                        for (let i = 1; i <= 31; i++) document.write(`<option value="${i}">${i}</option>`);
                    </script>
                </select>
                <select name="month" required>
                    <option value="">Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <select name="year" required>
                    <option value="">Year</option>
                    <script>
                        for (let i = 1900; i <= new Date().getFullYear(); i++) document.write(`<option value="${i}">${i}</option>`);
                    </script>
                </select>
            </div>

            <label for="aadhaar">Aadhaar Number:</label>
            <input type="text" id="aadhaar" name="aadhaar" placeholder="Enter your 12-digit Aadhaar number" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" placeholder="Enter your address"></textarea>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>