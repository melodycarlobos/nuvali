<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix main-content" role="main">

		<div class="how-to-get-there">
			<div class="content">
				<h1>How To Get There</h1>
				<div class="details">
					<?php query_posts(array(  'post_type' => 'about',  'category_name' => 'Howtogethere')); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>   



					<div class="view-google-map">
						<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/how_to_get_there/google-map-icon.png" width="50px" height="50px">
						<div>View Google Maps</div>
					</div>
				</div>
				<div class="schedule">
					<h3>Mass Transit Schedule<br/><span>To and from Nuvali:</span></h3>
					<div class="left">
						<ul>
							<li class="schedule-list">
								<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/how_to_get_there/bus-thumb.png">
								<div class="left-sched">
									<span>BUS</span>
									<div class="day first">Mondays to Fridays</div>
									<div class="location-time">
										<ul>
											<li>Lorem ipsum dolor sit amet <span id="divider">|</span> Lorem ipsum dolor sit amet</li>
											<li>Lorem ipsum dolor sit amet <span id="divider">|</span> Lorem ipsum dolor sit amet</li>
										</ul>
									</div>
									<div class="day">Saturdays, Sundays and Holidays</div>
									<div class="location-time">
										<ul>
											<li>Lorem ipsum dolor sit amet <span id="divider">|</span> Lorem ipsum dolor sit amet</li>
											<li>Lorem ipsum dolor sit amet <span id="divider">|</span> Lorem ipsum dolor sit amet</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="schedule-list">
								<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/how_to_get_there/van-thumb.png">
								<div class="left-sched">
									<span>VANS</span>
									<div class="day first">Mondays to Sundays</div>
									<div class="location-time">
										<ul>
											<li>Lorem ipsum dolor sit amet <span id="divider">|</span> Lorem ipsum dolor sit amet</li>
											<li>Lorem ipsum dolor sit amet <span id="divider">|</span> Lorem ipsum dolor sit amet</li>
											<li>Lorem ipsum dolor sit amet <span id="divider">|</span> Lorem ipsum dolor sit amet</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="schedule-list">
								<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/how_to_get_there/bus2-thumb.png">
								<div class="left-sched">
									<span>JEEPNEYS</span>
									<div class="day first">Mondays to Sundays</div>
									<div class="location-time">
										<ul>
											<li>Lorem ipsum dolor sit amet <span id="divider">|</span> Lorem ipsum dolor sit amet</li>
											<li>Lorem ipsum dolor sit amet <span id="divider">|</span> Lorem ipsum dolor sit amet</li>
										</ul>
										<br/>
										<ul class="footnotes">
											<li>*Makati (Corner of Courtyard Drive and Station Road, back of Hotel Intercontinental Manila)</li>
											<li>**Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
											<li>***Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="right">
						<div class="right-sched">
						<?php query_posts(array('post_type' => 'about', 'category_name' => 'Traveltime')); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h4>Travel time from key destinations</h4>
							<?php the_content(); ?>
							<?php endwhile; endif; ?> 
						</div>
					</div>
				</div>
			</div>
			<img id="side-image" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/how_to_get_there/side-image.png">
		</div>
		<div class="how-we-give-back">
			<div class="top-content">
				<div class="title"><h1>How We Give Back</h1></div>
				<div class="right-content">
					<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h4>
					<div class="circles">
						<div>
							<div class="active programs">T.R.E.E. Programs</div><br/>
							<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/about/header_photo_1.png" width="141px" height="141px">
						</div>
						<div>
							<div class="active programs">Livelihood Programs</div><br/>
							<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/about/header_photo_2.png" width="141px" height="141px">
						</div>
						<div>
							<div class="programs">Local Governance</div><br/>
							<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/about/header_photo_3.png" width="141px" height="141px">
						</div>
						<div>
							<div class="programs">Nuvali Partners</div><br/>
							<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/about/header_photo_4.png" width="141px" height="141px">
						</div>
					</div>
					<br/>
					<div class="tree-programs">
						<h3>T.R.E.E. Programs</h3>
						<div style="margin-top:-38px;">(0917) 5-ASK-NUV (275-688)</div>
						<p>
							NUVALI  welcomes individuals, groups and companies to volunteer and hold its tree-planting activities and participate in NUVALI's T.R.E.E. (Together Reforesting the Earth's Environment) Program.
						</p>
						<p>
							NUVALI is committed to ensure the welfare of the natural environment through preservation and enhancement of the existing ecosystems within the development.  With this in mind, NUVALI is enjoining corporations, groups and individuals to participate in the NUVALI Tree Planting Program. 
						</p>
						<p>
							Trees play an important role in maintaining environmental balance to help mitigate the effects of pollution by:
							<ul>
								<li>Morbi venenatis velit quis turpis tristique sed semper augue porta.</li>
								<li>Vestibulum et dui id diam fringilla pulvinar.</li>
								<li>Fusce eget neque augue, vel blandit enim.</li>
								<li>Nullam mollis dolor eu ligula sodales faucibus bibendum quam hendrerit.</li>
								<li>Ut porttitor turpis tortor, a auctor orci.</li>
								<li>Nulla luctus ipsum in sem sodales a rhoncus purus rutrum.</li>
							</ul>
						</p>
						<table width="60%">
							<thead>
								<tr>
									<td width="10%"></td>
									<td width="10%">Package A</td>
									<td width="10%">Package B</td>
									<td width="10%">Package C</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td width="10%"></td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
								</tr>
								<tr>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
								</tr>
								<tr>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
								</tr>
								<tr>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
								</tr>
								<tr>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
								</tr>
								<tr>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
								</tr>
								<tr>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
								</tr>
								<tr>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
								</tr>
								<tr>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
									<td width="10%">Lorem ipsum</td>
								</tr>
							</tbody>
						</table>
						<br/>
						<div class="footnotes">
							*Sed quis eros et felis lobortis ornare.<br/>
							*Curabitur suscipit dui quis ligula dictum commodo.<br/>
							*Mauris id metus sapien, quis posuere nisi.<br/>
							*Etiam eu tellus sem, molestie interdum nisl.<br/>
						</div>
						<br/>
						<div class="gallery"></div>
					</div>

				</div>
			</div>
		</div>
		<!-- <div class="rocks-divider"></div> -->
		<img id="rocks-divider" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/about/rocks.png">
		<div class="about2">
			<div class="bottom-content">
				<div class="left-content">
					<div class="livelihood-programs">
						<h3>Livelihood Programs</h3>
						<h5><b>NUVALI, and its partner communities</b></h5>
						<div class="lp-details"> <!-- lp = livelihood programs -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisl leo, lacinia et consectetur id, aliquam at metus. Pellentesque at est est, consectetur pellentesque nibh. Nunc condimentum orci nec lorem lacinia mattis. Sed id vestibulum velit. Nullam molestie risus sed nulla venenatis molestie. Integer a risus ipsum. Sed arcu eros, luctus ut ornare et, gravida eget nunc.</p>

							<p>Cras et enim libero. Cras sed turpis ac lorem consectetur congue. Vestibulum sed magna et justo tempus ullamcorper at sed mauris. Fusce convallis dignissim ligula sed fringilla. Sed venenatis suscipit ornare. Suspendisse hendrerit lectus nec libero suscipit condimentum.</p>

							<p>Nullam consectetur, velit et luctus mattis, arcu lacus bibendum nisi, sit amet tristique justo metus sit amet nisi.Vivamus consectetur arcu metus, ut pulvinar quam. Mauris porttitor, erat ultrices lacinia tempus, nisl nisl rhoncus libero, vel dignissim lectus lectus non nisi.</p>

	 						<p>Ut ac ullamcorper sapien. Donec lacinia accumsan erat sit amet congue. Aenean vitae elit dui. Curabitur nec lectus erat, eget tempus justo. Fusce malesuada enim non purus lacinia auctor. Proin id arcu nisi. Nulla ut dolor tortor. Integer sit amet augue sem.</p>

	 						<p>Nullam consectetur, velit et luctus mattis, arcu lacus bibendum nisi, sit amet tristique justo metus sit amet nisi.Vivamus consectetur arcu metus, ut pulvinar quam. Mauris porttitor, erat ultrices lacinia tempus, nisl nisl rhoncus libero, vel dignissim lectus lectus non nisi.</p>

	 						<p>Ut ac ullamcorper sapien. Donec lacinia accumsan erat sit amet congue. Aenean vitae elit dui. Curabitur nec lectus erat, eget tempus justo. Fusce malesuada enim non purus lacinia auctor. Proin id arcu nisi. Nulla ut dolor tortor. Integer sit amet augue sem.</p>
	 					</div>

	 					<h5><b>PAPERWOVEN PRODUCTS</b></h5>
						<div class="lp-details"> <!-- lp = livelihood programs -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisl leo, lacinia et consectetur id, aliquam at metus. Pellentesque at est est, consectetur pellentesque nibh. Nunc condimentum orci nec lorem lacinia mattis. Sed id vestibulum velit. Nullam molestie risus sed nulla venenatis molestie. Integer a risus ipsum. Sed arcu eros, luctus ut ornare et, gravida eget nunc.</p>

							<p>Cras et enim libero. Cras sed turpis ac lorem consectetur congue. Vestibulum sed magna et justo tempus ullamcorper at sed mauris. Fusce convallis dignissim ligula sed fringilla. Sed venenatis suscipit ornare. Suspendisse hendrerit lectus nec libero suscipit condimentum.</p>
	 					</div><br/>
	 					<div class="gallery"></div>

	 					<h5><b>GREEN CHARCOAL</b></h5>
	 					<div style="margin-top: -22px">Fuelling an entrepreneurial spirit</div>
						<div> <!-- lp = livelihood programs -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisl leo, lacinia et consectetur id, aliquam at metus. Pellentesque at est est, consectetur pellentesque nibh. Nunc condimentum orci nec lorem lacinia mattis. Sed id vestibulum velit. Nullam molestie risus sed nulla venenatis molestie. Integer a risus ipsum. Sed arcu eros, luctus ut ornare et, gravida eget nunc.</p>

							<p>Cras et enim libero. Cras sed turpis ac lorem consectetur congue. Vestibulum sed magna et justo tempus ullamcorper at sed mauris. Fusce convallis dignissim ligula sed fringilla. Sed venenatis suscipit ornare. Suspendisse hendrerit lectus nec libero suscipit condimentum.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisl leo, lacinia et consectetur id, aliquam at metus. Pellentesque at est est, consectetur pellentesque nibh. Nunc condimentum orci nec lorem lacinia mattis. Sed id vestibulum velit. Nullam molestie risus sed nulla venenatis molestie. Integer a risus ipsum. Sed arcu eros, luctus ut ornare et, gravida eget nunc.</p>

							<p>Cras et enim libero. Cras sed turpis ac lorem consectetur congue. Vestibulum sed magna et justo tempus ullamcorper at sed mauris. Fusce convallis dignissim ligula sed fringilla. Sed venenatis suscipit ornare. Suspendisse hendrerit lectus nec libero suscipit condimentum.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisl leo, lacinia et consectetur id, aliquam at metus. Pellentesque at est est, consectetur pellentesque nibh. Nunc condimentum orci nec lorem lacinia mattis. Sed id vestibulum velit. Nullam molestie risus sed nulla venenatis molestie. Integer a risus ipsum. Sed arcu eros, luctus ut ornare et, gravida eget nunc.</p>
	 					</div><br/>
	 					<div class="gallery"></div>

	 					<h5><b>CONCRETE HOLLOW BLOCKS</b></h5>
	 					<div style="margin-top: -22px">The foundation to a healthier environment</div>
						<div> <!-- lp = livelihood programs -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisl leo, lacinia et consectetur id, aliquam at metus. Pellentesque at est est, consectetur pellentesque nibh. Nunc condimentum orci nec lorem lacinia mattis. Sed id vestibulum velit. Nullam molestie risus sed nulla venenatis molestie. Integer a risus ipsum. Sed arcu eros, luctus ut ornare et, gravida eget nunc.</p>

							<p>Cras et enim libero. Cras sed turpis ac lorem consectetur congue. Vestibulum sed magna et justo tempus ullamcorper at sed mauris. Fusce convallis dignissim ligula sed fringilla. Sed venenatis suscipit ornare. Suspendisse hendrerit lectus nec libero suscipit condimentum.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisl leo, lacinia et consectetur id, aliquam at metus. Pellentesque at est est, consectetur pellentesque nibh. Nunc condimentum orci nec lorem lacinia mattis. Sed id vestibulum velit. Nullam molestie risus sed nulla venenatis molestie. Integer a risus ipsum. Sed arcu eros, luctus ut ornare et, gravida eget nunc.</p>

							<p>Cras et enim libero. Cras sed turpis ac lorem consectetur congue. Vestibulum sed magna et justo tempus ullamcorper at sed mauris. Fusce convallis dignissim ligula sed fringilla. Sed venenatis suscipit ornare. Suspendisse hendrerit lectus nec libero suscipit condimentum.</p>
	 					</div><br/>
	 					<div class="gallery"></div>
					</div>
				</div>
			</div>
		</div>



		<div class="our-heritage-container">
			<img src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/our_heritage/side-image.png">
            <div class="main-title"><h1>Our Heritage</h1></div><br/><br/>
            <?php query_posts(array('post_type' => 'about',  'category_name' => 'OurHeritage')); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	            <h4 style="color:#fff;"><?php the_title(); ?></h4>
	            <br/>
	            <div class="details">
				<?php the_content(); ?>
				<?php endwhile; endif; ?> 
				 </div>
			
            <img id="divider-flowers" src="http://localhost/nuvali/wp-content/themes/nuvali/library/images/our_heritage/divider-flowers.png">
		</div>
			
    				</div> <!-- end #main -->
    
				   
				    
				</div> <!-- end #inner-content -->
    
        </div>


<?php get_footer(); ?> 