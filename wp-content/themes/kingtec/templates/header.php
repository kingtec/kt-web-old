<!-- <header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header> -->


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
            <a class="navbar-brand" href="/"><img src="/images/ktlogo.png"></a>
          </div>

          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
<!-- 关于我们 -->
              <li class="dropdown">
                <a href="/about/" class="dropdown-toggle">关于我们</a>
                <ul class="dropdown-menu">
                    <li><a href="/about/">公司简介</a></li>
                    <li><a href="/about/history.html">发展历程</a></li>
                    <li><a href="/about/message.html">董事长致辞</a></li>
                    <li><a href="/about/locations.html" >旗下公司</a></li>
                    <li><a href="/about/certifications.html" >企业资质</a></li>
                    <li><a href="/about/awards.html">企业荣誉</a></li>
                </ul>
              </li>
<!-- 主营业务 -->
              <li class="dropdown">
                <a href="/business/steel/" class="dropdown-toggle">主营业务</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="/business/steel/">钢铁</a>
                    <ul class="dropdown-menu">
                        <li><a href="/business/steel/">版块介绍</a></li>
                        <li><a href="/business/steel/products.html">产品介绍</a></li>
                        <li><a href="/business/steel/projects.html">成功案例</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a href="/business/materials/">建材</a>
                    <ul class="dropdown-menu">
                        <li><a href="/business/materials/">版块介绍</a></li>
                        <li><a href="/business/materials/products.html">产品介绍</a></li>
                        <li><a href="/business/materials/uses.html">系统应用</a></li>
                        <li><a href="/business/materials/projects.html">成功案例</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-submenu">
                    <a hhref="/business/trade/">贸易</a>
                    <ul class="dropdown-menu">
                        <li><a href="/business/trade/">国内贸易</a></li>
                        <li><a href="/business/trade/international.html">国际贸易</a></li>
                    </ul>
                  </li>

                  <li><a href="/business/minerals/">矿业</a></li>
                  <li><a href="/business/realestate/" >房产</a></li>
                  <li><a href="/business/agriculture/">农业</a></li>

                </ul>
              </li>
<!-- 新闻 -->
              <li class="dropdown">
                <a href="/news/status/" class="dropdown-toggle">新闻</a>
                <ul class="dropdown-menu">
                        <li><a href="/news/status/">金特动态</a></li>
                        <li><a href="/news/industry/">行业资讯</a></li>
                </ul>
              </li>
<!-- 企业文化 -->
             <li class="dropdown">
                <a href="/culture/" class="dropdown-toggle">企业文化</a>
                <ul class="dropdown-menu">
                    <li><a href="/culture/">使命与愿景</a></li>
                    <li><a href="/culture/inovation.html" >文化与创新</a></li>
                    <li><a href="/culture/magazine/">金特风采</a></li>
                    <li><a href="/culture/employees/" >员工风采</a></li>
                </ul>
              </li>
<!-- 人力资源 -->
              <li class="dropdown">
                <a href="/careers/" class="dropdown-toggle">人力资源</a>
                <ul class="dropdown-menu">
                    <li><a href="/careers/">招贤纳士</a></li>
                </ul>
              </li>

            <li><a href="/contact/">联系我们</a></li>
            <li><a href="http://222.73.85.54:8888/" target="_BLANK">OA登录</a></li>
            <li><a href="http://mail.kingtecgroup.net" target="_BLANK">邮箱登陆</a></li> 
            <li><a href="/en/" style="color:#2D9668">English</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div><!--/.navbar -->

<!--BANNER-->
<div class="container-fluid short banner">

  <div class="row">
    <div class="col-md-4">
      <p>新闻</p>
    </div>
    <div class="col-md-8">
<!--       <ul class="nav nav-pills sub-nav hidden-xs">
            <li class="active"><a href="/news/status/">金特动态</a></li>
            <li><a href="/news/industry/" >行业咨询</a></li>
      </ul> -->
    </div>
  </div>
</div>