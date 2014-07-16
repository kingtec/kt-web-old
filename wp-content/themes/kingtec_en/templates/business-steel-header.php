<!-- <div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>
 -->
<?php

$subnav = array( "Overview" => "/en/business/steel/",
                 "Products" => "/en/business/steel/products/",
                 "Projects" => "/en/business/steel/projects/",
                );




?>


<!--BANNER-->
<div class="container-fluid short banner product steel">

  <div class="row">
    <div class="col-md-4">
      <p>Steel</p>
    </div>
    <div class="col-md-8">
      <ul class="nav nav-pills sub-nav hidden-xs">
               <?php nav_generator($subnav); ?>
      </ul>
    </div>
  </div>
</div>