<?php
// productadd_ajax.php
include "../../model/product.php";
include "../../model/pdo.php";
if (isset($_POST['category_id'])) {
    $category_id = $_POST['category_id'];
    // Giả sử bạn đã kết nối cơ sở dữ liệu và hàm `show_brand_ajax` trả về danh sách các brand theo category_id
    $brands = show_brand_ajax($category_id); 

    // Trả về dữ liệu dưới dạng JSON
    echo json_encode($brands);
}
?>

