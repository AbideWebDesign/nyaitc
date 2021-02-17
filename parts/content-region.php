<?php global $data; ?>

<?php $region = $data['region']; ?>

<div id="region-<?php echo $region; ?>" class="container">
		
	<div class="row justify-content-between">
	
		<div class="col-auto"><h3><?php echo ucwords( $region ); ?></h3></div>
		
		<div class="col-auto align-self-center"><a class="link-alt" href="#map-full"><?php _e('Back to Full Map'); ?></a></div>
		
		<div class="col-12 border-bottom pb-2"></div>
	
	</div>
	
	<div class="row justify-content-between">
		
		<div class="col-xl-4 align-self-stretch border-right pt-4">
			
			<p class="lead mb-0"><?php the_field($region); ?></p>
			
		</div>
		
		<div class="col-lg-8">
			
			<div class="p-4">
				
				<?php echo get_template_part('regions/map', $region); ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>	
