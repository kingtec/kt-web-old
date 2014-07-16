<?php

$subnav = array( "版块介绍" => "/business/materials/",
                 "产品介绍" => "/business/materials/products/",
                 "系统应用" => "/business/materials/uses/",
                 "成功案例" => "/business/materials/projects/",
                );

?>

<!--BANNER-->
<div class="container-fluid short banner product material">

  <div class="row">
    <div class="col-md-4">
      <p>建材</p>
    </div>
    <div class="col-md-8">
      <ul class="nav nav-pills sub-nav hidden-xs">

        <?php nav_generator($subnav); ?>

      </ul>
    </div>
  </div>
</div>

