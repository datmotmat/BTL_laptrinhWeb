<?php
include "header.php";
include "slider.php";
include "class/category_class.php";

$category = new category;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_name = trim($_POST['category_name']);
    $insert_category = $category->insert_category($category_name);
    if ($insert_category) {
        echo "<p>Danh mục đã được thêm thành công!</p>";
    } else {
        echo "<p>Đã xảy ra lỗi khi thêm danh mục.</p>";
    }
}
?>
<div class="admin-content-right">
    <div class="admin-content-right-category_add">
        <h1>Thêm Danh Mục</h1>
        <form action="" method="POST">
            <input name="category_name" type="text" placeholder="Nhập tên danh mục" required />
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>
</html>
