
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MandiWala.Com</title>
    <link rel="icon" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @media (min-width: 1205px) {
            .h-custom {
                width: 100%;
                height: 100% !important;
            }
        }
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }
        .card-registration .select-arrow {
            top: 13px;
        }
        .gradient-custom-2 {
            width: 100%;
            background: rgb(224, 41, 57);
            background: linear-gradient(90deg, rgb(242, 142, 61) 7%, rgba(5, 169, 221, 1) 47%, rgba(241, 148, 107, 1) 100%);
        }
        @media (min-width: 992px) {
            .card-registration-2 .bg-indigo {
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }
        @media (max-width: 991px) {
            .card-registration-2 .bg-indigo {
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }
    </style>
    <script>
        function confirmLogout(event) {
            event.preventDefault();
            const userConfirmed = confirm("Are you sure you want to log out?");
            if (userConfirmed) {
                window.location.href = 'index.php';
            }
        }
        
        // Prevent caching of the current page
        window.onload = function() {
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <!-- navbar ends--->
        <div class="row fixed-top sticky-top mb-2 mb-5" style="max-height: 60px; margin-bottom: 100px;">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: rgb(61, 242, 115);
        background: linear-gradient(90deg, rgba(189,61,242,1) 7%, rgba(5,169,221,1) 47%, rgba(241,148,107,1) 100%);">
                <div class="container-fluid" style="width: 100%; ">
                    <img src="images/logo.png" style="height: 60px; width: 250px;  margin-left: 15px;" />
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-lg-0">
                            <li class="nav-item" style="margin-left: 20px;">
                                
                            </li>
                            <div id="whitespace" style="height: 70px; width: 10px; background-color: white; border-radius: 40%; margin-left: 25px;"></div>
                            <li class="nav-item" style="margin-left: 20px;">
                                <a class="nav-link active" aria-current="page" href="farmerindex.php" style="font-size: 30px;">ADMIN DASHBOARD</a>
                            </li>
                            
                            <li class="nav-item mt-2" style="margin-left: 850px; font-size: 20px;">
                                <a class="nav-link" href="index.php" onclick="confirmLogout(event)"><i class="fa-solid fa-right-from-bracket mx-1"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="progress-container">
                <div class="progress-bar" id="proBar"></div>
            </div>
        </div>
        <!-- navbar ends--->
    </div>
</body>

</html>
