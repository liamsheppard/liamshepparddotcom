jQuery( document ).ready( function( $ ) {

	 var position,
	     direction,
		 previous,
		 scrollBottom;

	$( window ).scroll( function( ) {

		scrollBottom = $( this ).scrollTop() + $( this ).height( );

		if ( position <= 60 ) {
			$( '#site-navigation' ).removeClass( 'nav-hide' );
		} else if ( $( this ).scrollTop( ) >= position ) {
			direction = 'down';
			if( direction !== previous ) {
				$( '#site-navigation' ).addClass( 'nav-hide' );

				previous = direction;
			}
		} else {
			direction = 'up';
			if ( direction !== previous ) {
				$( '#site-navigation' ).removeClass( 'nav-hide' );

				previous = direction;
			}
		}
		position = $( this ).scrollTop( );
	});

	// Show search bar.
	$( '#nav-search-button-js' ).click( function( ) {
		$( '#nav-searchbar-js' ).removeClass( 'nav-hide' );
		$( '#nav-searchbar-animate-js' ).removeClass( 'nav-hide' );
		$( '#nav-search-input' ).focus();
	});

	// Hide search bar.
	$( '#nav-close-search-js' ).click( function( ) {
		$( '#nav-searchbar-js' ).addClass( 'nav-hide' );
		$( '#nav-searchbar-animate-js' ).addClass( 'nav-hide' );
	});

	// Close search bar if esc is pressed.
	$(document).keyup(function(e) {
		if (e.keyCode == 27) { // esc maps to keycode 27
  		if ( !$( '#nav-searchbar-js' ).hasClass( 'nav-hide' ) ) {
				$( '#nav-searchbar-js' ).addClass( 'nav-hide' );
				$( '#nav-searchbar-animate-js' ).addClass( 'nav-hide' );
			}
		}
	});
});
