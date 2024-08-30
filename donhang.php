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
        <!--------------------------------- cart ----------------------------------->
        <section class="cart">
            <div class="container">
                <div class="cart-top-wrap">
                    <div class="cart-top">
                        <div class="cart-top-cart cart-top-item">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="cart-top-addr cart-top-item">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="cart-top-pay cart-top-item">
                            <i class="fa-regular fa-credit-card"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="cart-content row">
                    <div class="cart-content-left">
                        <table>
                            <tr>
                                <th>SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>SỐ LƯỢNG</th>
                                <th>ĐƠN GIÁ</th>
                                <th>THÀNH TIỀN</th>
                                <th>TRẠNG THÁI</th>
                            </tr>
                            <tr>
                                <td><img src="images/but1.jpg" alt="" /></td>
                                <td><p>Bút viết bấm nhiều màu Funny vibes frog fish môi dày - Mix</p></td>
                                <td><input type="number" value="1" min="1" /></td>
                                <td>
                                    <p>25.000<sup>₫</sup></p>
                                </td>
                                <td>
                                    <p>25.000<sup>₫</sup></p>
                                </td>
                                <td><span>X</span></td>
                            </tr>
                            <tr>
                                <td><img src="images/but2.jpg" alt="" /></td>
                                <td><p>Bút viết bấm nhiều màu Funny vibes frog fish môi dày - Mix</p></td>
                                <td><input type="number" value="1" min="1" /></td>
                                <td>
                                    <p>25.000<sup>₫</sup></p>
                                </td>
                                <td>
                                    <p>25.000<sup>₫</sup></p>
                                </td>
                                <td><span>X</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="cart-content-right">
                        <table>
                            <tr>
                                <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                            </tr>
                            <tr>
                                <td>TỔNG SẢN PHẨM</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>TỔNG TIỀN HÀNG</td>
                                <td>
                                    <p>25.000<sup>₫</sup></p>
                                </td>
                            </tr>
                            <tr>
                                <td>TẠM TÍNH</td>
                                <td>
                                    <p style="color: black; font-weight: bold">25.000<sup>₫</sup></p>
                                </td>
                            </tr>
                        </table>
                        <div class="cart-content-right-text">
                            <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 500.000<sup>₫</sup></p>
                            <p style="color: red; font-weight: bold">
                                Mua thêm <span style="font-size: 18px">475.000<sup>₫</sup></span> để được miễn phí SHIP
                            </p>
                        </div>
                        <div class="cart-content-right-button">
                            <button onclick="window.location.href='category.php';">TIẾP TỤC MUA SẮM</button>
                            <button onclick="window.location.href='delivery.php';">THANH TOÁN</button>
                        </div>
                        <div class="cart-content-right-dangnhap">
                            <p>TÀI KHOẢN</p>
                            <br />
                            <p>Hãy <a href="">đăng nhập</a> tài khoản của bạn để tích điểm thành viên</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------------------------------- end cart ----------------------------------->

        <!--------------------------------- footer ----------------------------------->
        <?php include 'footer.php'; ?>
        <!--------------------------------- footer ----------------------------------->
    </body>
</html>
