<?php

// Adds the Admin page for Shoestrap
add_action( 'admin_menu', 'shoestrap_child_admin_page' );
function shoestrap_child_admin_page() {
  add_theme_page( 'Shoestrap Theme License', 'Shoestrap Theme License', 'manage_options', 'shoestrap_child-license', 'shoestrap_child_admin_page_content' );
}

function shoestrap_child_admin_page_content() {

  $current_url = ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $href = add_query_arg( 'url', urlencode( $current_url ), wp_customize_url() ); ?>

  <div class="wrap">
    <h2><?php _e( 'Shoestrap Administration Page' ); ?></h2>
    
    <strong>This theme is an OpenSource project and is provided free of charge.</strong><br />
    If you wish to enable automatic updates, you can visit <a href="http://bootstrap-commerce.com/downloads/downloads/shoestrap-child-version/" target="_blank">this page</a>
    and get a free licence. By entering and <strong>activating</strong> it, whenever a new version is available you will be notified in your dashboard.
    If you wish to help this project, you can do so by helping out on the <a href="https://github.com/aristath/shoestrap" target="_blank">github project page</a> 
    <br>
    <p>To configure the options for this theme, please visit the <a href="<?php  echo $href ?>">Customizer</a></p>
    
    <?php do_action( 'shoestrap_admin_content' ); ?>
  
  </div>
  <?php
}
