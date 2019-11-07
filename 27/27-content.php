<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-10">
    <div class="container">
        <div class="row">
            <div class="adudu-header">
                <h5 class="adudu1">Fashion Bloger
                </h5>
                <h1>Dorothy Tunner</h1>
            </div>
            <div class="adudu-chua3anh">
                <div class="col-md-6">
                    <img src="images/w1.jpg" alt="sexy1" class="adudu-img">
                </div>
                <div class="col-md-6">
                    <img src="images/w2.jpg" alt="sexy1" class="adudu-img1"> <br> <br>
                    <img src="images/w3.jpg" alt="sexy1" class="adudu-img2">
                </div>
            </div>
            <div class="adudu-cachlorem">
                <p class="adudu-lorem">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam provident
                    delectus quod enim quibusdam natus consequuntur labore sed ipsa esse ratione adipisci, odit maxime
                    officia suscipit saepe, amet ad. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima at
                    adipisci commodi praesentium laudantium neque eum dolorem, officiis excepturi ea saepe facilis
                    mollitia
                    itaque doloremque quasi corporis qui illo? Inventore.</p>
            </div>
            <div class="col-md-3 adudu-center">
                <h3>23k <br> Instergram Follower</h3>
            </div>
            <div class="col-md-3 adudu-center">
                <h3>19k <br>Twitter follower</h3>
            </div>
            <div class="col-md-3 adudu-center">
                <h3>18.5k <br> Facebook follower
                </h3>
            </div>
            <div class="col-md-3 adudu-center">
                <h3>2.6k <br> Youtube Subriber</h3>
            </div>
            <div class="adudu-follow">
                <p>Follow This Author</p>
                <br>
                <i class="fa fa-facebook"></i> | <i class="fa fa-coffee"></i> | <i class="fa fa-youtube"></i> | <i
                    class="fa fa-car"></i>
            </div>
        </div>
    </div>
</div>