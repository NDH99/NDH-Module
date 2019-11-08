<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-14">
   <div class="container">
        <div class="row pro">
            <div class="col-md-6">
                <img src="images/h8-img-1.jpg" alt="responsive" class="img-responsive">
                <a href="#" class="title"><p>Handmade Straw Bag</p></a>
                <a href="#" class="group">Bags</a>
            </div>
            <div class="col-md-6">
                <img src="images/product-img-61.jpg" alt="responsive" class="img-responsive">
                
            </div>
        </div>
        <div class="row pro">
            <div class="col-md-6">
                <img src="images/product-img-63.jpg" alt="responsive" class="img-responsive">
            </div>
            <div class="col-md-6">
                <img src="images/h8-img-3.jpg" alt="responsive" class="img-responsive">
                <a href="#" class="title"><p>Retro Fedora Hat</p></a>
                <a href="#" class="group">Women - WOMEN</a>
            </div>
        </div>
        <div class="row pro">
            <div class="col-md-6">
                <img src="images/2.png" alt="responsive" class="img-responsive">
                <a href="#" class="title"><p>SLIDE FLAT SANDAL</p></a>
                <a href="#" class="group">Bestsellers</a>
            </div>
            <div class="col-md-6">
                <img src="images/1.png" alt="responsive" class="img-responsive">
            </div>
        </div>
   </div>
</div>