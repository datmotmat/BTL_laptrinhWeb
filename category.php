<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    </head>
    <body>
    <?php include 'header.php'; ?>
        <!--------------------------------- category ----------------------------------->
        <section class="category">
            <div class="container">
                <div class="row">
                    <div class="category-left">
                        <div class="category-left-menu" id="category-left-menu" onclick="toggleMenu()">
                            <div class="menu-left">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                            <div class="menu-right">
                                <a href="#">DANH MỤC SẢN PHẨM</a>
                            </div>
                        </div>
                        <ul id="category-left-menu-li">
                            <li class="category-left-li"><a href="#">ĐỒ DÙNG HỌC TẬP</a></li>
                            <li class="category-left-li"><a href="#">TẬP VIẾT</a></li>
                            <li class="category-left-li"><a href="#">CẶP SÁCH</a></li>
                            <li class="category-left-li"><a href="#">MÁY TÍNH CẦM TAY</a></li>
                        </ul>
                    </div>

                    <script src="./js/script.js"></script>

                    <div class="category-right row">
                        <div class="category-right-top-item">
                            <p>BÚT</p>
                        </div>
                        <div class="category-right-top-item">
                            <select name="" id="">
                                <option value>Sắp xếp</option>
                                <option value>Giá cao đến thấp</option>
                                <option value>Giá thấp đến cao</option>
                            </select>
                        </div>
                        <div class="category-right-content row">
                            <a  class="category-right-content-item item" href="product.php" style="width: calc(25% - 12px)">
                                <div >
                                    <img src="./images/but1.jpg" />
                                    <h1>Bút viết bấm nhiều màu</h1>
                                    <p class="price">
                                        <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                                    </p>
                                </div>
                            </a>
                            <div class="category-right-content-item item">
                                <img src="./images/but2.jpg" />
                                <h1>Bút viết bấm nhiều màu</h1>
                                <p class="price">
                                    <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                                </p>
                            </div>
                            <div class="category-right-content-item item">
                                <img src="./images/but3.jpg" />
                                <h1>Bút viết bấm nhiều màu</h1>
                                <p class="price">
                                    <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                                </p>
                            </div>
                            <div class="category-right-content-item item">
                                <img src="./images/but4.jpg" />
                                <h1>Bút viết bấm nhiều màu</h1>
                                <p class="price">
                                    <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                                </p>
                            </div>
                            <div class="category-right-content-item item">
                                <img src="./images/but5.jpg" />
                                <h1>Bút viết bấm nhiều màu</h1>
                                <p class="price">
                                    <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                                </p>
                            </div>
                            <div class="category-right-content-item item">
                                <img src="./images/but6.jpg" />
                                <h1>Bút viết bấm nhiều màu</h1>
                                <p class="price">
                                    <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                                </p>
                            </div>
                            <div class="category-right-content-item item">
                                <img src="./images/but7.jpg" />
                                <h1>Bút viết bấm nhiều màu</h1>
                                <p class="price">
                                    <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                                </p>
                            </div>
                            <div class="category-right-content-item item">
                                <img src="./images/but8.jpg" />
                                <h1>Bút viết bấm nhiều màu</h1>
                                <p class="price">
                                    <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                                </p>
                            </div>
                        </div>
                        <div class="category-right-bottom">
                            <p><span>&#171;</span>1 2 3 4 5<span>&#187;</span>Trang cuối</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------------------------------- footer ----------------------------------->
        
    <?php include 'footer.php'; ?>
        <!--------------------------------- footer ----------------------------------->
    </body>
</html>
