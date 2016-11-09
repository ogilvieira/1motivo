<div id="nav">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <select name="" id="menumobi" class="form-control hidden-md hidden-lg">
        <option value="">- Menu - </option>
        <?php
          $categories = get_categories( array( 'exclude_tree' => 1 ) );
          if($categories):
            foreach ($categories as $key => $category):
              echo "<option value=\"".get_category_link( $category->cat_ID )."\">".$category->name."</option>";
            endforeach;
          endif;
        ?>
        <option value="<?php echo esc_url( home_url( '/artigos' ) ); ?>">TODOS</option>
      </select>
      <?php wp_nav_menu( array(
      'theme_location' => 'primary',
      'container' => 'nav',
      'container_class' => 'hidden-xs hidden-sm',
      'menu_id' => 'primary-menu',
      'menu_class' => '',
      'depth' => 0
      ) ); ?>
      </div>
    </div>
  </div>
</div>