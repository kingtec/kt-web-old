<?php
/*
Template Name: Home
*/
?>

<?php //get_template_part('templates/about', 'header'); ?>
<?php //get_template_part('templates/about', 'page'); ?>


<?php 

$last = wp_get_recent_posts( array(

                              'numberposts' => 10,
                              'category' => 3,
                              )
);



$last_id = $last['0']['ID'];
$last_title = $last['0']['post_title'];
$last_url = get_permalink($last_id);
// echo $last_url;
$featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($last_id), 'large');

?>


<!--SLIDER-->

   <div class="row">

      <div class="col-md-12">
        <div class="slider">
            <ul class="bxslider">

                <li>
                  <div class="slide one" <?php echo "style=\"background-image: url(" . $featured_img[0] . ")\""; ?>>
                    <div class="row">
                      <div class="col-md-5">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <h4>NEWS</h4>
                              <hr/>
                             <!--  <p>金特建材携新一代外墙产品系统，亮相上海建材展</p> -->
                               <p><?php echo $last_title; ?></p>
                              <a <?php echo "href=\"" . $last_url . "\""; ?>>展开全文</a>
                           </p>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="slide two">
                    <div class="row">
                      <div class="col-md-5">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <h4>Kingtec Magazine</h4>
                              <hr/>
                              <p>The Season of the Hu Yang Tree</br><span style="font-size:18px"></span></p>
                             <a href="/culture/magazine/">Read More</a>
                           </p>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="slide three">
<!--                     <div class="row">
                      <div class="col-md-5">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <h4>金特风采</h4>
                              <hr/>
                              <p>胡杨的季节</br><span style="font-size:18px">又是一年胡杨季</span></p>
                             <a href="/culture/magazine/">展开全文</a>
                           </p>
                            </div>
                          </div>
                      </div>
                    </div> -->
                  </div>
                </li>



            </ul>
        </div>
      </div>

  </div>

<!-- </div> -->


<!--FRONT BLOCKS-->


 <div class="container-fluid short front-blocks">

        <div class="row">

          <div class="col-md-4 col-sm-6">

            <div class="front-block">

              <a href="/business/steel/">
                <div class="block one">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 style="color:white">Steel</h2>
                    </div>
                  </div>
                </div>
              </a>

              <div class="text">
                <div class="row">
                  <div class="col-md-12">
                    <p>Kingtec is one of the largest steel manufacturers in China's Xinjiang Autonomous Region. </p>
                  </div>
                </div>
              </div>


          </div>

        </div><!-- /col-md-4 col-sm-6 -->


          <div class="col-md-4 col-sm-6">

            <div class="front-block">

            <a href="/business/materials/">
              <div class="block two">
                <div class="row">
                  <div class="col-md-12">
                    <h2 style="color:white">Building Materials</h2>
                  </div>
                </div>
              </div>
            </a>

              <div class="text">
                <div class="row">
                  <div class="col-md-12">
                     <!--  <p>匠心专筑，绿色节能环保建材的行业标杆。</p> -->
                      <p>Many of China's landmark buildings have been built with Kingtec products.</p>
                  </div>
                </div>
              </div>


          </div>

        </div><!-- /col-md-4 col-sm-6 -->


          <div class="col-md-4 col-sm-6">

            <div class="front-block">

            <a href="/business/trade/">
              <div class="block three">
                <div class="row">
                  <div class="col-md-12">
                    <h2 style="color:white">Trade</h2>
                  </div>
                </div>
              </div>
            </a>

              <div class="text">
                <div class="row">
                  <div class="col-md-12">
                <!--     <p>立志成为横跨东西、辐射海外的综合贸易物流集成商。</p> -->
                    <p>Kingtec is engaged in the intra-China and international trade of its and its partners' products.</p>
                  </div>
                </div>
              </div>


          </div>

        </div><!-- /col-md-4 -->
        

          <div class="col-md-4 col-sm-6">

            <div class="front-block">

            <a href="/business/minerals/">
              <div class="block four">
                <div class="row">
                  <div class="col-md-12">
                    <h2 style="color:white">Minerals</h2>
                  </div>
                </div>
              </div>
            </a>

              <div class="text">
                <div class="row">
                  <div class="col-md-12">
                    <!-- <p>以产品和服务创造价值，做大西部矿业开发的先行者。</p> -->
                    <p>Through its holdings in Xinjiang, Kingtec is engaged in the eploration, exploitation, and trade of mineral resources.</p>
                  </div>
                </div>
              </div>


          </div>

        </div><!-- /col-md-4 col-sm-6 -->


          <div class="col-md-4 col-sm-6">

            <div class="front-block">

             <a href="/business/realestate/">
              <div class="block five">
                <div class="row">
                  <div class="col-md-12">
                    <h2 style="color:white">Real Estate</h2>
                  </div>
                </div>
              </div>
            </a>

              <div class="text">
                <div class="row">
                  <div class="col-md-12">
                    <p>Learn more about Kingtec's real estate development projects.</p>
                    <p></p>
                  </div>
                </div>
              </div>


          </div>

        </div><!-- /col-md-4 col-sm-6 -->


          <div class="col-md-4 col-sm-6">

            <div class="front-block">

            <a href="/business/agriculture/">
              <div class="block six">
                <div class="row">
                  <div class="col-md-12">
                    <h2 style="color:white">Agriculture</h2>
                  </div>
                </div>
              </div>
            </a>

              <div class="text">
                <div class="row">
                  <div class="col-md-12">
                <p>Kingtec is capitalizing on the wealth of Xinjiang's agrarian wealth. Learn more about our agriculture projects. </p>
                  </div>
                </div>
              </div>


          </div>

        </div><!-- /col-md-4 col-sm-6 -->
        
        </div><!-- /block row 1 -->








      </div> <!-- /container -->