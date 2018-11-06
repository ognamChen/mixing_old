<?php wp_footer();?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <div class="icon_nav">
          <ul class="nav justify-content-end">
          <?php
            $menu_locations = get_nav_menu_locations();
            $menu_items = wp_get_nav_menu_items($menu_locations['indexNav']);
            foreach ($menu_items as $menu_item) {
                $permalink = $menu_item->url;
                $title = $menu_item->title;
                ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $permalink ?>" target="_blank"><?php echo $title ?></a>
            </li>
              <?php }?>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-12" style="margin-top:60px;">  
        <p><a href="https://wordpress.org/" target="_blank"><i class="fab fa-wordpress-simple fa-2x"></i></a>
          &copy; <?php echo "2012-"; echo date("Y"); echo " "; echo bloginfo('name'); echo ". All Rights Reserved."; ?>
        </p>
      </div>
    </div>
  </div>
</footer>
</body>

</html>
