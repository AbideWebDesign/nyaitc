<?php 

/* Template Name: New York Map */ 

get_header();

?>	

<div class="d-flex flex-column flex-xl-row">

	<div class="align-self-stretch sidebar-wrap">
		
		<div class="sidebar h-100">
			
			<nav class="navbar navbar-expand-xl navbar-light bg-light flex-row flex-xl-column">
		
				<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="150px;" /></a>
				
				<button class="navbar-toggler py-2" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
				
					<div class="d-flex"><div class="align-self-center mr-1"><i class="fa fa-filter fa-xs"></i></div><div class="align-self-center text-sm font-weight-bold">Filters</div></div>
					
				</button>
			
				<div class="sidebar-toggles collapse navbar-collapse flex-column" id="navbarMobile">
					
					<div class="mb-4 w-100">
						
						<h4 class="mb-2"><?php _e('Map Type'); ?></h4>
						
						<div class="custom-control custom-radio">
						
							<input type="radio" id="mapRadio1" name="mapRadio" value="regions" class="custom-control-input" checked >
							
							<label class="custom-control-label" for="mapRadio1"><?php _e('Regions'); ?></label>
						
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
	
	<!--
						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="cabbageToggle" checked>
						
							<label class="custom-control-label" for="cabbageToggle"><?php _e('Cabbage'); ?></label>
						
						</div>
						
						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="cheeseToggle" checked>
						
							<label class="custom-control-label" for="cheeseToggle"><?php _e('Cheese'); ?></label>
						
						</div>
	-->
	
						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="cherryToggle" checked>
						
							<label class="custom-control-label" for="cherryToggle"><?php _e('Cherries'); ?></label>
						
						</div>
	
	<!--
						<div class="custom-control custom-switch mb-1">
						
							<input type="checkbox" class="custom-control-input" id="chickenToggle" checked>
						
							<label class="custom-control-label" for="chickenToggle"><?php _e('Chicken'); ?></label>
						
						</div>
	-->
	
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
						
							<label class="custom-control-label" for="horseToggle"><?php _e('Equine'); ?></label>
						
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
				
			</nav>
			
		</div>
		
	</div>
	
	<div class="d-flex flex-column flex-grow-1">
		
		<div class="py-2 px-3 bg-dark d-xl-none d-print-none">
				
				<div class="d-flex justify-content-between">
					
					<div class="mr-4">
						
						<p class="font-weight-bold text-white mb-0">Empire Agriculture Map</p>
						
					</div>
					
					<div class="align-self-center">
						
						<ul class="list-inline mb-0">
				
							<li class="list-inline-item"><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a></li>
							
							<li class="list-inline-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a></li>
				
							<li class="list-inline-item"><a href="mailto:?body=<?php the_permalink(); ?>" target="_blank" class="text-white"><i class="fa fa-envelope"></i></a></li>
						
							<li class="list-inline-item d-none d-md-inline-block"><button onclick="window.print();" aria-label="Print page" class="btn-plain text-white"><i class="fa fa-print"></i></button></li>
						
						</ul>

					</div>
					
				</div>
			
			</div>

		<div id="map-full" class="svg-wrap w-100">
			
			<div class="position-absolute mt-2 ml-3 py-2 px-5 bg-dark shadow d-none d-xl-inline-block">
				
				<div class="d-flex">
					
					<div class="mr-4">
						
						<h1 class="text-lg text-white mb-0">Empire Agriculture Map</h1>
						
					</div>
					
					<div class="align-self-center">
						
						<ul class="list-inline mb-0">
				
							<li class="list-inline-item"><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a></li>
							
							<li class="list-inline-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a></li>
				
							<li class="list-inline-item"><a href="mailto:?body=<?php the_permalink(); ?>" target="_blank" class="text-white"><i class="fa fa-envelope"></i></a></li>
						
							<li class="list-inline-item d-none d-md-inline-block"><button onclick="window.print();" aria-label="Print page" class="btn-plain text-white"><i class="fa fa-print"></i></button></li>
						
						</ul>

					</div>
					
				</div>
			
			</div>
						
			<svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 463.9889221 369.0535583" overflow="visible" xml:space="preserve">
								
				<?php get_template_part( 'parts/content', 'full-map' ); ?>
				
			</svg>

		</div>
		
	</div>
		
</div>
			
<div class="bg-red py-3 py-lg-5 d-print-none">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-12 text-center">
				
				<h2 class="text-light"><?php _e('Region Maps'); ?></h2>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div class="regions-wrap">
	
	<div class="region">
		
		<?php $data = array ( 'region' => 'adirondacks_and_tug_hill_plateau' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>
	
	<div class="region">
		
		<?php $data = array ( 'region' => 'catskill' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>
	
	<div class="region">
		
		<?php $data = array ( 'region' => 'central_new_york_and_mohawk' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>
	
	<div class="region">
		
		<?php $data = array ( 'region' => 'finger_lakes' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>

	<div class="region">
		
		<?php $data = array ( 'region' => 'hudson_valley' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>

	<div class="region">
		
		<?php $data = array ( 'region' => 'long_island' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>

	<div class="region">
		
		<?php $data = array ( 'region' => 'new_york_city' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>
	
	<div class="region">
		
		<?php $data = array ( 'region' => 'ontario_plains' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>
	
	<div class="region">
		
		<?php $data = array ( 'region' => 'saint_lawrence_seaway_and_champlain_valley' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>
	
	<div class="region">
		
		<?php $data = array ( 'region' => 'southern_tier' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>
	
	<div class="region">
		
		<?php $data = array ( 'region' => 'western' ); ?>
		
		<?php get_template_part( 'parts/content', 'region', $data ); ?>
			
	</div>
	
</div>

<?php get_footer(); ?>