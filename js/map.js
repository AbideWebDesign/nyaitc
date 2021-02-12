jQuery( document ).ready( function( $ ) {
    
    $( '[data-toggle="popover"]' ).popover( {
	    delay: 100, 
	    container: 'body',
	    html: true,
	    trigger: 'click',
	    placement: 'auto'
    } );   

    $( '.pop' ).on( 'inserted.bs.popover', function () {
		
		$( '#videoModal' + ' iframe' ).attr( 'src', $( this ).attr( 'data-video' ) );
	
	} );

    $( 'body' ).on( 'click touchstart', '.pop', function() {
	    
	    $( this ).popover();
			
		$( '.pop' ).not( this ).popover( 'hide' ); // hide other popovers
	    
		return false;
	
	} );
	
	$( 'body' ).on( 'click touchstart', function() {

		$( '.pop' ).popover( 'hide' ); // hide all popovers when clicked on body
    
	} );

	$( '#videoModal' ).on( 'show.bs.modal', function(e) {
		
		var link = $( e.relatedTarget );
		
		var linkClass = link.attr( 'class' );
			
		if ( linkClass == 'pop-legend' ) {
			
			var url = link.data( 'video' );
			
			$( '#videoModal' + ' iframe' ).attr( 'src', url ) ;
		
		}		
	
	} );

	$( '#videoModal' ).on( 'hide.bs.modal', function () {
	
		$( '#videoModal' + ' iframe' ).attr( 'src', '' );
	
	} );

	$( '#collapseOne' ).on( 'show.bs.collapse', function () {
	
		$( 'body' ).find( '#caret-' + this.id ).removeClass( 'fa-caret-right' );
		
		$( 'body' ).find( '#caret-' + this.id ).addClass( 'fa-caret-down' );
		
	} );
	
	$( '#collapseOne' ).on( 'hide.bs.collapse', function () {
		
		$( 'body' ).find( '#caret-' + this.id ).removeClass( 'fa-caret-down' );
		
		$( 'body' ).find( '#caret-' + this.id ).addClass( 'fa-caret-right' );
	
	} );
	
	$( '#Catskill' ).hover( 
	
		function() {
	
			$( '#Catskill' ).css( { fill: '#BA586D' } ).fadeIn( 5000 );
			
		}, function() {
		
			$( '#Catskill' ).css( { fill: '#DD667A' } ).fadeIn( 5000 );
			
		}
	
	);
	
	$( '#Catskill' ).click( function() {
	
		$( 'html, body' ).animate( {
			
			scrollTop: $( '#region-catskill' ).offset().top
		
		}, 800 );
		
	} );
	
	$( '#catskill-region #Greene' ).hover(
		
		function() {
			
			$('#greene-pop').popover('show');		
			
		}, function() {
			
// 			$('#greene-pop').popover('hide');
			
		}
		
	);
	
	
	
} );