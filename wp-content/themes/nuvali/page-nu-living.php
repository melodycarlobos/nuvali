<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix main-content nu_living-container" role="main">


					<div id="nu_living-container-content">
						<div id="nu_living-content-left">
							<div class="nu_living-content">
								<?php $cat_id = get_category_by_slug('residentials') -> term_id; ?>
								<h1><?php echo get_cat_name($cat_id); ?></h1>
								<?php query_posts(array('post_type' => 'nuliving',  'category_name' => 'residentials')); ?>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						        <h4><?php the_title(); ?></h4>
								<?php the_content(); ?>

					
								<?php endwhile; endif; ?>

							</div>
						</div>
						<div id="nu_living-content-right">
							<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/upper-image.png" />
						</div>

						<div id="nu_living-header">
			            <div class="container">
			                <h3 class="title">Choose a property</h3>   
			            </div>    
			        	
				        </div>
				       


				        <div id="nu_living-header2">
				           <div class="container">

			                <input type="image"  id="go-left" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-left.png" class="buttons" />
							<input id="go-right" type="image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-right.png" class="buttonright" />
							    <div class="slider">
			                        <div class="properties">
						                <div class="text"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/abrio-text.png" /></div>
						                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider">
						                <div class="text"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/montecito-text.png" /></div>
						                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider">
						                <div class="text"><img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/santiera-image.png" /></div>
						                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider">
						                <div class="text"><img src="http://placehold.it/165x48"/></div>
						                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider">
						                <div class="text"><img src="http://placehold.it/165x48"/></div>
						                <img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/whatsnu/calendar-events-nav-divider.png" class="divider">
						                <div class="text"><img src="http://placehold.it/165x48"/></div>

				              		</div>
				              	</div>
				           </div>    
				            
				        </div>

					</div>

				</div>
				<div id="nu_living-content2">
					<?php $cat_id = get_category_by_slug('nu-living-condo') -> term_id; ?>
					<?php query_posts(array('post_type' => 'nuliving',  'category_name' => 'nu-living-condo')); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<div class="nu_living-info">
							<div class="nu_living-info-slider">
								<div class="slider-body">
									<div class="caption">
										<h2><?php the_title(); ?></h2>
										<h5><?php the_field('nu_living_condo_caption'); ?></h5>
									</div>

									<div class="buttons-container">
										
									</div>
								</div>

								
								<img class="slider-body-image" src=<?php the_field('image_1'); ?> />
								<img class="slider-body-image" src=<?php the_field('image_2'); ?> />
								<img class="slider-body-image" src=<?php the_field('image_3'); ?> />
								<img class="slider-body-image" src=<?php the_field('image_4'); ?> />

							</div>
							<div class="nu_living-info-content">
								<div class="content-body">
									<div class="content-body-left">
										<p>
											<?php the_content(); ?>
										</p>

										<h4>KNOW MORE</h4>

										<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/phone-icon.png" />
										
										<div>
											<span>
												(0917) 594 65996
												<br />
												(02) 3326575
											</span>
										</div>
										

									</div>
									<div class="content-body-right">
										<img class="google-icon" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/google-map-icon.png" />
										<h4 class="google-text">View Google Maps </h4>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; endif; ?>

					
					
				</div>
					   
			
    				</div> <!-- end #main -->
    
				   
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?> 
