<?php

$subnav = array( "Overview" => "/en/business/materials/",
                 "Products" => "/en/business/materials/products/",
                 "Projects" => "/en/business/materials/projects/",
                );

?>


<!--BANNER-->
<div class="container-fluid short banner product material">

  <div class="row">
    <div class="col-md-4">
      <p>Building Materials</p>
    </div>
    <div class="col-md-8">
      <ul class="nav nav-pills sub-nav hidden-xs">
              <?php nav_generator($subnav); ?>
      </ul>
    </div>
  </div>
</div>