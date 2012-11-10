<?php

function shoestrap_social_sharrre_script() {
  $googleplus   = get_theme_mod( 'shoestrap_gplus_on_posts' );
  $facebook     = get_theme_mod( 'shoestrap_facebook_on_posts' );
  $twitter      = get_theme_mod( 'shoestrap_twitter_on_posts' );
  $digg         = get_theme_mod( 'shoestrap_digg_on_posts' );
  $delicious    = get_theme_mod( 'shoestrap_delicious_on_posts' );
  $stumbleupon  = get_theme_mod( 'shoestrap_stumbleupon_on_posts' );
  $linkedin     = get_theme_mod( 'shoestrap_linkedin_on_posts' );
  $pinterest    = get_theme_mod( 'shoestrap_pinterest_on_posts' );
  
  // The number of networks.
  $networks_nr = $googleplus + $facebook + $twitter + $digg + $delicious + $stumbleupon + $linkedin + $pinterest;

  if ( $googleplus  == 1 ) { $googleplus  = 'true'; } else { $googleplus  = 'false'; }
  if ( $facebook    == 1 ) { $facebook    = 'true'; } else { $facebook    = 'false'; }
  if ( $twitter     == 1 ) { $twitter     = 'true'; } else { $twitter     = 'false'; }
  if ( $digg        == 1 ) { $digg        = 'true'; } else { $digg        = 'false'; }
  if ( $delicious   == 1 ) { $delicious   = 'true'; } else { $delicious   = 'false'; }
  if ( $stumbleupon == 1 ) { $stumbleupon = 'true'; } else { $stumbleupon = 'false'; }
  if ( $linkedin    == 1 ) { $linkedin    = 'true'; } else { $linkedin    = 'false'; }
  if ( $pinterest   == 1 ) { $pinterest   = 'true'; } else { $pinterest   = 'false'; }
  
  // $templatemode = get_theme_mod( 'shoestrap_social_links_mode' );
  $template = '<div class="box"><div class="left">' . __('Share', 'shoestrap') . '</div><div class="middle">';
  if ( $facebook == 'true' ) {
    $template .= '<a href="#" class="facebook icon-facebook"></a>';
  }
  if ( $twitter == 'true' ) {
    $template .= '<a href="#" class="twitter icon-twitter"></a>';
  }
  if ( $googleplus == 'true' ) {
    $template .= '<a href="#" class="googleplus icon-google-plus"></a>';
  }
  if ( $pinterest == 'true' ) {
    $template .= '<a href="#" class="pinterest icon-pinterest"></a>';
  }
  $template .= '</div><div class="right">{total}</div></div>';
  
  ?>
  <script>
    $(window).load(function() {
      $('.shareme').sharrre({
        share: {
          googlePlus:   <?php echo $googleplus ?>,
          facebook:     <?php echo $facebook ?>,
          twitter:      <?php echo $twitter ?>,
          digg:         <?php echo $digg ?>,
          delicious:    <?php echo $delicious ?>,
          stumbleupon:  <?php echo $stumbleupon ?>,
          linkedin:     <?php echo $linkedin ?>,
          pinterest:    <?php echo $pinterest ?>
        },
        template: '<?php echo $template; ?>',
        enableHover: false,
        enableTracking: true,
        render: function(api, options){
          <?php if ( $facebook == 'true' ) { ?>
            $(api.element).on('click', '.facebook', function() {
              api.openPopup('facebook');
            });
          <?php } if ( $googleplus == 'true' ) { ?>
            $(api.element).on('click', '.googleplus', function() {
              api.openPopup('googlePlus');
            });
          <?php } if ( $twitter == 'true' ) { ?>
            $(api.element).on('click', '.twitter', function() {
              api.openPopup('twitter');
            });
          <?php } if ( $pinterest == 'true' ) { ?>
            $(api.element).on('click', '.pinterest', function() {
              api.openPopup('pinterest');
            });
          <?php } ?>
        }
      });
    });
  </script>
  <?php
}
add_action( 'wp_head', 'shoestrap_social_sharrre_script' );
