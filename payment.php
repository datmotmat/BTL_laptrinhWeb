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
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content-left">
                    <div class="payment-content-left-method-delivery">
                        <p style="font-weight: bold; font-size: 16px">Phương thức giao hàng</p>
                        <div class="payment-content-left-method-delivery-item">
                            <input type="radio" checked />
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold; font-size: 16px">Phương thức thanh toán</p>
                        <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio" />
                            <label for="">Thanh toán thẻ tín dụng(OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="images/visa.jpg" alt="" />
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio" checked />
                            <label for="">Thanh toán bằng thẻ ATM(OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="images/jcb.jpg" alt="" />
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio" />
                            <label for="">Thanh toán Momo</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="images/momo.jpg" alt="" />
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio" />
                            <label for="">Thanh toán khi nhận hàng</label>
                        </div>
                    </div>
                </div>
                <div class="payment-content-right">
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã giảm giá/Quà tặng" />
                        <button><i class="fa-solid fa-check"></i></button>
                    </div>
                    <div class="payment-content-right-mnv">
                        <select name="" id="">
                            <option value="">Chọn mã nhân viên hỗ trợ</option>
                            <option value="">T345</option>
                            <option value="">A345</option>
                            <option value="">M345</option>
                            <option value="">I345</option>
                        </select>
                    </div>
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giảm giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php
                        $subtotal = 0;
                        if (!empty($_SESSION['cart'])):
                            foreach ($_SESSION['cart'] as $item):
                                $item_total = $item['product_price'] * $item['product_quantity'];
                                $subtotal += $item_total;
                        ?>
                            <tr>
                                <td><?= htmlspecialchars($item['product_name']) ?></td>
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
                            <td style="font-weight: bold" colspan="3">Giao hàng chuyển phát nhanh</td>
                            <td style="font-weight: bold">
                                <p>0<sup>₫</sup></p>
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
            <div class="payment-content-right-payment">
                <button onclick="window.location.href='payment_success.php'">TIẾP TỤC THANH TOÁN</button>
            </div>
        </div>
    </section>
    <!--------------------------------- end payment ----------------------------------->
    <!--------------------------------- footer ----------------------------------->
    <?php include 'footer.php'; ?>
    <!--------------------------------- footer ----------------------------------->
</body>
</html>
