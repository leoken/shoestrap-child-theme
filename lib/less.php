<?php

function shoestrap_phpless(){
  
  $shoestrap_responsive = get_theme_mod( 'shoestrap_responsive' );
  
  $less = new lessc;
  // $less->setFormatter( "compressed" );
  
  if ( $shoestrap_responsive == '0' ) {
    $less->checkedCompile( STYLESHEETPATH . '/assets/css/style-fixed.less', STYLESHEETPATH . '/assets/css/style-fixed.css' );
  } else {
    $less->checkedCompile( STYLESHEETPATH . '/assets/css/style-responsive.less', STYLESHEETPATH . '/assets/css/style-responsive.css' );
  }
}
add_action('wp', 'shoestrap_phpless');
