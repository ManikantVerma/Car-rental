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
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>rentox</title>
    <link rel="icon" href="images/android-chrome-512x512.png">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!------style.css------>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        *,
        html,
        body {
            margin: 0;
            padding: 0;
        }



        .container {
            width: 50vw;
            height: 70vh;
            display: grid;
            grid-template-columns: 100%;
            grid-template-areas: "login";
            box-shadow: 0 0 17px 10px rgb(0 0 0 / 30%);
            border-radius: 20px;
            background: white;
            overflow: hidden;
        }

        .design {
            grid-area: design;
            display: none;
            position: relative;
        }

        .rotate-45 {
            transform: rotate(-45deg);
        }

        .design .pill-1 {
            bottom: 0;
            left: -40px;
            position: absolute;
            width: 80px;
            height: 200px;
            background: rgb(189, 61, 242);
            background: linear-gradient(90deg, rgba(189, 61, 242, 1) 7%, rgba(5, 169, 221, 1) 47%, rgba(241, 148, 107, 1) 100%);

            border-radius: 40px;
        }

        .design .pill-2 {
            top: -100px;
            left: -80px;
            position: absolute;
            height: 450px;
            width: 220px;
            background: rgb(189, 61, 242);
            background: linear-gradient(90deg, rgba(189, 61, 242, 1) 7%, rgba(5, 169, 221, 1) 47%, rgba(241, 148, 107, 1) 100%);
            border-radius: 200px;
            border: 30px solid #e2c5e2;
        }

        .design .pill-3 {
            top: -100px;
            left: 160px;
            position: absolute;
            height: 200px;
            width: 100px;
            background: rgb(189, 61, 242);
            background: linear-gradient(90deg, rgba(189, 61, 242, 1) 7%, rgba(5, 169, 221, 1) 47%, rgba(241, 148, 107, 1) 100%);
            border-radius: 70px;
        }

        .design .pill-4 {
            bottom: -180px;
            left: 220px;
            position: absolute;
            height: 300px;
            width: 120px;
            background: rgb(189, 61, 242);
            background: linear-gradient(90deg, rgba(189, 61, 242, 1) 7%, rgba(5, 169, 221, 1) 47%, rgba(241, 148, 107, 1) 100%);
            border-radius: 70px;
        }

        .login {
            grid-area: login;
            display: flex;
            flex-direction: column;
            
            justify-content: center;
            position: relative;
            background: white;
        }

        .login h3.title {
            margin: 15px 0;
        }

        #form {
            width: 100%;
        }

        .text-input {
            background: #e6e6e6;
            height: 40px;
            display: flex;
            width: 80%;
            align-items: center;
            border-radius: 10px;
            padding: 0 15px;
            margin: 5px 0;
        }

        .text-input input {
            background: none;
            border: none;
            outline: none;
            width: 100%;
            height: 100%;
            margin-left: 10px;
        }

        .text-input i {
            color: #686868;
        }

        ::placeholder {
            color: #9a9a9a;
        }

        .login-btn {
            width: 80%;
            padding: 10px;
            color: white;
            background: rgb(189, 61, 242);
            background: linear-gradient(90deg, rgba(189, 61, 242, 1) 7%, rgba(5, 169, 221, 1) 47%, rgba(241, 148, 107, 1) 100%);
            border: none;
            border-radius: 20px;
            cursor: pointer;
            margin-top: 10px;
        }

        a {
            font-size: 12px;
            color: #9a9a9a;
            cursor: pointer;
            user-select: none;
            text-decoration: none;
        }

        a.forgot {
            margin-top: 15px;
        }

        .create {
            display: flex;
            align-items: center;
            position: absolute;
            bottom: 30px;
        }

        .create i {
            color: #9a9a9a;
            margin-left: 10px;
        }

        @media (min-width: 768px) {
            .container {
                grid-template-columns: 50% 50%;
                grid-template-areas: "design login";
            }

            .design {
                display: block;
            }
        }
    </style>


</head>


<body>


    <div class="container-fluid">



        <div class="row" style="margin-top: 130px;">
            <a href="index.php">
                <i style="font-size:24px ; margin-left:1430px; color: black;" class="fa">&#xf00d;</i>
            </a>
        </div>





        <div class="container">
            <div class="design">
                <div class="pill-1 rotate-45"></div>
                <div class="pill-2 rotate-45"></div>
                <div class="pill-3 rotate-45"></div>
                <div class="pill-4 rotate-45"></div>
            </div>
            <div class="login">

                <h3 class="title mb-4" style="margin-left: 130px; color: tomato;" >SignUp</h3>
                <form id="form" action="adminsignupcontroller.php" method="post">

                    
                    <div class="text-input mb-3">

                        <input type="text" required="required" name="name" placeholder="Name">
                    </div>
                    
                    <div class="text-input mb-3" >

                        <input type="text" required="required" name="email" placeholder="Email">
                    </div>
                    <div class="text-input mb-3">

                        <input type="Password" required="required" name="password" placeholder="Password">
                    </div>
                    
                    <button class="login-btn mb-3" type="submit">SIGNUP</button>
                </form>
                <div class="create"style="margin-top: 60px; margin-left: 330px;">
                        <a href="adminlogin.php" style="color: tomato;" >Login Here</a>
                    </div>

            </div>
        </div>

    </div>


</body>


</html>