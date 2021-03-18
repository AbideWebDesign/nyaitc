<?php global $data; ?>

<?php $region = $data['region']; ?>

<?php $landscape = array( 'ontario_plains', 'finger_lake' ); ?>
	
<div id="region-<?php echo $region; ?>" class="container">
		
	<div class="row justify-content-between">
	
		<div class="col-auto"><h3><?php echo ucwords( str_replace( '_', ' ', $region ) ); ?></h3></div>
		
		<div class="col-auto align-self-center"><a class="link-alt" href="#map-full"><?php _e('Back to Full Map'); ?></a></div>
		
		<div class="col-12 border-bottom pb-2"></div>
	
	</div>
	
	<?php if ( in_array( $region, $landscape ) ): ?>

		<div class="row">
			
			<div class="col-12 border-bottom pt-4">
				
				<div class="lead"><?php the_field($region); ?></div>
				
			</div>
			
			<div class="col-12 pt-5">
									
				<?php echo get_template_part('regions/map', $region); ?>
									
			</div>
			
		</div>	

	<?php else: ?>
	
		<div class="row justify-content-between">
			
			<div class="col-xl-4 align-self-stretch border-right pt-4">
				
				<div class="lead"><?php the_field($region); ?></div>
				
			</div>
			
			<div class="col-lg-8">
				
				<div class="p-4">
					
					<?php echo get_template_part('regions/map', $region); ?>
					
				</div>
				
			</div>
			
		</div>	
	
	<?php endif; ?>
	
</div>	
