<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-17">
    <div class="container">
        <br><br>
        <div class="tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                <li><a data-toggle="tab" href="#menu1">Additional information</a></li>
                <li><a data-toggle="tab" href="#menu2">Reviews (1)</a></li>
            </ul><br>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p>Lorem Ipsum proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt aucta. Aliquam lorem ante.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p class="weight">Weight</p>
                    <p>1.6kg</p>
                    <p class="weight">Dimensions</p>
                    <p>120 x 70 x 2cm</p>
                    <p class="weight">Sizes</p>
                    <p>L, M, XL</p>
                    <p class="weight">Composition</p>
                    <p>Wool</p>
                    <p class="weight">Free shipping</p>
                    <p>For orders over 50 USD</p>
                    <p class="weight">ColorPicker</p>
                    <p>Blue, Green, Gray, Red</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="comments">
                        <div class="avatar">
                            <img src="<?php echo $url_path ?>/images/1.png">
                        </div>
                        <div class="comment">
                            <div class="content">
                                <p>Jill Patton-November 14, 2018</p>
                                <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem</p>
                            </div>
                            <div class="star-rating">
                                <span class="fa fa-star-o" data-rating="1"></span>
                                <span class="fa fa-star-o" data-rating="2"></span>
                                <span class="fa fa-star-o" data-rating="3"></span>
                                <span class="fa fa-star-o" data-rating="4"></span>
                                <span class="fa fa-star-o" data-rating="5"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>