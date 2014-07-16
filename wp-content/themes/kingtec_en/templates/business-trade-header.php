<?php

$subnav = array( "China" => "/en/business/trade/",
                 "International" => "/en/business/trade/international/",
                );

?>

<!--BANNER-->
<div class="container-fluid short banner">

  <div class="row">
    <div class="col-md-4">
      <p>Trade</p>
    </div>
    <div class="col-md-8">
      <ul class="nav nav-pills sub-nav hidden-xs">
        <?php nav_generator($subnav); ?>
      </ul>
    </div>
  </div>
</div>
