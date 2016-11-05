<div id="nav">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <select name="" id="" class="form-control hidden-md hidden-lg">
        <option value="">- Menu - </option>
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