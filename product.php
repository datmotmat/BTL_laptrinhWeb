<?php
session_start();

// Khi người dùng ấn nút "Mua hàng"
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['buy_now'])) {
    // Xóa giỏ hàng hiện tại
    unset($_SESSION['cart']);

    // Thêm sản phẩm hiện tại vào giỏ hàng
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $_SESSION['cart'][] = [
        'product_name' => $product_name,
        'product_price' => $product_price,
        'product_image' => $product_image,
        'product_quantity' => $product_quantity
    ];
header("location: delivery.php");
    exit;
}
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

    <!----------------------------------- Product ----------------------------------->
    <section class="product">
        <div class="container">
            <div class="product-top row">
                <p>Trang chủ</p>
                <span>&#10230;</span>
                <p>ĐỒ DÙNG HỌC TẬP</p>
                <span>&#10230;</span>
                <p>ITEMS1</p>
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="images/but1.jpg" alt="" />
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="images/but1.jpg" alt="" />
                        <img src="images/but2.jpg" alt="" />
                        <img src="images/but3.jpg" alt="" />
                        <img src="images/but1.jpg" alt="" />
                        <img src="images/but1.jpg" alt="" />
                    </div>
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1>Bút viết bấm nhiều màu Funny vibes frog fish môi dày - Mix</h1>
                        <p>MSP: M.C101.NO.24074141-XX</p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p>25.000 <sup>₫</sup></p>
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold">Số lượng:</p>
                        <div class="quantity-container">
                            <button class="quantity-btn" id="decrease">-</button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" />
                            <button class="quantity-btn" id="increase">+</button>
                        </div>
                    </div>
                    
                    <div class="product-content-right-product-button">
                        <!-- Form thêm sản phẩm vào giỏ hàng -->
                        <form method="POST" action="add_to_cart.php">
                            <input type="hidden" name="product_name" value="Bút viết bấm nhiều màu Funny vibes frog fish môi dày - Mix">
                            <input type="hidden" name="product_price" value="25000">
                            <input type="hidden" name="product_image" value="images/but1.jpg">
                            <input type="hidden" id="product_quantity" name="product_quantity" value="1">

                            <!-- Nút thêm vào giỏ hàng -->
                            <button type="submit" name="add_to_cart" style="margin-right:30px;">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <p>Thêm vào giỏ hàng</p>
                            </button>


                        </form>
                        <form method="POST" action="">
                            <input type="hidden" name="product_name" value="Bút viết bấm nhiều màu Funny vibes frog fish môi dày - Mix">
                            <input type="hidden" name="product_price" value="25000">
                            <input type="hidden" name="product_image" value="images/but1.jpg">
                            <input type="hidden" id="product_quantity" name="product_quantity" value="1">

                            <!-- Nút mua hàng sẽ cập nhật giỏ hàng từ đầu -->
                            <button type="submit" name="buy_now"><p>Mua hàng</p></button>
                        </form>
                    </div>
                    <div class="product-content-right-detail">
                            <div class="product-content-right-detail-top">&#8744;</div>
                            <div class="product-content-right-detail-bottom">
                                <div class="product-content-right-detail-bottom-content-big" id="bottom-content">
                                    <div class="product-content-right-detail-bottom-content-title row">
                                        <div class="product-content-right-detail-bottom-content-title-item motasanpham selected">
                                            <p>Mô tả sản phẩm</p>
                                        </div>
                                        <div class="product-content-right-detail-bottom-content-title-item chitiet">
                                            <p>Chi tiết</p>
                                        </div>
                                    </div>
                                    <div class="product-content-right-detail-bottom-content">
                                        <div class="product-content-right-detail-bottom-content-chitiet">
                                            <div class="kho row">
                                                <label class="chitiet-title">Kho</label>
                                                <div class="kho-content">1558</div>
                                            </div>
                                            <div class="noigui row">
                                                <label class="chitiet-title">Gửi từ</label>
                                                <div class="noigui-content">Nước ngoài</div>
                                            </div>
                                        </div>
                                        <div class="product-content-right-detail-bottom-content-motasanpham" id="asd">
                                            Mô tả sản phẩm <br />
                                            Tên: hộp bút chì <br />
                                            Các tính năng: Hai lớp, túi khóa kéo dung tích lớn, vải chống thấm, xách tay<br />
                                            Chất liệu: Vải <br />
                                            Kích thước: 19,5cm * 7,5cm * 7,5cm <br />
                                            Số lượng: 1 mảnh <br />
                                            Trọng lượng: 63g <br />
                                            Màu sắc có sẵn: Hồng / Xám / Vàng / Xanh lá / Xanh đậm / Xám đậm <br />
                                            Chúng tôi sử dụng túi bong bóng để bọc sản phẩm thật chặt để tránh hư hỏng trong quá
                                            trình vận chuyển. <br />
                                        </div>
                                    </div>
                                    <script src="js/script.js"></script>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>

    <!------------- Product related ----------->
    <section class="product-related">
        <div class="product-related-title">
            <p>SẢN PHẨM LIÊN QUAN</p>
        </div>
        <div class="product-content row">
            <div class="product-realted-item item">
                <img src="images/but8.jpg" alt="" />
                <h1>Bút viết bấm nhiều màu</h1>
                <p class="price">
                    <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                </p>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
