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
	
	// Map Type Toggle
	$( 'input[type=radio][name=mapRadio]' ).change( function() {
	
		if ( this.value == 'regions' ) {
			
			$( '#Topo' ).hide( 'slow' );
			$( '#Regions' ).show( 'slow' );
			$( '#Counties' ).show( 'slow' );
	
		} else if ( this.value == 'topo' ) {
			
			$( '#Counties' ).hide( 'slow' );
			$( '#Regions' ).hide( 'slow' );
			$( '#Topo' ).show( 'slow' );
	
		}
	
	} );
	
	// Map Commodities All Toggle

	$( '#allToggle' ).click( function() {
		
		if ( $( this ).is( ':checked' ) ) {
			
			$( '#appleToggle' ).prop( 'checked', true );
			$( '#map_full_apple_icons').show( 'slow' );

			$( '#beefToggle' ).prop( 'checked', true );
			$( '#map_full_beef_icons').show( 'slow' );			

			$( '#cabbageToggle' ).prop( 'checked', true );
			$( '#map_full_cabbage_icons').show( 'slow' );		

			$( '#cheeseToggle' ).prop( 'checked', true );
			$( '#map_full_cheese_icons').show( 'slow' );		

			$( '#cherryToggle' ).prop( 'checked', true );
			$( '#map_full_cherry_icons').show( 'slow' );		
				
			$( '#chickenToggle' ).prop( 'checked', true );
			$( '#map_full_chicken_icons').show( 'slow' );		

			$( '#christmas_treeToggle' ).prop( 'checked', true );
			$( '#map_full_christmas_tree_icons').show( 'slow' );						

			$( '#commercial_fishingToggle' ).prop( 'checked', true );
			$( '#map_full_commercial_fishing_icons').show( 'slow' );						

			$( '#cornToggle' ).prop( 'checked', true );
			$( '#map_full_corn_icons').show( 'slow' );						

			$( '#dairy_cowToggle' ).prop( 'checked', true );
			$( '#map_full_dairy_cow_icons').show( 'slow' );	

			$( '#dairy_productionToggle' ).prop( 'checked', true );
			$( '#map_full_dairy_production_icons').show( 'slow' );	

			$( '#grainsToggle' ).prop( 'checked', true );
			$( '#map_full_grains_icons').show( 'slow' );	

			$( '#grapesToggle' ).prop( 'checked', true );
			$( '#map_full_grapes_icons').show( 'slow' );	

			$( '#beansToggle' ).prop( 'checked', true );
			$( '#map_full_beans_icons').show( 'slow' );	
			
			$( '#greenhouseToggle' ).prop( 'checked', true );
			$( '#map_full_greenhouse_icons').show( 'slow' );	

			$( '#hayToggle' ).prop( 'checked', true );
			$( '#map_full_hay_icons').show( 'slow' );	
			
			$( '#honeyToggle' ).prop( 'checked', true );
			$( '#map_full_honey_icons').show( 'slow' );	
					
			$( '#honeyToggle' ).prop( 'checked', true );
			$( '#map_full_honey_icons').show( 'slow' );	

			$( '#horseToggle' ).prop( 'checked', true );
			$( '#map_full_horse_icons').show( 'slow' );	

			$( '#ice_creamToggle' ).prop( 'checked', true );
			$( '#map_full_ice_cream_icons').show( 'slow' );	

			$( '#mapleToggle' ).prop( 'checked', true );
			$( '#map_full_maple_icons').show( 'slow' );	

			$( '#peasToggle' ).prop( 'checked', true );
			$( '#map_full_peas_icons').show( 'slow' );	

			$( '#pigToggle' ).prop( 'checked', true );
			$( '#map_full_pig_icons').show( 'slow' );	

			$( '#potatoesToggle' ).prop( 'checked', true );
			$( '#map_full_potatoes_icons').show( 'slow' );	

			$( '#sheepToggle' ).prop( 'checked', true );
			$( '#map_full_sheep_icons').show( 'slow' );	

			$( '#soybeansToggle' ).prop( 'checked', true );
			$( '#map_full_soybeans_icons').show( 'slow' );	

			$( '#timberToggle' ).prop( 'checked', true );
			$( '#map_full_timber_icons').show( 'slow' );	


		} else {
		
			$( '#appleToggle' ).prop( 'checked', false );
			$( '#map_full_apple_icons').hide( 'slow' );

			$( '#beefToggle' ).prop( 'checked', false );
			$( '#map_full_beef_icons').hide( 'slow' );	
			
			$( '#cabbageToggle' ).prop( 'checked', false );
			$( '#map_full_cabbage_icons').hide( 'slow' );	
			
			$( '#cheeseToggle' ).prop( 'checked', false );
			$( '#map_full_cheese_icons').hide( 'slow' );		

			$( '#cherryToggle' ).prop( 'checked', false );
			$( '#map_full_cherry_icons').hide( 'slow' );		
		
			$( '#chickenToggle' ).prop( 'checked', false );
			$( '#map_full_chicken_icons').hide( 'slow' );		

			$( '#christmas_treeToggle' ).prop( 'checked', false );
			$( '#map_full_christmas_tree_icons').hide( 'slow' );						
			
			$( '#commercial_fishingToggle').prop( 'checked', false );
			$( '#map_full_commercial_fishing_icons').hide( 'slow' );						
			
			$( '#cornToggle').prop( 'checked', false );
			$( '#map_full_corn_icons').hide( 'slow' );					

			$( '#dairy_cowToggle' ).prop( 'checked', false );
			$( '#map_full_dairy_cow_icons').hide( 'slow' );	

			$( '#dairy_productionToggle' ).prop( 'checked', false );
			$( '#map_full_dairy_production_icons').hide( 'slow' );	
			
			$( '#grainsToggle' ).prop( 'checked', false );
			$( '#map_full_grains_icons').hide( 'slow' );	

			$( '#grapesToggle' ).prop( 'checked', false );
			$( '#map_full_grapes_icons').hide( 'slow' );	
					
			$( '#beansToggle' ).prop( 'checked', false );
			$( '#map_full_beans_icons').hide( 'slow' );	
			
			$( '#greenhouseToggle' ).prop( 'checked', false );
			$( '#map_full_greenhouse_icons').hide( 'slow' );	

			$( '#hayToggle' ).prop( 'checked', false );
			$( '#map_full_hay_icons').hide( 'slow' );	

			$( '#honeyToggle' ).prop( 'checked', false );
			$( '#map_full_honey_icons').hide( 'slow' );	
			
			$( '#horseToggle' ).prop( 'checked', false );
			$( '#map_full_horse_icons').hide( 'slow' );	

			$( '#ice_creamToggle' ).prop( 'checked', false );
			$( '#map_full_ice_cream_icons').hide( 'slow' );	

			$( '#mapleToggle' ).prop( 'checked', false );
			$( '#map_full_maple_icons').hide( 'slow' );	

			$( '#peasToggle' ).prop( 'checked', false );
			$( '#map_full_peas_icons').hide( 'slow' );	

			$( '#pigToggle' ).prop( 'checked', false );
			$( '#map_full_pig_icons').hide( 'slow' );	

			$( '#potatoesToggle' ).prop( 'checked', false );
			$( '#map_full_potatoes_icons').hide( 'slow' );	

			$( '#sheepToggle' ).prop( 'checked', false );
			$( '#map_full_sheep_icons').hide( 'slow' );	

			$( '#soybeansToggle' ).prop( 'checked', false );
			$( '#map_full_soybeans_icons').hide( 'slow' );	

			$( '#timberToggle' ).prop( 'checked', false );
			$( '#map_full_timber_icons').hide( 'slow' );	

		} 
	
	} );
	
	$( '#appleToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#appleToggle' ).prop( 'checked', true );
			$( '#map_full_apple_icons').show( 'slow' );
				
		} else {
			
			$( '#appleToggle' ).prop( 'checked', false );
			$( '#map_full_apple_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#beefToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#beefToggle' ).prop( 'checked', true );
			$( '#map_full_beef_icons').show( 'slow' );
				
		} else {
			
			$( '#beefToggle' ).prop( 'checked', false );
			$( '#map_full_beef_icons').hide( 'slow' );
			
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
			$( '#map_full_cheese_icons').show( 'slow' );
				
		} else {
			
			$( '#cheeseToggle' ).prop( 'checked', false );
			$( '#map_full_cheese_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#cherryToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#cherryToggle' ).prop( 'checked', true );
			$( '#map_full_cherry_icons').show( 'slow' );
				
		} else {
			
			$( '#cherryToggle' ).prop( 'checked', false );
			$( '#map_full_cherry_icons').hide( 'slow' );
			
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
			$( '#map_full_christmas_tree_icons').show( 'slow' );
				
		} else {
			
			$( '#christmas_treeToggle' ).prop( 'checked', false );
			$( '#map_full_christmas_tree_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#cornToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#cornToggle' ).prop( 'checked', true );
			$( '#map_full_corn_icons').show( 'slow' );
				
		} else {
			
			$( '#cornToggle' ).prop( 'checked', false );
			$( '#map_full_corn_icons').hide( 'slow' );
			
		}
		
	} );			
	
	$( '#commercial_fishingToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#commercial_fishingToggle' ).prop( 'checked', true );
			$( '#map_full_commercial_fishing_icons').show( 'slow' );
				
		} else {
			
			$( '#commercial_fishingToggle' ).prop( 'checked', false );
			$( '#map_full_commercial_fishing_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#dairy_cowToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#dairy_cowToggle' ).prop( 'checked', true );
			$( '#map_full_dairy_cow_icons').show( 'slow' );
				
		} else {
			
			$( '#dairy_cowToggle' ).prop( 'checked', false );
			$( '#map_full_dairy_cow_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#dairy_productionToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#dairy_productionToggle' ).prop( 'checked', true );
			$( '#map_full_dairy_production_icons').show( 'slow' );
				
		} else {
			
			$( '#dairy_productionToggle' ).prop( 'checked', false );
			$( '#map_full_dairy_production_icons').hide( 'slow' );
			
		}
		
	} );

	$( '#grainsToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#grainsToggle' ).prop( 'checked', true );
			$( '#map_full_grains_icons').show( 'slow' );
				
		} else {
			
			$( '#grainsToggle' ).prop( 'checked', false );
			$( '#map_full_grains_icons').hide( 'slow' );
			
		}
		
	} );	
	
	$( '#grapesToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#grapesToggle' ).prop( 'checked', true );
			$( '#map_full_grapes_icons').show( 'slow' );
				
		} else {
			
			$( '#grapesToggle' ).prop( 'checked', false );
			$( '#map_full_grapes_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#beansToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#beansToggle' ).prop( 'checked', true );
			$( '#map_full_beans_icons').show( 'slow' );
				
		} else {
			
			$( '#beansToggle' ).prop( 'checked', false );
			$( '#map_full_beans_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#greenhouseToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#greenhouseToggle' ).prop( 'checked', true );
			$( '#map_full_greenhouse_icons').show( 'slow' );
				
		} else {
			
			$( '#greenhouseToggle' ).prop( 'checked', false );
			$( '#map_full_greenhouse_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#hayToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#hayToggle' ).prop( 'checked', true );
			$( '#map_full_hay_icons').show( 'slow' );
				
		} else {
			
			$( '#hayToggle' ).prop( 'checked', false );
			$( '#map_full_hay_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#honeyToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#honeyToggle' ).prop( 'checked', true );
			$( '#map_full_honey_icons').show( 'slow' );
				
		} else {
			
			$( '#honeyToggle' ).prop( 'checked', false );
			$( '#map_full_honey_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#horseToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#horseToggle' ).prop( 'checked', true );
			$( '#map_full_horse_icons').show( 'slow' );
				
		} else {
			
			$( '#horseToggle' ).prop( 'checked', false );
			$( '#map_full_horse_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#ice_creamToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#ice_creamToggle' ).prop( 'checked', true );
			$( '#map_full_ice_cream_icons').show( 'slow' );
				
		} else {
			
			$( '#ice_creamToggle' ).prop( 'checked', false );
			$( '#map_full_ice_cream_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#mapleToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#mapleToggle' ).prop( 'checked', true );
			$( '#map_full_maple_icons').show( 'slow' );
				
		} else {
			
			$( '#mapleToggle' ).prop( 'checked', false );
			$( '#map_full_maple_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#peasToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#peasToggle' ).prop( 'checked', true );
			$( '#map_full_peas_icons').show( 'slow' );
				
		} else {
			
			$( '#peasToggle' ).prop( 'checked', false );
			$( '#map_full_peas_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#pigToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#pigToggle' ).prop( 'checked', true );
			$( '#map_full_pig_icons').show( 'slow' );
				
		} else {
			
			$( '#pigToggle' ).prop( 'checked', false );
			$( '#map_full_pig_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#potatoesToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#potatoesToggle' ).prop( 'checked', true );
			$( '#map_full_potatoes_icons').show( 'slow' );
				
		} else {
			
			$( '#potatoesToggle' ).prop( 'checked', false );
			$( '#map_full_potatoes_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#sheepToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#sheepToggle' ).prop( 'checked', true );
			$( '#map_full_sheep_icons').show( 'slow' );
				
		} else {
			
			$( '#sheepToggle' ).prop( 'checked', false );
			$( '#map_full_sheep_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#soybeansToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#soybeansToggle' ).prop( 'checked', true );
			$( '#map_full_soybeans_icons').show( 'slow' );
				
		} else {
			
			$( '#soybeansToggle' ).prop( 'checked', false );
			$( '#map_full_soybeans_icons').hide( 'slow' );
			
		}
		
	} );
	
	$( '#timberToggle' ).click( function() {
	
		if ( $( this ).is( ':checked' ) ) {
		
			$( '#timberToggle' ).prop( 'checked', true );
			$( '#map_full_timber_icons').show( 'slow' );
				
		} else {
			
			$( '#timberToggle' ).prop( 'checked', false );
			$( '#map_full_timber_icons').hide( 'slow' );
			
		}
		
	} );
	
} );