<!-- <div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>
 -->
<?php

$subnav = array( "Mission" => "/en/culture/",
                 "Innovation" => "/en/culture/innovation/",
                 "Magazine" => "/en/culture/magazine/",
                 "Employees" => "/en/culture/employees/",
                );




?>

<!--BANNER-->
<div class="container-fluid short banner">

  <div class="row">
    <div class="col-md-4">
      <p>Mission and Values</p>
    </div>
    <div class="col-md-8">
      <ul class="nav nav-pills sub-nav hidden-xs">
<!--         <li class="active"><a href="/about/">公司简介</a></li>
        <li><a href="/about/history.html">发展历程</a></li>
        <li><a href="/about/message.html">董事长致辞</a></li>
        <li><a href="/about/locations.html">旗下公司</a></li>
        <li><a href="/about/certifications.html">企业资质</a></li>
        <li><a href="/about/awards.html">企业荣誉</a></li> -->
        <?php nav_generator($subnav); ?>

      </ul>
    </div>
  </div>
</div>
