<?php
session_start();

// Kiểm tra xem có giá trị 'name' trong URL hay không
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $product_name = urldecode($_GET['name']);

    // Xóa sản phẩm có tên trong session cart
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['product_name'] === $product_name) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }

    // Reset lại chỉ số của mảng sau khi xóa
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Quay lại trang giỏ hàng sau khi xóa sản phẩm
header("Location: index.php?atc=cart");
exit();
?>
