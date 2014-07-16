<!-- <div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>
 -->
<?php

$subnav = array( "使命与愿景" => "/culture/",
                 "文化与创新" => "/culture/innovation/",
                 "金特风采" => "/culture/magazine/",
                 "员工风采" => "/culture/employees/",
                );




?>

<!--BANNER-->
<div class="container-fluid short banner">

  <div class="row">
    <div class="col-md-4">
      <p>企业文化</p>
    </div>
    <div class="col-md-8">
      <ul class="nav nav-pills sub-nav hidden-xs">
<!--         <li class="active"><a href="/about/">公司简介</a></li>
        <li><a href="/about/history.html">发展历程</a></li>
        <li><a href="/about/message.html">董事长致辞</a></li>
        <li><a href="/about/locations.html">旗下公司</a></li>
        <li><a href="/about/certifications.html">企业资质</a></li>
        <li><a href="/about/awards.html">企业荣誉</a></li> -->
        				<?php
			        while(list($name, $url)=each($subnav)) {
						if ($_SERVER["REQUEST_URI"] == $url) {
							echo "\n<li class=\"active\"><a href=\"".$url."\">".mb_strtoupper($name, "UTF-8")."</a></li>";
						} else {
							echo "\n<li><a href=\"".$url."\">".mb_strtoupper($name, "UTF-8")."</a></li>";
						}
					}
				?>


      </ul>
    </div>
  </div>
</div>
