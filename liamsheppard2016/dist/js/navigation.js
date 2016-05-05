jQuery( document ).ready( function( $ ) {

	 var position,
	     direction,
		 previous;

	$( window ).scroll( function( ) {

		if ( position <= 20 ) {
			$( '.main-navigation' ).removeClass( 'nav-hide' );
		} else if ( $( this ).scrollTop( ) >= position ) {
			direction = 'down';
			if( direction !== previous ) {
				$( '.main-navigation' ).addClass( 'nav-hide' );

				previous = direction;
			}
		} else {
			direction = 'up';
			if ( direction !== previous ) {
				$( '.main-navigation' ).removeClass( 'nav-hide' );

				previous = direction;
			}
		}
		position = $( this ).scrollTop( );
	});
});
