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

    <?php include 'header.php'; ?>

    <!----------------------------------- Product ----------------------------------->
    <section class="product">
        <div class="container">
            <div class="product-top row">
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <?php
                            $product=loadoneproduct($pro_id);
                            extract($product);
                            $hinh=$img_path.$product_img;
                            echo '<img src="'.$hinh.'" alt="" />';?>
                    </div>
                    <div class="product-content-left-small-img">
                        <?php
                            echo '<img src="'.$hinh.'" alt="" />';
                            $pro_img_desc=loadproduct_img_desc($pro_id);
                            foreach($pro_img_desc as $pro_img){
                                extract($pro_img);
                                $hinh=$img_path.$product_img_desc;
                                echo '<img src="'.$hinh.'" alt="" />';
                            }
                        ?>
                    </div>
                </div>
                <script>
                    const bigIMG = document.querySelector(".product-content-left-big-img img");
                    const smallIMG = document.querySelectorAll(".product-content-left-small-img img");
                    smallIMG.forEach(function (imgItem, X) {
                        imgItem.addEventListener("click", function () {
                            bigIMG.src = imgItem.src;
                        });
                    });
                </script>
                <div class="product-content-right">
                    <?php
                        $product=loadoneproduct($pro_id);
                        extract($product);
                        echo '<div class="product-content-right-product-name">
                                <h1>'.$product_name.'</h1>
                                <p>MSP: '.$product_code.'</p>
                            </div>
                            <div class="product-content-right-product-price">
                                <p>'.number_format($product_sale, 0, '', '.').' <sup>₫</sup></p>
                            </div>'
                    ?>
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
                            <?php
                            $hinh=$img_path.$product_img;
                            echo '<input type="hidden" name="product_name" value="'.$product_name.'">
                                <input type="hidden" name="product_price" value="'.$product_sale.'">
                                <input type="hidden" name="product_image" value="'.$hinh.'">';
                            ?>
                            <input type="hidden" id="product_quantity" name="product_quantity" value="1">
                            <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const quantityInput = document.getElementById("quantity");
                            const hiddenQuantityInput = document.getElementById("product_quantity");
                            const increaseBtn = document.getElementById("increase");
                            const decreaseBtn = document.getElementById("decrease");

                            // Cập nhật hidden input khi số lượng thay đổi
                            quantityInput.addEventListener("input", function() {
                                hiddenQuantityInput.value = quantityInput.value;
                            });

                            // Tăng số lượng khi nhấn nút "+"
                            increaseBtn.addEventListener("click", function(event) {
                                event.preventDefault();
                                let currentValue = parseInt(quantityInput.value, 10);
                                if (!isNaN(currentValue)) {
                                    quantityInput.value = currentValue + 1;
                                    hiddenQuantityInput.value = quantityInput.value;
                                }
                            });

                            // Giảm số lượng khi nhấn nút "-"
                            decreaseBtn.addEventListener("click", function(event) {
                                event.preventDefault();
                                let currentValue = parseInt(quantityInput.value, 10);
                                if (!isNaN(currentValue) && currentValue > 1) {
                                    quantityInput.value = currentValue - 1;
                                    hiddenQuantityInput.value = quantityInput.value;
                                }
                            });
                        });
                    </script>
                            <!-- Nút thêm vào giỏ hàng -->
                            <button type="submit" id="button" name="add_to_cart" style="margin-right:30px;">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <p>Thêm vào giỏ hàng</p>
                            </button>
                        </form>
                        <form method="POST" action="add_to_cart.php">
                        <?php
                            echo '<input type="hidden" name="product_name" value="'.$product_name.'">
                                <input type="hidden" name="product_price" value="'.$product_sale.'">
                                <input type="hidden" name="product_image" value="'.$hinh.'">';
                            ?>
                            <input type="hidden" id="product_quantity" name="product_quantity" value="1">

                            <!-- Nút mua hàng sẽ cập nhật giỏ hàng từ đầu -->
                            <button type="submit" id="button" name="buy_now"><p>Mua hàng</p></button>
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
                                    <?php echo $product_desc;?>
                                        <!-- Mô tả sản phẩm <br />
                                        Tên: hộp bút chì <br />
                                        Các tính năng: Hai lớp, túi khóa kéo dung tích lớn, vải chống thấm, xách tay<br />
                                        Chất liệu: Vải <br />
                                        Kích thước: 19,5cm * 7,5cm * 7,5cm <br />
                                        Số lượng: 1 mảnh <br />
                                        Trọng lượng: 63g <br />
                                        Màu sắc có sẵn: Hồng / Xám / Vàng / Xanh lá / Xanh đậm / Xám đậm <br />
                                        Chúng tôi sử dụng túi bong bóng để bọc sản phẩm thật chặt để tránh hư hỏng trong quá
                                        trình vận chuyển. <br /> -->
                                    </div>
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                    const chitiet = document.querySelector(".chitiet");
                                    const motasanpham = document.querySelector(".motasanpham");

                                    // Kiểm tra nếu phần tử tồn tại trước khi thêm sự kiện
                                    if (chitiet && motasanpham) {
                                        chitiet.addEventListener("click", function () {
                                            chitiet.classList.add("selected");
                                            motasanpham.classList.remove("selected");
                                            document.querySelector(".product-content-right-detail-bottom-content-motasanpham").style.display = "none";
                                            document.querySelector(".product-content-right-detail-bottom-content-chitiet").style.display = "block";
                                        });

                                        motasanpham.addEventListener("click", function () {
                                            motasanpham.classList.add("selected");
                                            chitiet.classList.remove("selected");
                                            document.querySelector(".product-content-right-detail-bottom-content-chitiet").style.display = "none";
                                            document.querySelector(".product-content-right-detail-bottom-content-motasanpham").style.display = "block";
                                        });
                                    }

                                    const button = document.querySelector(".product-content-right-detail-top");
                                    if (button) {
                                        button.addEventListener("click", function () {
                                            const bottomContent = document.getElementById("bottom-content");
                                            if (bottomContent.style.maxHeight) {
                                                bottomContent.style.maxHeight = null;
                                            } else {
                                                bottomContent.style.maxHeight = bottomContent.scrollHeight + "px";
                                            }
                                        });
                                    }
                                });

                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="view/js/script.js"></script>

    <!------------- Product related ----------->
    <section class="product-related">
        <div class="product-related-title">
            <p>SẢN PHẨM LIÊN QUAN</p>
        </div>
        <div class="product-content row">
            <?php 
            $bra=loadallproduct_brand($brand_id);
            foreach($bra as $b){
                extract($b);
                $hinh=$img_path.$product_img;
                echo '<div class="product-realted-item item">
                        <img src="'.$hinh.'" alt="" />
                        <a href="index.php?atc=chitietsp&proid='.$product_id.'">'.$product_name.'</a>
                        <p class="price">
                            <del>'.number_format($product_price, 0, '', '.').'<sup>đ</sup></del> <span>'.number_format($product_sale, 0, '', '.').'<sup>đ</sup></span>
                        </p>
                    </div>';
            }
            ?>
            <!-- <div class="product-realted-item item">
                <img src="images/but8.jpg" alt="" />
                <h1>Bút viết bấm nhiều màu</h1>
                <p class="price">
                    <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                </p>
            </div> -->
        </div>
    </section>
