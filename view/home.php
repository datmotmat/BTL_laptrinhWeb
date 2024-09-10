<section class="slider-container">
            <div class="slider-top">
                <div class="slider-left">
                    <div class="slider-change">
                        <img src="view/images/slide1.jpg" />
                        <img src="view/images/slide4.jpg" />
                        <img src="view/images/slide2.jpg" />
                    </div>
                    <button class="prev" onclick="prevSlide()">❮</button>
                    <button class="next" onclick="nextSlide()">❯</button>
                </div>
                <div class="slider-right">
                    <div class="slider-right-top">
                        <img src="view/images/sale1.jpg" alt="" />
                    </div>
                    <div class="slider-right-bottom">
                        <img src="view/images/sale2.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="slider-bottom">
                <img src="view/images/slide5.jpg" alt="" />
            </div>
        </section>
        <script>
            let slideIndex = 0;

            function showSlide(index) {
                const slides = document.querySelectorAll(".slider-change img");
                const slider = document.querySelector(".slider-change");
                var width_div = document.getElementsByClassName("slider-left")[0].offsetWidth;
                console.log(width_div);
                if (index >= slides.length) {
                    slideIndex = 0;
                } else if (index < 0) {
                    slideIndex = slides.length - 1;
                } else {
                    slideIndex = index;
                }
                slider.style.transform = `translateX(${-slideIndex * 800}px)`;
            }

            function nextSlide() {
                showSlide(slideIndex + 1);
            }

            function prevSlide() {
                showSlide(slideIndex - 1);
            }

            setInterval(nextSlide, 5000);
        </script>
        <!--------------------------------- end slider ----------------------------------->

        <!--------------------------------- homepage content ----------------------------------->
        <div class="homepage-content">
            <div class="bestSeller-container">
                <div class="bestSeller-top">
                    <h3>HÀNG BÁN CHẠY NHẤT</h3>
                    <a href="#"></a>
                </div>
                <div class="bestSeller-bottom">
                    <?php
                    foreach($spbest as $sp){
                        extract($sp);
                        $hinh=$img_path.$product_img;
                        echo'<div class="bestSeller-items item">
                                <img class="image" src="'.$hinh.'" alt="" />
                                <img class="new-icon" src="view/images/new.gif" />
                                <a href="index.php?atc=chitietsp&proid='.$product_id.'" class="bestSeller-items-name">'.$product_name.'</a>
                                <div class="bestSeller-items-price price">
                                    <del>'.number_format($product_price, 0, '', '.').'<sup>đ</sup></del> <span>'.number_format($product_sale, 0, '', '.').'<sup>đ</sup></span>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            </div>
            <div class="ads-container">
                <img src="view/images/slide3.jpg" alt="" />
            </div>
            <div class="sale-container">
                <div class="sale-left">
                    <div><img src="view/images/flash_sale.jpg" alt="" /></div>
                </div>
                <div class="sale-right">
                    <div class="sale-top">
                        <h3>SALE</h3>
                        <a href="#"></a>
                    </div>
                    <div class="sale-bottom">
                    <?php
                    foreach($spsale as $sp){
                        extract($sp);
                        $hinh=$img_path.$product_img;
                        echo'<div class="bestSeller-items item">
                                <img class="image" src="'.$hinh.'" alt="" />
                                <img class="new-icon" src="view/images/new.gif" />
                                <a href="index.php?atc=chitietsp&proid='.$product_id.'" class="bestSeller-items-name">'.$product_name.'</a>
                                <div class="bestSeller-items-price price">
                                    <del>'.number_format($product_price, 0, '', '.').'<sup>đ</sup></del> <span>'.number_format($product_sale, 0, '', '.').'<sup>đ</sup></span>
                                </div>
                            </div>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>