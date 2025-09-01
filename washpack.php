<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Wash Packages</title>
    <style>
      

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .package {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .package-header {
            background:rgb(12, 10, 22);
            color: white;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            font-size: 18px;
            font-weight: bold;
        }

        .price {
            font-size: 24px;
            color:rgb(219, 77, 52);
            margin: 15px 0;
        }

        .features {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        .features li {
            display: flex;
            align-items: center;
            margin: 10px 0;
            font-size: 16px;
            color: black;
        }

        .features li::before {
            content: '\2713';
            color:rgb(204, 46, 59);
            margin-right: 10px;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background:rgba(221, 23, 23, 0.64);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .button:hover {
            background:rgb(235, 8, 8);
        }
        .heading
        {
            text-align:center;

        }
    </style>
</head>
<body>
    <h1 class="heading">Affordable price for you</h1>
    <div class="container">
        <!-- Package 1 -->
        <div class="package">
            <div class="package-header">Best Services</div>
            <div class="price">$45,000</div>
            <ul class="features">
                <li>Prewash Services</li>
                <li>AC Check ups</li>
                <li>Waxing Thing</li>
                <li>Manual Cleaning</li>
                <li>Interiors Vacuum</li>
                <li>Lubricant</li>
            </ul>
            <a href="#" class="button">Claim Package</a>
        </div>

        <!-- Package 2 -->
        <div class="package">
            <div class="package-header">Express Services</div>
            <div class="price">$60,000</div>
            <ul class="features">
                <li>Prewash Services</li>
                <li>AC Check ups</li>
                <li>Waxing Thing</li>
                <li>Manual Cleaning</li>
                <li>Interiors Vacuum</li>
                <li>Lubricant</li>
            </ul>
            <a href="#" class="button">Claim Package</a>
        </div>

        <!-- Package 3 -->
        <div class="package">
            <div class="package-header">Total Care</div>
            <div class="price">$78,000</div>
            <ul class="features">
                <li>Prewash Services</li>
                <li>AC Check ups</li>
                <li>Waxing Thing</li>
                <li>Manual Cleaning</li>
                <li>Interiors Vacuum</li>
                <li>Lubricant</li>
            </ul>
            <a href="#" class="button">Claim Package</a>
        </div>
    </div>
</body>
</html>
