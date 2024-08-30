<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        .container {
            text-align: center;
            margin: 20px;
        }
        .success-message {
            color: white;
            background-color: green;
            border: 3px solid black;
            font-size: 40px;
            width: 610px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
        }
        .home-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            color: white;
            background-color: blue;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .home-button:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <!--------------------------------- payment ----------------------------------->
    <section class="payment">
        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="payment-top-cart payment-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="payment-top-addr payment-top-item">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="payment-top-pay payment-top-item">
                        <i class="fa-regular fa-credit-card"></i>
                    </div>
                </div>
            </div>
            <h1 class="success-message">
                <i class="fa-solid fa-check"></i> THANH TOÁN THÀNH CÔNG
            </h1>
            <a href="index.php" class="home-button">Quay về trang chủ</a>
        </div>
    </section>
    <!--------------------------------- end payment ----------------------------------->
    <!--------------------------------- footer ----------------------------------->
    <?php include 'footer.php'; ?>
    <!--------------------------------- footer ----------------------------------->
</body>
</html>
