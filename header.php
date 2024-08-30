<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.php"><img src="./images/logoShop.jpg" /></a>
            </div>
            <div class="menu">
                <ol>
                    <li><a href="index.php?atc=gioithieu">GIỚI THIỆU</a></li>
                    <li>
                        <a href="index.php?atc=dodung">ĐỒ DÙNG HỌC TẬP</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">BÚT</a>
                                <ul>
                                    <li><a href="#">BÚT CHÌ</a></li>
                                    <li><a href="#">BÚT BI</a></li>
                                </ul>
                            </li>
                            <li><a href="#">THƯỚC KẺ & TẨY</a></li>
                            <li><a href="#">HỘP BÚT</a></li>
                            <li><a href="#">MÀU VẼ</a></li>
                        </ul>
                    </li>
                    <li><a href="#">TẬP VIẾT</a></li>
                    <li><a href="#">CẶP SÁCH</a></li>
                    <li><a href="#">MÁY TÍNH CẦM TAY</a></li>
                </ol>
            </div>
            <div class="others">
                <ol>
                    <li>
                        <div class="search-container">
                            <input type="text" placeholder="Tìm kiếm..." class="search-input" />
                            <button class="search-button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </li>
                    <li>
                        <a href="login.php"><i class="fa fa-user"></i></a>
                    </li>
                    <li>
                        <a href="index.php?atc=giohang" title="Giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                </ol>
            </div>
            <script>
                const header = document.querySelector("header");
                window.addEventListener("scroll", function () {
                    x = window.pageYOffset;
                    if (x > 0) {
                        header.classList.add("sticky");
                    } else {
                        header.classList.remove("sticky");
                    }
                });
            </script>
        </header>
