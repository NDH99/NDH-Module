<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">
        <div class="items">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 pro">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="images/product-img-1.jpg">
                                    <img class="hover-img" src="images/giay2.jpg">
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="tag">Accessories</a><br>
                                    <a href="#">Chic Scarf</a><br>
                                    <span class="price">$350.00</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 pro">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="images/product-img-11.jpg">
                                    <img class="hover-img" src="">
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="tag">Accessories</a><br>
                                    <a href="#">Chic Scarf</a><br>
                                    <span class="price">$350.00</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 pro">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="images/product-img-9.jpg">
                                    <img class="hover-img" src="">
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="tag">Accessories</a><br>
                                    <a href="#">Chic Scarf</a><br>
                                    <span class="price">$350.00</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 pro">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="images/product-img-2.jpg">
                                    <img class="hover-img" src="">
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="tag">Accessories</a><br>
                                    <a href="#">Chic Scarf</a><br>
                                    <span class="price">$350.00</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 pro">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="images/product-img-6.jpg">
                                    <img class="hover-img" src="">
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="tag">Accessories</a><br>
                                    <a href="#">Chic Scarf</a><br>
                                    <span class="price">$350.00</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 pro">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="images/product-img-18.jpg">
                                    <img class="hover-img" src="">
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="tag">Accessories</a><br>
                                    <a href="#">Chic Scarf</a><br>
                                    <span class="price">$350.00</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 pro">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="images/product-img-19.jpg">
                                    <img class="hover-img" src="">
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="tag">Accessories</a><br>
                                    <a href="#">Chic Scarf</a><br>
                                    <span class="price">$350.00</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 pro">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="images/product-img-20.jpg">
                                    <img class="hover-img" src="">
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="tag">Accessories</a><br>
                                    <a href="#">Chic Scarf</a><br>
                                    <span class="price">$350.00</span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>