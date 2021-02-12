<?php /* Template Name: New York Map */ 

get_header();

?>

<div class="container-fluid">
	
	<div class="row justify-content-center">

		<div class="col-lg-2 align-self-stretch sidebar-wrap">
			
			<div class="sidebar h-100">
				
				<div class="sidebar-header p-2">
					
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" />
					
				</div>
				
				<div class="sidebar-toggles">
					
					<div class="mb-4">
						
						<h4 class="mb-2"><?php _e('Map Type'); ?></h4>
						
						<div class="custom-control custom-radio">
						
							<input type="radio" id="mapRadio1" name="mapRadio" value="regions" class="custom-control-input" checked >
							
							<label class="custom-control-label selected" for="mapRadio1"><?php _e('Regions'); ?></label>
						
						</div>
						
						<div class="custom-control custom-radio">
						
							<input type="radio" id="mapRadio2" name="mapRadio" value="topo" class="custom-control-input">
						
							<label class="custom-control-label" for="mapRadio2"><?php _e('Topographical'); ?></label>
						
						</div>
												
					</div>
					
					<div class="mb-3">
						
						<h4 class="mb-2"><?php _e('Commodity Icons'); ?></h4>
						
						<div class="custom-control custom-switch mt-2 mb-3 pb-3 border-bottom">
						
							<input type="checkbox" class="custom-control-input" id="allToggle" checked>
						
							<label class="custom-control-label" for="allToggle"><?php _e('Toggle All'); ?></label>
						
						</div>						
						
						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="appleToggle" checked>
						
							<label class="custom-control-label" for="appleToggle"><?php _e('Apple'); ?></label>
						
						</div>
						
						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="beefToggle" checked>
						
							<label class="custom-control-label" for="beefToggle"><?php _e('Beef Cattle'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="cabbageToggle" checked>
						
							<label class="custom-control-label" for="cabbageToggle"><?php _e('Cabbage'); ?></label>
						
						</div>
						
						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="cheeseToggle" checked>
						
							<label class="custom-control-label" for="cheeseToggle"><?php _e('Cheese'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="cherryToggle" checked>
						
							<label class="custom-control-label" for="cherryToggle"><?php _e('Cherries'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="chickenToggle" checked>
						
							<label class="custom-control-label" for="chickenToggle"><?php _e('Chicken'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="christmas_treeToggle" checked>
						
							<label class="custom-control-label" for="christmas_treeToggle"><?php _e('Christmas Tree'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="cornToggle" checked>
						
							<label class="custom-control-label" for="cornToggle"><?php _e('Corn'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="commercial_fishingToggle" checked>
						
							<label class="custom-control-label" for="commercial_fishingToggle"><?php _e('Commercial Fishing'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="dairy_cowToggle" checked>
						
							<label class="custom-control-label" for="dairy_cowToggle"><?php _e('Dairy Cow'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="dairy_productionToggle" checked>
						
							<label class="custom-control-label" for="dairy_productionToggle"><?php _e('Dairy Production'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="grainsToggle" checked>
						
							<label class="custom-control-label" for="grainsToggle"><?php _e('Grains'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="grapesToggle" checked>
						
							<label class="custom-control-label" for="grapesToggle"><?php _e('Grapes'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="beansToggle" checked>
						
							<label class="custom-control-label" for="beansToggle"><?php _e('Beans'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="greenhouseToggle" checked>
						
							<label class="custom-control-label" for="greenhouseToggle"><?php _e('Greenhouse'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="hayToggle" checked>
						
							<label class="custom-control-label" for="hayToggle"><?php _e('Hay'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="honeyToggle" checked>
						
							<label class="custom-control-label" for="honeyToggle"><?php _e('Honey'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="horseToggle" checked>
						
							<label class="custom-control-label" for="horseToggle"><?php _e('Horse'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="ice_creamToggle" checked>
						
							<label class="custom-control-label" for="ice_creamToggle"><?php _e('Ice Cream'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="mapleToggle" checked>
						
							<label class="custom-control-label" for="mapleToggle"><?php _e('Maple'); ?></label>
						
						</div>
						
						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="peasToggle" checked>
						
							<label class="custom-control-label" for="peasToggle"><?php _e('Peas'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="pigToggle" checked>
						
							<label class="custom-control-label" for="pigToggle"><?php _e('Pigs'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="potatoesToggle" checked>
						
							<label class="custom-control-label" for="potatoesToggle"><?php _e('Potatoes'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="sheepToggle" checked>
						
							<label class="custom-control-label" for="sheepToggle"><?php _e('Sheep'); ?></label>
						
						</div>
						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="soybeansToggle" checked>
						
							<label class="custom-control-label" for="soybeansToggle"><?php _e('Soybeans'); ?></label>
						
						</div>

						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="timberToggle" checked>
						
							<label class="custom-control-label" for="timberToggle"><?php _e('Timber'); ?></label>
						
						</div>
												
					</div>
											
				</div>
				
			</div>
			
		</div>
		
		<div class="col-lg-10">
			
			<div class="svg-wrap my-3">
			
				<svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 430.9 334.9" overflow="visible" xml:space="preserve">
					
					<?php get_template_part( 'parts/content', 'regions' ); ?>
					
					<?php get_template_part( 'parts/content', 'counties' ); ?>
					
					<?php get_template_part( 'parts/content', 'topo' ); ?>
					
					<?php get_template_part( 'parts/content', 'full-icons' ); ?>
					
				</svg>

			</div>
			
		</div>
			
	</div>
	
</div>

<div class="bg-secondary py-5">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-12 text-center">
				
				<h2 class="text-light">Region Maps</h2>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div class="py-5">
	
	<div id="region-catskill" class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-12">
				
				<h3>Catskill</h3>
				
				<p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>
			
			<div class="col-lg-8">
				
				<?php echo get_template_part('regions/map', 'catskill'); ?>
				
			</div>
			
		</div>
		
	</div>	
	
</div>

<?php get_footer(); ?>