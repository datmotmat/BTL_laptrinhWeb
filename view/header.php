
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="view/css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <script src="view/js/script.js"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.php"><img src="view/images/logoShop.jpg" /></a>
            </div>
            <div class="menu">
                <ol>
                    <li><a href="index.php?atc=gioithieu">GIỚI THIỆU</a></li>
                    <?php
                        // Giả sử $danhmuc đã được định nghĩa và chứa dữ liệu cần thiết
                        foreach ($danhmuc as $dm) {
                            extract($dm);
                            $linkdm = "index.php?atc=danhmucsp&cateid=" . $category_id;
                            echo '<li>';
                            echo '<a class="upCase" href="' . $linkdm . '">' . $category_name . '</a>';
                            echo '<ul class="sub-menu">';
                            
                            // Lấy danh sách thương hiệu cho danh mục hiện tại
                            $brand = loadallbrand_cate($category_id);
                            foreach ($brand as $br) {
                                extract($br);
                                $linkbr = "index.php?atc=danhmucsp&cateid=$category_id&brandid=$brand_id";
                                echo '<li><a href="' . $linkbr . '">' . $brand_name . '</a></li>';
                            }
                            
                            echo '</ul>';
                            echo '</li>';
                        }?>
                </ol>
            </div>
            <div class="others">
                <ol>
                    <li>
                        <div class="search-container">
                            <input type="text" placeholder="Tìm kiếm..." class="search-input" />
                            <button class="search-button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </li>
                    <?php
                        if (isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                            echo '<li class="dangxuathover">
                                    <i class="fa fa-user"> '.$user_email.'</i>
                                    <ul class="dangxuat t">
                                        <li><a href="index.php?atc=thoat">Đăng xuất</a></li>
                                    </ul>
                                </li>
                                <li class="dangxuathover">
                                    <i class="fa fa-shopping-cart"></i>
                                    <ul class="dangxuat le">
                                        <li><a href="index.php?atc=cart">Giỏ hàng</a></li>
                                        <li><a href="index.php?atc=bill">Đơn hàng</a></li>
                                    </ul>
                                </li>';
                        }
                        else{
                            echo '<li>
                                    <a href="index.php?atc=dangky"><i class="fa fa-user"></i></a>
                                </li>
                                <li>
                                    <a href="index.php?atc=giohang" title="Giỏ hàng"><i class="fa fa-shopping-cart"></i></a>
                                </li>';
                        }
                    ?>
                </ol>
            </div>
            <script>
                const header = document.querySelector("header");
                window.addEventListener("scroll", function () {
                    x = window.pageYOffset;
                    if (x > 0) {
                        header.classList.add("sticky");
                    } else {
                        header.classList.remove("sticky");
                    }
                });
            </script>
        </header>
