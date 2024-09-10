        <!--------------------------------- category ----------------------------------->
        <section class="category">
            <div class="container">
                <div class="row">
                    <div class="category-left">
                        <div class="category-left-menu" id="category-left-menu" onclick="toggleMenu()">
                            <div class="menu-left">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                            <div class="menu-right">
                                <a href="index.php?atc=danhmucsp">DANH MỤC SẢN PHẨM</a>
                            </div>
                        </div>
                        <ul id="category-left-menu-li">
                            <?php
                            foreach($danhmuc as $dm){
                                extract($dm);
                                $linkdm="index.php?atc=danhmucsp&cateid=".$category_id; ?>
                                <li class="category-left-li">
                                    <a class="upCase" href="<?=$linkdm?>"><?=$category_name?></a>
                                    <ul class="brand">
                                        <?php
                                        $brand=loadallbrand_cate($category_id);
                                        foreach($brand as $br){
                                            extract($br);
                                            $linkbr="index.php?atc=danhmucsp&cateid=$category_id&brandid=$brand_id";
                                        ?>
                                        <li><a href="<?=$linkbr?>"><?=$brand_name?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <script src="view/js/script.js"></script>

                    <div class="category-right row">
                        <div class="category-right-top-item">
                            <p></p>
                        </div>
                        <div class="category-right-top-item">
                            <select name="" id="">
                                <option value>Sắp xếp</option>
                                <option value>Giá cao đến thấp</option>
                                <option value>Giá thấp đến cao</option>
                            </select>
                        </div>
                        <div class="category-right-content row">
                            <?php
                            if(isset($_GET['brandid'])&&($_GET['brandid']>0)){
                                foreach($product_brand as $bra){
                                    extract($bra);
                                    $hinh=$img_path.$product_img;
                                    echo '<div class="category-right-content-item item">
                                            <img src="'.$hinh.'" />
                                            <a href="index.php?atc=chitietsp&proid='.$product_id.'">'.$product_name.'</a>
                                            <p class="price">
                                                <del>'.number_format($product_price, 0, '', '.').'<sup>đ</sup></del> <span>'.number_format($product_sale, 0, '', '.').'<sup>đ</sup></span>
                                            </p>
                                        </div>';
                                }
                            }else if(isset($_GET['cateid'])&&($_GET['cateid']>0)){
                                foreach($product_cate as $categ){
                                    extract($categ);
                                    $hinh=$img_path.$product_img;
                                    echo '<div class="category-right-content-item item">
                                            <img src="'.$hinh.'" />
                                            <a href="index.php?atc=chitietsp&proid='.$product_id.'">'.$product_name.'</a>
                                            <p class="price">
                                                <del>'.number_format($product_price, 0, '', '.').'<sup>đ</sup></del> <span>'.number_format($product_sale, 0, '', '.').'<sup>đ</sup></span>
                                            </p>
                                        </div>';
                                }
                            }
                            ?>
                        </div>
                        <div class="category-right-bottom">
                            <p><span>&#171;</span>1 2 3 4 5<span>&#187;</span>Trang cuối</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

