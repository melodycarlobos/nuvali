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

					
					<!-- <div class="nu_living-info">
						<div class="nu_living-info-slider">
							<div class="slider-body">
								<div class="caption">
									<h2>ABRIO</h2>
									<h5>EXTRAORDINARY LEVEL</h5>
									<h5>OF PRIVACY,</h5>
									<h5>EXCLUSIVITY,</h5>
									<h5>AND SECURITY</h5>
								</div>

								<div class="buttons-container">
									
								</div>
							</div>

							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic1.png" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic2.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic3.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic4.PNG" />

						</div>
						<div class="nu_living-info-content">
							<div class="content-body">
								<div class="content-body-left">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et nisl sed justo imperdiet tincidunt nec quis ligula. Donec non erat ut dui ultrices pretium. Aliquam libero tortor, condimentum vitae pulvinar ut, pulvinar in nunc. Pellentesque eu magna sed justo venenatis pellentesque vitae ut metus. Sed mattis auctor libero, vel pharetra dui eleifend ullamcorper. Suspendisse potenti. In sit amet adipiscing risus. Vivamus consequat, erat vitae pellentesque aliquam, tellus mauris consequat dolor, eget rutrum diam lacus id elit.
										Etiam mauris massa, sagittis eu tincidunt vel, tempor nec nibh. Fusce semper, elit ut interdum lobortis, felis sapien scelerisque diam, in malesuada lectus felis ut dui. Fusce sed massa vel felis ultricies rutrum. Ut suscipit, lectus consectetur tempor blandit, velit felis sollicitudin lacus, vitae ullamcorper enim ante id augue. Integer in enim velit, eget fermentum leo. Phasellus a posuere sem. Etiam ut metus leo. Nulla nulla mauris, viverra id dignissim non, eleifend nec sapien. Vestibulum fringilla neque vel libero egestas lacinia. Aliquam ac ante tellus, et scelerisque nulla.
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
					<div class="nu_living-info">
						<div class="nu_living-info-slider">
							<div class="slider-body">
								<div class="caption">
									<h2>ABRIO</h2>
									<h5>EXTRAORDINARY LEVEL</h5>
									<h5>OF PRIVACY,</h5>
									<h5>EXCLUSIVITY,</h5>
									<h5>AND SECURITY</h5>
								</div>

								<div class="buttons-container">
								
								</div>
							</div>

							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic1.png" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic2.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic3.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic4.PNG" />
						</div>
						<div class="nu_living-info-content">
							<div class="content-body">
								<div class="content-body-left">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et nisl sed justo imperdiet tincidunt nec quis ligula. Donec non erat ut dui ultrices pretium. Aliquam libero tortor, condimentum vitae pulvinar ut, pulvinar in nunc. Pellentesque eu magna sed justo venenatis pellentesque vitae ut metus. Sed mattis auctor libero, vel pharetra dui eleifend ullamcorper. Suspendisse potenti. In sit amet adipiscing risus. Vivamus consequat, erat vitae pellentesque aliquam, tellus mauris consequat dolor, eget rutrum diam lacus id elit.
										Etiam mauris massa, sagittis eu tincidunt vel, tempor nec nibh. Fusce semper, elit ut interdum lobortis, felis sapien scelerisque diam, in malesuada lectus felis ut dui. Fusce sed massa vel felis ultricies rutrum. Ut suscipit, lectus consectetur tempor blandit, velit felis sollicitudin lacus, vitae ullamcorper enim ante id augue. Integer in enim velit, eget fermentum leo. Phasellus a posuere sem. Etiam ut metus leo. Nulla nulla mauris, viverra id dignissim non, eleifend nec sapien. Vestibulum fringilla neque vel libero egestas lacinia. Aliquam ac ante tellus, et scelerisque nulla.
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
					<div class="nu_living-info">
						<div class="nu_living-info-slider">
							<div class="slider-body">
								<div class="caption">
									<h2>ABRIO</h2>
									<h5>EXTRAORDINARY LEVEL</h5>
									<h5>OF PRIVACY,</h5>
									<h5>EXCLUSIVITY,</h5>
									<h5>AND SECURITY</h5>
								</div>

								<div class="buttons-container">
					
								</div>
							</div>

							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic1.png" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic2.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic3.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic4.PNG" />
						</div>
						<div class="nu_living-info-content">
							<div class="content-body">
								<div class="content-body-left">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et nisl sed justo imperdiet tincidunt nec quis ligula. Donec non erat ut dui ultrices pretium. Aliquam libero tortor, condimentum vitae pulvinar ut, pulvinar in nunc. Pellentesque eu magna sed justo venenatis pellentesque vitae ut metus. Sed mattis auctor libero, vel pharetra dui eleifend ullamcorper. Suspendisse potenti. In sit amet adipiscing risus. Vivamus consequat, erat vitae pellentesque aliquam, tellus mauris consequat dolor, eget rutrum diam lacus id elit.
										Etiam mauris massa, sagittis eu tincidunt vel, tempor nec nibh. Fusce semper, elit ut interdum lobortis, felis sapien scelerisque diam, in malesuada lectus felis ut dui. Fusce sed massa vel felis ultricies rutrum. Ut suscipit, lectus consectetur tempor blandit, velit felis sollicitudin lacus, vitae ullamcorper enim ante id augue. Integer in enim velit, eget fermentum leo. Phasellus a posuere sem. Etiam ut metus leo. Nulla nulla mauris, viverra id dignissim non, eleifend nec sapien. Vestibulum fringilla neque vel libero egestas lacinia. Aliquam ac ante tellus, et scelerisque nulla.
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
					<div class="nu_living-info">
						<div class="nu_living-info-slider">
							<div class="slider-body">

								<div class="caption">
									<h2>ABRIO</h2>
									<h5>EXTRAORDINARY LEVEL</h5>
									<h5>OF PRIVACY,</h5>
									<h5>EXCLUSIVITY,</h5>
									<h5>AND SECURITY</h5>
								</div>

								<div class="buttons-container">
									
								</div>
							</div>

							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic1.png" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic2.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic3.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic4.PNG" />
						</div>
						<div class="nu_living-info-content">
							<div class="content-body">
								<div class="content-body-left">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et nisl sed justo imperdiet tincidunt nec quis ligula. Donec non erat ut dui ultrices pretium. Aliquam libero tortor, condimentum vitae pulvinar ut, pulvinar in nunc. Pellentesque eu magna sed justo venenatis pellentesque vitae ut metus. Sed mattis auctor libero, vel pharetra dui eleifend ullamcorper. Suspendisse potenti. In sit amet adipiscing risus. Vivamus consequat, erat vitae pellentesque aliquam, tellus mauris consequat dolor, eget rutrum diam lacus id elit.
										Etiam mauris massa, sagittis eu tincidunt vel, tempor nec nibh. Fusce semper, elit ut interdum lobortis, felis sapien scelerisque diam, in malesuada lectus felis ut dui. Fusce sed massa vel felis ultricies rutrum. Ut suscipit, lectus consectetur tempor blandit, velit felis sollicitudin lacus, vitae ullamcorper enim ante id augue. Integer in enim velit, eget fermentum leo. Phasellus a posuere sem. Etiam ut metus leo. Nulla nulla mauris, viverra id dignissim non, eleifend nec sapien. Vestibulum fringilla neque vel libero egestas lacinia. Aliquam ac ante tellus, et scelerisque nulla.
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
					<div class="nu_living-info">
						<div class="nu_living-info-slider">
							<div class="slider-body">

								<div class="caption">
									<h2>ABRIO</h2>
									<h5>EXTRAORDINARY LEVEL</h5>
									<h5>OF PRIVACY,</h5>
									<h5>EXCLUSIVITY,</h5>
									<h5>AND SECURITY</h5>
								</div>

								<div class="buttons-container">
									
								</div>
							</div>

							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic1.png" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic2.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic3.PNG" />
							<img class="slider-body-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/nu_living/sample-pic4.PNG" />
						</div>
						<div class="nu_living-info-content">
							<div class="content-body">
								<div class="content-body-left">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et nisl sed justo imperdiet tincidunt nec quis ligula. Donec non erat ut dui ultrices pretium. Aliquam libero tortor, condimentum vitae pulvinar ut, pulvinar in nunc. Pellentesque eu magna sed justo venenatis pellentesque vitae ut metus. Sed mattis auctor libero, vel pharetra dui eleifend ullamcorper. Suspendisse potenti. In sit amet adipiscing risus. Vivamus consequat, erat vitae pellentesque aliquam, tellus mauris consequat dolor, eget rutrum diam lacus id elit.
										Etiam mauris massa, sagittis eu tincidunt vel, tempor nec nibh. Fusce semper, elit ut interdum lobortis, felis sapien scelerisque diam, in malesuada lectus felis ut dui. Fusce sed massa vel felis ultricies rutrum. Ut suscipit, lectus consectetur tempor blandit, velit felis sollicitudin lacus, vitae ullamcorper enim ante id augue. Integer in enim velit, eget fermentum leo. Phasellus a posuere sem. Etiam ut metus leo. Nulla nulla mauris, viverra id dignissim non, eleifend nec sapien. Vestibulum fringilla neque vel libero egestas lacinia. Aliquam ac ante tellus, et scelerisque nulla.
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
					</div> -->
				</div>
					   
			
    				</div> <!-- end #main -->
    
				   
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?> 
