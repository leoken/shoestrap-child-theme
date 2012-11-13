<?php

// Adds the Admin page for Shoestrap
add_action( 'admin_menu', 'shoestrap_child_admin_page' );
function shoestrap_child_admin_page() {
  add_theme_page( 'Shoestrap', 'Shoestrap', 'manage_options', 'shoestrap_child-license', 'shoestrap_child_admin_page_content' );
}

function shoestrap_child_admin_page_content() {

  $current_url = ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $href = add_query_arg( 'url', urlencode( $current_url ), wp_customize_url() ); ?>

  <div class="wrap">
    <h2><?php _e( 'Shoestrap Administration Page' ); ?></h2>
    <?php do_action( 'shoestrap_admin_content' ); ?>
  </div>
  <?php
}
