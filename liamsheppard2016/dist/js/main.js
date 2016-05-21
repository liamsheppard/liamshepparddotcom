jQuery( document ).ready( function( $ ) {

	 var position,
	     direction,
		 previous,
		 scrollBottom;

	$( window ).scroll( function( ) {

		scrollBottom = $( this ).scrollTop() + $( this ).height( );

		if ( position <= 60 ) {
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