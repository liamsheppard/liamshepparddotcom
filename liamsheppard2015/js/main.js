jQuery(document).ready(function($) { 

	
	
	// Mobile Navigation Menu
	
	var menu_open = false;

    $( "#menu-button" ).click(function() {
        if ( menu_open ) {
            $( "#menu-links" ).css({"transform": "translate(0, 300px)"});
            $( "#menu-close" ).css({"visibility": "hidden"});
            $( "#menu-open" ).css({"visibility": "visible"});
            $( "#menu-open" ).css({"height": "30px"});
            $( "#menu-open" ).css({"margin": "10px auto"});
            $( "#menu-container" ).css({"background": "rgba(41, 41, 46, 0)"});
            setTimeout(function(){
                $( "#menu-container" ).css({"visibility": "hidden"});
            }, 200); 
            menu_open = false;
        } else {
            $( "#menu-container" ).css({"visibility": "visible"});
            $( "#menu-close" ).css({"visibility": "visible"});
            $( "#menu-open" ).css({"visibility": "hidden"});
            $( "#menu-open" ).css({"height": "0px"});
            $( "#menu-open" ).css({"margin": "0"});
            $( "#menu-container" ).css({"background": "rgba(41, 41, 46, 0.6)"})
            $( "#menu-links" ).css({"transform": "translate(0, 0)"});
            menu_open = true;
        }
    });

    $( '#menu-hide' ).click(function() {
        $( '#menu-links' ).css({"transform": "translate(0, 300px)"});
            $( '#menu-close' ).css({"visibility": "hidden"});
            $( '#menu-open' ).css({"visibility": "visible"});
            $( '#menu-open' ).css({"height": "30px"});
            $( '#menu-open' ).css({"margin": "10px auto"});
        $( '#menu-container' ).css({"background": 'rgba(41, 41, 46, 0)'});
        setTimeout(function(){
            $( "#menu-container" ).css({"visibility": "hidden"});
        }, 200); 
        menu_open = false;
    });
	
});
