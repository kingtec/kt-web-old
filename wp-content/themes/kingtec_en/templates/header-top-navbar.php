<!-- <header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
 -->

 <!-- Static navbar -->
      <div class="navbar navbar-default front" role="navigation">
        <div class="container-fluid topnav">
          <div class="navbar-header">
            <a class="navbar-toggle" href="#footer">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="navbar-brand" href="/en/"><img src="/images/ktlogo.png"></a>
          </div>

          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
<!-- 关于我们 -->
              <li class="dropdown">
                <a href="/en/about/" class="dropdown-toggle">About</a>
                <ul class="dropdown-menu">
                    <li><a href="/en/about/">Introduction</a></li>
                    <li><a href="/en/about/history">History</a></li>
                    <li><a href="/en/about/message">Letter From the Chairman</a></li>
                    <li><a href="/en/about/locations" >Locations</a></li>
                    <li><a href="/en/about/certifications" >Certifications</a></li>
                    <li><a href="/en/about/awards">Awards</a></li>
                </ul>
              </li>
<!-- 主营业务 -->
              <li class="dropdown">
                <a href="/en/business/steel/" class="dropdown-toggle">Businesses</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="/en/business/steel/">Steel</a>
                    <ul class="dropdown-menu">
                        <li><a href="/en/business/steel/">Introduction</a></li>
                        <li><a href="/en/business/steel/products">Products</a></li>
                        <li><a href="/en/business/steel/projects">Projects</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a href="/en/business/materials/">Building Materials</a>
                    <ul class="dropdown-menu">
                        <li><a href="/en/business/materials/">Introduction</a></li>
                        <li><a href="/en/business/materials/products">Products</a></li>
                        <!--<li><a href="/en/business/materials/uses">Applications</a></li>-->
                        <li><a href="/en/business/materials/projects">Projects</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a hhref="/en/business/trade/">Trade</a>
                    <ul class="dropdown-menu">
                        <li><a href="/en/business/trade/">China</a></li>
                        <li><a href="/en/business/trade/international">International</a></li>
                    </ul>
                  </li>

                  <li><a href="/en/business/minerals/">Minerals</a></li>
                  <li><a href="/en/business/realestate/" >Real Estate</a></li>
                  <li><a href="/en/business/agriculture/">Agriculture</a></li>

                </ul>
              </li>
<!-- News -->
              <li class="dropdown">
                <a href="/en/news/status/" class="dropdown-toggle">News</a>
                <ul class="dropdown-menu">
                        <li><a href="/en/news/status/">Kingtec News</a></li>
                        <li><a href="/en/news/industry/">Industry News</a></li>
                </ul>
              </li>
<!-- 企业文化 -->
             <li class="dropdown">
                <a href="/en/culture/" class="dropdown-toggle">Culture</a>
                <ul class="dropdown-menu">
                    <li><a href="/en/culture/">Company Mission</a></li>
                    <li><a href="/en/culture/inovation" >Culture and Innovation</a></li>
                    <li><a href="/en/culture/magazine/">Magazine</a></li>
                   <!--<li><a href="/en/culture/employees/" >Employee Activities</a></li>-->
                </ul>
              </li>
<!-- 人力资源 -->
              <!--<li class="dropdown">
                <a href="/en/careers/" class="dropdown-toggle">Careers</a>
                <ul class="dropdown-menu">
                    <li><a href="/en/careers/">Positions</a></li>
                </ul>
              </li>-->

            <li><a href="/en/contact/">Contact</a></li>
            <li><a href="http://222.73.85.54:8888/" target="_BLANK">OA Login</a></li>
            <li><a href="http://mail.kingtecgroup.net" target="_BLANK">Mail</a></li> 
            <li><a href="/" style="color:#2D9668">中文</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div><!--/.navbar -->
