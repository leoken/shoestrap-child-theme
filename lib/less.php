<?php

function shoestrap_phpless(){
  
  $shoestrap_responsive = get_theme_mod( 'shoestrap_responsive' );
  
  $less = new lessc;
  $less->setFormatter( "compressed" );
  
  if ( $shoestrap_responsive == '0' ) {
    $less->checkedCompile( STYLESHEETPATH . '/assets/css/app-fixed.less', STYLESHEETPATH . '/assets/css/app-fixed.css' );
  } else {
    $less->checkedCompile( STYLESHEETPATH . '/assets/css/app-responsive.less', STYLESHEETPATH . '/assets/css/app-responsive.css' );
  }
}
add_action('wp', 'shoestrap_phpless');
