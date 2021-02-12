<?php /* Template Name: New York Map */ 

get_header();

?>

<div class="container-fluid">
	
	<div class="row justify-content-center">

		<div class="col-lg-2 align-self-stretch sidebar-wrap">
			
			<div class="sidebar bg-light h-100">
				
				<div class="sidebar-header p-2">
					
					<img src="<?php echo home_url('/wp-content/themes/nyag/img/logo.svg'); ?>" />
					
				</div>
				
				<div class="sidebar-map-type border-top border-bottom">
					
					<div class="bg-primary text-white p-2"><h4 class="m-0">Map Type</h4></div>
					
					<div class="p-2">
						
						<div class="py-2 border-botom"><a id="map-regions" class="active" href="#">Regions</a></div>
						
						<div class="py-2"><a id="map-topo"  href="#">Topographical</a></div>
						
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