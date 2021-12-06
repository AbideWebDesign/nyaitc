jQuery( document ).ready( function( $ ) {
	    
    $( '.pop' ).on( 'click', function () {
			
		$( '.modal-body' ).append( $( this ).attr( 'data-content' ) );
	
	} );
	
	$( '#defaultModal' ).on( 'hidden.bs.modal', function (e) {
	
		$( '.modal-body' ).empty();
		
	} );
	
	$( '#Regions .region-wrap' ).click( function () {
		
		var region = 'region-' + $( this ).attr( 'id' );

		$( 'html, body' ).animate( {	
			
			scrollTop: $( '#' + region.toLowerCase() ).offset().top - 100
		
		}, 300 );
		
	} );
	
	// Map Modal Box
	
	$( '.map-icon, .pop' ).click( function () {
		
		$( '#map-modal #modal-image' ).attr( 'src', $( this ).attr( 'data-image' ) );
		
		$( '#map-modal #modal-text' ).html( $( this ).attr( 'data-description' ) );
		
	} );
	
	$( '.region-county' ).click( function () {
			
		$( '#region-modal #modal-text' ).empty();	
		
		$( '#region-modal #modal-text' ).html( $( this ).attr( 'data-content' ) );
		
	} );	

		
	// Map Type Toggle
	
	$( 'input[type=radio][name=mapRadio]' ).change( function() {
	
		if ( this.value == 'regions' ) {
			
			$( '#Topographic' ).hide( 'slow' );
			$( '#County_Fill' ).show( 'slow' );
			$( '#Regions' ).show( 'slow' );
			$( '#Elevation_Key' ).hide( 'slow' );
	
		} else if ( this.value == 'topo' ) {
			
			$( '#County_Fill' ).hide( 'slow' );
			$( '#Regions' ).hide( 'slow' );
			$( '#Topographic' ).show( 'slow' );
			$( '#Elevation_Key' ).show( 'slow' );
	
		}
	
	} );
	
	// Map Commodities All Toggle

	$( '#allToggle' ).click( function() {
		
		if ( $( this ).is( ':checked' ) ) {
			
			$( '#appleToggle' ).prop( 'checked', true );
			$( '#apple').show( 'slow' );

			$( '#beefToggle' ).prop( 'checked', true );
			$( '#beef_cattle').show( 'slow' );			

/*
			$( '#cabbageToggle' ).prop( 'checked', true );
			$( '#map_full_cabbage_icons').show( 'slow' );		
*/
			$( '#cheeseToggle' ).prop( 'checked', true );
			$( '#cheese').show( 'slow' );		


			$( '#cherryToggle' ).prop( 'checked', true );
			$( '#cherry').show( 'slow' );		
				
/*
			$( '#chickenToggle' ).prop( 'checked', true );
			$( '#map_full_chicken_icons').show( 'slow' );		
*/

			$( '#christmas_treeToggle' ).prop( 'checked', true );
			$( '#christmas_tree').show( 'slow' );						

			$( '#commercial_fishingToggle' ).prop( 'checked', true );
			$( '#commercial_fishing').show( 'slow' );						

			$( '#cornToggle' ).prop( 'checked', true );
			$( '#corn').show( 'slow' );						

			$( '#dairy_cowToggle' ).prop( 'checked', true );
			$( '#dairy_cow').show( 'slow' );	

			$( '#dairy_productionToggle' ).prop( 'checked', true );
			$( '#dairy_processing').show( 'slow' );	

			$( '#grainsToggle' ).prop( 'checked', true );
			$( '#grains').show( 'slow' );	

			$( '#grapesToggle' ).prop( 'checked', true );
			$( '#grapes').show( 'slow' );	

			$( '#beansToggle' ).prop( 'checked', true );
			$( '#beans').show( 'slow' );	
			
			$( '#greenhouseToggle' ).prop( 'checked', true );
			$( '#greenhouse').show( 'slow' );	

			$( '#hayToggle' ).prop( 'checked', true );
			$( '#hay').show( 'slow' );	
			
			$( '#honeyToggle' ).prop( 'checked', true );
			$( '#honey').show( 'slow' );	

			$( '#horseToggle' ).prop( 'checked', true );
			$( '#horse').show( 'slow' );	

			$( '#ice_creamToggle' ).prop( 'checked', true );
			$( '#ice_cream').show( 'slow' );	

			$( '#mapleToggle' ).prop( 'checked', true );
			$( '#maple').show( 'slow' );	

			$( '#peasToggle' ).prop( 'checked', true );
			$( '#peas').show( 'slow' );	

			$( '#pigToggle' ).prop( 'checked', true );
			$( '#pig').show( 'slow' );	

			$( '#potatoesToggle' ).prop( 'checked', true );
			$( '#potatoes').show( 'slow' );	

			$( '#sheepToggle' ).prop( 'checked', true );
			$( '#sheep').show( 'slow' );	

			$( '#soybeansToggle' ).prop( 'checked', true );
			$( '#soybeans').show( 'slow' );	

			$( '#timberToggle' ).prop( 'checked', true );
			$( '#timber').show( 'slow' );	


		} else {
		
			$( '#appleToggle' ).prop( 'checked', false );
			$( '#apple').hide( 'slow' );

			$( '#beefToggle' ).prop( 'checked', false );
			$( '#beef_cattle').hide( 'slow' );	
			
/*
			$( '#cabbageToggle' ).prop( 'checked', false );
			$( '#map_full_cabbage_icons').hide( 'slow' );	
*/
			
			$( '#cheeseToggle' ).prop( 'checked', false );
			$( '#cheese').hide( 'slow' );		

			$( '#cherryToggle' ).prop( 'checked', false );
			$( '#cherry').hide( 'slow' );		
		
/*
			$( '#chickenToggle' ).prop( 'checked', false );
			$( '#map_full_chicken_icons').hide( 'slow' );		
*/

			$( '#christmas_treeToggle' ).prop( 'checked', false );
			$( '#christmas_tree').hide( 'slow' );						
			
			$( '#commercial_fishingToggle').prop( 'checked', false );
			$( '#commercial_fishing').hide( 'slow' );						
			
			$( '#cornToggle').prop( 'checked', false );
			$( '#corn').hide( 'slow' );					

			$( '#dairy_cowToggle' ).prop( 'checked', false );
			$( '#dairy_cow').hide( 'slow' );	

			$( '#dairy_productionToggle' ).prop( 'checked', false );
			$( '#dairy_processing').hide( 'slow' );	
			
			$( '#grainsToggle' ).prop( 'checked', false );
			$( '#grains').hide( 'slow' );	

			$( '#grapesToggle' ).prop( 'checked', false );
			$( '#grapes').hide( 'slow' );	
					
			$( '#beansToggle' ).prop( 'checked', false );
			$( '#beans').hide( 'slow' );	
			
			$( '#greenhouseToggle' ).prop( 'checked', false );
			$( '#greenhouse').hide( 'slow' );	

			$( '#hayToggle' ).prop( 'checked', false );
			$( '#hay').hide( 'slow' );	

			$( '#honeyToggle' ).prop( 'checked', false );
			$( '#honey').hide( 'slow' );	
			
			$( '#horseToggle' ).prop( 'checked', false );
			$( '#horse').hide( 'slow' );	

			$( '#ice_creamToggle' ).prop( 'checked', false );
			$( '#ice_cream').hide( 'slow' );	

			$( '#mapleToggle' ).prop( 'checked', false );
			$( '#maple').hide( 'slow' );	

			$( '#peasToggle' ).prop( 'checked', false );
			$( '#peas').hide( 'slow' );	

			$( '#pigToggle' ).prop( 'checked', false );
			$( '#pig').hide( 'slow' );	

			$( '#potatoesToggle' ).prop( 'checked', false );
			$( '#potatoes').hide( 'slow' );	

			$( '#sheepToggle' ).prop( 'checked', false );
			$( '#sheep').hide( 'slow' );	

			$( '#soybeansToggle' ).prop( 'checked', false );
			$( '#soybeans').hide( 'slow' );	

			$( '#timberToggle' ).prop( 'checked', false );
			$( '#timber').hide( 'slow' );	

		} 
	
	} );
	
	$( '#appleToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#appleToggle' ).prop( 'checked', true );
			$( '#apple').show( 'slow' );
				
		} else {
			
			$( '#appleToggle' ).prop( 'checked', false );
			$( '#apple').hide( 'slow' );
			
		}
		
	} );
	
	$( '#beefToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#beefToggle' ).prop( 'checked', true );
			$( '#beef_cattle').show( 'slow' );
				
		} else {
			
			$( '#beefToggle' ).prop( 'checked', false );
			$( '#beef_cattle').hide( 'slow' );
			
		}
		
	} );

	$( '#cabbageToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#cabbageToggle' ).prop( 'checked', true );
			$( '#map_full_cabbage_icons').show( 'slow' );
				
		} else {
			
			$( '#cabbageToggle' ).prop( 'checked', false );
			$( '#map_full_cabbage_icons').hide( 'slow' );
			
		}
		
	} );

	$( '#cheeseToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#cheeseToggle' ).prop( 'checked', true );
			$( '#cheese').show( 'slow' );
				
		} else {
			
			$( '#cheeseToggle' ).prop( 'checked', false );
			$( '#cheese').hide( 'slow' );
			
		}
		
	} );
	
	$( '#cherryToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#cherryToggle' ).prop( 'checked', true );
			$( '#cherry').show( 'slow' );
				
		} else {
			
			$( '#cherryToggle' ).prop( 'checked', false );
			$( '#cherry').hide( 'slow' );
			
		}
		
	} );
	
	$( '#chickenToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#chickenToggle' ).prop( 'checked', true );
			$( '#map_full_chicken_icons').show( 'slow' );
				
		} else {
			
			$( '#chickenToggle' ).prop( 'checked', false );
			$( '#map_full_chicken_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#christmas_treeToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#christmas_treeToggle' ).prop( 'checked', true );
			$( '#christmas_tree').show( 'slow' );
				
		} else {
			
			$( '#christmas_treeToggle' ).prop( 'checked', false );
			$( '#christmas_tree').hide( 'slow' );
			
		}
		
	} );
	
	$( '#cornToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#cornToggle' ).prop( 'checked', true );
			$( '#corn').show( 'slow' );
				
		} else {
			
			$( '#cornToggle' ).prop( 'checked', false );
			$( '#corn').hide( 'slow' );
			
		}
		
	} );			
	
	$( '#commercial_fishingToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#commercial_fishingToggle' ).prop( 'checked', true );
			$( '#commercial_fishing').show( 'slow' );
				
		} else {
			
			$( '#commercial_fishingToggle' ).prop( 'checked', false );
			$( '#commercial_fishing').hide( 'slow' );
			
		}
		
	} );
	
	$( '#dairy_cowToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#dairy_cowToggle' ).prop( 'checked', true );
			$( '#dairy_cow').show( 'slow' );
				
		} else {
			
			$( '#dairy_cowToggle' ).prop( 'checked', false );
			$( '#dairy_cow').hide( 'slow' );
			
		}
		
	} );
	
	$( '#dairy_productionToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#dairy_productionToggle' ).prop( 'checked', true );
			$( '#dairy_processing').show( 'slow' );
				
		} else {
			
			$( '#dairy_productionToggle' ).prop( 'checked', false );
			$( '#dairy_processing').hide( 'slow' );
			
		}
		
	} );

	$( '#grainsToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#grainsToggle' ).prop( 'checked', true );
			$( '#grains').show( 'slow' );
				
		} else {
			
			$( '#grainsToggle' ).prop( 'checked', false );
			$( '#grains').hide( 'slow' );
			
		}
		
	} );	
	
	$( '#grapesToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#grapesToggle' ).prop( 'checked', true );
			$( '#grapes').show( 'slow' );
				
		} else {
			
			$( '#grapesToggle' ).prop( 'checked', false );
			$( '#grapes').hide( 'slow' );
			
		}
		
	} );
	
	$( '#beansToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#beansToggle' ).prop( 'checked', true );
			$( '#beans').show( 'slow' );
				
		} else {
			
			$( '#beansToggle' ).prop( 'checked', false );
			$( '#beans').hide( 'slow' );
			
		}
		
	} );
	
	$( '#greenhouseToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#greenhouseToggle' ).prop( 'checked', true );
			$( '#greenhouse').show( 'slow' );
				
		} else {
			
			$( '#greenhouseToggle' ).prop( 'checked', false );
			$( '#greenhouse').hide( 'slow' );
			
		}
		
	} );
	
	$( '#hayToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#hayToggle' ).prop( 'checked', true );
			$( '#hay').show( 'slow' );
				
		} else {
			
			$( '#hayToggle' ).prop( 'checked', false );
			$( '#hay').hide( 'slow' );
			
		}
		
	} );
	
	$( '#honeyToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#honeyToggle' ).prop( 'checked', true );
			$( '#honey').show( 'slow' );
				
		} else {
			
			$( '#honeyToggle' ).prop( 'checked', false );
			$( '#honey').hide( 'slow' );
			
		}
		
	} );
	
	$( '#horseToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#horseToggle' ).prop( 'checked', true );
			$( '#horse').show( 'slow' );
				
		} else {
			
			$( '#horseToggle' ).prop( 'checked', false );
			$( '#horse').hide( 'slow' );
			
		}
		
	} );
	
	$( '#ice_creamToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#ice_creamToggle' ).prop( 'checked', true );
			$( '#ice_cream').show( 'slow' );
				
		} else {
			
			$( '#ice_creamToggle' ).prop( 'checked', false );
			$( '#ice_cream').hide( 'slow' );
			
		}
		
	} );
	
	$( '#mapleToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#mapleToggle' ).prop( 'checked', true );
			$( '#maple').show( 'slow' );
				
		} else {
			
			$( '#mapleToggle' ).prop( 'checked', false );
			$( '#maple').hide( 'slow' );
			
		}
		
	} );
	
	$( '#peasToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#peasToggle' ).prop( 'checked', true );
			$( '#peas').show( 'slow' );
				
		} else {
			
			$( '#peasToggle' ).prop( 'checked', false );
			$( '#peas').hide( 'slow' );
			
		}
		
	} );
	
	$( '#pigToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#pigToggle' ).prop( 'checked', true );
			$( '#pig').show( 'slow' );
				
		} else {
			
			$( '#pigToggle' ).prop( 'checked', false );
			$( '#pig').hide( 'slow' );
			
		}
		
	} );
	
	$( '#potatoesToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#potatoesToggle' ).prop( 'checked', true );
			$( '#potatoes').show( 'slow' );
				
		} else {
			
			$( '#potatoesToggle' ).prop( 'checked', false );
			$( '#potatoes').hide( 'slow' );
			
		}
		
	} );
	
	$( '#sheepToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#sheepToggle' ).prop( 'checked', true );
			$( '#sheep').show( 'slow' );
				
		} else {
			
			$( '#sheepToggle' ).prop( 'checked', false );
			$( '#sheep').hide( 'slow' );
			
		}
		
	} );
	
	$( '#soybeansToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#soybeansToggle' ).prop( 'checked', true );
			$( '#soybeans').show( 'slow' );
				
		} else {
			
			$( '#soybeansToggle' ).prop( 'checked', false );
			$( '#soybeans').hide( 'slow' );
			
		}
		
	} );
	
	$( '#timberToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#timberToggle' ).prop( 'checked', true );
			$( '#timber').show( 'slow' );
				
		} else {
			
			$( '#timberToggle' ).prop( 'checked', false );
			$( '#timber').hide( 'slow' );
			
		}
		
	} );
	
} );