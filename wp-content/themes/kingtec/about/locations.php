<?php
/*
Template Name: About Locations
*/
?>

<?php get_template_part('templates/about', 'header'); ?>
<?php get_template_part('templates/about', 'page'); ?>

<!--CONTENT-->

 <div class="container-fluid short content">
  <div class="row">
      <h1>旗下公司</h1>
      <hr/>

    <div class="col-xs-12">   
      <div id="sidenav" class="small">
            <ul class="nav">           
              <li><a href="/about/">公司简介</a></li>
              <li><a href="/about/history.html">发展历程</a></li>
              <li><a href="/about/message.html">董事长致辞</a></li>
              <li class="active"><a href="/about/locations.html">旗下公司</a></li>
              <li><a href="/about/certifications.html">企业资质</a></li>
              <li><a href="/about/awards.html">企业荣誉</a></li>
            </ul>
      </div>
    </div>  

    <div class="col-md-12 col-xs-12">
       
      <div id="map">
      </div>

       <hr/>
      <div id='legend-content' style='display: none;'>
        <div class='my-legend'>
          <div class='legend-title'><h5>金特集团旗下公司与销售网络</h5></div>
          <div class='legend-scale'>
            <ul class='legend-labels'>
              <li><span style="background:url('/images/about/locations/png-2new.png') no-repeat 60% 20%;background-size:45%"></span>总部</li>
              <li><span style="background:url('/images/about/locations/pngnew.png') no-repeat 60% 20%;background-size:45%"></span>子公司</li>
              <li><span style="background:url('/images/about/locations/png-1new.png') no-repeat 60% 20%;background-size:45%"></span>销售网络</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

  </div>
</div> <!-- /container -->