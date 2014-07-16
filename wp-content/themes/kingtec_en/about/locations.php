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
      <h1>Locations</h1>
      <hr/>

    <div class="col-xs-12">   
      <div id="sidenav" class="small">
            <ul class="nav">           
              <li><a href="/en/about/">Introduction</a></li>
              <li><a href="/en/about/history.html">History</a></li>
              <li><a href="/en/about/message.html">Letter From the Chairman</a></li>
              <li class="active"><a href="/en/about/locations.html" >Locations</a></li>
              <li><a href="/en/about/certifications.html" >Certifications</a></li>
              <li><a href="/en/about/awards.html">Awards</a></li>
            </ul>
      </div>
    </div>  

    <div class="col-md-12 col-xs-12">
       
      <div id="map">
      </div>

       <hr/>
      <div id='legend-content' style='display: none;'>
        <div class='my-legend'>
          <div class='legend-title'><h5>Kingtec Locations</h5></div>
          <div class='legend-scale'>
            <ul class='legend-labels'>
              <li><span style="background:url('/images/about/locations/png-2new.png') no-repeat 60% 20%;background-size:45%"></span>HQ</li>
              <li><span style="background:url('/images/about/locations/pngnew.png') no-repeat 60% 20%;background-size:45%"></span>Subsidiaries</li>
              <li><span style="background:url('/images/about/locations/png-1new.png') no-repeat 60% 20%;background-size:45%"></span>Sales Office</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

  </div>
</div> <!-- /container -->
