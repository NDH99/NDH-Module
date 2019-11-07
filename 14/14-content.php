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
       <div class="row">
           <div class="col-md-6">
               <img src="images/1.png" alt="responsive" class="img-responsive">
           </div>
           <div class="col-md-6">
               <img src="images/2.png" alt="responsive" class="img-responsive">
               <p>SLIDE FLAT SANDAL</p>
               <label>Bestsellers</label>
           </div>
       </div>
   </div>
</div>