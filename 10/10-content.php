<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-10">
    <div class="container">
        <!-- Swiper -->
        <h1 class="pro" style="text-align:center;"></h1>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="images/product-img-1.jpg">
                            <div class="middle">
                                <span class="text">SALE</span>
                            </div>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="tag">Accessories</a><br>
                            <a href="#">Chic Scarf</a><br>
                            <span class="price">$350.00</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="images/product-img-11.jpg">
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="tag">Accessories</a><br>
                            <a href="#">Chic Scarf</a><br>
                            <span class="price">$350.00</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="images/product-img-9.jpg">
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="tag">Accessories</a><br>
                            <a href="#">Chic Scarf</a><br>
                            <span class="price">$350.00</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="images/product-img-2.jpg">
                            <div class="middle">
                                <span class="text">NEW</span>
                            </div>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="tag">Accessories</a><br>
                            <a href="#">Chic Scarf</a><br>
                            <span class="price">$350.00</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="images/product-img-6.jpg">
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="tag">Accessories</a><br>
                            <a href="#">Chic Scarf</a><br>
                            <span class="price">$350.00</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="images/product-img-18.jpg">
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="tag">Accessories</a><br>
                            <a href="#">Chic Scarf</a><br>
                            <span class="price">$350.00</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="images/product-img-19.jpg">
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="tag">Accessories</a><br>
                            <a href="#">Chic Scarf</a><br>
                            <span class="price">$350.00</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="images/product-img-20.jpg">
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="tag">Accessories</a><br>
                            <a href="#">Chic Scarf</a><br>
                            <span class="price">$350.00</span>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <br>
            <br>
            <div class="swiper-button-next swiper-button-black" style="top: 147px; right:0"></div>
            <div class="swiper-button-prev swiper-button-black" style="top: 147px; left:0;"></div>
        </div>
    </div>
</div>