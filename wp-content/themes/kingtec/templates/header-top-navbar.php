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
            <a class="navbar-brand" href="/"><img src="/images/ktlogo.png"></a>
          </div>

          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
<!-- 关于我们 -->
              <li class="dropdown">
                <a href="/about/" class="dropdown-toggle">关于我们</a>
                <ul class="dropdown-menu">
                    <li><a href="/about/">公司简介</a></li>
                    <li><a href="/about/history">发展历程</a></li>
                    <li><a href="/about/message">董事长致辞</a></li>
                    <li><a href="/about/locations" >旗下公司</a></li>
                    <li><a href="/about/certifications" >企业资质</a></li>
                    <li><a href="/about/awards">企业荣誉</a></li>
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
                <a href="/news/" class="dropdown-toggle">新闻</a>
                <ul class="dropdown-menu">
                        <li><a href="/news/company/">金特动态</a></li>
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
            <li class="dropdown">
              <a href="http://220.171.107.118:8888/" target="_BLANK">OA登录</a>
              <ul class="dropdown-menu">
                    <li><a href="http://220.171.107.118:8888/">OA 1.0</a></li>
                    <li><a href="http://120.25.158.161:8080/camunda/app/tasklist">OA 2.0</a></li>
                </ul>
            </li>
            <li><a href="http://mail.kingtecgroup.net" target="_BLANK">邮箱登陆</a></li> 
            <li><a href="/en/" style="color:#2D9668">EN</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div><!--/.navbar -->
