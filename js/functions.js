( function( $ ) {

	// Make sure JS is enabled
	document.documentElement.className = "js";

	// Mobile menu toggle
	$( '.menu-toggle a' ).on( 'click', function() {
		$( '.mobile-navigation' ).toggleClass( 'open' );
		$( '.mobile-menu-overlay' ).toggleClass( 'open' );
		return false;
	});

	// Mobile menu close
	$( '.mobile-menu-close, .mobile-menu-overlay' ).on( 'click', function() {
		$( '.mobile-navigation' ).removeClass( 'open' );
		$( '.mobile-menu-overlay' ).removeClass( 'open' );
		return false;
	});

	// Run animateObject 0.25 seconds after document ready for any instances viewable on load
	$( document ).ready( function() {
		setTimeout( function() {
			animateObject();
		}, 250);
	});

	// Run animateObject on scroll
	$( window ).scroll( function() {
		animateObject();
	});

	function animateObject() {

		// Define your object via class
		var object = $( '.fade-up' );

		// Loop through each object in the array
		$.each( object, function() {

			var windowHeight = $( window ).height(),
				offset 		 = $( this ).offset().top,
				top			 = offset - $( document ).scrollTop(),
				percent 	 = Math.floor( top / windowHeight * 100 );

			if ( percent < 80 ) {
				$( this ).addClass( 'fadeInUp' );
			}
		});
	}

	// Local Scroll Speed
	$.localScroll({
		duration: 750
	});

} )( jQuery );
