( function( $ ){
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( 'a.brand' ).html( to );
		} );
	} );

  wp.customize( 'shoestrap_hero_title', function( value ) {
    value.bind( function( to ) {
      $( 'h1.hero-title' ).html( to );
    } );
  } );

  wp.customize( 'shoestrap_hero_content', function( value ) {
    value.bind( function( to ) {
      $( 'p.hero-content' ).html( to );
    } );
  } );

  wp.customize( 'shoestrap_hero_cta_text', function( value ) {
    value.bind( function( to ) {
      $( '.hero-button a' ).html( to );
    } );
  } );

} )( jQuery );