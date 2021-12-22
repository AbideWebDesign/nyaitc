<?php global $data; ?>

<?php $region = $data['region']; ?>

<?php $landscape = array( 'ontario_plains', 'finger_lakes', 'central_new_york_and_mohawk', 'southern_tier' ); ?>

<?php $small = array( 'new_york_city', 'hudson_valley', 'western' ); ?>
	
<div id="region-<?php echo $region; ?>" class="container">
		
	<div class="row justify-content-between">
	
		<div class="col-12"><h3><?php echo ucwords( str_replace( '_', ' ', $region ) ); ?></h3></div>
		
		<div class="col-auto align-self-center d-print-none"><a class="link-alt" href="#map-full"><?php _e('Back to Full Map'); ?></a></div>
		
		<div class="col-12 border-bottom pb-2"></div>
	
	</div>
	
	<?php if ( in_array( $region, $landscape ) ): ?>

		<div class="row">
			
			<div class="col-12 border-bottom pt-4">
				
				<div class="lead"><?php the_field($region); ?></div>
				
			</div>
			
			<div class="col-12 pt-5">
									
				<?php echo get_template_part( 'regions/map', $region ); ?>
									
			</div>
			
		</div>	
		
	<?php elseif ( in_array( $region, $small ) ): ?>
	
		<div class="row justify-content-center">
			
			<div class="col-xl-6 align-self-stretch border-right pt-4">
				
				<div class="lead"><?php the_field($region); ?></div>
				
			</div>
			
			<div class="col-lg-6">
						
				<div class="p-xl-4">
								
					<?php echo get_template_part( 'regions/map', $region ); ?>
				
				</div>
									
			</div>
			
		</div>		

	<?php else: ?>
	
		<div class="row justify-content-center justify-content-xl-between">
			
			<div class="col-xl-4 align-self-stretch border-right pt-4">
				
				<div class="lead"><?php the_field($region); ?></div>
				
			</div>
			
			<div class="col-lg-8">
				
				<div class="p-xl-4">
					
					<?php echo get_template_part( 'regions/map', $region ); ?>
					
				</div>
				
			</div>
			
		</div>	
	
	<?php endif; ?>
	
</div>	
