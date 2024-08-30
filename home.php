<section class="slider-container">
            <div class="slider-top">
                <div class="slider-left">
                    <div class="slider-change">
                        <img src="./images/slide1.jpg" />
                        <img src="./images/slide4.jpg" />
                        <img src="./images/slide2.jpg" />
                    </div>
                    <button class="prev" onclick="prevSlide()">❮</button>
                    <button class="next" onclick="nextSlide()">❯</button>
                </div>
                <div class="slider-right">
                    <div class="slider-right-top">
                        <img src="./images/sale1.jpg" alt="" />
                    </div>
                    <div class="slider-right-bottom">
                        <img src="./images/sale2.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="slider-bottom">
                <img src="images/slide5.jpg" alt="" />
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
                    <a href="#">Xem tất cả ></a>
                </div>
                <div class="bestSeller-bottom">
                    <div class="bestSeller-items item">
                        <img class="image" src="images/sale_item1.jpg" alt="" />
                        <img class="new-icon" src="./images/new.gif" />
                        <a href="#" class="bestSeller-items-name">ITEMS1</a>
                        <div class="bestSeller-items-price price">
                            <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                        </div>
                    </div>
                    <div class="bestSeller-items item">
                        <img class="image" src="images/sale_item2.jpg" alt="" />
                        <img class="new-icon" src="./images/new.gif" />
                        <a href="#" class="bestSeller-items-name">ITEMS1</a>
                        <div class="bestSeller-items-price price">
                            <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                        </div>
                    </div>
                    <div class="bestSeller-items item">
                        <img class="image" src="images/sale_item3.jpg" alt="" />
                        <img class="new-icon" src="./images/new.gif" />
                        <a href="#" class="bestSeller-items-name">ITEMS1</a>
                        <div class="bestSeller-items-price price">
                            <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                        </div>
                    </div>
                    <div class="bestSeller-items item">
                        <img class="image" src="images/sale_item4.jpg" alt="" />
                        <img class="new-icon" src="./images/new.gif" />
                        <a href="#" class="bestSeller-items-name">ITEMS1</a>
                        <div class="bestSeller-items-price price">
                            <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                        </div>
                    </div>
                    <div class="bestSeller-items item">
                        <img class="image" src="images/sale_item5.jpg" alt="" />
                        <img class="new-icon" src="./images/new.gif" />
                        <a href="#" class="bestSeller-items-name">ITEMS1</a>
                        <div class="bestSeller-items-price price">
                            <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ads-container">
                <img src="images/slide3.jpg" alt="" />
            </div>
            <div class="sale-container">
                <div class="sale-left">
                    <div><img src="images/flash_sale.jpg" alt="" /></div>
                </div>
                <div class="sale-right">
                    <div class="sale-top">
                        <h3>SALE</h3>
                        <a href="#">Xem tất cả ></a>
                    </div>
                    <div class="sale-bottom">
                        <div class="sale-items item">
                            <img class="image" src="images/sale_item1.jpg" alt="" />
                            <a href="#" class="sale-items-name">ITEMS1</a>
                            <p class="sale-items-price price">
                                <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                            </p>
                        </div>
                        <div class="sale-items item">
                            <img class="image" src="images/sale_item2.jpg" alt="" />
                            <a href="#" class="sale-items-name">ITEMS2</a>
                            <p class="sale-items-price price">
                                <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                            </p>
                        </div>
                        <div class="sale-items item">
                            <img class="image" src="images/sale_item3.jpg" alt="" />
                            <a href="#" class="sale-items-name">ITEMS3</a>
                            <p class="sale-items-price price">
                                <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                            </p>
                        </div>
                        <div class="sale-items item">
                            <img class="image" src="images/sale_item4.jpg" alt="" />
                            <a href="#" class="sale-items-name">ITEMS4</a>
                            <p class="sale-items-price price">
                                <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                            </p>
                        </div>
                        <div class="sale-items item">
                            <img class="image" src="images/sale_item5.jpg" alt="" />
                            <a href="#" class="sale-items-name">ITEMS5</a>
                            <p class="sale-items-price price">
                                <del>100.000<sup>đ</sup></del> <span>70.000<sup>đ</sup></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>