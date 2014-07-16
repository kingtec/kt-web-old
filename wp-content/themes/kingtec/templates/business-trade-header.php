<?php

$subnav = array( "国内" => "/business/trade/",
                 "国际" => "/business/trade/international/",
                );

?>

<!--BANNER-->
<div class="container-fluid short banner product trade">

  <div class="row">
    <div class="col-md-4">
      <p>贸易</p>
    </div>
    <div class="col-md-8">
      <ul class="nav nav-pills sub-nav hidden-xs">

        <?php nav_generator($subnav); ?>

      </ul>
    </div>
  </div>
</div>
