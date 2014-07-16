<?php

$subnav = array( "Overview" => "/en/business/realestate/",
                 "Projects" => "/en/business/realestate/projects/",
                );

?>

<!--BANNER-->
<div class="container-fluid short banner product realestate">

  <div class="row">
    <div class="col-md-4">
      <p>Real Estate</p>
    </div>
    <div class="col-md-8">
      <ul class="nav nav-pills sub-nav hidden-xs">
             <?php nav_generator($subnav); ?>
      </ul>
    </div>
  </div>
</div>

<!--BREADCRUMB-->
<div class="container-fluid">
 <div class="subsubnav row">
  <div class="col-md-8">
  <ol class="breadcrumb news-nav">
    <li><a href="/en/business/">Business</a></li>
    <li><a href="/en/business/realestate/">Real Estate</a></li>
    <li class="current"><a href="/en/business/realestate/">Overview</a></li>

  </ol>
</div>
</div>
</div>