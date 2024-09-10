<?php
session_start();
// Khởi tạo giỏ hàng nếu chưa tồn tại
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if(isset($_POST['buy_now'])){
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
}
// Lấy dữ liệu sản phẩm từ POST request
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_image = $_POST['product_image'];
$product_quantity = $_POST['product_quantity'];

// Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
$product_exists = false;
foreach ($_SESSION['cart'] as &$item) {
    if ($item['product_name'] == $product_name) {
        $item['product_quantity'] += $product_quantity;
        $product_exists = true;
        break;
    }
}

// Nếu sản phẩm chưa có, thêm vào giỏ hàng
if (!$product_exists) {
    $_SESSION['cart'][] = [
        'product_name' => $product_name,
        'product_price' => $product_price,
        'product_image' => $product_image,
        'product_quantity' => $product_quantity
    ];
}

// Chuyển hướng về trang giỏ hàng
header('Location: index.php?atc=cart');
exit;
?>
