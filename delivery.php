<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var city = document.getElementById("city").value;
            var district = document.getElementById("district").value;
            var address = document.getElementById("address").value;

            if (name === "" || phone === "" || city === "" || district === "" || address === "") {
                alert("Vui lòng điền đầy đủ thông tin.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <?php include 'header.php'; ?>

    <!--------------------------------- delivery ----------------------------------->
    <section class="delivery">
        <div class="container">
            <div class="delivery-top-wrap">
                <div class="delivery-top">
                    <div class="delivery-top-cart delivery-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="delivery-top-addr delivery-top-item">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="delivery-top-pay delivery-top-item">
                        <i class="fa-regular fa-credit-card"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="delivery-content row">
                <div class="delivery-content-left">
                    <p>Vui lòng chọn địa chỉ giao hàng</p>
                    <div class="delivery-content-left-dangnhap row">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <p>Đăng nhập (Nếu bạn đã có tài khoản)</p>
                    </div>
                    <div class="delivery-content-left-khachle row">
                        <p>
                            <input name="loaikhac" type="radio" checked />
                            <span style="font-weight: bold">Khách lẻ</span> (Nếu bạn không muốn lưu lại thông tin)
                        </p>
                    </div>
                    <div class="delivery-content-left-dangky row">
                        <p>
                            <input name="loaikhac" type="radio" />
                            <span style="font-weight: bold">Đăng ký</span> (Tạo mới tài khoản với thông tin bên dưới)
                        </p>
                    </div>
                    <form action="payment.php" method="post" onsubmit="return validateForm()">
                        <div class="delivery-content-left-input-top row">
                            <div class="delivery-content-left-input-top-item">
                                <label for="name">Họ tên <span style="color: red">*</span></label>
                                <input id="name" type="text" name="name" required />
                            </div>
                            <div class="delivery-content-left-input-top-item">
                                <label for="phone">Điện thoại<span style="color: red">*</span></label>
                                <input id="phone" type="text" name="phone" required />
                            </div>
                            <div class="delivery-content-left-input-top-item">
                                <label for="city">Tỉnh/TP<span style="color: red">*</span></label>
                                <input id="city" type="text" name="city" required />
                            </div>
                            <div class="delivery-content-left-input-top-item">
                                <label for="district">Quận/Huyện<span style="color: red">*</span></label>
                                <input id="district" type="text" name="district" required />
                            </div>
                        </div>
                        <div class="delivery-content-left-input-bottom">
                            <label for="address">Địa chỉ<span style="color: red">*</span></label>
                            <input id="address" type="text" name="address" required />
                        </div>
                        <div class="delivery-content-left-button row">
                            <a href="cart.php">
                                <span>&#171;</span>
                                <p>Quay lại giỏ hàng</p>
                            </a>
                            <button type="submit">
                                <p style="font-weight: bold">THANH TOÁN VÀ GIAO HÀNG</p>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="delivery-content-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giảm giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php
                        $total = 0;
                        $tax = 0;
                        $subtotal = 0;
                        if (!empty($_SESSION['cart'])):
                            foreach ($_SESSION['cart'] as $item):
                                $item_total = $item['product_price'] * $item['product_quantity'];
                                $subtotal += $item_total;
                        ?>
                            <tr>
                                <td><?= htmlspecialchars($item['product_price']) ?></td>
                                <td>-30%</td>
                                <td><?= htmlspecialchars($item['product_quantity']) ?></td>
                                <td>
                                    <p><?= number_format($item_total) ?><sup>₫</sup></p>
                                </td>
                            </tr>
                        <?php
                            endforeach;
                            $tax = $subtotal * 0.2; // 20% VAT
                            $total = $subtotal + $tax;
                        else:
                        ?>
                            <tr>
                                <td colspan="4"><p>Giỏ hàng trống.</p></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <td style="font-weight: bold" colspan="3">Tổng</td>
                            <td style="font-weight: bold">
                                <p><?= number_format($subtotal) ?><sup>₫</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold" colspan="3">Thuế VAT</td>
                            <td style="font-weight: bold">
                                <p><?= number_format($tax) ?><sup>₫</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold" colspan="3">Tổng tiền hàng</td>
                            <td style="font-weight: bold">
                                <p><?= number_format($total) ?><sup>₫</sup></p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------- end delivery ----------------------------------->
    <!--------------------------------- footer ----------------------------------->
    <?php include 'footer.php'; ?>
    <!--------------------------------- footer ----------------------------------->
</body>
</html>
