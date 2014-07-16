  <div class="col-xs-12">   
    <div id="sidenav" class="small">
          <ul class="nav">           
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