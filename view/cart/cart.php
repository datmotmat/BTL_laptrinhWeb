<?php
session_start()
?>
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
                            <th>XÓA</th>
                        </tr>
                        <?php if (!empty($_SESSION['cart'])): ?>
                            <?php foreach ($_SESSION['cart'] as $item): ?>
                                <tr>
                                    <td><img src="<?= htmlspecialchars($item['product_image']) ?>" alt="" /></td>
                                    <td><p><?= htmlspecialchars($item['product_name']) ?></p></td>
                                    <td><input type="number" value="<?= htmlspecialchars($item['product_quantity']) ?>" min="1" /></td>
                                    <td><p><?= number_format($item['product_price']) ?><sup>₫</sup></p></td>
                                    <td><p><?= number_format($item['product_price'] * $item['product_quantity']) ?><sup>₫</sup></p></td>
                                    <td><a href="remove_from_cart.php?name=<?= urlencode($item['product_name']) ?>">Xóa</a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6"><p>Giỏ hàng trống.</p></td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div>
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <td>TỔNG SẢN PHẨM</td>
                            <td>
                                <?php
                                $total_quantity = array_sum(array_column($_SESSION['cart'], 'product_quantity'));
                                echo htmlspecialchars($total_quantity);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>TẠM TÍNH</td>
                            <td>
                                <?php
                                $subtotal = array_sum(array_map(function($item) {
                                    return $item['product_price'] * $item['product_quantity'];
                                }, $_SESSION['cart']));
                                echo number_format($subtotal) . '<sup>₫</sup>';
                                ?>
                            </td>
                        </tr>
                    </table>
                    <div class="cart-content-right-button">
                        <button onclick="window.location.href='index.php?atc=danhmucsp&cateid=35';">TIẾP TỤC MUA SẮM</button>
                        <button onclick="window.location.href='index.php?atc=delivery';">THANH TOÁN</button>
                    </div>
                </div>
            </div>
        </div>
                            </section>